const BRAND_ID = 3;

const hostname = window.location.hostname;

let API_BASE_URL;

if (hostname === 'localhost' || hostname === '127.0.0.1') {
    API_BASE_URL = 'http://127.0.0.1:8000';
} else {
    API_BASE_URL = 'https://elementdesignagency.com/crm';
}

async function apiRequest(endpoint, method, body) {
    try {
        const config = {
            method: method,
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
            },
        };

        if (body) {
            config.body = JSON.stringify(body);
        }

        const response = await fetch(`${API_BASE_URL}${endpoint}`, config);

        if (!response.ok) {
            const errorText = await response.text();
            let errorData = {};

            try {
                errorData = JSON.parse(errorText);
            } catch (e) {}

            const message =
                errorData.message ||
                errorData.error ||
                `Error ${response.status}: ${errorText.substring(0, 100)}`;

            throw new Error(message);
        }

        return await response.json();
    } catch (error) {
        console.error('API Request Failed:', error);
        alert(`Sync Error: ${error.message}`);
        throw error;
    }
}

function getFormValue(form, name) {
    const field = form.querySelector(`[name="${name}"]`);
    return field ? field.value.trim() : '';
}

function buildQueryName(form) {
    const fullName = getFormValue(form, 'name');
    if (fullName) {
        return fullName;
    }

    const firstName = getFormValue(form, 'first_name');
    const lastName = getFormValue(form, 'last_name');

    return `${firstName} ${lastName}`.trim();
}

function buildQueryMessage(form, source) {
    let message = getFormValue(form, 'message');

    if (source === 'pricing_popup') {
        const packageName = document.getElementById('popupPkgName')?.textContent.trim() || '';
        const packagePrice = document.getElementById('popupPkgPrice')?.textContent.trim() || '';
        const prefix = `Selected Package: ${packageName}${packagePrice ? ` (${packagePrice})` : ''}`;

        message = message ? `${prefix}\n\n${message}` : prefix;
    }

    if (!message) {
        const defaults = {
            get_started_popup: 'Get Started Popup Lead',
            pricing_popup: 'Pricing Package Inquiry',
            contact_us: 'Contact Us Form Lead',
            inner_banner: 'Inner Banner Form Lead',
            contact_form: 'Contact Form Lead',
        };

        message = defaults[source] || 'Website Query';
    }

    return message;
}

function buildQueryMeta(form, source) {
    const meta = {};

    if (source === 'pricing_popup') {
        const packageName = document.getElementById('popupPkgName')?.textContent.trim();
        const packagePrice = document.getElementById('popupPkgPrice')?.textContent.trim();

        if (packageName) meta.package_name = packageName;
        if (packagePrice) meta.package_price = packagePrice;
    }

    if (source === 'contact_us') {
        const firstName = getFormValue(form, 'first_name');
        const lastName = getFormValue(form, 'last_name');
        const country = getFormValue(form, 'country');
        const companyType = getFormValue(form, 'company_type');

        if (firstName) meta.first_name = firstName;
        if (lastName) meta.last_name = lastName;
        if (country) meta.country = country;
        if (companyType) meta.company_type = companyType;
    }

    return Object.keys(meta).length ? meta : null;
}

function setSubmittingState(form, isSubmitting) {
    const submitBtn = form.querySelector('button[type="submit"]');
    if (!submitBtn) return;

    const label =
        submitBtn.querySelector('.gs-submit-text') ||
        submitBtn.querySelector('span') ||
        submitBtn;

    if (isSubmitting) {
        submitBtn.disabled = true;
        if (!submitBtn.dataset.originalText) {
            submitBtn.dataset.originalText = label.textContent.trim();
        }
        label.textContent = 'Submitting...';
        return;
    }

    submitBtn.disabled = false;
    if (submitBtn.dataset.originalText) {
        label.textContent = submitBtn.dataset.originalText;
    }
}

async function submitSiteQuery(e) {
    e.preventDefault();

    const form = e.target;
    const source = form.dataset.source || 'website';
    const name = buildQueryName(form);
    const email = getFormValue(form, 'email');
    const phone = getFormValue(form, 'phone');
    const service = getFormValue(form, 'service') || null;
    const message = buildQueryMessage(form, source);
    const meta = buildQueryMeta(form, source);

    if (!name || !email || !phone) {
        alert('Please fill in all required fields.');
        return;
    }

    const data = {
        brand_id: BRAND_ID,
        name,
        email,
        phone,
        message,
        service,
        source,
        referrer_url: window.location.href,
    };

    if (meta) {
        data.meta = meta;
    }

    try {
        setSubmittingState(form, true);

        const result = await apiRequest('/api/queries', 'POST', data);

        if (result.success || result.query_id) {
            window.location.href = form.dataset.redirect || 'thankyou';
        } else {
            alert('Failed to submit. Please try again.');
        }
    } catch (error) {
        // apiRequest already alerts
    } finally {
        setSubmittingState(form, false);
    }
}

function initSiteQueryForms() {
    document.querySelectorAll('.site-query-form').forEach((form) => {
        if (form.dataset.queryBound === '1') return;
        form.dataset.queryBound = '1';
        form.addEventListener('submit', submitSiteQuery);
    });
}

document.addEventListener('DOMContentLoaded', initSiteQueryForms);

// Backward compatibility for existing inline handler
function submitGsPopupLead(e) {
    return submitSiteQuery(e);
}
