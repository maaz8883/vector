<?php
require_once __DIR__ . '/inc/funnel-init.php';
require_once __DIR__ . '/inc/payment-helpers.php';

$baseCrmUrl = BASE_URL;

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Allow: POST, OPTIONS');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Max-Age: 86400');
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['stripe_intent_payment_link'])) {
    header('Content-Type: application/json');
    $uuidPost = $_POST['uuid'] ?? null;
    if (!$uuidPost) {
        echo json_encode(['error' => 'Missing payment id']);
        exit;
    }
    $linkDataPost = PaymentDetails_uuid($uuidPost);
    if (!$linkDataPost || ($linkDataPost['status'] ?? '') !== 'pending') {
        echo json_encode(['error' => 'Invalid or expired payment link']);
        exit;
    }
    echo json_encode(createStripePaymentIntent($linkDataPost, $uuidPost));
    exit;
}

$uuid = $_GET['id'] ?? null;
$error = null;
$linkData = null;
$selectedMerchant = '';
$paypalClientId = null;
$stripePublishableKey = null;

if ($uuid) {
    $linkData = PaymentDetails_uuid($uuid);

    if (!$linkData) {
        $error = 'Payment link not found or expired.';
    } else {
        $paypalClientId = $linkData['brand']['paypal_client_id'] ?? null;
        $stripePublishableKey = $linkData['brand']['stripe_publishable_key']
            ?? $linkData['brand']['stripe_publishable']
            ?? $linkData['brand']['stripe_pk']
            ?? $linkData['stripe_publishable_key']
            ?? $linkData['stripe_publishable']
            ?? null;
        $selectedMerchant = strtolower((string) ($linkData['merchant'] ?? ''));

        if ($selectedMerchant === '') {
            if (!empty($paypalClientId)) {
                $selectedMerchant = 'paypal';
            } elseif (!empty($stripePublishableKey)) {
                $selectedMerchant = 'stripe';
            }
        }
    }
} else {
    $error = 'No Payment ID provided.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pay_method']) && $_POST['pay_method'] === 'square' && $linkData) {
    $squareAccessToken = $linkData['brand']['square_access_token'] ?? null;
    $squareLocationId = $linkData['brand']['square_location_id'] ?? null;

    if (!$squareAccessToken || !$squareLocationId) {
        $error = 'Square payment is not configured for this brand.';
    } else {
        $checkout = getSquareCheckoutUrl($linkData, $linkData['custom_service'], $linkData['amount'], $uuid, 'link');

        if (isset($checkout['url'])) {
            header('Location: ' . $checkout['url']);
            exit;
        }
        $error = $checkout['error'];
    }
}

if (isset($_GET['status']) && $_GET['status'] === 'success' && $uuid && $linkData) {
    verifyPaymentWithCrm($uuid);
    $linkData = PaymentDetails_uuid($uuid);
    header('Location: ' . $base_url . 'pay-thank-you?id=' . urlencode($uuid));
    exit;
}

if ($linkData && ($linkData['status'] ?? '') !== 'pending') {
    header('Location: ' . $base_url . 'pay-thank-you?id=' . urlencode($uuid));
    exit;
}

