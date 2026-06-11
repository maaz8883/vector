<?php
/**
 * Shared config for logo funnel pages (logo-style, payment-step, brief-form, etc.)
 * Works from main site (via index.php + global.php) or LP folder (via lp/.htaccess rewrite).
 */

if (!function_exists('funnel_request_scheme')) {
    function funnel_request_scheme(): string
    {
        if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
            || (isset($_SERVER['REQUEST_SCHEME']) && strtolower($_SERVER['REQUEST_SCHEME']) === 'https')) {
            return 'https://';
        }

        return 'http://';
    }
}

if (!function_exists('funnel_request_host')) {
    function funnel_request_host(): string
    {
        $candidates = [];

        if (!empty($_SERVER['HTTP_X_FORWARDED_HOST'])) {
            $candidates[] = trim(explode(',', $_SERVER['HTTP_X_FORWARDED_HOST'])[0]);
        }
        if (!empty($_SERVER['HTTP_HOST'])) {
            $candidates[] = $_SERVER['HTTP_HOST'];
        }
        if (!empty($_SERVER['SERVER_NAME'])) {
            $candidates[] = $_SERVER['SERVER_NAME'];
        }

        foreach ($candidates as $candidate) {
            $normalized = strtolower(preg_replace('/:\d+$/', '', trim($candidate)));
            if ($normalized !== '' && !in_array($normalized, ['localhost', '127.0.0.1'], true)) {
                return trim($candidate);
            }
        }

        return $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'localhost';
    }
}

$requestUri = str_replace('\\', '/', $_SERVER['REQUEST_URI'] ?? '');
$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$uriPath = parse_url($requestUri, PHP_URL_PATH) ?: '';

$is_lp_funnel = preg_match('#/(?:lp|vector_lp)(?:/|$)#i', $uriPath)
    || preg_match('#/(?:lp|vector_lp)/#i', $scriptName);

$scheme = funnel_request_scheme();
$host = funnel_request_host();

if (!isset($base_url)) {
    if ($is_lp_funnel && preg_match('#^(.*?/(?:lp|vector_lp)/)#i', $uriPath, $m)) {
        $base_url = $scheme . $host . $m[1];
    } else {
        $base_url = $scheme . $host . preg_replace('@/+$@', '', dirname($scriptName)) . '/';
    }
}

$hostLower = strtolower(preg_replace('/:\d+$/', '', $host));
$is_local = in_array($hostLower, ['localhost', '127.0.0.1'], true)
    || preg_match('/\.(test|local)$/', $hostLower);

if (!isset($assets_url)) {
    $assets_url = $is_local ? $base_url . 'assets/' : 'assets/';
}

if ($is_lp_funnel) {
    if ($is_local && preg_match('#^(.*?/(?:lp|vector_lp)/)#i', $uriPath, $m)) {
        $siteRoot = preg_replace('#/(?:lp|vector_lp)/$#i', '', $m[1]);
        $parent_assets_url = $scheme . $host . ($siteRoot === '' ? '' : $siteRoot) . '/assets/';
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
