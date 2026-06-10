<?php
// Load environment variables from .env file
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \"'");
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
}
$reporting = false;
if($reporting){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

$test_email = null;

// ob_start("minifier");
// function minifier($code) {
// 	$search = array(		 
// 		'/\>[^\S ]+/s',		 
// 		'/[^\S ]+\</s',		  
// 		'/(\s)+/s',		 
// 		'/<!--(.|\s)*?-->/'
// 	);
// 	$replace = array('>', '<', '\\1');
// 	$code = preg_replace($search, $replace, $code);
// 	return $code;
// }


session_start();

function detect_source() {

    // Default
    $source = "Direct";
    $medium = "";
    $campaign = "";

    // Google Ads
    if (isset($_GET['gclid'])) {
        $source = "Google";
        $medium = "PPC";
    }

    // Microsoft Ads
    elseif (isset($_GET['msclkid'])) {
        $source = "Bing";
        $medium = "PPC";
    }

    // UTM parameters
    elseif (isset($_GET['utm_source'])) {
        $source = $_GET['utm_source'] ?? "";
        $medium = $_GET['utm_medium'] ?? "";
        $campaign = $_GET['utm_campaign'] ?? "";
    }

    // Referrer fallback
    elseif (!empty($_SERVER['HTTP_REFERER'])) {

        $ref = strtolower($_SERVER['HTTP_REFERER']);

        if (strpos($ref, 'google.') !== false) {
            $source = "Google";
            $medium = "Organic";
        }
        elseif (strpos($ref, 'bing.') !== false) {
            $source = "Bing";
            $medium = "Organic";
        }
        elseif (strpos($ref, 'facebook.') !== false || strpos($ref, 'fb.') !== false) {
            $source = "Facebook";
            $medium = "Social";
        }
        else {
            $source = "Referral";
        }
    }

    return [
        'source' => $source,
        'medium' => $medium,
        'campaign' => $campaign
    ];
}

// Detect current visit
$current = detect_source();

// FIRST TOUCH
if (!isset($_SESSION['first_touch'])) {
    $_SESSION['first_touch'] = $current;
}

// LAST TOUCH
$_SESSION['last_touch'] = $current;

// Cookies (30 days)
setcookie('first_touch', json_encode($_SESSION['first_touch']), time()+2592000, "/");
setcookie('last_touch', json_encode($_SESSION['last_touch']), time()+2592000, "/");
$base_url  = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$base_url .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
$is_local = in_array($host, ['localhost', '127.0.0.1'], true)
    || preg_match('/\.(test|local)$/', $host);
$assets_url = $is_local ? $base_url . 'assets/' : 'assets/';
$current_url  = (isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$post_url = htmlspecialchars((isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'].str_replace('index.php/','',$_SERVER["PHP_SELF"]));
$path = str_replace($base_url, '',$current_url);
$path_prams = explode('?', $path);
$path = $path_prams[0];
$prams = !empty($path_prams[1]) ? $path_prams[1] : ''; 
$pages = explode('/', $path);
if(!empty($pages) && count($pages) > 0){
	$page = array_pop($pages);	
	$path = implode('/',$pages);
	$path = !empty($path) ? $path.'/' : ''; 
}
else{
	$page = $path;
	$path = '';
}
if (strpos($page, '.php') !== false) {	
	$page = str_replace('.php', '',$page);
}
$page = (empty($page) || $page == 'index') ? 'home' : $page;
$page .= '.php';
$exampted_pages = array('thankyou.php','404.php','enroll-now.php', 'logo.php', 'website.php', 'brief/seo.php', 'smm.php', 'create_link.php', 'link_details.php', 'paynow.php', 'charge.php', 'fail.php', 'confirm_payment.php'); 
$exampt_allfiles = array(
    'create_payment.php',
    'confirm_payment.php',
    'logo-style.php',
    'logo-details.php',
    'additional-details.php',
    'payment-step.php',
    'thank-you.php',
    'thanks.php',
    'brief-form.php',
    'pay.php',
    'pay-thank-you.php',
);
$no = "(323) 205-7496";
$no1 = "(323) 205-7496";
$add = "2648 international Blvd Ste 301 1022 Oakland CA, 94601";
$email = "2648 international Blvd Ste 301 1022 Oakland CA, 94601";
$url = "https://hexabookmarketing.com/";
$bname = "Hexa Book Marketing";
$date = date('d-m-y_h:i:s');
 $logo ='https://hexabookmarketing.com/assets/images/logo.webp';
 
// $title =  'Welcome To US Logo Designs';
// $keywords =  '';
// $description =  '';
$domainname = "hexabookmarketing.com";

$error_prefex = "<p class='alert-danger'>";
$error_sufex = "</p>";

$smtp['host'] = 'mail.hexabookmarketing.com';
$smtp['username'] = 'info@hexabookmarketing.com';
//$smtp['password'] = 'qrkx gmkd nvxg htpv';
$smtp['password'] = getenv('SMTP_PASSWORD') ?: '';
$smtp['port'] = '465';

$from_email = "info@hexabookmarketing.com";
$from_name = $bname;

// $source= $_POST['first_source'];
$source = "Organic";
// $source= $_SESSION['first_touch']['source'];
$cta_email = "info@hexabookmarketing.com";
 $cc_email = [
    'muhammadusamastaffshaw@gmail.com',
    'leads.staffshaw@gmail.com',
    'shahan.signups@digitalsynergyservices.com',
    'zohaibkhan.staffshaw@gmail.com',
    'elichris414@gmail.com',
    'eli.chris@digitalsynergyservices.com'
];
$cta_subject = "New $source Lead on $bname ";
$cta_template = __DIR__."/email_templates/cta.php";
$cta2_template = __DIR__."/email_templates/cta2.php";
$cta3_template = __DIR__."/email_templates/cta3.php";
$cta4_template = __DIR__."/email_templates/cta4.php";
$cta5_template = __DIR__."/email_templates/cta5.php";
$cta6_template = __DIR__."/email_templates/cta6.php";

$brief_email = "brief@hexabookmarketing.com/";

$webbrief_subject = "New Web Brief Recived from $bname";
$webbrief_template = __DIR__."/email_templates/webbrief.php";

$logobrief_subject = "New Web Brief Recived from $bname";
$logobrief_template = __DIR__."/email_templates/logobrief.php";

$seobrief_subject = "New SEO Brief Recived from $bname";
$seobrief_template = __DIR__."/email_templates/seobrief.php";

$smmbrief_subject = "New SMM Brief Recived from $bname";
$smmbrief_template = __DIR__."/email_templates/smmbrief.php";

$payment_email = "billing@hexabookmarketing.com/";

$invoicelink_subject = "New Payment Invoice Link Recived from $bname";
$invoicelink_template = __DIR__."/email_templates/invoice_link.php";

$payment_recived_subject = "New Payment Has Recived from $bname";
$payment_recived_template = __DIR__."/email_templates/payment_recived.php";

$activePage = basename($_SERVER['PHP_SELF'], ".php");

// require_once('geoplugin.class.php');

// $geoplugin = new geoPlugin();
// $geoplugin->locate();

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$ip = getUserIP();
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);