$payThankYouUrl = $base_url . 'pay-thank-you?id=' . urlencode((string) $uuid);
$briefFormBase = $base_url . 'brief-form?encrypted_lead_id=';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Invoice — <?php echo htmlspecialchars($fun_site); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $fun_css; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>window.SITE_BASE = <?php echo json_encode($base_url); ?>;</script>


    <style>
        :root {
            --brand: #BE5264;
            --brand-dark: #9e3e52;
            --brand-light: #fdf0f2;
            --success: #3B6D11;
            --success-bg: #eaf3de;
            --warn-bg: #faeeda;
            --warn-text: #854F0B;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 18px;
            --radius-xl: 24px;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: #f4f2ef;
            color: #1a1a1a;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 40px;
            background: #fff;
            border-bottom: 1px solid #ebe9e4;
            position: sticky;
            top: 0;
            z-index: 40;
        }
        header .logo img { height: 42px; }
        header .phone {
            font-size: 14px;
            font-weight: 600;
            color: var(--brand);
            text-decoration: none;
        }
        header .phone:hover { color: var(--brand-dark); }
        header .header-right { display: flex; align-items: center; }

        .main-content { padding: 20px 0 60px; display: flex; justify-content: center; }
        .amount-value { color: var(--brand) !important; }
        .section-label { color: var(--brand) !important; }

        #payment-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(10px);
            z-index: 9999;
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-family: 'Outfit', sans-serif;
        }
        .spinner {
            width: 80px;
            height: 80px;
            border: 4px solid rgba(255, 215, 0, 0.1);
            border-left-color: #FFD700;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(184, 134, 11, 0.2);
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .loader-text {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #FFD700 0%, #B8860B 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .overlay {
            position: fixed !important; inset: 0 !important; z-index: 9999 !important;
            background: rgba(10, 6, 6, 0.65) !important; backdrop-filter: blur(4px) !important;
            display: flex !important; align-items: center !important; justify-content: center !important;
            padding: 1rem !important;
        }
        .overlay.hidden { display: none !important; }
        .modal {
            background: #fff; border-radius: var(--radius-xl); border: 1px solid #ebe9e4;
            padding: 2.25rem 2rem 1.75rem; max-width: 430px; width: 100%; text-align: center;
            box-shadow: 0 24px 60px rgba(0,0,0,0.18);
        }
        .check-circle {
            width: 72px; height: 72px; border-radius: 50%;
            background: linear-gradient(135deg, var(--brand) 0%, #e07a8c 100%);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1.25rem; box-shadow: 0 8px 24px rgba(190, 82, 100, 0.35);
        }
        .check-circle i { color: #fff; font-size: 28px; }
        .modal h1 { font-size: 24px; font-weight: 700; color: var(--brand); margin-bottom: 8px; }
        .modal .sub { font-size: 13.5px; color: #6b6b6b; line-height: 1.65; margin-bottom: 1.5rem; }
        .order-meta {
            background: #faf9f7; border: 1px solid #ebe9e4; border-radius: var(--radius-md);
            padding: 1rem 1.1rem; margin-bottom: 1.5rem; text-align: left;
        }
        .meta-row {
            display: flex; justify-content: space-between; align-items: center;
            padding: 7px 0; border-bottom: 1px solid #ebe9e4; font-size: 13.5px;
        }
        .meta-row:last-child { border-bottom: none; padding-bottom: 0; }
        .meta-label { color: #888; font-weight: 500; }
        .meta-val { font-weight: 600; color: var(--brand); }
        .status-dot { display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--success); margin-right: 5px; }
        .modal-btns { display: flex; flex-direction: column; gap: 10px; }
        .btn-primary {
            display: block; width: 100%; padding: 13px;
            background: linear-gradient(135deg, var(--brand) 0%, #d4667a 100%);
            color: #fff; font-size: 14px; font-weight: 600; border: none;
            border-radius: var(--radius-md); cursor: pointer; text-decoration: none;
        }
        .btn-ghost {
            display: block; width: 100%; padding: 11px; background: transparent;
            font-size: 13px; font-weight: 500; color: #888; border: 1px solid #ddd;
            border-radius: var(--radius-md); cursor: pointer; text-decoration: none;
        }

        .addons-page { max-width: 920px; margin: 0 auto; padding: 2.5rem 1.25rem 2.5rem; }
        .page-header { text-align: center; margin-bottom: 2rem; }
        .promo-badge {
            display: inline-flex; align-items: center; gap: 6px; background: var(--warn-bg);
            color: var(--warn-text); font-size: 12px; font-weight: 600; padding: 5px 14px;
            border-radius: 30px; margin-bottom: 12px;
        }
        .page-header h2 { font-size: 30px; font-weight: 700; margin-bottom: 6px; }
        .page-header p { font-size: 14px; color: #777; }
        .addons-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 12px; }
        .addon-card {
            background: #fff; border: 1.5px solid #ebe9e4; border-radius: var(--radius-lg);
            padding: 1rem; cursor: pointer; display: flex; gap: 12px; align-items: flex-start;
            transition: border-color 0.18s, box-shadow 0.18s, background 0.18s; user-select: none;
        }
        .addon-card:hover { border-color: #d4a0aa; box-shadow: 0 4px 16px rgba(190, 82, 100, 0.1); }
        .addon-card.sel { border-color: var(--brand); background: var(--brand-light); box-shadow: 0 4px 20px rgba(190, 82, 100, 0.15); }
        .addon-icon {
            width: 44px; height: 44px; flex-shrink: 0; border-radius: var(--radius-sm);
            background: #f4f2ef; display: flex; align-items: center; justify-content: center; font-size: 20px;
        }
        .addon-card.sel .addon-icon { background: #f7d8de; }
        .addon-body { flex: 1; min-width: 0; }
        .addon-body h3 { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
        .addon-body p { font-size: 12px; color: #888; line-height: 1.55; margin-bottom: 9px; }
        .pricing { display: flex; gap: 7px; align-items: baseline; flex-wrap: wrap; }
        .price-now { font-size: 16px; font-weight: 700; color: var(--brand); }
        .price-was { font-size: 12px; color: #bbb; text-decoration: line-through; }
        .save-pill { font-size: 11px; font-weight: 600; background: var(--success-bg); color: var(--success); padding: 2px 7px; border-radius: 20px; }
        .ring {
            width: 22px; height: 22px; flex-shrink: 0; border-radius: 50%; border: 2px solid #ccc;
            display: flex; align-items: center; justify-content: center; margin-top: 1px;
        }
        .addon-card.sel .ring { background: var(--brand); border-color: var(--brand); }
        .ring i { display: none; font-size: 11px; color: #fff; }
        .addon-card.sel .ring i { display: block; }

        .checkout-bar {
            position: fixed; bottom: 0; left: 0; right: 0; z-index: 90; background: #fff;
            border-top: 2px solid #ebe9e4; box-shadow: 0 -4px 24px rgba(0,0,0,0.09);
            padding: 14px 40px; display: flex; align-items: center; justify-content: space-between;
            gap: 1rem; flex-wrap: wrap; width: 60%; margin: 0 auto;
        }
        body.has-checkout-bar { padding-bottom: 82px; }
        .bar-left small { display: block; font-size: 12px; color: #999; margin-bottom: 4px; }
        .bar-left strong { font-size: 28px; font-weight: 700; line-height: 1; }
        .bar-left strong .amount { color: var(--brand); }
        .bar-right { display: flex; gap: 10px; align-items: center; }
        .s-skip, .s-checkout {
            font-size: 13px; font-weight: 500; border-radius: var(--radius-sm); padding: 11px 22px;
            cursor: pointer; text-decoration: none; border: 1px solid #ddd; background: transparent; color: #999;
        }
        .s-checkout {
            font-family: 'Outfit', sans-serif;
            font-size: 14px; font-weight: 600; background: linear-gradient(135deg, var(--brand) 0%, #d4667a 100%);
            color: #fff; border: none; padding: 13px 28px; display: inline-flex; align-items: center; gap: 8px;
            border-radius: var(--radius-sm); cursor: pointer;
            transition: transform 0.15s, box-shadow 0.15s;
        }
        .s-checkout:hover:not(:disabled) { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(190, 82, 100, 0.35); }
        .s-checkout:disabled { opacity: 0.38; cursor: default; box-shadow: none; transform: none; }
        .site-footer { background: #111; }
        .footer-copy-bar { background: var(--brand); padding: 12px 40px; text-align: center; }
        .footer-copy-bar p { font-size: 12.5px; color: rgba(255,255,255,0.88); }
        .footer-copy-bar a { color: #fff; font-weight: 600; text-decoration: none; }

        @media (max-width: 600px) {
            .checkout-bar { width: 100%; padding: 12px 16px; }
            .bar-left strong { font-size: 20px; }
            .page-header h2 { font-size: 22px; }
        }
    </style>

    <?php if ($linkData && $selectedMerchant === 'paypal' && $paypalClientId): ?>
        <script src="https://www.paypal.com/sdk/js?client-id=<?= htmlspecialchars($paypalClientId) ?>&currency=USD"></script>
    <?php endif; ?>
    <?php if ($selectedMerchant === 'stripe' && !empty($stripePublishableKey)): ?>
        <script src="https://js.stripe.com/v3/"></script>
    <?php endif; ?>
</head>
<body class="<?php echo ($linkData && ($linkData['status'] ?? '') !== 'pending' && ($linkData['sale_type'] ?? '') === 'front') ? 'has-checkout-bar' : ''; ?>">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW7SCQJP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div id="payment-loader">
    <div class="spinner"></div>
    <div class="loader-text">Verifying Payment...</div>
</div>

<header>
    <div class="logo">
        <img src="<?php echo $fun_logo; ?>" alt="<?php echo htmlspecialchars($fun_site); ?>">
    </div>
    <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $fun_phone); ?>" class="phone">
        <i class="fa fa-phone"></i> <?php echo $fun_phone; ?>
    </a>
</header>

<?php if ($linkData && ($linkData['status'] ?? '') !== 'pending'): ?>

    <div class="overlay" id="overlay">
        <div class="modal">
            <div class="check-circle"><i class="fa fa-check"></i></div>
            <h1>Order Confirmed!</h1>
            <p class="sub">Thank you for choosing <?php echo htmlspecialchars($fun_site); ?>. Our creative team has been notified and will begin working on your project immediately.</p>
            <div class="order-meta">
                <div class="meta-row">
                    <span class="meta-label">Order ID</span>
                    <span class="meta-val">#<?= strtoupper(substr($linkData['uuid'], 0, 8)) ?></span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Billed To</span>
                    <span class="meta-val"><?= htmlspecialchars($linkData['customer_name']) ?></span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Amount Paid</span>
                    <span class="meta-val">$<?= number_format($linkData['amount'], 2) ?></span>
                </div>
                <div class="meta-row">
                    <span class="meta-label">Status</span>
                    <span class="meta-val"><span class="status-dot"></span>Payment Successful</span>
                </div>
            </div>
            <div class="modal-btns">
                <?php if (($linkData['sale_type'] ?? '') === 'front'): ?>
                <button class="btn-primary" type="button" onclick="closeModal()">View Exclusive Add-ons &rarr;</button>
                <a href="<?= htmlspecialchars($briefFormBase . urlencode($linkData['lead_uuid'])) ?>" class="btn-ghost">Skip &mdash; Go to Brief Form</a>
                <?php else: ?>
                <p style="color: #888; font-size: 14px;">Our team will contact you shortly to begin your project.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if (($linkData['sale_type'] ?? '') === 'front'): ?>
    <main class="addons-page">
        <div class="page-header">
            <div class="promo-badge"><i class="fa fa-bolt"></i> Up to 80% off — exclusive add-ons</div>
            <h2>Enhance Your Brand</h2>
            <p>Select any extras below and check out in one step.</p>
        </div>
        <div class="addons-grid" id="addon-grid"></div>
    </main>

    <div class="checkout-bar">
        <div class="bar-left">
            <small id="count-label">No items selected</small>
            <strong><span class="currency">$</span><span class="amount" id="total-amount">0</span></strong>
        </div>
        <div class="bar-right">
            <a href="<?= htmlspecialchars($briefFormBase . urlencode($linkData['lead_uuid'])) ?>" class="s-skip">Skip</a>
            <button class="s-checkout" id="checkout-btn" type="button" disabled>
                <i class="fa fa-credit-card"></i> Checkout Add-ons
            </button>
        </div>
    </div>
    <?php endif; ?>

    <footer class="site-footer">
        <div class="footer-copy-bar">
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($fun_site); ?>. All rights reserved.</p>
        </div>
    </footer>

<?php elseif ($error): ?>
    <div class="main-content">
        <div class="simple-card">
            <div class="alert alert-danger text-center" style="color: #dc3545; padding: 20px;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        </div>
    </div>

<?php elseif ($linkData && ($linkData['status'] ?? '') === 'pending'): ?>
    <div class="main-content">
        <div class="simple-card">
            <div class="amount-box">
                <div class="amount-label">Amount Due</div>
                <div class="amount-value">$<?php echo number_format($linkData['amount'], 2); ?></div>
            </div>

            <div class="details-section">
                <div class="section-label">Client Details</div>
                <div class="info-box">
                    <p class="client-name"><?php echo htmlspecialchars($linkData['customer_name']); ?></p>
                    <p class="client-email"><?php echo htmlspecialchars($linkData['customer_email']); ?></p>
                </div>

                <div class="section-label">Service Description</div>
                <div class="description-text">
                    Payment for Invoice #<?php echo substr($linkData['uuid'], 0, 8); ?><br>
                    <?php
                    if (!empty($linkData['custom_service'])) {
                        foreach (explode(',', $linkData['custom_service']) as $service) {
                            $service = trim($service);
                            if ($service !== '') {
                                echo htmlspecialchars($service) . '<br>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="payment-buttons">
                <?php if ($selectedMerchant === 'paypal' && !empty($paypalClientId)): ?>
                    <div id="paypal-button-container"></div>
                <?php endif; ?>

                <?php if ($selectedMerchant === 'stripe' && !empty($stripePublishableKey)): ?>
                    <div id="stripe-area" style="margin-top: 16px; width: 100%;">
                        <form id="stripe-payment-form">
                            <div id="stripe-payment-element"></div>
                            <button type="submit" id="stripe-submit-btn" class="btn-black-style" style="background: #635bff; width: 100%; margin-top: 12px;">
                                <span class="btn-icon-card">💳</span> Pay with card
                            </button>
                            <div id="stripe-payment-message" class="text-danger small mt-2" role="alert" style="color: #dc3545; font-size: 13px; margin-top: 8px;"></div>
                        </form>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($selectedMerchant === 'paypal' && !empty($paypalClientId)): ?>
            <script>
                paypal.Buttons({
                    style: { layout: 'vertical', color: 'gold', shape: 'rect', label: 'paypal' },
                    createOrder: function (data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: { value: '<?php echo $linkData['amount']; ?>' },
                                description: 'Payment for Invoice #<?php echo substr($linkData['uuid'], 0, 8); ?>'
                            }]
                        });
                    },
                    onApprove: function (data, actions) {
                        return actions.order.capture().then(function () {
                            document.getElementById('payment-loader').style.display = 'flex';
                            const verifyUrl = <?php echo json_encode($baseCrmUrl . 'api/payment-links/' . $uuid . '/verify'); ?>;
                            fetch(verifyUrl, {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                                body: JSON.stringify({ orderID: data.orderID })
                            })
                                .then(function (response) { return response.json(); })
                                .then(function (result) {
                                    if (result.status === 'success') {
                                        window.location.href = <?php echo json_encode($base_url . 'pay?status=success&id=' . urlencode((string) $uuid)); ?>;
                                    } else {
                                        document.getElementById('payment-loader').style.display = 'none';
                                        alert('Payment verification failed: ' + (result.error || 'Unknown error'));
                                    }
                                })
                                .catch(function () {
                                    document.getElementById('payment-loader').style.display = 'none';
                                    alert('An error occurred while verifying the payment.');
                                });
                        });
                    }
                }).render('#paypal-button-container');
            </script>
            <?php endif; ?>

            <?php if ($selectedMerchant === 'stripe' && !empty($stripePublishableKey) && !empty($uuid)): ?>
            <script>
            (function () {
                var stripe = Stripe(<?= json_encode($stripePublishableKey) ?>);
                var uuid = <?= json_encode($uuid) ?>;
                var verifyUrl = <?= json_encode($baseCrmUrl . 'api/payment-links/' . $uuid . '/verify') ?>;

                function showLoader(show) {
                    var el = document.getElementById('payment-loader');
                    if (el) el.style.display = show ? 'flex' : 'none';
                }
                function msgEl() { return document.getElementById('stripe-payment-message'); }

                var params = new URLSearchParams(window.location.search);
                if (params.get('stripe_payment_return') === '1' && params.get('payment_intent')) {
                    showLoader(true);
                    var piId = params.get('payment_intent');
                    fetch(verifyUrl, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                        body: JSON.stringify({ paymentIntentId: piId, orderID: piId })
                    })
                        .then(function (r) { return r.json(); })
                        .then(function (data) {
                            if (data.status === 'success') {
                                window.location.replace(<?php echo json_encode($base_url . 'pay?status=success&id=' . urlencode((string) $uuid)); ?>);
                            } else {
                                showLoader(false);
                                alert('Payment verification failed: ' + (data.error || 'Unknown error'));
                            }
                        })
                        .catch(function () {
                            showLoader(false);
                            alert('An error occurred while verifying the payment.');
                        });
                    return;
                }

                var form = document.getElementById('stripe-payment-form');
                if (!form) return;

                var fd = new FormData();
                fd.append('stripe_intent_payment_link', '1');
                fd.append('uuid', uuid);
                fetch(window.location.origin + window.location.pathname, {
                    method: 'POST',
                    body: fd,
                    credentials: 'same-origin',
                    cache: 'no-store'
                })
                    .then(function (r) { return r.json(); })
                    .then(function (data) {
                        if (data.error || !data.clientSecret) {
                            if (msgEl()) msgEl().textContent = data.error || 'Could not start payment.';
                            return;
                        }
                        var elements = stripe.elements({ clientSecret: data.clientSecret, appearance: { theme: 'stripe' } });
                        var paymentElement = elements.create('payment');
                        paymentElement.mount('#stripe-payment-element');

                        var returnUrl = window.location.origin + window.location.pathname + '?id=' + encodeURIComponent(uuid) + '&stripe_payment_return=1';

                        form.addEventListener('submit', function (ev) {
                            ev.preventDefault();
                            if (msgEl()) msgEl().textContent = '';
                            showLoader(true);
                            stripe.confirmPayment({
                                elements: elements,
                                confirmParams: { return_url: returnUrl },
                                redirect: 'if_required'
                            }).then(function (result) {
                                if (result.error) {
                                    showLoader(false);
                                    if (msgEl()) msgEl().textContent = result.error.message || 'Payment failed.';
                                    return;
                                }
                                var pi = result.paymentIntent;
                                if (pi && pi.status === 'succeeded') {
                                    fetch(verifyUrl, {
                                        method: 'POST',
                                        headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                                        body: JSON.stringify({ paymentIntentId: pi.id, orderID: pi.id })
                                    })
                                        .then(function (r) { return r.json(); })
                                        .then(function (d) {
                                            if (d.status === 'success') {
                                                window.location.href = <?php echo json_encode($base_url . 'pay?status=success&id=' . urlencode((string) $uuid)); ?>;
                                            } else {
                                                showLoader(false);
                                                alert('Payment verification failed: ' + (d.error || 'Unknown error'));
                                            }
                                        })
                                        .catch(function () {
                                            showLoader(false);
                                            alert('An error occurred while verifying the payment.');
                                        });
                                } else {
                                    showLoader(false);
                                }
                            });
                        });
                    })
                    .catch(function () {
                        if (msgEl()) msgEl().textContent = 'Could not load payment form.';
                    });
            })();
            </script>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($linkData && ($linkData['status'] ?? '') !== 'pending'): ?>
<script src="<?php echo $fun_js; ?>"></script>
<script>
const LEAD_ID = <?php echo json_encode($linkData['lead_uuid'] ?? $uuid); ?>;

function closeModal() {
    const ov = document.getElementById('overlay');
    if (!ov) return;
    ov.style.opacity = '0';
    ov.style.transition = 'opacity 0.25s';
    setTimeout(function () {
        ov.style.display = 'none';
        ov.classList.add('hidden');
    }, 260);
}

const ADDONS = [
    { id:1,  icon:'©',  name:'Logo Copyright',           desc:'Protect your design against infringement with full copyright certification.',         was:499,  price:199 },
    { id:2,  icon:'🌐', name:'Website Design',            desc:'3 web pages, full deployment, CMS, unlimited revisions & dedicated manager.',        was:999,  price:299 },
    { id:3,  icon:'🎬', name:'Video Animation (30 sec)',  desc:'Custom 2D explainer video tailored perfectly to your brand story.',                   was:499,  price:199 },
    { id:4,  icon:'🪪', name:'Business Card Design',      desc:'Stand-out custom card designs that make a lasting first impression.',                 was:149,  price:25  },
    { id:5,  icon:'📄', name:'Letterhead Design',         desc:'Branded letterheads to keep every piece of communication on-point.',                  was:99,   price:19  },
    { id:6,  icon:'✉️', name:'Envelope Design',           desc:'Distinctive envelope designs so your mail never goes unnoticed.',                     was:99,   price:19  },
    { id:7,  icon:'🔏', name:'Branded Seal Design',       desc:'Exclusive wax-seal style designs for a premium, polished look.',                      was:199,  price:23  },
    { id:8,  icon:'✨', name:'Logo Animation',            desc:'Animated logo to captivate your audience and boost brand recall.',                    was:375,  price:75  },
    { id:9,  icon:'🧊', name:'3D Logo',                  desc:'Striking 3D logo to make your brand pop across all digital platforms.',               was:399,  price:69  },
    { id:10, icon:'📱', name:'Social Media Logos',        desc:'All sizes for Facebook, LinkedIn, Instagram & more — perfectly fitted.',              was:149,  price:29  },
    { id:11, icon:'☕', name:'Personalized Mug Design',   desc:'Custom mug designs — perfect giveaways that keep your brand in sight.',               was:199,  price:39  },
    { id:12, icon:'👕', name:'Branded T-Shirt Design',    desc:'Wearable branding your customers will love — ideal for marketing campaigns.',         was:199,  price:29  },
    { id:13, icon:'🧢', name:'Personalized Hat Design',   desc:'Hat designs that turn loyal customers into walking brand ambassadors.',               was:199,  price:29  },
    { id:14, icon:'🏷️', name:'Sticker Design',           desc:'Spread your brand far and wide with affordable, eye-catching stickers.',              was:99,   price:29  },
    { id:15, icon:'📋', name:'Exclusive Flyer Design',    desc:'Premium marketing flyers proven to boost sales and brand visibility.',                was:199,  price:99  },
    { id:16, icon:'👥', name:'Facebook Banner',           desc:'Out-of-the-box Facebook banners to make your brand the centre of attention.',         was:199,  price:69  },
    { id:17, icon:'▶️', name:'YouTube Banner',            desc:'Bold YouTube banners to grow your channel and reinforce brand identity.',             was:199,  price:69  },
];

const selected = new Set();
const grid = document.getElementById('addon-grid');
const totalEl = document.getElementById('total-amount');
const countEl = document.getElementById('count-label');
const coBtn = document.getElementById('checkout-btn');

function savePct(was, price) { return Math.round((1 - price / was) * 100); }

function renderGrid() {
    if (!grid) return;
    grid.innerHTML = '';
    ADDONS.forEach(function (a) {
        const isSel = selected.has(a.id);
        const card = document.createElement('div');
        card.className = 'addon-card' + (isSel ? ' sel' : '');
        card.innerHTML =
            '<div class="addon-icon">' + a.icon + '</div>' +
            '<div class="addon-body"><h3>' + a.name + '</h3><p>' + a.desc + '</p>' +
            '<div class="pricing"><span class="price-now">$' + a.price + '</span>' +
            '<span class="price-was">$' + a.was + '</span>' +
            '<span class="save-pill">Save ' + savePct(a.was, a.price) + '%</span></div></div>' +
            '<div class="ring"><i class="fa fa-check"></i></div>';
        card.addEventListener('click', function () {
            if (selected.has(a.id)) selected.delete(a.id); else selected.add(a.id);
            updateBar();
            renderGrid();
        });
        grid.appendChild(card);
    });
}

function updateBar() {
    const total = ADDONS.filter(function (a) { return selected.has(a.id); }).reduce(function (sum, a) { return sum + a.price; }, 0);
    if (totalEl) totalEl.textContent = total;
    const n = selected.size;
    if (countEl) countEl.textContent = n === 0 ? 'No items selected' : n + ' item' + (n > 1 ? 's' : '') + ' selected';
    if (coBtn) coBtn.disabled = n === 0;
}

if (coBtn) {
    coBtn.addEventListener('click', async function () {
        const chosenAddons = ADDONS.filter(function (a) { return selected.has(a.id); });
        if (!chosenAddons.length) {
            alert('Please select at least one addon');
            return;
        }
        try {
            coBtn.disabled = true;
            coBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Processing...';
            await submitAddons(LEAD_ID, chosenAddons.map(function (a) { return { name: a.name, price: a.price }; }));
            <?php if (($linkData['sale_type'] ?? '') === 'front'): ?>
            window.location.href = <?php echo json_encode($briefFormBase); ?> + encodeURIComponent(LEAD_ID);
            <?php else: ?>
            alert('Add-ons submitted successfully!');
            coBtn.innerHTML = '<i class="fa fa-check"></i> Submitted';
            <?php endif; ?>
        } catch (error) {
            alert('Error submitting addons: ' + error.message);
            coBtn.disabled = false;
            coBtn.innerHTML = '<i class="fa fa-credit-card"></i> Checkout Add-ons';
        }
    });
}

renderGrid();
updateBar();
</script>
<?php endif; ?>

</body>
</html>
