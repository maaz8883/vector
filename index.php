<?php
require 'inc/global.php';
require 'inc/form.php';

if (in_array($page, $exampt_allfiles)) {
    if (!file_exists($path.$page)) {
        header('Location: '.$base_url.'404');
        die();
    }
    require $path.$page;
}
elseif (!in_array($page, $exampted_pages)) {
    if (!file_exists($path.$page)) {
        header('Location: '.$base_url.'404');
        die();
    }
    require 'inc/head.php';
    require 'inc/header.php';
    require $path.$page;
    require 'inc/footer.php';
    require 'inc/chat.php';
}
else {
    if (!file_exists($path.$page)) {
        header('Location: '.$base_url.'404');
        die();
    }
    require 'inc/head.php';
    require $path.$page;
    require 'inc/chat.php';
}
?>