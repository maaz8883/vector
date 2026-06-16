const BRAND_ID = 3;

const hostname = window.location.hostname;

let API_BASE_URL;

if (hostname === 'localhost' || hostname === '127.0.0.1') {
    API_BASE_URL = 'http://127.0.0.1:8000';
} else {
    API_BASE_URL = 'https://elementdesignagency.com/crm';
}

(function () {
    try {
        const params = new URLSearchParams(window.location.search);
        const leadId = params.get('encrypted_lead_id') || params.get('id');
        if (leadId) {
            localStorage.setItem('lead_id', leadId);
        }
    } catch (e) {}
})();

function funnelUrl(page) {
    const base = window.SITE_BASE || '/';
    return base.replace(/\/?$/, '/') + String(page).replace(/^\//, '');
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

/* ── Logo funnel: localStorage helpers ── */

function getLeadIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('encrypted_lead_id') || urlParams.get('id') || null;
}

function getLeadId() {
    const fromStorage = localStorage.getItem('lead_id');
    if (fromStorage) {
        return fromStorage;
    }

    const fromUrl = getLeadIdFromUrl();
    if (fromUrl) {
        localStorage.setItem('lead_id', fromUrl);
        return fromUrl;
    }

    return null;
}

function restoreLeadSessionFromUrl() {
    const fromUrl = getLeadIdFromUrl();
    if (fromUrl) {
        setLeadId(fromUrl);
    }
}

function getPackageDetails() {
    const pkg = localStorage.getItem('selected_package') || 'Basic';
    const amt = localStorage.getItem('selected_amount') || '18';
    return { pkg, amt };
}

function setLeadId(id) {
    localStorage.setItem('lead_id', id);
}

function setPackageDetails(pkg, amt) {
    localStorage.setItem('selected_package', pkg);
    localStorage.setItem('selected_amount', amt);
}

window.selectPackage = function (pkg, amt) {
    const amount = String(amt).replace(/[^0-9.]/g, '');
    setPackageDetails(pkg, amount || amt);

    const popupPrice = document.getElementById('popupPkgPrice') || document.getElementById('pkgPrice');
    const popupName = document.getElementById('popupPkgName') || document.getElementById('pkgName');
    if (popupPrice) {
        popupPrice.textContent = String(amt).includes('$') ? amt : `$${amount || amt}`;
    }
    if (popupName && pkg) {
        popupName.textContent = pkg;
    }
};

async function submitStep1(e) {
    e.preventDefault();

    const form = e.target;
    const nameInput = form.querySelector('[name="name"]');
    const emailInput = form.querySelector('[name="email"]');
    const phoneInput = form.querySelector('[name="phone"]');
    const messageInput = form.querySelector('[name="message"]');

    const name = nameInput ? nameInput.value.trim() : '';
    const email = emailInput ? emailInput.value.trim() : '';
    const phone = phoneInput ? phoneInput.value.trim() : '';
    const message = messageInput ? messageInput.value.trim() : 'Interested in Logo Design';

    if (!name || !email || !phone) {
        alert('Please fill in all required fields.');
        return;
    }

    let { pkg, amt } = getPackageDetails();
    if (!localStorage.getItem('selected_package')) {
        setPackageDetails('Basic', '18');
        pkg = 'Basic';
        amt = '18';
    }

    const data = {
        name,
        email,
        phone,
        message,
        brand_id: BRAND_ID,
        package_name: pkg,
        package_amount: amt,
        referrer_url: window.location.href,
    };

    try {
        setSubmittingState(form, true);
        const result = await apiRequest('/api/leads/step-1', 'POST', data);

        if (result.lead_id) {
            setLeadId(result.encrypted_lead_id || result.lead_id);
            window.location.href = funnelUrl('logo-style');
        } else {
            alert('Failed to get lead ID from server.');
        }
    } catch (error) {
        // apiRequest already alerts
    } finally {
        setSubmittingState(form, false);
    }
}

async function submitStep2() {
    const leadId = getLeadId();
    if (!leadId) {
        alert('Session expired. Please start over.');
        window.location.href = funnelUrl('index.php');
        return;
    }

    const selectedRadio = document.querySelector('input[name="logo_style"]:checked');
    if (!selectedRadio) {
        alert('Please select a logo style.');
        return;
    }

    try {
        await apiRequest(`/api/leads/step-2/${leadId}`, 'POST', {
            logo_type: selectedRadio.value,
        });
        window.location.href = funnelUrl('logo-details');
    } catch (error) {
        // handled
    }
}

async function submitStep3() {
    const leadId = getLeadId();
    if (!leadId) {
        alert('Session expired. Please start over.');
        window.location.href = funnelUrl('index.php');
        return;
    }

    const logoName = document.getElementById('logo_name')?.value || '';
    const colorPreference = document.getElementById('color_preference')?.value || '';

    try {
        await apiRequest(`/api/leads/step-3/${leadId}`, 'POST', {
            logo_name: logoName,
            color_preference: colorPreference,
        });
        window.location.href = funnelUrl('additional-details');
    } catch (error) {
        // handled
    }
}

async function submitStep4() {
    const leadId = getLeadId();
    if (!leadId) {
        alert('Session expired. Please start over.');
        window.location.href = funnelUrl('index.php');
        return;
    }

    const industry = document.getElementById('business_industry')?.value || '';
    const comments = document.getElementById('additional_comments')?.value || '';

    try {
        await apiRequest(`/api/leads/step-4/${leadId}`, 'POST', {
            business_industry: industry,
            additional_comments: comments,
        });

        const { pkg, amt } = getPackageDetails();
        window.location.href =
            funnelUrl('payment-step') +
            '?id=' +
            encodeURIComponent(leadId) +
            '&pkg=' +
            encodeURIComponent(pkg) +
            '&amt=' +
            encodeURIComponent(amt);
    } catch (error) {
        // handled
    }
}

async function submitStep5(leadIdOverride, pkgOverride) {
    const leadId = leadIdOverride;
    if (!leadId) return;

    const { pkg: storedPkg } = getPackageDetails();
    const pkg = pkgOverride || storedPkg;
    const packageName = pkg.toLowerCase().includes('package') ? pkg : `${pkg} Package`;

    try {
        return await apiRequest(`/api/leads/step-5/${leadId}`, 'POST', {
            package_name: packageName,
        });
    } catch (error) {
        console.error('Step 5 Sync Failed:', error);
        return null;
    }
}

async function getEncryptedLeadId(leadId) {
    const urlParams = new URLSearchParams(window.location.search);
    const encryptedIdFromUrl = urlParams.get('encrypted_lead_id');
    if (encryptedIdFromUrl) {
        return encryptedIdFromUrl;
    }

    if (!leadId) {
        leadId = getLeadId();
    }
    if (!leadId) {
        throw new Error('No lead ID available');
    }

    const result = await apiRequest(`/api/leads/${leadId}/encrypted-id`, 'GET');
    return result.encrypted_lead_id || result.encrypted_id;
}

async function getLeadBrief(encryptedLeadId) {
    if (!encryptedLeadId) {
        return null;
    }

    try {
        const result = await apiRequest(
            `/api/lead-brief/${encodeURIComponent(encryptedLeadId)}`,
            'GET'
        );
        return result;
    } catch (error) {
        const msg = (error?.message || '').toLowerCase();
        if (msg.includes('404') || msg.includes('not found')) {
            return null;
        }
        if (msg.includes('no lead identifier') || msg.includes('invalid lead identifier')) {
            return null;
        }
        throw error;
    }
}

async function submitLeadBrief(formData) {
    const isFormDataObject = formData instanceof FormData;
    let encryptedLeadId = isFormDataObject
        ? formData.get('encrypted_lead_id')
        : formData.encrypted_lead_id;

    if (!encryptedLeadId) {
        const leadId = getLeadId();
        if (!leadId) {
            throw new Error('Session expired. Please start over.');
        }
        encryptedLeadId = await getEncryptedLeadId(leadId);
        if (isFormDataObject) {
            formData.append('encrypted_lead_id', encryptedLeadId);
        } else {
            formData.encrypted_lead_id = encryptedLeadId;
        }
    }

    if (isFormDataObject) {
        const response = await fetch(`${API_BASE_URL}/api/lead-brief`, {
            method: 'POST',
            headers: { Accept: 'application/json' },
            body: formData,
        });

        if (!response.ok) {
            const errorText = await response.text();
            let errorData = {};
            try {
                errorData = JSON.parse(errorText);
            } catch (e) {}
            throw new Error(
                errorData.message || errorData.error || `Error ${response.status}`
            );
        }

        return await response.json();
    }

    return apiRequest('/api/lead-brief', 'POST', {
        encrypted_lead_id: encryptedLeadId,
        ...formData,
    });
}

async function submitAddons(leadId, addons) {
    if (!leadId || !addons?.length) {
        throw new Error('Lead ID and addons are required');
    }

    return apiRequest(`/api/leads/${leadId}/addons`, 'POST', { addons });
}

/* ── Site query forms (footer popups, contact) ── */

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
    const form = e.target;
    const source = form.dataset.source || 'website';

    if (window.LOGO_FUNNEL && source === 'pricing_popup') {
        return submitStep1(e);
    }

    e.preventDefault();

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
            window.location.href = form.dataset.redirect || funnelUrl('thankyou');
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

function initLogoFunnelUi() {
    document.querySelectorAll('.style-card').forEach((card) => {
        card.addEventListener('click', () => {
            const radio = card.querySelector('input[type="radio"]');
            if (!radio) return;
            document.querySelectorAll('.style-card').forEach((c) => c.classList.remove('active-style'));
            setTimeout(() => {
                if (radio.checked) {
                    card.classList.add('active-style');
                }
            }, 0);
        });
    });

    const addonBtn = document.getElementById('addon-btn');
    if (addonBtn) {
        addonBtn.addEventListener('click', async function () {
            const checkedBoxes = document.querySelectorAll('input[type=checkbox]:checked');
            if (checkedBoxes.length === 0) {
                alert('Please select at least one addon');
                return;
            }

            const addons = [];
            checkedBoxes.forEach((checkbox) => {
                const addonBox = checkbox.closest('.addron-box, .addon-card');
                const addonName =
                    addonBox?.querySelector('.addon-name')?.textContent.replace(/\s+/g, ' ').trim() ||
                    '';
                addons.push({
                    name: addonName,
                    price: parseInt(checkbox.value, 10) || 0,
                });
            });

            try {
                addonBtn.disabled = true;
                addonBtn.textContent = 'Processing...';
                const leadId = getLeadId();
                if (!leadId) {
                    throw new Error('Session expired. Please start over.');
                }
                await submitAddons(leadId, addons);
                const urlParams = new URLSearchParams(window.location.search);
                const id = urlParams.get('id') || leadId;
                const pkg = urlParams.get('pkg') || '';
                window.location.href =
                    funnelUrl('thanks') + '?id=' + encodeURIComponent(id) + '&pkg=' + encodeURIComponent(pkg);
            } catch (error) {
                alert(`Error: ${error.message}`);
                addonBtn.disabled = false;
                addonBtn.textContent = 'Checkout';
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    restoreLeadSessionFromUrl();
    initSiteQueryForms();
    initLogoFunnelUi();
});

function submitGsPopupLead(e) {
    return submitSiteQuery(e);
}
