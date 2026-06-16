<?php
/**
 * Shared config for logo funnel pages (logo-style, payment-step, brief-form, etc.)
 * Works from main site (via index.php + global.php) or LP folder (via lp/.htaccess rewrite).
 */

$requestUri = str_replace('\\', '/', $_SERVER['REQUEST_URI'] ?? '');
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');

$is_lp_funnel = preg_match('#/(?:lp|vector_lp)/#i', $requestUri)
    || preg_match('#/(?:lp|vector_lp)/#i', $scriptName);

$scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

if (!isset($base_url)) {
    if ($is_lp_funnel) {
        $uriPath = parse_url($requestUri, PHP_URL_PATH) ?: '';
        if (preg_match('#^(.*?/(?:lp|vector_lp)/)#i', $uriPath, $m)) {
            $base_url = $scheme . $host . $m[1];
        } else {
            $base_url = $scheme . $host . preg_replace('@/+$@', '', dirname($scriptName)) . '/';
        }
    } else {
        $base_url = $scheme . $host . preg_replace('@/+$@', '', dirname($scriptName)) . '/';
    }
}

$hostLower = strtolower($host);
$is_local = in_array($hostLower, ['localhost', '127.0.0.1'], true)
    || preg_match('/\.(test|local)$/', $hostLower);

if (!isset($assets_url)) {
    $assets_url = $is_local ? $base_url . 'assets/' : 'assets/';
}

if ($is_lp_funnel) {
    if ($is_local) {
        $scriptDir = preg_replace('@/+$@', '', dirname($scriptName));
        if (preg_match('#/(?:lp|vector_lp)$#i', $scriptDir)) {
            $parentPath = dirname($scriptDir);
        } else {
            $parentPath = $scriptDir;
        }
        $parent_assets_url = $scheme . $host . $parentPath . '/assets/';
    } else {
        $parent_assets_url = '../assets/';
    }

    $fun_css = $parent_assets_url . 'css/funnel.css';
    $fun_js = $parent_assets_url . 'js/api.js';
    $fun_logo = $parent_assets_url . 'images/logo.webp';
    $fun_home = $base_url;
} else {
    $fun_css = $assets_url . 'css/funnel.css';
    $fun_js = $base_url . 'assets/js/api.js';
    $fun_logo = $assets_url . 'images/logo.webp';
    $fun_home = $base_url . 'logo-design';
}

$fun_phone = $no ?? '(323) 205-7496';
$fun_site = 'Logo Vector Design';
