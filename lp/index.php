<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description" content="Get a professional custom logo design starting at just $18. Logo Vector Design delivers award-winning logos with unlimited revisions and 100% money-back guarantee.">
<title>Logo Vector Design | Custom Logo Design Starting at $18</title>

<!-- Favicons -->
<link rel="icon" type="image/png" href="../assets/images/favicon-96x96.png" sizes="96x96">
<link rel="shortcut icon" href="../assets/images/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">

<!-- Styles -->
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/animate.min.css">
<link rel="stylesheet" href="../assets/css/aos.css">
<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/owl.theme.default.css">
<link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/responsive.css">

<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

<style>
/* ============================================================
   LP-SPECIFIC OVERRIDES — matches Logo Vector Design theme
   ============================================================ */

/* Fonts already loaded via style.css */
body { background: #ffffff; overflow-x: hidden; }

/* ── LP Header ── */
.lp-header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: rgba(255,255,255,0.96);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(26,16,64,0.08);
    padding: 14px 0 0;
}
.lp-header .logo img { max-height: 42px; }
.lp-header .lp-nav { display: flex; gap: 28px; list-style: none; margin: 0; padding: 0; }
.lp-header .lp-nav a {
    font-size: 13px;
    font-weight: 600;
    color: rgb(0 0 0);
    text-decoration: none;
    transition: color 0.2s ease;
}
.lp-header .lp-nav a:hover { color: #de2aad; }
.lp-header-btns { display: flex; align-items: center; gap: 10px; }
.lp-header-btns a {
    font-size: 13px;
    font-weight: 700;
    color: rgb(0 0 0);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 6px;
}
.lp-header-btns a:hover { color: #de2aad; }
.lp-header-btns .btn-lp-cta {
    background: linear-gradient(130deg, #de2aad, #f97316);
    color: #fff !important; padding: 10px 22px; border-radius: 5px;
    font-size: 13px; font-weight: 700;
    box-shadow: 0 4px 14px rgba(255,45,120,0.3);
    transition: opacity 0.2s ease, transform 0.2s ease;
}
.lp-header-btns .btn-lp-cta:hover { opacity: 0.88; transform: translateY(-2px); }

/* ── Hero Banner ── */
.lp-hero {
    padding: 60px 0 70px;
    background-image: url('assets/images/banner-new.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    overflow: hidden;
}
.lp-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(0,0,0,0.88) 0%, rgba(0,0,0,0.75) 40%, rgba(0,0,0,0.35) 70%, rgba(0,0,0,0.1) 100%);
    z-index: 0;
}
.lp-hero > .container { position: relative; z-index: 1; }
.lp-hero .lp-section-badge { color: rgba(255,255,255,0.9); }
.lp-hero h1 {
    font-size: clamp(30px, 4vw, 52px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 16px;
}
.lp-hero h1 span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    font-size: 55px;
}
.lp-hero p.lp-sub {
    font-size: 15px;
    color: rgb(255 255 255);
    max-width: 590px;
    line-height: 1.7;
    font-weight: 500;
    margin-bottom: 18px;
}
.lp-hero ul.lp-bullets {
    list-style: none; padding: 0; margin: 0 0 32px;
}
.lp-hero ul.lp-bullets li {
    font-size: 14px;
    font-weight: 600;
    color: rgb(255 255 255);
    padding: 5px 0;
    display: flex;
    align-items: center;
    gap: 10px;
}
.lp-hero ul.lp-bullets li::before {
    content: '✓';
    width: 20px; height: 20px; flex-shrink: 0;
    background: linear-gradient(135deg, #de2aad, #f97316);
    border-radius: 50%;
    display: inline-flex; align-items: center; justify-content: center;
    color: #fff; font-size: 10px; font-weight: 700;
}
.lp-hero-btns { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 24px; }

/* ── Trust badges strip below buttons ── */
.lp-trust-badges {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 4px;
}
.lp-trust-badge {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 8px;
    padding: 8px 14px;
    backdrop-filter: blur(6px);
}
.lp-trust-badge .badge-icon { font-size: 18px; }
.lp-trust-badge .badge-icon.tp { color: #00b67a; }
.lp-trust-badge .badge-icon.stars { color: #f97316; font-size: 14px; }
.lp-trust-badge-text strong {
    display: block;
    font-size: 13px; font-weight: 700; color: #fff; line-height: 1.2;
}
.lp-trust-badge-text span {
    font-size: 11px; color: rgba(255,255,255,0.55); font-weight: 500;
}
.lp-trust-badge-divider {
    width: 1px; height: 36px;
    background: rgba(255,255,255,0.15);
}
/* ban-trust image strip */
.lp-ban-trust { margin-top: 28px; }
.lp-ban-trust img { max-width: 420px; width: 100%; }
.btn-lp-primary {
    background: linear-gradient(130deg, #de2aad, #f97316);
    color: #fff; border: none; padding: 13px 30px; border-radius: 5px;
    font-size: 14px; font-weight: 700; cursor: pointer;
    font-family: 'Wix Madefor Display', sans-serif;
    box-shadow: 0 4px 18px rgba(255,45,120,0.35);
    transition: opacity 0.25s ease, transform 0.25s ease;
    text-decoration: none; display: inline-block;
    animation: lpPulse 2s infinite;
}
.btn-lp-primary:hover { opacity: 0.88; transform: translateY(-2px); color: #fff; }
.btn-lp-secondary {
    background: transparent;
    color: #ffffff;
    border: 1.5px solid rgb(255 255 255);
    padding: 12px 28px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    font-family: 'Wix Madefor Display', sans-serif;
    transition: all 0.25s ease;
    text-decoration: none;
    display: inline-block;
}
.btn-lp-secondary:hover { border-color: #de2aad; color: #de2aad; }

@keyframes lpPulse {
    0%, 100% { box-shadow: 0 4px 18px rgba(255,45,120,0.35); }
    50% { box-shadow: 0 4px 32px rgba(255,45,120,0.6); }
}

/* ── Hero Form Card ── */
.lp-form-card {
    background: #fff;
    border-radius: 20px;
    padding: 32px 28px;
    box-shadow: 0 12px 50px rgba(26,16,64,0.12);
    border: 1px solid rgba(26,16,64,0.07);
    position: relative;
    z-index: 2;
}
.lp-form-card h3 {
    font-size: 26px; font-weight: 700; color: #1a1040;
    margin-bottom: 6px; text-align: center;
}
.lp-form-card .lp-form-sub {
    font-size: 13px; color: rgba(26,16,64,0.5); text-align: center; margin-bottom: 22px;
}
.lp-form-card .lp-form-sub span { color: #de2aad; font-weight: 700; }
.lp-form-group { margin-bottom: 14px; }
.lp-form-group input,
.lp-form-group textarea,
.lp-form-group select {
    width: 100%;
    background: rgba(26,16,64,0.04);
    border: 1.5px solid rgba(26,16,64,0.1);
    border-radius: 8px;
    padding: 12px 16px;
    font-size: 13px; font-weight: 500;
    color: #1a1040;
    font-family: 'Wix Madefor Display', sans-serif;
    transition: border-color 0.2s ease;
    outline: none;
}
.lp-form-group input:focus,
.lp-form-group textarea:focus,
.lp-form-group select:focus { border-color: #de2aad; }
.lp-form-group textarea { height: 80px; resize: none; }
.lp-form-btn {
    width: 100%;
    background: linear-gradient(130deg, #de2aad, #f97316);
    color: #fff; border: none; padding: 13px;
    border-radius: 8px; font-size: 14px; font-weight: 700;
    cursor: pointer; font-family: 'Wix Madefor Display', sans-serif;
    transition: opacity 0.25s ease, transform 0.25s ease;
    box-shadow: 0 4px 18px rgba(255,45,120,0.35);
}
.lp-form-btn:hover { opacity: 0.88; transform: translateY(-2px); }

/* ── Why Professional Logo section ── */
.lp-why-logo {
    padding: 90px 0 100px;
    background: #fff;
}
.lp-wl-img-wrap {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 16px 50px rgba(26,16,64,0.1);
}
.lp-wl-img-wrap img {
    width: 100%;
    display: block;
    transition: transform 0.5s ease;
}
.lp-wl-img-wrap:hover img { transform: scale(1.03); }

.lp-wl-num {
    font-size: 72px;
    font-weight: 800;
    line-height: 1;
    background: linear-gradient(130deg, rgba(222,42,173,0.12), rgba(249,115,22,0.12));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    display: block;
    margin-bottom: -10px;
}
.lp-wl-title {
    font-size: clamp(22px, 3vw, 34px);
    font-weight: 400;
    color: #1a1040;
    margin-bottom: 16px;
    line-height: 1.25;
}
.lp-wl-title span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
}
.lp-wl-text {
    font-size: 15px;
    color: rgba(26,16,64,0.6);
    line-height: 1.8;
    margin-bottom: 24px;
    font-weight: 500;
}
.lp-wl-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}
.lp-wl-tags span {
    background: rgba(222,42,173,0.07);
    border: 1.5px solid rgba(222,42,173,0.2);
    color: #de2aad;
    font-size: 12px;
    font-weight: 700;
    padding: 5px 14px;
    border-radius: 30px;
    letter-spacing: 0.04em;
}

/* ── Featured / Best Seller pricing card ── */
.pricing-card-wrap.featured {
    position: relative;
}
.pricing-card-wrap.featured .pricing-card {
    background: linear-gradient(130deg, #de2aad, #f97316);
    border-radius: 0 20px 20px 20px;
    transform: scale(1.03);
    box-shadow: 0 20px 60px rgba(222,42,173,0.45);
}
.pricing-card-wrap.featured .pricing-card .pricing-amount {
    background: #fff;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.pricing-card-wrap.featured .pricing-card .pricing-dollar,
.pricing-card-wrap.featured .pricing-card .pricing-old { color: rgba(255,255,255,0.8); }
.pricing-card-wrap.featured .pricing-card .pricing-desc { color: rgba(255,255,255,0.9); }
.pricing-card-wrap.featured .pricing-card .pricing-features {
    background: rgba(255,255,255,0.15);
    scrollbar-color: rgba(255,255,255,0.5) rgba(255,255,255,0.1);
}
.pricing-card-wrap.featured .pricing-card .pricing-features li {
    color: #fff;
    border-bottom-color: rgba(255,255,255,0.15);
}
.pricing-card-wrap.featured .pricing-card .pricing-features li .fa-check-circle { color: #fff; }
.pricing-card-wrap.featured .pricing-card .pricing-btn {
    background: #fff;
    color: #de2aad;
    box-shadow: 0 4px 18px rgba(0,0,0,0.15);
}
.pricing-card-wrap.featured .pricing-card .pricing-btn:hover {
    background: rgba(255,255,255,0.92);
    transform: translateY(-2px);
}
.pricing-card-wrap.featured .pricing-plan-badge {
    background: #fff;
    color: #de2aad;
    font-weight: 800;
}

/* Ribbon badge */
.best-seller-ribbon {
    position: absolute;
    top: 30px;
    right: -10px;
    background: linear-gradient(130deg, #de2aad, #f97316);
    color: #fff;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    padding: 7px 18px 7px 14px;
    border-radius: 4px 0 0 4px;
    box-shadow: 0 4px 14px rgba(222,42,173,0.4);
    z-index: 10;
    line-height: 1;
    display: flex;
    align-items: center;
    gap: 6px;
}
.best-seller-ribbon::after {
    content: '';
    position: absolute;
    right: -10px;
    top: 0;
    border-top: 17px solid #de2aad;
    border-bottom: 17px solid #de2aad;
    border-right: 10px solid transparent;
}
.best-seller-ribbon i { font-size: 12px; }

/* ── Form checkboxes ── */
.lp-form-checks { margin-bottom: 14px; }
.lp-form-check {
    display: flex;
    align-items: flex-start;
    gap: 9px;
    margin-bottom: 8px;
}
.lp-form-check input[type="checkbox"] {
    width: 15px;
    height: 15px;
    min-width: 15px;
    margin-top: 2px;
    accent-color: #de2aad;
    cursor: pointer;
}
.lp-form-check label {
    font-size: 11px;
    color: rgba(26,16,64,0.55);
    line-height: 1.5;
    cursor: pointer;
}
.lp-form-check label a {
    color: #de2aad;
    text-decoration: underline;
}

/* ── Trust bar ── */
.lp-trust {
    background: linear-gradient(130deg, #de2aad, #f97316);
    border-top: none;
    padding: 20px 0;
}
.lp-trust-item {
    display: flex; align-items: center; gap: 10px;
    font-size: 13px; font-weight: 600; color: #fff;
    justify-content: center;
}
.lp-trust-item i { color: rgba(255,255,255,0.85); font-size: 18px; }

/* ── Section header shared ── */
.lp-section-badge {
    display: inline-block;
    font-size: 12px; font-weight: 700; letter-spacing: 0.12em;
    text-transform: uppercase; padding: 5px 16px; border-radius: 8px;
    color: rgba(26,16,64,0.8); background: transparent;
    border: 1px solid transparent; margin-bottom: 18px;
    position: relative; isolation: isolate;
}
.lp-section-badge::before {
    content: '';
    position: absolute; inset: -5px; border-radius: 5px; padding: 1.5px;
    background: linear-gradient(90deg, #ff386a, #170f39, #fa6e1e, #ff386a);
    background-size: 300% 100%;
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: destination-out;
    mask-composite: exclude;
    animation: shimmerBorder 2.5s linear infinite;
    z-index: -1;
}
.lp-section-title {
    font-size: clamp(26px, 3.5vw, 44px); font-weight: 400;
    color: #1a1040; margin-bottom: 12px; line-height: 1.2;
}
.lp-section-title span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text; font-weight: 800;
}
.lp-section-desc {
    font-size: 14px;
    color: rgb(0 0 0);
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.7;
    font-weight: 500;
}

/* ── Portfolio section ── */
.lp-portfolio { padding: 80px 0 90px; background: #fff; }
.lp-portfolio-tabs {
    display: flex; flex-wrap: wrap; gap: 8px;
    justify-content: center; margin: 32px 0 28px;
}
.lp-ptab {
    background: rgba(26,16,64,0.05);
    border: 1.5px solid rgba(26,16,64,0.1);
    color: rgba(26,16,64,0.6);
    padding: 8px 18px; border-radius: 30px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    font-family: 'Wix Madefor Display', sans-serif;
    transition: all 0.22s ease;
}
.lp-ptab:hover { border-color: rgba(222,42,173,0.4); color: #de2aad; }
.lp-ptab.active {
    background: linear-gradient(130deg, #de2aad, #f97316);
    border-color: transparent; color: #fff;
    box-shadow: 0 4px 14px rgba(222,42,173,0.35);
}
.lp-port-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.lp-port-item { border-radius: 12px; overflow: hidden; cursor: pointer; position: relative; display: none; }
.lp-port-item[data-cat="estate"] { display: block; }

.lp-port-item img {
    width: 100%; height: 200px; object-fit: cover; display: block;
    transition: transform 0.4s ease;
}
.lp-port-item:hover img { transform: scale(1.06); }

/* ── Why Us ── */
.lp-why { padding: 80px 0 90px; background: linear-gradient(186deg, #0d0b1e00, #e1329b0f, #f66c220a); }
.lp-why-card {
    background: #fff; border-radius: 16px; padding: 28px 24px;
    box-shadow: 0 4px 24px rgba(26,16,64,0.07);
    border: 1.5px solid rgba(26,16,64,0.06);
    margin-bottom: 24px; height: calc(100% - 24px);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.lp-why-card:hover { transform: translateY(-4px); box-shadow: 0 12px 36px rgba(255,45,120,0.12); }
.lp-why-icon {
    width: 52px; height: 52px; border-radius: 12px;
    background: linear-gradient(135deg, rgba(222,42,173,0.1), rgba(249,115,22,0.1));
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 18px;
}
.lp-why-icon i { font-size: 22px; color: #de2aad; }
.lp-why-card h4 { font-size: 17px; font-weight: 700; color: #1a1040; margin-bottom: 10px; }
.lp-why-card p { font-size: 13px; color: rgba(26,16,64,0.55); line-height: 1.7; margin: 0; }

/* ── Pricing ── */
.lp-pricing {
    padding: 80px 0 90px;
    background: linear-gradient(180deg, #0d0b1e 0%, #130d30 100%);
    position: relative; overflow: hidden;
}
.lp-pricing::before {
    content: '';
    position: absolute; top: -80px; left: 50%;
    transform: translateX(-50%);
    width: 700px; height: 400px;
    background: radial-gradient(ellipse, rgba(120,60,220,0.15) 0%, transparent 70%);
    pointer-events: none;
}
.lp-pricing .lp-section-badge { color: #fff; }
.lp-pricing .lp-section-title { color: #fff; }
.lp-pricing .lp-section-desc { color: rgba(255,255,255,0.55); }

/* ── Complete Branding Solution section ── */
.lp-branding {
    padding: 90px 0 100px;
    background: #120d2c;
}
.lp-branding-title {
    font-size: clamp(24px, 3vw, 37px);
    font-weight: 400;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 16px;
}
.lp-branding-title span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
}
.lp-branding-desc {
    font-size: 14px;
    color: rgb(255 255 255);
    line-height: 1.8;
    margin-bottom: 32px;
    max-width: 560px;
    font-weight: 500;
}
.lp-branding-cols {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px 32px;
    margin-bottom: 32px;
}
.lp-branding-col h4 {
    font-size: 15px;
    font-weight: 800;
    color: #de2aad;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lp-branding-col h4 i { font-size: 14px; }
.lp-branding-col ul {
    list-style: none;
    padding: 0; margin: 0;
}
.lp-branding-col ul li {
    font-size: 13px;
    font-weight: 500;
    color: rgb(255 255 255);
    padding: 4px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}
.lp-branding-col ul li::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: linear-gradient(130deg, #de2aad, #f97316);
    flex-shrink: 0;
}
.lp-branding-btns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

/* Right price + image */
.lp-branding-right {
    text-align: center;
}
.lp-branding-price-box {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 24px;
}
.lp-branding-price {
    display: flex;
    align-items: baseline;
    gap: 4px;
    line-height: 1;
}
.lp-bp-dollar {
    font-size: 28px;
    font-weight: 700;
    color: #f97316;
}
.lp-bp-amount {
    font-size: 136px;
    font-weight: 800;
    color: #f97316;
    line-height: 1;
}
.lp-branding-old {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: -4px;
}
.lp-bp-old {
    font-size: 18px;
    font-weight: 600;
    /*color: rgba(26,16,64,0.35);*/
    color: rgb(255 255 255);
    text-decoration: line-through;
}
.lp-bp-off {
    font-size: 18px;
    font-weight: 800;
    color: #f97316;
}
.lp-branding-img {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 16px 50px rgba(26,16,64,0.12);
}
.lp-branding-img img { width: 100%; display: block; }

@media (max-width: 767px) {
    .lp-branding-cols { grid-template-columns: 1fr; gap: 20px; }
    .lp-branding-btns { flex-direction: column; }
    .lp-bp-amount { font-size: 72px; }
    .lp-branding-right { margin-top: 32px; }
}

/* ── Process ── */
.lp-process { padding: 80px 0 90px; background: #fff; }
.lp-process-step {
    display: flex; gap: 20px; align-items: flex-start;
    padding: 24px; border-radius: 16px;
    background: rgba(26,16,64,0.03);
    border: 1.5px solid rgba(26,16,64,0.06);
    margin-bottom: 16px;
    transition: border-color 0.3s ease;
}
.lp-process-step:hover { border-color: rgba(222,42,173,0.3); }
.lp-process-num {
    font-size: 36px; font-weight: 800; line-height: 1;
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text; flex-shrink: 0; min-width: 44px;
}
.lp-process-step h5 { font-size: 16px; font-weight: 700; color: #1a1040; margin-bottom: 6px; }
.lp-process-step p {font-size: 13px;color: rgb(0 0 0);line-height: 1.7;margin: 0;}

/* ── Testimonials ── */
.lp-testimonials { padding: 80px 0 90px; background: linear-gradient(186deg, #0d0b1e00, #e1329b0f, #f66c220a); }
.lp-testi-card {
    background: #fff; border-radius: 16px; padding: 28px 24px;
    box-shadow: 0 4px 24px rgba(26,16,64,0.07);
    border: 1.5px solid rgba(26,16,64,0.06);
    height: 100%;
}
.lp-testi-stars { color: #f97316; font-size: 14px; margin-bottom: 14px; }
.lp-testi-quote { font-size: 14px; color: rgba(26,16,64,0.65); line-height: 1.8; margin-bottom: 20px; font-style: italic; }
.lp-testi-author { display: flex; align-items: center; gap: 12px; }
.lp-testi-avatar {
    width: 42px; height: 42px; border-radius: 50%;
    background: linear-gradient(135deg, #de2aad, #f97316);
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; font-weight: 700; color: #fff; flex-shrink: 0;
}
.lp-testi-name { font-size: 14px; font-weight: 700; color: #1a1040; margin-bottom: 2px; }
.lp-testi-role { font-size: 12px; color: rgba(26,16,64,0.45); }

/* ── FAQ ── */
.lp-faq { padding: 80px 0 90px; background: #fff; }
.lp-faq-item {
    border: 1.5px solid rgba(26,16,64,0.08);
    border-radius: 12px; margin-bottom: 12px; overflow: hidden;
}
.lp-faq-q {
    padding: 18px 22px; cursor: pointer;
    display: flex; justify-content: space-between; align-items: center;
    font-size: 15px; font-weight: 700; color: #1a1040;
    transition: background 0.2s ease;
}
.lp-faq-q:hover { background: rgba(26,16,64,0.03); }
.lp-faq-q i { transition: transform 0.3s ease; font-size: 14px; color: #de2aad; }
.lp-faq-q.open i { transform: rotate(180deg); }
.lp-faq-a {
    display: none; padding: 0 22px 18px;
    font-size: 14px; color: rgba(26,16,64,0.6); line-height: 1.8;
}

/* ── CTA Banner ── */
.lp-cta {
    padding: 80px 0;
    background: linear-gradient(130deg, #de2aad, #f97316);
    text-align: center;
}
.lp-cta h2 { font-size: clamp(26px, 3.5vw, 44px); font-weight: 800; color: #fff; margin-bottom: 14px; }
.lp-cta p { font-size: 15px; color: rgba(255,255,255,0.85); margin-bottom: 32px; max-width: 480px; margin-left: auto; margin-right: auto; }
.btn-lp-cta-white {
    background: #fff; color: #de2aad;
    border: none; padding: 14px 36px; border-radius: 5px;
    font-size: 15px; font-weight: 800; cursor: pointer;
    font-family: 'Wix Madefor Display', sans-serif;
    transition: opacity 0.25s ease, transform 0.25s ease;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15); text-decoration: none; display: inline-block;
}
.btn-lp-cta-white:hover { opacity: 0.92; transform: translateY(-2px); color: #de2aad; }

/* ── Footer ── */
.lp-footer {
    background: #0d0b1e; padding: 32px 0;
    text-align: center; border-top: 1px solid rgba(255,255,255,0.06);
}
.lp-footer img { max-height: 36px; margin-bottom: 16px; filter: brightness(10); }
.lp-footer p { font-size: 13px; color: rgba(255,255,255,0.35); margin: 0; }
.lp-footer a { color: rgba(255,255,255,0.45); text-decoration: none; margin: 0 8px; font-size: 12px; }
.lp-footer a:hover { color: #de2aad; }

/* ══════════════════════════════════════
   MODALS (Popup 1 & 2)
════════════════════════════════════════ */
.lp-modal-overlay {
    position: fixed; inset: 0;
    background: rgba(13,11,30,0.78);
    backdrop-filter: blur(6px);
    z-index: 99998;
    display: flex; align-items: center; justify-content: center;
    padding: 16px;
    opacity: 0; visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}
.lp-modal-overlay.active { opacity: 1; visibility: visible; }
.lp-modal {
    background: #fff; border-radius: 20px;
    max-width: 460px; width: 100%;
    padding: 36px 32px 28px;
    position: relative;
    box-shadow: 0 24px 80px rgba(0,0,0,0.3);
    transform: translateY(24px) scale(0.97);
    transition: transform 0.35s cubic-bezier(0.34,1.4,0.64,1);
    max-height: 90vh; overflow-y: auto;
}
.lp-modal-overlay.active .lp-modal { transform: translateY(0) scale(1); }
.lp-modal-close {
    position: absolute; top: 12px; right: 14px;
    background: rgba(26,16,64,0.08); border: none;
    width: 30px; height: 30px; border-radius: 50%;
    font-size: 18px; cursor: pointer;
    color: rgba(26,16,64,0.45); line-height: 1;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.2s ease, color 0.2s ease;
}
.lp-modal-close:hover { background: rgba(222,42,173,0.12); color: #de2aad; }
.lp-modal-logo {
    text-align: center; margin-bottom: 18px;
}
.lp-modal-logo img { max-height: 38px; }
.lp-modal-title {
    font-size: 24px; font-weight: 400; color: #1a1040;
    margin-bottom: 6px; text-align: center; line-height: 1.2;
}
.lp-modal-title span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text; font-weight: 800;
}
.lp-modal-sub {
    font-size: 13px; color: rgba(26,16,64,0.5);
    text-align: center; margin-bottom: 20px;
}

/* Package badge (Popup 2) */
.lp-modal-pkg-badge {
    display: flex; align-items: center; justify-content: space-between;
    background: linear-gradient(130deg, rgba(222,42,173,0.08), rgba(249,115,22,0.08));
    border: 1.5px solid rgba(222,42,173,0.2);
    border-radius: 10px; padding: 12px 16px;
    margin-bottom: 18px;
}
.lp-modal-pkg-info { display: flex; align-items: baseline; gap: 10px; }
.lp-modal-pkg-name {
    font-size: 18px; font-weight: 800; color: #1a1040;
}
.lp-modal-pkg-price {
    font-size: 22px; font-weight: 800;
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}
.lp-modal-pkg-tag {
    font-size: 11px; font-weight: 700; color: #de2aad;
    text-transform: uppercase; letter-spacing: 0.08em;
}

/* Form fields */
.lp-modal-form { display: flex; flex-direction: column; gap: 10px; }
.lp-modal-field input,
.lp-modal-field textarea {
    width: 100%;
    background: rgba(26,16,64,0.04);
    border: 1.5px solid rgba(26,16,64,0.1);
    border-radius: 8px; padding: 11px 14px;
    font-size: 13px; font-weight: 500; color: #1a1040;
    font-family: 'Wix Madefor Display', sans-serif;
    outline: none; transition: border-color 0.2s ease;
}
.lp-modal-field input:focus,
.lp-modal-field textarea:focus { border-color: #de2aad; }
.lp-modal-field textarea { height: 72px; resize: none; }
.lp-modal-btn {
    width: 100%;
    background: linear-gradient(130deg, #de2aad, #f97316);
    color: #fff; border: none; padding: 13px;
    border-radius: 8px; font-size: 14px; font-weight: 700;
    cursor: pointer; font-family: 'Wix Madefor Display', sans-serif;
    box-shadow: 0 4px 18px rgba(255,45,120,0.35);
    transition: opacity 0.25s ease, transform 0.25s ease;
    margin-top: 4px;
}
.lp-modal-btn:hover { opacity: 0.88; transform: translateY(-2px); }
.lp-modal-secure {
    font-size: 11px; color: rgba(26,16,64,0.35);
    text-align: center; margin: 10px 0 0;
}
@media (max-width: 575px) {
    .lp-modal { padding: 28px 18px 22px; }
}

/* ══════════════════════════════════════
   SOCIAL PROOF TOAST (bottom-left)
════════════════════════════════════════ */
#lpToast {
    position: fixed;
    bottom: 24px;
    left: 20px;
    z-index: 9998;
    background: #fff;
    border-radius: 14px;
    padding: 12px 16px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 8px 32px rgba(26,16,64,0.18);
    border-left: 4px solid #de2aad;
    max-width: 290px;
    width: 290px;
    transform: translateX(-340px);
    transition: transform 0.5s cubic-bezier(0.34,1.2,0.64,1);
}
#lpToast.show { transform: translateX(0); }

.lp-toast-avatar {
    width: 38px; height: 38px; flex-shrink: 0;
    background: linear-gradient(135deg, #de2aad, #f97316);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
}
.lp-toast-avatar i { color: #fff; font-size: 16px; }

.lp-toast-content { flex: 1; min-width: 0; }
.lp-toast-name {
    font-size: 13px; font-weight: 700;
    color: #1a1040; margin: 0 0 1px; line-height: 1.3;
}
.lp-toast-msg {
    font-size: 12px; color: rgba(26,16,64,0.6);
    margin: 0 0 2px; line-height: 1.3;
}
.lp-toast-msg strong { color: #1a1040; }
.lp-toast-time {
    font-size: 11px; color: rgba(26,16,64,0.4);
    margin: 0; line-height: 1;
}

.lp-toast-counter {
    display: flex; flex-direction: column;
    align-items: center; gap: 2px;
    background: linear-gradient(130deg, rgba(222,42,173,0.08), rgba(249,115,22,0.08));
    border-radius: 8px; padding: 6px 10px;
    flex-shrink: 0;
}
.lp-toast-counter span {
    font-size: 20px; font-weight: 800; line-height: 1;
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.lp-toast-counter small {
    font-size: 9px; font-weight: 600;
    color: rgba(26,16,64,0.45);
    text-transform: uppercase; letter-spacing: 0.06em;
    white-space: nowrap;
}

@media (max-width: 575px) {
    #lpToast { max-width: 260px; width: 260px; bottom: 16px; left: 12px; }
}

/* ══════════════════════════════════════
   SALE COUNTDOWN BAR
════════════════════════════════════════ */
#lpSaleBar {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 9999;
    background: linear-gradient(130deg, #de2aad, #f97316);
    padding: 10px 16px;
}
.lp-sale-bar-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
    max-width: 900px;
    margin: 0 auto;
}
.lp-sale-bar-fire { font-size: 18px; }
.lp-sale-bar-text {
    font-size: 13px;
    font-weight: 600;
    color: #fff;
}
.lp-sale-bar-text strong { font-size: 15px; font-weight: 800; }
.lp-sale-timer {
    display: flex;
    align-items: center;
    gap: 4px;
    background: rgba(0,0,0,0.2);
    border-radius: 8px;
    padding: 4px 12px;
}
.lp-timer-block {
    display: flex;
    flex-direction: column;
    align-items: center;
    line-height: 1;
}
.lp-timer-block span {
    font-size: 18px;
    font-weight: 800;
    color: #fff;
    min-width: 28px;
    text-align: center;
}
.lp-timer-block small {
    font-size: 9px;
    color: rgba(255,255,255,0.7);
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.lp-timer-colon {
    font-size: 18px;
    font-weight: 800;
    color: #fff;
    margin: 0 2px;
    margin-bottom: 8px;
}
.lp-sale-bar-btn {
    background: #fff;
    color: #de2aad;
    font-size: 12px;
    font-weight: 800;
    padding: 6px 16px;
    border-radius: 30px;
    text-decoration: none;
    white-space: nowrap;
    transition: opacity 0.2s ease;
}
.lp-sale-bar-btn:hover { opacity: 0.88; color: #de2aad; }
#lpSaleBar.expired {
    background: rgba(26,16,64,0.85);
}
@media (max-width: 575px) {
    .lp-sale-bar-text { font-size: 12px; }
    .lp-timer-block span { font-size: 15px; }
}

/* ══════════════════════════════════════
   POPUP
════════════════════════════════════════ */
#lpPopupOverlay {
    position: fixed;
    inset: 0;
    background: rgba(13,11,30,0.75);
    backdrop-filter: blur(6px);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.35s ease, visibility 0.35s ease;
    padding: 16px;
}
#lpPopupOverlay.active {
    opacity: 1;
    visibility: visible;
}
#lpPopup {
    background: #fff;
    border-radius: 20px;
    max-width: 520px;
    width: 100%;
    padding: 48px 36px 36px;
    position: relative;
    box-shadow: 0 24px 80px rgba(0,0,0,0.35);
    transform: translateY(30px) scale(0.96);
    transition: transform 0.35s cubic-bezier(0.34,1.56,0.64,1);
}
#lpPopupOverlay.active #lpPopup {
    transform: translateY(0) scale(1);
}

/* 80% off badge */
.lp-popup-badge {
    position: absolute;
    top: -22px;
    right: 28px;
    background: linear-gradient(130deg, #de2aad, #f97316);
    border-radius: 12px 12px 0 0;
    padding: 10px 20px 14px;
    text-align: center;
    box-shadow: 0 -4px 20px rgba(222,42,173,0.4);
    line-height: 1;
}
.lp-popup-badge span {
    display: block;
    font-size: 28px;
    font-weight: 800;
    color: #fff;
    line-height: 1;
}
.lp-popup-badge small {
    font-size: 11px;
    font-weight: 700;
    color: rgba(255,255,255,0.85);
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

/* Close button */
#lpPopupClose {
    position: absolute;
    top: 14px; right: 16px;
    background: rgba(26,16,64,0.08);
    border: none;
    width: 32px; height: 32px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    color: rgba(26,16,64,0.5);
    display: flex; align-items: center; justify-content: center;
    transition: background 0.2s ease, color 0.2s ease;
    line-height: 1;
    padding: 0;
}
#lpPopupClose:hover { background: rgba(222,42,173,0.12); color: #de2aad; }

.lp-popup-title {
    font-size: clamp(22px, 3vw, 30px);
    font-weight: 400;
    color: #1a1040;
    margin-bottom: 10px;
    line-height: 1.2;
}
.lp-popup-title span {
    background: linear-gradient(130deg, #de2aad, #f97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
}
.lp-popup-sub {
    font-size: 14px;
    color: rgba(26,16,64,0.6);
    margin-bottom: 20px;
    line-height: 1.6;
}
.lp-popup-sub strong { color: #de2aad; font-size: 18px; }

/* Timer inside popup */
.lp-popup-timer {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: linear-gradient(130deg, #de2aad, #f97316);
    border-radius: 10px;
    padding: 10px 20px;
    margin-bottom: 20px;
}
.lp-pt-block {
    display: flex;
    flex-direction: column;
    align-items: center;
    line-height: 1;
}
.lp-pt-block span {
    font-size: 32px;
    font-weight: 800;
    color: #fff;
    min-width: 44px;
    text-align: center;
}
.lp-pt-block small {
    font-size: 10px;
    color: rgba(255,255,255,0.75);
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.lp-pt-sep {
    font-size: 28px;
    font-weight: 800;
    color: #fff;
    margin: 0 4px;
    margin-bottom: 12px;
}

.lp-popup-bullets {
    list-style: none;
    padding: 0; margin: 0 0 24px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px 12px;
}
.lp-popup-bullets li {
    font-size: 13px;
    font-weight: 600;
    color: rgba(26,16,64,0.7);
}
.lp-popup-btns {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 12px;
}
.lp-popup-btns .btn-lp-primary { flex: 1; text-align: center; }
.lp-popup-btns .lp-popup-chat  { flex: 1; text-align: center; }
.lp-popup-disclaimer {
    font-size: 11px;
    color: rgba(26,16,64,0.35);
    text-align: center;
    margin: 0;
}
@media (max-width: 575px) {
    #lpPopup { padding: 44px 20px 24px; }
    .lp-popup-bullets { grid-template-columns: 1fr; }
    .lp-popup-btns { flex-direction: column; }
    .lp-pt-block span { font-size: 26px; }
}

/* ── Horizontal CTA form strip ── */
.lp-strip {
    background: linear-gradient(130deg, #1a1040, #2a1060);
    padding: 40px 0;
}
.lp-strip h3 { font-size: 22px; font-weight: 700; color: #fff; margin-bottom: 4px; }
.lp-strip p { font-size: 14px; color: rgba(255,255,255,0.6); margin: 0; }
.lp-strip input {
    background: rgba(255,255,255,0.08);
    border: 1.5px solid rgba(255,255,255,0.15);
    border-radius: 8px; padding: 12px 16px;
    font-size: 13px; color: #fff; width: 100%;
    font-family: 'Wix Madefor Display', sans-serif; outline: none;
    transition: border-color 0.2s ease;
}
.lp-strip input::placeholder { color: rgba(255,255,255,0.4); }
.lp-strip input:focus { border-color: #de2aad; }

/* ── Responsive ── */
@media (max-width: 991px) {
    .lp-header .lp-nav { display: none; }
    .lp-form-card { margin-top: 40px; }
    .lp-port-grid { grid-template-columns: repeat(2, 1fr); }
    .lp-ban-trust img { max-width: 100%; }
}
@media (max-width: 767px) {
        .lp-hero {
        padding: 70px 0 50px;
        text-align: center;
    }
    .lp-hero h1 {font-size: 43px;}
    .lp-hero-btns { flex-direction: column; }
    .btn-lp-primary, .btn-lp-secondary { width: 100%; text-align: center; }
    .lp-port-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
    .lp-port-item img { height: 150px; }
    .lp-trust .row > div { margin-bottom: 12px; }
    .lp-strip .col-lg-2 { margin-bottom: 10px; }
    .lp-trust-badges { gap: 8px; }
    .lp-trust-badge { padding: 7px 10px; }
    .lp-trust-badge-divider { display: none; }
    .lp-hero h1 span {
    font-size: 38px;
}
#lpToast{
    display:none;
}
.lp-hero ul.lp-bullets li {
   
    justify-content: center;
}
#lpSaleBar{display:none;}
.lp-header {

    padding: 14px 0 13px;
}
}
@media (max-width: 575px) {
    .lp-port-grid { grid-template-columns: 1fr 1fr; }
    .lp-portfolio-tabs {gap: 6px;overflow-x: auto;padding-bottom: 4px;justify-content: center;}
    .lp-ptab { flex-shrink: 0; }
    .lp-trust-badges { flex-wrap: wrap; }
}
.pricing-btn{text-align:center;}
</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M68WTFMG');</script>
<!-- End Google Tag Manager -->
 
              <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19454392;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>

<!-- End of LiveChat code -->
 <script>
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".open-livechat").forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.LiveChatWidget) {
        LiveChatWidget.call("maximize");
      }
    });
  });
});
</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M68WTFMG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<!-- ==================== HEADER ==================== -->
<header class="lp-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-6">
                <a href="../home" class="logo">
                    <img src="../assets/images/logo.webp" alt="Logo Vector Design">
                </a>
            </div>
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center">
                <ul class="lp-nav">
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#whyus">Why Us</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#process">Process</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <div class="lp-header-btns justify-content-end">
                    <a href="tel:+12798959172" class="d-none d-lg-flex">
                        <i class="fas fa-phone-alt" style="color:#de2aad;"></i> (279) 895-9172
                    </a>
                    <a href="#" class="btn-lp-cta js-open-gs">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== HERO ==================== -->
<section class="lp-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <h1>Get Your <br><span> Custom Logo Design</span><br>For Only <span>$18!</span></h1>
                <p class="lp-sub">Award-winning designers ready to create a unique, memorable logo that captures your brand's identity and helps you stand out in the market.</p>
                <ul class="lp-bullets">
                    <li>Multiple Unique Logo Concepts</li>
                    <li>Revisions Included</li>
                    <li>Fast Turnaround Time</li>
                    <li>100% Satisfaction Guarantee & Ownership</li>
                    <li>Complete Brand Building with 24/7 Support</li>
                </ul>
                <div class="lp-hero-btns">
                    <a href="#" class="btn-lp-primary js-open-gs">GET STARTED NOW</a>
                    <a href="javascript:void(0)" onclick="LiveChatWidget && LiveChatWidget.call('maximize')" class="btn-lp-secondary" style="color:#fff;border-color:rgba(255,255,255,0.35);"><i class="fas fa-comments"></i> CHAT NOW</a>
                </div>

             

                <!-- Ban-trust image -->
                <div class="lp-ban-trust">
                    <img src="assets/images/ban-trust.webp" alt="Trusted by thousands of businesses">
                </div>
            </div>
            <div class="col-lg-5 col-md-12" id="hero-form">
                <div class="lp-form-card">
                    <h3>Get <span style="background:linear-gradient(130deg,#de2aad,#f97316);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">80% Off</span> Your First Order</h3>
                    <p class="lp-form-sub">Fill in your details and we'll be in touch within minutes</p>
                    <form id="lpHeroForm" onsubmit="selectPackage('Basic', 18); submitStep1(event);">
                        <div class="lp-form-group">
                            <input type="text" name="name" placeholder="Your Full Name" required>
                        </div>
                        <div class="lp-form-group">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="lp-form-group">
                            <input type="tel" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="lp-form-group">
                            <textarea name="message" placeholder="Tell us about your project (optional)"></textarea>
                        </div>

                        <!-- Consent checkboxes -->
                        <div class="lp-form-checks">
                            <div class="lp-form-check">
                                <input type="checkbox" id="lp_check1" name="check1" required>
                                <label for="lp_check1">I agree to the Policy and provide my consent to receive B2B marketing communications from Logo Vector Design.</label>
                            </div>
                            <div class="lp-form-check">
                                <input type="checkbox" id="lp_check2" name="check2" required>
                                <label for="lp_check2">Message and data rates may apply. Reply 'STOP' to opt-out. Text 'HELP' for assistance.</label>
                            </div>
                            <div class="lp-form-check">
                                <input type="checkbox" id="lp_check3" name="check3" required>
                                <label for="lp_check3">I agree and accept the <a href="../contact-us" target="_blank">Terms &amp; Conditions</a> and <a href="../contact-us" target="_blank">Privacy Policy</a>.</label>
                            </div>
                        </div>

                        <button type="submit" class="lp-form-btn">CLAIM MY 80% DISCOUNT →</button>
                    </form>
                    <p style="font-size:11px;color:rgba(26,16,64,0.4);text-align:center;margin-top:12px;">
                        🔒 Your info is safe. No spam, ever.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TRUST BAR ==================== -->
<section class="lp-trust">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lp-trust-item"><i class="fas fa-award"></i> 5000+ Logos Delivered</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lp-trust-item"><i class="fas fa-star"></i> 4.9/5 Average Rating</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lp-trust-item"><i class="fas fa-shield-alt"></i> 100% Money-Back</div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lp-trust-item"><i class="fas fa-undo"></i> Unlimited Revisions</div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PORTFOLIO ==================== -->
<section class="lp-portfolio" id="portfolio">
    <div class="container">
        <div class="text-center mb-2">
            <span class="lp-section-badge">Our Portfolio</span>
            <h2 class="lp-section-title">Logos We've Designed for <span>Real Brands</span></h2>
            <p class="lp-section-desc">Browse our collection of custom logo designs across different industries and styles.</p>
        </div>

        <div class="lp-portfolio-tabs" id="lpPortTabs">
            <button class="lp-ptab active" data-cat="estate">Real Estate</button>
            <button class="lp-ptab" data-cat="food">Food</button>
            <button class="lp-ptab" data-cat="sports">Sports</button>
            <button class="lp-ptab" data-cat="technology">Technology</button>
            <button class="lp-ptab" data-cat="clothing">Clothing &amp; Apparel</button>
            <button class="lp-ptab" data-cat="marketing">Business &amp; Marketing</button>
            <button class="lp-ptab" data-cat="cleaning">Cleaning</button>
            <button class="lp-ptab" data-cat="fitness">Fitness</button>
        </div>

        <div class="lp-port-grid" id="lpPortGrid">

      
            <!-- REAL ESTATE (7) -->
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo16-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo16-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo18-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo18-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo19-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo19-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo2-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo2-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo20-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo20-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo21-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo21-1024x1024.webp" alt="Real Estate Logo"></a></div>
            <div class="lp-port-item" data-cat="estate"><a href="assets/images/portfolio/real-state/logo22-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/real-state/logo22-1024x1024.webp" alt="Real Estate Logo"></a></div>

            <!-- FOOD (7) -->
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo1-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo1-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo17-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo17-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo23-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo23-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo24-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo24-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo25-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo25-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo26-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo26-1024x1024.webp" alt="Food Logo"></a></div>
            <div class="lp-port-item" data-cat="food"><a href="assets/images/portfolio/food/logo9-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/food/logo9-1024x1024.webp" alt="Food Logo"></a></div>

            <!-- SPORTS (7) -->
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo10-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo10-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo27-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo27-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo28-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo28-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo29-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo29-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo3-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo3-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo30-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo30-1024x1024.webp" alt="Sports Logo"></a></div>
            <div class="lp-port-item" data-cat="sports"><a href="assets/images/portfolio/sports/logo31-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/sports/logo31-1024x1024.webp" alt="Sports Logo"></a></div>

            <!-- TECHNOLOGY (7) -->
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo11-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo11-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo32-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo32-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo34-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo34-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo35-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo35-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo36-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo36-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo37-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo37-1024x1024.webp" alt="Technology Logo"></a></div>
            <div class="lp-port-item" data-cat="technology"><a href="assets/images/portfolio/technology/logo4-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/technology/logo4-1024x1024.webp" alt="Technology Logo"></a></div>

            <!-- CLOTHING & APPAREL (7) -->
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo12-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo12-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo38-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo38-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo39-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo39-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo40-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo40-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo41-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo41-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo42-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo42-1024x1024.webp" alt="Clothing Logo"></a></div>
            <div class="lp-port-item" data-cat="clothing"><a href="assets/images/portfolio/clothing/logo5-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/clothing/logo5-1024x1024.webp" alt="Clothing Logo"></a></div>

            <!-- BUSINESS & MARKETING (7) -->
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo13-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo13-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo43-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo43-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo44-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo44-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo45-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo45-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo46-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo46-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo47-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo47-1024x1024.webp" alt="Marketing Logo"></a></div>
            <div class="lp-port-item" data-cat="marketing"><a href="assets/images/portfolio/marketing/logo6-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/marketing/logo6-1024x1024.webp" alt="Marketing Logo"></a></div>

            <!-- CLEANING (7) -->
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo14-1-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo14-1-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo48-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo48-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo49-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo49-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo50-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo50-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo51-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo51-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo52-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo52-1024x1024.webp" alt="Cleaning Logo"></a></div>
            <div class="lp-port-item" data-cat="cleaning"><a href="assets/images/portfolio/cleaning/logo7-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/cleaning/logo7-1024x1024.webp" alt="Cleaning Logo"></a></div>

            <!-- FITNESS (7) -->
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo15-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo15-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo53-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo53-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo54-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo54-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo55-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo55-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo56-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo56-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo57-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo57-1024x1024.webp" alt="Fitness Logo"></a></div>
            <div class="lp-port-item" data-cat="fitness"><a href="assets/images/portfolio/fitness/logo8-1024x1024.webp" data-fancybox="lp-gallery"><img src="assets/images/portfolio/fitness/logo8-1024x1024.webp" alt="Fitness Logo"></a></div>

        </div>
    </div>
</section>

<!-- ==================== PRICING ==================== -->
<section class="lp-pricing" id="pricing">
    <div class="container">
        <div class="text-center">
            <span class="lp-section-badge">Our Pricing</span>
            <h2 class="lp-section-title">Affordable Plans for <span>Every Business</span></h2>
            <p class="lp-section-desc" style="color:#fff">Whether you’re a startup or an established business, you’ll find a package that suits your vision and budget.</p>
        </div>
        <div class="row pricing-cards">

      <!-- Basic -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap">
                    <span class="pricing-plan-badge">Basic</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">18</span>
                                <span class="pricing-old">$95</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">Perfect for startups needing a simple, professional logo.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> 4 Logo Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 5 Revisions</li>
                            <li><i class="fas fa-check-circle"></i> 1 Dedicated Designer</li>
                            <li><i class="fas fa-check-circle"></i> Free Color Options</li>
                            <li><i class="fas fa-check-circle"></i> Free Grayscale Format</li>
                            <li><i class="fas fa-check-circle"></i> 24-48 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats (JPG)</li>
                            <li><i class="fas fa-check-circle"></i> 100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Basic" data-pkg-price="$18">Start Your Project</a>
                    </div>
                </div>
            </div>

            <!-- Standard -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap">
                    <span class="pricing-plan-badge">Standard</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">75</span>
                                <span class="pricing-old">$250</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">Ideal for small businesses building a consistent brand identity.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> 5 Logo Design Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 8 Revisions</li>
                            <li><i class="fas fa-check-circle"></i> 2 Dedicated Designers</li>
                            <li><i class="fas fa-check-circle"></i> Free Stationery Design (Business Card)</li>
                            <li><i class="fas fa-check-circle"></i> Free Color Options</li>
                            <li><i class="fas fa-check-circle"></i> Free Grayscale Format</li>
                            <li><i class="fas fa-check-circle"></i> Free Icon</li>
                            <li><i class="fas fa-check-circle"></i> 24-48 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats: PNG, JPG</li>
                            <li><i class="fas fa-check-circle"></i> 100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Standard" data-pkg-price="$75">Start Your Project</a>
                    </div>
                </div>
            </div>

            <!-- Advance -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap featured">
                    <span class="best-seller-ribbon"><i class="fas fa-star"></i> Best Seller</span>
                    <span class="pricing-plan-badge">Advance</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">125</span>
                                <span class="pricing-old">$416</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">Designed for growing brands that need a standout, versatile logo.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> 6 Logo Design Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 10 Revisions</li>
                            <li><i class="fas fa-check-circle"></i> 3 Dedicated Designers</li>
                            <li><i class="fas fa-check-circle"></i> Free Stationery (Business Card, Letterhead)</li>
                            <li><i class="fas fa-check-circle"></i> Free Icon</li>
                            <li><i class="fas fa-check-circle"></i> Free Email Signature</li>
                            <li><i class="fas fa-check-circle"></i> Free Color Options &amp; Grayscale</li>
                            <li><i class="fas fa-check-circle"></i> 24-48 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats: AI, PSD, EPS, PNG, JPG, PDF</li>
                            <li><i class="fas fa-check-circle"></i> 100% Ownership Rights</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Advance" data-pkg-price="$125">Start Your Project</a>
                    </div>
                </div>
            </div>

            <!-- Premium -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap">
                    <span class="pricing-plan-badge">Premium</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">175</span>
                                <span class="pricing-old">$583</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">For businesses that want a high-end, professional brand presence.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> 8 Custom Logo Design Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 6 Award-Winning Designers</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Free Icon Design</li>
                            <li><i class="fas fa-check-circle"></i> Free Custom Stationery (Letterhead, Business Card, Envelope, Invoice)</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Designs (Any 3 Platforms)</li>
                            <li><i class="fas fa-check-circle"></i> Email Signature Design</li>
                            <li><i class="fas fa-check-circle"></i> $50 Off on Website Order</li>
                            <li><i class="fas fa-check-circle"></i> 48-72 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats: AI, PSD, EPS, PNG, JPG, PDF</li>
                            <li><i class="fas fa-check-circle"></i> 100% Satisfaction &amp; Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Premium" data-pkg-price="$175">Start Your Project</a>
                    </div>
                </div>
            </div>

            <!-- Enterprise -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap">
                    <span class="pricing-plan-badge">Enterprise</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">249</span>
                                <span class="pricing-old">$830</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">Complete logo solution for established and scaling businesses.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> Unlimited Logo Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 6 Award-Winning Designers</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Free Icon Design</li>
                            <li><i class="fas fa-check-circle"></i> Free Custom Stationery (Letterhead, Business Card, Envelope, Invoice)</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Designs (Any 3 Platforms)</li>
                            <li><i class="fas fa-check-circle"></i> Bi-Fold or Tri-Fold Brochure</li>
                            <li><i class="fas fa-check-circle"></i> Free MS Electronic Letterhead</li>
                            <li><i class="fas fa-check-circle"></i> Email Signature Design</li>
                            <li><i class="fas fa-check-circle"></i> $50 Off on Website Order</li>
                            <li><i class="fas fa-check-circle"></i> 48-72 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats: AI, PSD, EPS, PNG, JPG, PDF</li>
                            <li><i class="fas fa-check-circle"></i> 100% Satisfaction &amp; Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> 100% Money-Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Enterprise" data-pkg-price="$249">Start Your Project</a>
                    </div>
                </div>
            </div>

            <!-- Corporate -->
            <div class="col-md-4 col-sm-12 col-12">
                <div class="pricing-card-wrap">
                    <span class="pricing-plan-badge">Corporate</span>
                    <div class="pricing-card">
                        <div class="pricing-card-row">
                            <div class="pricing-price">
                                <span class="pricing-dollar">$</span>
                                <span class="pricing-amount">299</span>
                                <span class="pricing-old">$996</span>
                            </div>
                            <img src="../assets/images/pricing-cursor.webp" class="pricing-cursor" alt="cursor">
                        </div>
                        <p class="pricing-desc">Ultimate branding package for enterprises demanding perfection.</p>
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> Unlimited Custom Logo Concepts</li>
                            <li><i class="fas fa-check-circle"></i> 8 Award-Winning Designers</li>
                            <li><i class="fas fa-check-circle"></i> Unlimited Revisions</li>
                            <li><i class="fas fa-check-circle"></i> Free Icon Design</li>
                            <li><i class="fas fa-check-circle"></i> Free Custom Stationery (Letterhead, Business Card, Envelope, Invoice)</li>
                            <li><i class="fas fa-check-circle"></i> Social Media Designs (Any 3 Platforms)</li>
                            <li><i class="fas fa-check-circle"></i> Bi-Fold or Tri-Fold Brochure</li>
                            <li><i class="fas fa-check-circle"></i> Free MS Electronic Letterhead</li>
                            <li><i class="fas fa-check-circle"></i> Email Signature Design</li>
                            <li><i class="fas fa-check-circle"></i> $50 Off on Website Order</li>
                            <li><i class="fas fa-check-circle"></i> 1 Website Prototype</li>
                            <li><i class="fas fa-check-circle"></i> 48-72 Hours TAT</li>
                            <li><i class="fas fa-check-circle"></i> File Formats: AI, PSD, EPS, PNG, JPG, PDF</li>
                            <li><i class="fas fa-check-circle"></i> 100% Satisfaction &amp; Unique Design Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> 100% Money-Back Guarantee</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Expert Support</li>
                        </ul>
                        <a href="#" class="pricing-btn js-open-pkg" data-pkg-name="Corporate" data-pkg-price="$299">Start Your Project</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- ==================== WHY PROFESSIONAL LOGO ==================== -->
<section class="lp-why-logo">
    <div class="container">
        <div class="text-center mb-5">
            <span class="lp-section-badge">The Value of Great Design</span>
            <h2 class="lp-section-title">Why a Professional Logo<br>is a <span>Must-Have</span></h2>
            <p class="lp-section-desc">Your logo is the first thing people see. It sets the tone for your entire brand — make it count.</p>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="lp-wl-img-wrap">
                    <img src="assets/images/reasons/1.webp" class="img-fluid" alt="First Impressions Matter">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <span class="lp-wl-num">01</span>
                <h3 class="lp-wl-title">First Impressions <span>Matter</span></h3>
                <p class="lp-wl-text">Customers form an opinion about your brand within seconds. A polished, professional logo instantly signals credibility and builds trust before a single word is read. It tells people you are serious, established, and worth their time.</p>
                <div class="lp-wl-tags">
                    <span>Brand Credibility</span>
                    <span>Instant Recognition</span>
                    <span>Trust Building</span>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 flex-row-reverse">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="lp-wl-img-wrap">
                    <img src="assets/images/reasons/2.webp" class="img-fluid" alt="Brand Identity">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <span class="lp-wl-num">02</span>
                <h3 class="lp-wl-title">It Defines Your <span>Brand Identity</span></h3>
                <p class="lp-wl-text">A logo is the foundation of your entire visual identity. Your colors, typography, and design language all flow from it. Get it right and everything from your website to your packaging feels cohesive, intentional, and professional.</p>
                <div class="lp-wl-tags">
                    <span>Visual Consistency</span>
                    <span>Brand Story</span>
                    <span>Memorable Design</span>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="lp-wl-img-wrap">
                    <img src="assets/images/reasons/3.webp" class="img-fluid" alt="Stand Out from Competition">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <span class="lp-wl-num">03</span>
                <h3 class="lp-wl-title">Stand Out from <span>Competition</span></h3>
                <p class="lp-wl-text">In a crowded market, a distinctive logo is your competitive edge. It helps customers remember you, choose you over competitors, and return to you again and again. A generic logo loses business — a great one wins it.</p>
                <div class="lp-wl-tags">
                    <span>Competitive Edge</span>
                    <span>Differentiation</span>
                    <span>Market Positioning</span>
                </div>
            </div>
        </div>

        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="lp-wl-img-wrap">
                    <img src="assets/images/reasons/4.webp" class="img-fluid" alt="Works Everywhere">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <span class="lp-wl-num">04</span>
                <h3 class="lp-wl-title">Works <span>Everywhere</span></h3>
                <p class="lp-wl-text">From business cards and signage to websites and social media — a professionally designed logo is built to scale. Vector formats ensure it looks crisp at any size, on any background, across every platform and medium your brand touches.</p>
                <div class="lp-wl-tags">
                    <span>Scalable Vector Files</span>
                    <span>Multi-Platform</span>
                    <span>Print &amp; Digital</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ==================== COMPLETE BRANDING SOLUTION ==================== -->
<section class="lp-branding">
    <div class="container">
        <div class="text-center mb-2">
            <span class="lp-section-badge" style="color:white">All Your Logo Needs Covered</span>
        </div>
        <div class="row align-items-center g-4">

            <!-- Left: text + service columns -->
            <div class="col-lg-7 col-md-12">
                <h2 class="lp-branding-title">Get Complete <span>Branding Solutions</span><br>with Logo Vector Design</h2>
                <p class="lp-branding-desc">Complete branding solutions with Logo Vector Design help your business stand out. We create professional logos, stationery, and digital assets tailored to your brand. Our team ensures every design reflects your identity and connects with your audience effectively.</p>

                <div class="lp-branding-cols">
                    <div class="lp-branding-col">
                        <h4><i class="fas fa-paint-brush"></i> Logo Design</h4>
                        <ul>
                            <li>Unlimited Logo Design Concepts</li>
                            <li>Unlimited Revisions</li>
                            <li>Custom icon design</li>
                            <li>All Final File Formats</li>
                            <li>Professional, brand-focused designs</li>
                        </ul>
                    </div>
                    <div class="lp-branding-col">
                        <h4><i class="fas fa-id-card"></i> Stationary Design</h4>
                        <ul>
                            <li>Business Card, Letterhead, Envelope</li>
                            <li>MS Word Letterhead</li>
                            <li>Brand-consistent layouts</li>
                            <li>Ready-to-print files</li>
                            <li>Fully customizable</li>
                        </ul>
                    </div>
                    <div class="lp-branding-col">
                        <h4><i class="fas fa-laptop-code"></i> Website Design</h4>
                        <ul>
                            <li>UNLIMITED Pages Website</li>
                            <li>CMS for easy updates</li>
                            <li>Responsive &amp; mobile-friendly</li>
                            <li>Full deployment</li>
                            <li>Stock photos &amp; banners</li>
                        </ul>
                    </div>
                    <div class="lp-branding-col">
                        <h4><i class="fas fa-plus-circle"></i> Additional Services &amp; Guarantees</h4>
                        <ul>
                            <li>W3C-certified HTML</li>
                            <li>Dedicated account manager</li>
                            <li>Fully customizable solutions</li>
                            <li>100% money-back guarantee</li>
                            <li>End-to-end deployment</li>
                        </ul>
                    </div>
                </div>

                <div class="lp-branding-btns">
                    <a href="#" class="btn-lp-primary js-open-gs">Get Started</a>
                    <a href="javascript:void(0)" onclick="LiveChatWidget && LiveChatWidget.call('maximize')" class="btn-lp-secondary">Chat with an Expert</a>
                </div>
            </div>

            <!-- Right: price + image -->
            <div class="col-lg-5 col-md-12">
                <div class="lp-branding-right">
                    <div class="lp-branding-price-box">
                        <div class="lp-branding-price">
                            <span class="lp-bp-dollar">$</span>
                            <span class="lp-bp-amount">999</span>
                        </div>
                        <div class="lp-branding-old">
                            <span class="lp-bp-old">$3330</span>
                            <span class="lp-bp-off">70% off</span>
                        </div>
                    </div>
                    <div class="lp-branding-img">
                        <img src="assets/images/choose.webp" class="img-fluid" alt="Complete Branding Solution">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================== PROCESS ==================== -->
<section class="lp-process" id="process">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 mb-5 mb-lg-0">
                <span class="lp-section-badge">Our Process</span>
                <h2 class="lp-section-title">How We Bring Your<br><span>Logo to Life</span></h2>
                <p style="font-size:14px;color:rgba(26,16,64,0.55);line-height:1.8;margin-bottom:28px;">
                    We follow a simple, collaborative process to ensure your logo perfectly represents your brand. From discovery to final delivery, every step is focused on results.
                </p>
                <a href="#" class="btn-lp-primary js-open-gs">Start Your Project</a>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="lp-process-step">
                    <div class="lp-process-num">01</div>
                    <div>
                        <h5>Requirement Gathering</h5>
                        <p>We start by learning about your business, industry, target audience, and design preferences to ensure the final logo reflects your unique identity.</p>
                    </div>
                </div>
                <div class="lp-process-step">
                    <div class="lp-process-num">02</div>
                    <div>
                        <h5>Research &amp; Inspiration</h5>
                        <p>We research your industry, competitors, and audience to identify opportunities that make your logo distinctive and relevant.</p>
                    </div>
                </div>
                <div class="lp-process-step">
                    <div class="lp-process-num">03</div>
                    <div>
                        <h5>Design &amp; Creation</h5>
                        <p>Our designers transform ideas into professional logo concepts, carefully selecting typography, colors, and design elements that represent your brand.</p>
                    </div>
                </div>
                <div class="lp-process-step">
                    <div class="lp-process-num">04</div>
                    <div>
                        <h5>Review &amp; Revisions</h5>
                        <p>We include structured review rounds with unlimited revisions until your logo perfectly aligns with your vision.</p>
                    </div>
                </div>
                <div class="lp-process-step">
                    <div class="lp-process-num">05</div>
                    <div>
                        <h5>Final Delivery</h5>
                        <p>Once approved, we deliver a complete logo package in all formats ready for digital and print use across every platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="lp-testimonials" id="testimonials">
    <div class="container">
        <div class="text-center mb-5">
            <span class="lp-section-badge">Testimonials</span>
            <h2 class="lp-section-title">What Our Clients <span>Say</span></h2>
            <p class="lp-section-desc">Over 5,000 happy clients worldwide. Here's what some of them have to say.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"Absolutely loved working with Logo Vector Design. They delivered exactly what I envisioned — clean, modern, and professional. The turnaround was super fast too!"</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">JM</div>
                        <div>
                            <p class="lp-testi-name">James Mitchell</p>
                            <p class="lp-testi-role">CEO, TechFlow Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"I was skeptical at first about the price, but the quality blew me away. Multiple concept options, unlimited revisions, and a team that genuinely listens. Highly recommend!"</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">SR</div>
                        <div>
                            <p class="lp-testi-name">Sarah Reynolds</p>
                            <p class="lp-testi-role">Founder, Bloom Bakery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"Third time using Logo Vector Design and they keep getting better. Our brand looks premium and consistent across every platform. Best investment we've made."</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">DK</div>
                        <div>
                            <p class="lp-testi-name">David Kim</p>
                            <p class="lp-testi-role">Marketing Director, NovaStar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"Quick, professional, and affordable. The designer understood my vision immediately. Got 6 concepts and loved 3 of them. The final logo is perfect for my gym brand."</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">MT</div>
                        <div>
                            <p class="lp-testi-name">Marcus Thompson</p>
                            <p class="lp-testi-role">Owner, IronEdge Fitness</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"The process was seamless from start to finish. Communication was excellent, revisions were handled quickly, and the final delivery package had everything I needed."</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">LA</div>
                        <div>
                            <p class="lp-testi-name">Lisa Anderson</p>
                            <p class="lp-testi-role">Realtor, Premium Properties</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="lp-testi-card">
                    <div class="lp-testi-stars">★★★★★</div>
                    <p class="lp-testi-quote">"Incredible value for the quality you get. My e-commerce brand went from generic to genuinely eye-catching. Sales have noticeably improved since the rebrand. Worth every penny."</p>
                    <div class="lp-testi-author">
                        <div class="lp-testi-avatar">RO</div>
                        <div>
                            <p class="lp-testi-name">Ryan O'Brien</p>
                            <p class="lp-testi-role">Founder, StyleHaven Co.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FAQ ==================== -->
<section class="lp-faq" id="faq">
    <div class="container">
        <div class="text-center mb-5">
            <span class="lp-section-badge">FAQ</span>
            <h2 class="lp-section-title">Frequently Asked <span>Questions</span></h2>
            <p class="lp-section-desc">Everything you need to know before getting started.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>How many logo concepts will I receive?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">Depending on your package, you'll receive between 4 and 6 unique logo concepts to choose from, each designed from scratch by a dedicated designer.</div>
                </div>
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>How long does the process take?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">Initial concepts are delivered within 24-48 hours of your order. The overall timeline depends on the number of revision rounds, but most projects are completed within 3-5 business days.</div>
                </div>
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>What file formats will I receive?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">You'll receive your logo in all standard formats including AI, PSD, EPS, PNG (transparent background), JPG, and PDF — everything you need for both digital and print use.</div>
                </div>
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>Do I own the logo after purchase?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">Absolutely. You receive 100% ownership rights to your logo upon final delivery. The logo is yours to use across all platforms, materials, and markets without restrictions.</div>
                </div>
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>What if I'm not happy with the designs?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">We offer unlimited revisions until you're completely satisfied. If after revisions you're still not happy, we offer a 100% money-back guarantee — no questions asked.</div>
                </div>
                <div class="lp-faq-item">
                    <div class="lp-faq-q"><span>Do you offer discounts for first-time clients?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lp-faq-a">Yes! New clients receive up to 80% off their first order. Fill out the form at the top of this page to claim your discount instantly.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STRIP CTA ==================== -->
<section class="lp-strip">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h3>Ready to Get Started?</h3>
                <p>Claim your 80% discount today. Limited offer.</p>
            </div>
            <div class="col-lg-8">
                <form onsubmit="submitStep1(event);">
                    <div class="row g-2">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <input type="tel" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <button type="submit" class="btn-lp-primary w-100" style="border:none;padding:12px 16px;font-size:13px;">
                                Get My Discount →
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="lp-cta">
    <div class="container">
        <h2>Your Brand Deserves a Great Logo</h2>
        <p>Join 5,000+ businesses who trusted Logo Vector Design to craft their visual identity. Starting at just $18.</p>
        <a href="#" class="btn-lp-cta-white js-open-gs">CLAIM 80% OFF NOW</a>
    </div>
</section>

<!-- ==================== FOOTER ==================== -->
<footer class="lp-footer">
    <div class="container">
        <img src="../assets/images/logo.webp" alt="Logo Vector Design">
        <br>
        <a href="../home">Home</a>
        <a href="../logo-design">Logo Design</a>
        <a href="../portfolio">Portfolio</a>
        <a href="../contact-us">Contact</a>
        <a href="../about-us">About Us</a>
        <br><br>
        <p>&copy; 2026 Logo Vector Design. All Rights Reserved.</p>
    </div>
</footer>

<!-- ==================== POPUP 1: GET STARTED (general) ==================== -->
<div id="gsPopupOverlay" class="lp-modal-overlay">
    <div class="lp-modal">
        <button class="lp-modal-close" onclick="document.getElementById('gsPopupOverlay').classList.remove('active')">&times;</button>
        <div class="lp-modal-logo">
            <img src="../assets/images/logo.webp" alt="Logo Vector Design">
        </div>
        <h3 class="lp-modal-title">Let's Get <span>Started</span></h3>
        <p class="lp-modal-sub">Fill in your details and we'll reach out within minutes.</p>
        <form class="lp-modal-form" onsubmit="selectPackage('Basic', 18); submitStep1(event);">
            <input type="hidden" name="message" value="Get Started Popup Lead">
            <div class="lp-modal-field"><input type="text" name="name" placeholder="Full Name" required></div>
            <div class="lp-modal-field"><input type="email" name="email" placeholder="Email Address" required></div>
            <div class="lp-modal-field"><input type="tel" name="phone" placeholder="Phone Number" required></div>
            <div class="lp-modal-field"><textarea name="message" placeholder="Tell us about your project (optional)"></textarea></div>
            <button type="submit" class="lp-modal-btn">Get Started Now →</button>
        </form>
        <p class="lp-modal-secure">🔒 Your info is safe. No spam, ever.</p>
    </div>
</div>

<!-- ==================== POPUP 2: PACKAGE ORDER ==================== -->
<div id="pkgPopupOverlay" class="lp-modal-overlay">
    <div class="lp-modal">
        <button class="lp-modal-close" onclick="document.getElementById('pkgPopupOverlay').classList.remove('active')">&times;</button>
        <div class="lp-modal-logo">
            <img src="../assets/images/logo.webp" alt="Logo Vector Design">
        </div>
        <!-- Package badge (filled by JS) -->
        <div class="lp-modal-pkg-badge">
            <div class="lp-modal-pkg-info">
                <span class="lp-modal-pkg-name" id="pkgName">Standard</span>
                <span class="lp-modal-pkg-price" id="pkgPrice">$75</span>
            </div>
            <span class="lp-modal-pkg-tag">Selected Package</span>
        </div>
        <h3 class="lp-modal-title">Complete Your <span>Order</span></h3>
        <p class="lp-modal-sub">You're one step away from a professional logo.</p>
        <form class="lp-modal-form" id="pkgOrderForm" onsubmit="submitStep1(event);">
            <input type="hidden" name="message" value="Package Order Lead">
            <div class="lp-modal-field"><input type="text" name="name" placeholder="Full Name" required></div>
            <div class="lp-modal-field"><input type="email" name="email" placeholder="Email Address" required></div>
            <div class="lp-modal-field"><input type="tel" name="phone" placeholder="Phone Number" required></div>
            <div class="lp-modal-field"><textarea name="message" placeholder="Any notes about your brand? (optional)"></textarea></div>
            <button type="submit" class="lp-modal-btn">Start My Project →</button>
        </form>
        <p class="lp-modal-secure">🔒 Your info is safe. No spam, ever.</p>
    </div>
</div>

<!-- ==================== SOCIAL PROOF TOAST ==================== -->
<div id="lpToast">
    <div class="lp-toast-avatar">
        <i class="fas fa-user"></i>
    </div>
    <div class="lp-toast-content">
        <p class="lp-toast-name" id="lpToastName">Sarah M.</p>
        <p class="lp-toast-msg">just purchased a <strong>Logo Design</strong> 🎉</p>
        <p class="lp-toast-time" id="lpToastTime">2 minutes ago</p>
    </div>
    <div class="lp-toast-counter">
        <span id="lpBuyCount">3</span>
        <small>bought today</small>
    </div>
</div>

<!-- ==================== SALE COUNTDOWN BAR ==================== -->
<div id="lpSaleBar">
    <div class="lp-sale-bar-inner">
        <span class="lp-sale-bar-fire">🔥</span>
        <span class="lp-sale-bar-text">Flash Sale — Get your logo for <strong id="saleBarPrice">$18</strong> before time runs out!</span>
        <div class="lp-sale-timer">
            <div class="lp-timer-block"><span id="lpMin">05</span><small>min</small></div>
            <div class="lp-timer-colon">:</div>
            <div class="lp-timer-block"><span id="lpSec">00</span><small>sec</small></div>
        </div>
        <a href="#hero-form" class="lp-sale-bar-btn">Claim Now</a>
    </div>
</div>

<!-- ==================== POPUP ==================== -->
<div id="lpPopupOverlay">
    <div id="lpPopup">
        <!-- Close -->
        <button id="lpPopupClose" aria-label="Close">&times;</button>

        <!-- 80% off badge -->
        <div class="lp-popup-badge">
            <span>80%</span>
            <small>OFF</small>
        </div>

        <!-- Content -->
        <div class="lp-popup-body">
            <div class="lp-popup-left">
                <h2 class="lp-popup-title">Don't Miss This<br><span>Limited Offer!</span></h2>
                <p class="lp-popup-sub">Your custom logo design for only <strong id="popupPrice">$18</strong> — but only while the timer lasts.</p>

                <!-- Countdown inside popup -->
                <div class="lp-popup-timer">
                    <div class="lp-pt-block">
                        <span id="lpPopMin">05</span>
                        <small>min</small>
                    </div>
                    <div class="lp-pt-sep">:</div>
                    <div class="lp-pt-block">
                        <span id="lpPopSec">00</span>
                        <small>sec</small>
                    </div>
                </div>

                <ul class="lp-popup-bullets">
                    <li>✓ Unlimited Revisions</li>
                    <li>✓ 100% Money-Back Guarantee</li>
                    <li>✓ Concepts in 48 Hours</li>
                    <li>✓ All File Formats Included</li>
                </ul>

                <div class="lp-popup-btns">
                    <a href="#hero-form" class="btn-lp-primary" id="lpPopupCta">Claim 80% Off Now →</a>
                    <a href="javascript:void(0)" onclick="LiveChatWidget && LiveChatWidget.call('maximize')" class="btn-lp-secondary lp-popup-chat">Chat with Us</a>
                </div>

                <p class="lp-popup-disclaimer">🔒 No credit card required. Limited time only.</p>
            </div>
        </div>
    </div>
</div>
<?php
require_once dirname(__DIR__) . '/inc/funnel-init.php';
$lp_base_url = $base_url;

?>

<!-- ==================== SCRIPTS ==================== -->
<script>window.LOGO_FUNNEL = true; window.SITE_BASE = <?php echo json_encode($lp_base_url); ?>;</script>
<script src="../assets/js/api.js?v=1781118697"></script>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.fancybox.min.js"></script>
<script src="../assets/js/aos.js"></script>

<script>
// Init AOS
AOS.init({ duration: 600, once: true });

// Init Lozad lazy load
const observer = lozad();
observer.observe();

// ── Portfolio filter tabs ──
document.querySelectorAll('.lp-ptab').forEach(function(tab) {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.lp-ptab').forEach(function(t){ t.classList.remove('active'); });
        this.classList.add('active');
        var cat = this.getAttribute('data-cat');
        document.querySelectorAll('#lpPortGrid .lp-port-item').forEach(function(item) {
            if (cat === 'all' || item.getAttribute('data-cat') === cat) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// ── Show default active tab (Real Estate) on load ──
document.querySelectorAll('#lpPortGrid .lp-port-item').forEach(function(item) {
    if (item.getAttribute('data-cat') === 'estate') {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
});
// ── FAQ accordion ──
document.querySelectorAll('.lp-faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
        var answer = this.nextElementSibling;
        var isOpen = this.classList.contains('open');
        document.querySelectorAll('.lp-faq-q').forEach(function(oq){
            oq.classList.remove('open');
            oq.nextElementSibling.style.display = 'none';
        });
        if (!isOpen) {
            this.classList.add('open');
            answer.style.display = 'block';
        }
    });
});

// ── Smooth scroll for anchor links ──
document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
        var target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            // Close popup if open
            document.getElementById('lpPopupOverlay').classList.remove('active');
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// ── LiveChat buttons ──
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.open-livechat').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (window.LiveChatWidget) LiveChatWidget.call('maximize');
        });
    });
});

// ═══════════════════════════════════════════════
// POPUP 1 — Get Started (general)
// ═══════════════════════════════════════════════
document.querySelectorAll('.js-open-gs').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('gsPopupOverlay').classList.add('active');
    });
});
document.getElementById('gsPopupOverlay').addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('active');
});

// ═══════════════════════════════════════════════
// POPUP 2 — Package Order
// ═══════════════════════════════════════════════
document.querySelectorAll('.js-open-pkg').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        var name  = this.getAttribute('data-pkg-name');
        var price = this.getAttribute('data-pkg-price');
        var amt   = price.replace(/[^0-9.]/g, '');
        if (typeof selectPackage === 'function') {
            selectPackage(name, amt || price);
        }
        document.getElementById('pkgName').textContent  = name;
        document.getElementById('pkgPrice').textContent = price;
        document.getElementById('pkgPopupOverlay').classList.add('active');
    });
});
document.getElementById('pkgPopupOverlay').addEventListener('click', function(e) {
    if (e.target === this) this.classList.remove('active');
});

// ═══════════════════════════════════════════════
// SOCIAL PROOF TOAST — bottom-left
// ═══════════════════════════════════════════════
(function() {
    var names = [
        'James T.', 'John K.', 'Robert M.', 'Michael B.', 'William H.',
        'David L.', 'Richard S.', 'Joseph W.', 'Thomas N.', 'Charles R.',
        'Christopher J.', 'Daniel P.', 'Matthew G.', 'Anthony F.', 'Donald C.',
        'Mark A.', 'Paul E.', 'Steven D.', 'Andrew O.', 'Kenneth V.',
        'Joshua Y.', 'Kevin Z.', 'Brian Q.', 'George X.', 'Timothy U.',
        'Mary J.', 'Patricia S.', 'Jennifer W.', 'Linda K.', 'Barbara M.',
        'Elizabeth T.', 'Susan H.', 'Jessica R.', 'Sarah L.', 'Karen B.',
        'Lisa P.', 'Nancy G.', 'Betty F.', 'Margaret C.', 'Sandra A.',
        'Ashley E.', 'Dorothy D.', 'Kimberly O.', 'Emily V.', 'Donna Y.',
        'Michelle Z.', 'Carol Q.', 'Amanda X.', 'Melissa U.', 'Deborah N.',
        'Stephanie I.', 'Rebecca J.', 'Sharon S.', 'Laura W.', 'Cynthia K.',
        'Kathleen M.', 'Amy T.', 'Angela H.', 'Shirley R.', 'Brenda L.',
        'Tyler B.', 'Nathan P.', 'Brandon G.', 'Ryan F.', 'Zachary C.',
        'Austin A.', 'Logan E.', 'Justin D.', 'Ethan O.', 'Noah V.',
        'Mason Y.', 'Lucas Z.', 'Liam Q.', 'Aiden X.', 'Jackson U.',
        'Olivia N.', 'Emma I.', 'Ava J.', 'Isabella S.', 'Sophia W.',
        'Mia K.', 'Charlotte M.', 'Amelia T.', 'Harper H.', 'Evelyn R.',
        'Abigail L.', 'Emily B.', 'Madison P.', 'Scarlett G.', 'Grace F.'
    ];
    var times = [
        'Just now', '1 minute ago', '2 minutes ago', '3 minutes ago',
        '5 minutes ago', '7 minutes ago', '10 minutes ago', '12 minutes ago'
    ];

    // Retrieve or init the buy counter — start between 47–68
    var COUNTER_KEY = 'lvd_buy_count';
    var stored      = parseInt(localStorage.getItem(COUNTER_KEY) || '0', 10);
    var currentCount;
    if (!stored || stored < 47) {
        currentCount = Math.floor(Math.random() * 22) + 47; // 47–68
        localStorage.setItem(COUNTER_KEY, currentCount);
    } else {
        currentCount = stored;
    }

    function rand(arr) { return arr[Math.floor(Math.random() * arr.length)]; }

    function showToast() {
        var toast   = document.getElementById('lpToast');
        var nameEl  = document.getElementById('lpToastName');
        var timeEl  = document.getElementById('lpToastTime');
        var countEl = document.getElementById('lpBuyCount');

        nameEl.textContent  = rand(names);
        timeEl.textContent  = rand(times);
        countEl.textContent = currentCount;

        toast.classList.add('show');
        setTimeout(function() { toast.classList.remove('show'); }, 3200);
    }

    // Increment counter every 8–14 seconds (feels live but not spammy)
    function scheduleIncrement() {
        var delay = (Math.random() * 6 + 8) * 1000;
        setTimeout(function() {
            currentCount++;
            localStorage.setItem(COUNTER_KEY, currentCount);
            scheduleIncrement();
        }, delay);
    }

    // Show toast every 8 seconds
    function scheduleToast() {
        setTimeout(function() {
            showToast();
            scheduleToast();
        }, 8000);
    }

    // First appearance after 3 seconds
    setTimeout(function() {
        showToast();
        scheduleToast();
        scheduleIncrement();
    }, 3000);
})()

// ═══════════════════════════════════════════════
// SALE COUNTDOWN — persists across visits via localStorage
// ═══════════════════════════════════════════════
(function() {
    var SALE_DURATION = 5 * 60; // 5 minutes in seconds
    var STORAGE_KEY   = 'lvd_sale_end';
    var now           = Math.floor(Date.now() / 1000);
    var saleEnd       = parseInt(localStorage.getItem(STORAGE_KEY) || '0', 10);

    // First visit OR expired — set a fresh 5-min window
    if (!saleEnd || saleEnd <= now) {
        saleEnd = now + SALE_DURATION;
        localStorage.setItem(STORAGE_KEY, saleEnd);
    }

    var saleDone = false;

    function getRemaining() {
        return Math.max(0, saleEnd - Math.floor(Date.now() / 1000));
    }

    function pad(n) { return n < 10 ? '0' + n : '' + n; }

    function setExpired() {
        // Timer finished — revert price to normal
        var normalPrice = '$125';
        document.querySelectorAll('#saleBarPrice, #popupPrice').forEach(function(el) {
            el.textContent = normalPrice;
        });
        document.querySelectorAll('#lpMin, #lpSec, #lpPopMin, #lpPopSec').forEach(function(el) {
            el.textContent = '00';
        });
        // Update bar text
        var barText = document.querySelector('.lp-sale-bar-text');
        if (barText) barText.innerHTML = 'Sale ended — standard pricing now applies. <strong>' + normalPrice + '</strong>';
        // Update bar colour
        var bar = document.getElementById('lpSaleBar');
        if (bar) bar.classList.add('expired');
        saleDone = true;
    }

    function tick() {
        if (saleDone) return;
        var remaining = getRemaining();
        var mins = Math.floor(remaining / 60);
        var secs = remaining % 60;

        // Update bar
        document.getElementById('lpMin').textContent    = pad(mins);
        document.getElementById('lpSec').textContent    = pad(secs);
        // Update popup
        document.getElementById('lpPopMin').textContent = pad(mins);
        document.getElementById('lpPopSec').textContent = pad(secs);

        if (remaining <= 0) {
            setExpired();
        }
    }

    // Run immediately then every second
    tick();
    setInterval(tick, 1000);

    // ── Show popup after 4 seconds ──
    var popupShown = sessionStorage.getItem('lvd_popup_shown');
    if (!popupShown) {
        setTimeout(function() {
            document.getElementById('lpPopupOverlay').classList.add('active');
            sessionStorage.setItem('lvd_popup_shown', '1');
        }, 4000);
    }

    // Close popup
    document.getElementById('lpPopupClose').addEventListener('click', function() {
        document.getElementById('lpPopupOverlay').classList.remove('active');
    });
    document.getElementById('lpPopupOverlay').addEventListener('click', function(e) {
        if (e.target === this) this.classList.remove('active');
    });

    // Header offset for sale bar
    var bar = document.getElementById('lpSaleBar');
    if (bar) {
        document.body.style.paddingTop = bar.offsetHeight + 'px';
    }
})();
</script>

</body>
</html>
