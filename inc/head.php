<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

  <?php
$page_slug = str_replace('.php', '', $page);

if($page_slug == 'home' || $page_slug == 'index') {
    $class = "home";
    $title = "Logo Vector Design | Professional Logo & Design Agency";
    $description = "Logo Vector Design is a creative logo design and design agency offering professional branding, vector graphics, and custom design solutions for businesses worldwide.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'digital-marketing') {
    $class = "digital-marketing";
    $title = "Digital Marketing Services | Logo Vector Design Agency";
    $description = "Grow your brand online with expert digital marketing services from Logo Vector Design, including SEO, PPC, social media, and content strategies tailored for results.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'about-us') {
    $class = "about-us";
    $title = "About Us | Logo Vector Design Agency";
    $description = "Learn about Logo Vector Design, a creative agency specializing in logo design, branding, and visual identity solutions that help businesses stand out.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'contact-us') {
    $class = "contact-us";
    $title = "Contact Us | Logo Vector Design Agency";
    $description = "Get in touch with Logo Vector Design to discuss your logo, branding, or design project. Our creative team is ready to bring your vision to life.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == '404') {
    $class = "404";
    $title = "Page Not Found | Logo Vector Design";
    $description = "The page you are looking for could not be found. Return to the homepage and explore our professional logo and design services.";
    $robots = "NOINDEX, NOFOLLOW";
    $script = "";
}
elseif($page_slug == 'ecommerce-website') {
    $class = "ecommerce-website";
    $title = "eCommerce Website Design | Logo Vector Design Agency";
    $description = "Launch a stunning eCommerce website with Logo Vector Design. We craft conversion-focused online stores with professional branding and user-friendly design.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'logo-design') {
    $class = "logo-design";
    $title = "Logo Design Services | Custom Vector Logo Design";
    $description = "Get a unique, professional logo designed by the experts at Logo Vector Design. Custom vector logos crafted to represent your brand identity perfectly.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'portfolio') {
    $class = "portfolio";
    $title = "Our Portfolio | Logo Vector Design Work Showcase";
    $description = "Explore the Logo Vector Design portfolio showcasing our best logo designs, branding projects, web designs, and creative work delivered for clients worldwide.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'testimonials') {
    $class = "testimonials";
    $title = "Client Testimonials | Logo Vector Design Reviews";
    $description = "See what our clients say about Logo Vector Design. Real reviews from satisfied businesses who trusted us with their logo, branding, and design needs.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'thankyou') {
    $class = "thankyou";
    $title = "Thank You | Logo Vector Design";
    $description = "Thank you for contacting Logo Vector Design. Our creative team will get in touch with you shortly to discuss your design project.";
    $robots = "NOINDEX, NOFOLLOW";
    $script = "";
}
elseif($page_slug == 'video-animation') {
    $class = "video-animation";
    $title = "Video Animation Services | Logo Vector Design Agency";
    $description = "Bring your brand to life with professional video animation services from Logo Vector Design, including logo animations, explainer videos, and motion graphics.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'website-design') {
    $class = "website-design";
    $title = "Website Design Services | Logo Vector Design Agency";
    $description = "Get a professionally designed, responsive website from Logo Vector Design. We create visually stunning websites that reflect your brand and drive results.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
elseif($page_slug == 'website-maintenance') {
    $class = "website-maintenance";
    $title = "Website Maintenance Services | Logo Vector Design";
    $description = "Keep your website fast, secure, and up to date with reliable website maintenance and support services from Logo Vector Design.";
    $robots = "INDEX, FOLLOW";
    $script = "";
}
else {
    $class = "random";
    $title = "Logo Vector Design | Professional Logo & Design Agency";
    $description = "Explore Logo Vector Design's creative services including logo design, branding, web design, and digital marketing solutions for businesses of all sizes.";
    $robots = "NOINDEX, NOFOLLOW";
    $script = "";
}
?>
<title><?php echo $title?></title>
		<meta name="description" content="<?php echo $discription?>">
		<!-- <meta name="robots" content="<?php echo $robots?>" /> -->
		<?php echo $script?>
		<link rel="canonical" href="<?php  echo $current_url?>">
		<!-- Open Graph (Facebook/LinkedIn) -->
          <meta property="og:title" content="<?php echo $title?>">
          <meta property="og:description" content="<?php echo $discription?>">
          <meta property="og:url" content="<?php  echo $current_url?>">
          <meta property="og:type" content="website">
          <meta property="og:image" content="<?php echo $logo?>">
    <link rel="icon" type="image/png" href="<?php echo $assets_url; ?>images/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo $assets_url; ?>images/favicon.svg" />
<link rel="shortcut icon" href="<?php echo $assets_url; ?>images/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $assets_url; ?>images/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Logo Vector Design" />
<link rel="manifest" href="<?php echo $assets_url; ?>images/site.webmanifest" />
   		<link rel="preconnect" href="https://cdn.jsdelivr.net"> 
		<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
		<link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css"  />
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/aos.css">
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/video.css" />
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $assets_url; ?>css/owl.theme.default.cssx">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" rel="preload" as="style" type="text/css" href="<?php echo $assets_url; ?>css/style.css" media="all"/>
    <link rel="stylesheet" rel="preload" as="style" type="text/css" href="<?php echo $assets_url; ?>css/responsive.css" media="all"/>
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo $assets_url; ?>images/logo.webp" type="image/webp">
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo $assets_url; ?>images/main-banner-hands.webp" type="image/webp">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
</head>

<body>
