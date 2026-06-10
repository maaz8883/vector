<?php
/**
 * Shared config for logo funnel pages (logo-style, payment-step, brief-form, etc.)
 */
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://')
    . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$base_url .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'] ?? '')) . '/';

$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
$is_local = in_array($host, ['localhost', '127.0.0.1'], true)
    || preg_match('/\.(test|local)$/', $host);
$assets_url = $is_local ? $base_url . 'assets/' : 'assets/';

$fun_css = $assets_url . 'css/funnel.css';
$fun_js = $base_url . 'assets/js/api.js';
$fun_logo = $assets_url . 'images/logo.webp';
$fun_phone = '(323) 205-7496';
$fun_site = 'Logo Vector Design';
$fun_home = $base_url . 'index.php';
