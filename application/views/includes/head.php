<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="<?= $lang ?>">

<head>
    <!-- Title -->
    <title><?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?></title>
    <!-- Title -->

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes, shrink-to-fit=no,minimal-ui">
    <meta name="description" content="<?= clean(@$meta_desc) ?>">
    <?php /*
    <meta name="keywords" content="<?= clean(@$meta_keyw) ?>">
	*/ ?>
    <meta name="subject" content="<?= clean(@$meta_desc) ?>">
    <meta name="copyright" content="<?= $settings->company_name ?>">
    <meta name="language" content="<?= strto("lower|upper", $lang) ?>">
    <meta name="robots" content="all" />
    <meta name="revised" content="<?= turkishDate("d F Y, l H:i:s", date("Y-m-d H:i:s")) ?>" />
    <meta name="abstract" content="<?= clean(@$meta_desc) ?>">
    <meta name="topic" content="<?= clean(@$meta_desc) ?>">
    <meta name="summary" content="<?= clean(@$meta_desc) ?>">
    <meta name="Classification" content="Business">
    <meta name="author" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="designer" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="copyright" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com 2022 &copy; Tüm Hakları Saklıdır.">
    <meta name="reply-to" content="<?= $settings->email ?>">
    <meta name="owner" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="url" content="<?= clean(base_url()) ?>">
    <meta name="identifier-URL" content="<?= clean(base_url()) ?>">
    <meta name="directory" content="submission">
    <meta name="category" content="Article">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 days">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:image:secure" content="<?= clean(@$og_image) ?>">
    <meta property="og:locale" content="<?= strto("lower", $lang) . '_' . strto("lower|upper", $lang) ?>">
    <meta property="og:url" content="<?= (!empty($og_url) ? clean($og_url) : clean(base_url())) ?>" />
    <meta property="og:type" content="<?= (!empty($og_type) ? clean($og_type) : "website") ?>" />
    <meta property="og:title" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>" />
    <meta property="og:description" content="<?= (!empty($og_description) ? clean($og_description) : clean(@$meta_desc)) ?>" />
    <meta property="og:image" content="<?= clean(@$og_image) ?>" />
    <meta property="og:image:secure_url" content="<?= clean(@$og_image) ?>" />
    <meta name="twitter:title" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="twitter:description" content="<?= (!empty($og_description) ? clean($og_description) : clean(@$meta_desc)) ?>">
    <meta name="twitter:image" content="<?= clean(@$og_image) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="twitter:image:alt" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="googlebot" content="archive,follow,imageindex,index,odp,snippet,translate">
    <meta http-equiv="Cache-Control" content="public,max-age=1800,max-stale,stale-while-revalidate=86400,stale-if-error=259200" rem="max-age=30minutes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MSThemeCompatible" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="translucent black" />
    <meta name="msapplication-navbutton-color" content="translucent black" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta name="theme-color" content="#b1cff4" />
    <meta http-equiv="Page-Enter" content="RevealTrans(Duration=1.0,Transition=1)" />
    <meta http-equiv="Page-Exit" content="RevealTrans(Duration=1.0,Transition=1)" />
    <meta name="publisher" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com" />
    <link rel="canonical" href="<?= (!empty($og_url) ? clean($og_url) : clean(base_url())) ?>" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="preconnect" href="<?= base_url() ?>">
    <link rel="dns-prefetch" href="<?= base_url() ?>">
    <!-- Favicon -->
    <?php $imageSize = getimagesize(get_picture("settings_v", $settings->favicon)) ?? [32, 32]; ?>
    <link rel="shortcut icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <link rel="icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <link rel="apple-touch-icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <!-- META TAGS -->

    <!-- === STYLES === -->
    <!-- iziToast -->
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/iziToast.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/iziToast.min.css") ?>" />
    </noscript>
    <!-- #iziToast -->

    <!-- iziModal -->
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/iziModal.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/iziModal.min.css") ?>" />
    </noscript>
    <!-- #iziModal -->

    <?php if (empty($this->uri->segment(2)) && !empty($stories) && !empty($story_items)) : ?>
        <!-- Zuck -->
        <link rel="preload" type="text/css" href="<?= asset_url("public/css/zuck.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/zuck.min.css") ?>">
        </noscript>
        <!-- #Zuck -->
    <?php endif ?>
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/bootstrap.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/bootstrap.min.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/menus.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/menus.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/animate.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/animate.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/owl.carousel.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/owl.carousel.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/v4-shims.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/v4-shims.min.css">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/magnific-popup.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/magnific-popup.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/animations.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/animations.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/sweetalert.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/sweetalert.min.css") ?>">
    </noscript>

    <style>
        body,
        html {
            font-size: 16px;
            color: #252525;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            vertical-align: baseline;
            font-weight: 400;
            overflow-x: hidden;
            line-height: 1.7
        }

        img {
            max-width: 100%;
            height: auto
        }

        p {
            margin: 0 0 26px
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #00306e;
            margin: 0 0 26px;
            font-weight: 500;
            line-height: 1.2
        }

        h1 {
            font-size: 60px
        }

        h2 {
            font-size: 42px
        }

        h3 {
            font-size: 30px
        }

        h4 {
            font-size: 24px
        }

        h5 {
            font-size: 18px
        }

        h6 {
            font-size: 14px
        }

        a {
            color: #3270fc;
            transition: all .5s ease 0s;
            text-decoration: none !important;
            outline: 0 !important
        }

        a:active,
        a:hover {
            text-decoration: none;
            outline: 0 none;
            color: #3270fc
        }

        ul {
            list-style: outside none none;
            margin: 0;
            padding: 0
        }

        .pinkColor {
            color: #ee3688
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .react-absolute {
            position: absolute
        }

        .primary-color {
            color: #3270fc !important
        }

        .secondary-color {
            color: #00306e !important
        }

        .white-color {
            color: #fff !important
        }

        .normal {
            font-weight: 400
        }

        .z-index-1 {
            position: relative;
            z-index: 1
        }

        .no-padding {
            padding: 0
        }

        .react__title__section {
            padding-bottom: 30px
        }

        .react__title__section h2 {
            font-size: 50px;
            font-weight: 700;
            color: #00306e;
            margin: 0;
            line-height: 54px
        }

        .react__title__section a {
            background: #3270fc;
            border-radius: 6px;
            padding: 10px 26px;
            line-height: 20px;
            display: inline-block;
            color: #fff;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 12px
        }

        .react__title__section a:hover {
            opacity: .9
        }

        .react__title__section.react__title__section2 h2 {
            font-size: 44px;
            color: #0f1216
        }

        .align-v {
            align-items: end
        }

        .w-btn {
            cursor: pointer;
            font-size: 15px;
            color: #fff;
            background: #2a6df5;
            border: 2px solid #ebebf1;
            text-align: center;
            padding: 0 30px;
            display: inline-block;
            font-weight: 600;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            -webkit-transition: all .3s ease-out 0s;
            -moz-transition: all .3s ease-out 0s;
            -ms-transition: all .3s ease-out 0s;
            -o-transition: all .3s ease-out 0s;
            transition: all .3s ease-out 0s
        }

        .w-btn:hover {
            background-color: #fff;
            color: #00306e
        }

        .w-btn-2 {
            font-size: 15px;
            padding: 12px 37px;
            border: 2px solid #2a6df5
        }

        .w-btn-2:hover {
            border: 2px solid rgba(15, 22, 41, .078);
            background-color: #fff;
            color: #00306e
        }

        .w-btn-3 {
            padding: 7px 28px;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
            color: #fff;
            background: #2a6df5;
            border: 2px solid #2a6df5
        }

        .w-btn-3:hover {
            border: 2px solid rgba(15, 22, 41, .078);
            background-color: #fff;
            color: #00306e
        }

        .w-btn-4 {
            padding: 8px 41px;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
            background: #fff;
            color: #00306e;
            border: 2px solid rgba(15, 22, 41, .078)
        }

        .w-btn-4:hover {
            border-color: #2a6df5;
            color: #fff;
            background: #2a6df5
        }

        .w-btn-5 {
            padding: 8px 31px;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
            background: #fff;
            color: #00306e;
            border: 2px solid rgba(15, 22, 41, .078)
        }

        .w-btn-5:hover {
            border-color: #2a6df5;
            color: #fff;
            background: #2a6df5
        }

        .w-btn-8 {
            color: #00306e;
            background: #fff;
            padding: 3px 31px
        }

        .w-btn-8:hover {
            border-color: #2a6df5;
            color: #fff;
            background: #2a6df5
        }

        .w-btn-9 {
            padding: 7px 40px;
            -webkit-border-radius: 22px;
            -moz-border-radius: 22px;
            border-radius: 22px;
            color: #fff;
            background: #2a6df5;
            border: 2px solid #2a6df5
        }

        .w-btn-9:hover {
            border: 2px solid rgba(15, 22, 41, .078);
            background-color: #fff;
            color: #00306e
        }

        .w-btn-11 {
            height: 40px;
            line-height: 36px;
            padding: 0 17px;
            background: #2a6df5;
            color: #fff;
            border-radius: 6px;
            border: 2px solid #2a6df5
        }

        .w-btn-11:hover {
            border: 2px solid #ebebf1;
            background-color: transparent;
            color: #00306e
        }

        .w-btn-12 {
            height: 40px;
            line-height: 36px;
            padding: 0 17px;
            background: #fd4680;
            color: #fff;
            border-radius: 0;
            border: 2px solid #fd4680
        }

        .w-btn-12:hover {
            border: 2px solid #4917bf;
            background-color: transparent;
            color: #00306e
        }

        .w-btn-16 {
            padding: 9px 31px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0;
            border-radius: 0;
            background-color: #fd4680;
            color: #fff !important;
            border: 2px solid #fd4680
        }

        .w-btn-16:hover {
            border: 2px solid #fd4680;
            color: #00306e !important;
            background-color: transparent
        }

        .w-btn-blue {
            padding: 10px 20px;
            border: 2px solid rgba(255, 255, 255, .2);
            background: #fff;
            color: #00306e
        }

        .w-btn-blue-header {
            height: 40px;
            padding: 0 20px;
            line-height: 40px;
            background: #fff;
            color: #00306e;
            border: rgba(15, 22, 41, .078)
        }

        .w-btn-blue:hover {
            background-color: #2a6df5
        }

        .w-btn-blue-2 {
            padding: 10px 20px;
            background: #fff;
            color: #00306e;
            border-color: rgba(15, 22, 41, .078)
        }

        .w-btn-blue-2:hover {
            border-color: rgba(15, 22, 41, .078);
            color: #fff
        }

        .react-btn {
            background: #3270fc;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            border-radius: 30px;
            display: inline-block;
            padding: 10px 38px;
            border: 2px solid #3270fc;
            transition: all .5s ease 0s
        }

        .react-btn:hover {
            background: 0 0;
            color: #3270fc
        }

        .react-btn-border {
            background: #fff;
            border: 2px solid rgba(255, 255, 255, .3);
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            display: inline-block;
            padding: 15px 35px 15px 35px;
            transition: all .5s ease 0s;
            color: #00306e;
            line-height: 20.11px
        }

        .react-btn-border:hover {
            background: #3270fc;
            color: #fff;
            border-color: #3270fc
        }

        .react-header {
            background: #fff;
            position: relative;
            z-index: 9999
        }

        .react-header .react-inner-menus {
            display: flex
        }

        .react-header .react-menus>li>a {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .react-header .react-menus li a {
            color: #00306e
        }

        .react-header .react-menus li a:hover {
            color: #d2093c !important
        }

        .react-header .react-menus li a.react-current-page {
            color: #d2093c !important
        }

        .react-header .react-main-menu {
            position: relative
        }

        .react-header .container {
            max-width: 1340px
        }

        .react-header .logo {
            padding: 14px 0 14px 0
        }

        .react-header.react-header-two {
            box-shadow: 0 4px 10px rgba(0, 14, 32, .06)
        }

        .react-header.react-header-two .searchbar-part .phone-part {
            border-left: 1px solid #dfe2e5;
            padding-left: 25px
        }

        .react-header.react-header-two .searchbar-part .phone-part a {
            font-size: 18px;
            line-height: 24px;
            font-weight: 600;
            color: #0f1216
        }

        .react-header.react-header-two .searchbar-part .phone-part a svg {
            color: #3270fc
        }

        .react-header.react-header-two .searchbar-part .phone-part a:hover {
            color: #3270fc
        }

        .react-header.react-header-two .react-logins {
            border: none;
            padding-left: 20px
        }

        .react-header.react-header-two .react-logins a {
            background: #3270fc;
            border-radius: 6px;
            padding: 10px 26px;
            line-height: 20px;
            display: inline-block;
            color: #fff;
            font-weight: 600;
            font-size: 16px
        }

        .react-header.react-header-two .react-logins a svg {
            width: 18px
        }

        .react-header.react-header-two .react-logins a:hover {
            opacity: .9
        }

        .react-header.react-header-three .cate-part {
            display: flex;
            align-items: center
        }

        .react-header.react-header-three .cate-part svg {
            margin-right: -16px;
            margin-top: 4px
        }

        .react-header.react-header-three .cate-part .react-category-menu {
            margin-left: 25px
        }

        .react-header.react-header-three .cate-part .react-category-menu li {
            position: relative;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600
        }

        .react-header.react-header-three .cate-part .react-category-menu li a {
            color: #091524
        }

        .react-header.react-header-three .cate-part .react-category-menu li a:hover {
            color: #3270fc
        }

        .react-header.react-header-three .cate-part .react-category-menu li a i {
            font-size: 22px;
            position: relative;
            top: 4px
        }

        .react-header.react-header-three .cate-part .react-category-menu li ul {
            position: absolute;
            left: -20px;
            top: 100%;
            width: 172px;
            transform: scaleY(0);
            transition: all .4s ease-in-out 0s;
            transform-origin: 0 0 0;
            opacity: 0;
            visibility: hidden;
            padding: 20px 20px 23px 20px;
            background: #fff;
            border-radius: 0 0 4px 4px
        }

        .react-header.react-header-three .cate-part .react-category-menu li ul li {
            padding: 3px 0
        }

        .react-header.react-header-three .cate-part .react-category-menu li:hover ul {
            transform: scaleY(1);
            opacity: 1;
            visibility: visible
        }

        .react-header.react-header-three .cate-part .react-category-menu li:hover ul li {
            font-size: 15px
        }

        .react-header.react-header-three .cate-part:hover {
            color: #3270fc
        }

        .react-header.react-header-three .cate-part:hover .react-category-menu li {
            color: #3270fc
        }

        .react-header.react-header-three .cate-part:hover .react-category-menu li ul {
            transform: scaleY(1);
            opacity: 1;
            visibility: visible
        }

        .react-header.react-header-three .cate-part:hover .react-category-menu li ul li {
            font-size: 15px
        }

        .react-header.react-sticky {
            background: #fff;
            position: fixed !important;
            width: 100%;
            -webkit-animation: stickyanimations .8s cubic-bezier(.25, .46, .45, .94) both;
            animation: stickyanimations .8s cubic-bezier(.25, .46, .45, .94) both;
            box-shadow: 10px 0 20px rgba(8, 0, 41, .08);
            top: 0;
            left: 0;
            right: 0;
            z-index: 999
        }

        .react-header.react-sticky .toolbar-area {
            display: none
        }

        .react-header .menu-title {
            font-size: 18px;
            font-weight: 700;
            color: #00306e
        }

        .react-header .searchbar-part {
            display: flex;
            align-items: center
        }

        .react-header .searchbar-part .search-form {
            background: #f4f5f5;
            border-radius: 6px;
            padding: 7px 18px 9px 25px
        }

        .react-header .searchbar-part .search-form [type=text] {
            border: none;
            color: #4b5b70;
            font-size: 14px;
            outline: 0;
            background: 0 0
        }

        .react-header .searchbar-part .search-form button {
            border: none;
            background: 0 0;
            padding: 0
        }

        .react-header .searchbar-part .react-login {
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            border-left: 1px solid #dfe2e5;
            padding: 0 30px
        }

        .react-header .searchbar-part .react-login a {
            color: #00306e
        }

        .react-header .searchbar-part .react-login a:hover {
            color: #3270fc
        }

        .react-header .searchbar-part .react-login svg {
            color: #00306e;
            margin-right: 3px;
            position: relative;
            top: -3px;
            width: 19px
        }

        .react-header .topbar-area.style1 {
            background: #00306e;
            color: #fff;
            padding: 5px 0;
            font-size: 14px
        }

        .react-header .topbar-area.style1 .topbar-contact ul {
            display: flex
        }

        .react-header .topbar-area.style1 .topbar-contact ul li {
            margin-left: 30px
        }

        .react-header .topbar-area.style1 .topbar-contact ul li svg {
            width: 18px;
            padding-right: 2px
        }

        .react-header .topbar-area.style1 .topbar-contact ul li:first-child {
            margin-left: 0
        }

        .react-header .topbar-area.style1 li a {
            color: #fff
        }

        .react-header .topbar-area.style1 li a:hover {
            color: #b5b2b2
        }

        .react-header .topbar-area.style1 ul.social-links li {
            margin-right: 15px
        }

        .react-header .topbar-area.style1 ul.social-links li a {
            width: unset;
            height: unset;
            line-height: unset;
            border: 0
        }

        .react-header .topbar-area.style1 ul.social-links li a:hover {
            background: 0 0;
            color: #b5b2b2
        }

        .react-sub-shadow li ul.sub-menu {
            box-shadow: 0 30px 30px 0 rgba(10, 0, 45, .1)
        }

        @-webkit-keyframes stickyanimations {
            0% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        @keyframes stickyanimations {
            0% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px)
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }
        }

        .event__video-btn--play {
            position: absolute;
            z-index: 1;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .event__video-btn--play-btn {
            display: inline-block;
            width: 90px;
            height: 90px;
            line-height: 86px;
            text-align: center;
            font-size: 25px;
            color: #fff;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background: #fff;
            color: #2a6df5;
            border-color: #fff
        }

        .event__video-btn {
            position: relative
        }

        .event__video-btn--play-btn::before {
            content: "";
            height: 120px;
            width: 120px;
            position: absolute;
            left: -15px;
            top: -15px;
            border: 1px solid rgba(255, 255, 255, .302);
            border-radius: 50%;
            animation: videoBtnAnim 3s linear infinite;
            display: block
        }

        .event__video-btn--play-btn::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #fff;
            top: 0;
            left: 0;
            border-radius: 50%;
            transition: all .3s ease-in-out
        }

        .event__video-btn--play-btn i {
            z-index: 2;
            position: relative;
            top: 9px;
            font-size: 35px
        }

        @-webkit-keyframes videoBtnAnim {
            0% {
                -webkit-transform: scale(.8);
                transform: scale(.8)
            }

            25% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2)
            }

            75% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            to {
                -webkit-transform: scale(.8);
                transform: scale(.8)
            }
        }

        @keyframes videoBtnAnim {
            0% {
                -webkit-transform: scale(.8);
                transform: scale(.8)
            }

            25% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2)
            }

            75% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            to {
                -webkit-transform: scale(.8);
                transform: scale(.8)
            }
        }

        .react__shape__abd {
            position: absolute;
            right: 51.5%;
            top: 45%
        }

        .react__shape__ab {
            position: absolute;
            right: 54.5%;
            top: 28%;
            -webkit-animation: slide-top 5s linear infinite alternate;
            animation: slide-top 5s linear infinite alternate
        }

        .react__shape__abc {
            position: absolute;
            right: 39%;
            top: 80%;
            -webkit-animation: slide-top 5s linear infinite alternate;
            animation: slide-top 5s linear infinite alternate
        }

        .home-banner-part {
            position: relative
        }

        .home-banner-part .container {
            max-width: 1430px
        }

        .home-banner-part .react__shape__1 {
            position: absolute;
            left: 100px;
            top: 80px;
            -webkit-animation: slide-top 5s linear infinite alternate;
            animation: slide-top 5s linear infinite alternate
        }

        .home-banner-part .react__shape__2 {
            position: absolute;
            left: -240px;
            bottom: 80px;
            -webkit-animation: slide-top 5.5s linear infinite alternate-reverse;
            animation: slide-top 5.5s linear infinite alternate-reverse
        }

        .home-banner-part .react__shape__3 {
            position: absolute;
            right: -35px;
            top: 80px;
            -webkit-animation: slide-top 5.5s linear infinite alternate-reverse;
            animation: slide-top 5.5s linear infinite alternate-reverse
        }

        .home-banner-part .react__shape__4 {
            position: absolute;
            right: 250px;
            bottom: 190px;
            -webkit-animation: rotate-center 6.6s ease-in-out infinite alternate both;
            animation: rotate-center 6.6s ease-in-out infinite alternate both
        }

        .home-banner-part .react__shape__5 {
            position: absolute;
            right: 460px;
            top: 160px
        }

        .home-banner-part .banner-content {
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .home-banner-part .banner-content .banner-title {
            font-size: 54px;
            margin-bottom: 15px;
            color: #091524;
            line-height: 64px;
            font-weight: 800;
            letter-spacing: -.9px
        }

        .home-banner-part .banner-content .banner-desc {
            font-size: 18px;
            color: #3e3e51
        }

        .home-banner-part .banner-content .react-btn {
            padding: 12px 38px
        }

        .home-banner-part .react__hero__card {
            position: absolute;
            top: 280px;
            right: 172px;
            width: 310px;
            background-color: #fff;
            border: 1px solid #ebebf1;
            box-shadow: 0 20px 60px 0 rgba(0, 15, 56, .1);
            border-radius: 10px;
            -webkit-animation: slide-top 5.5s linear infinite alternate;
            animation: slide-top 5.5s linear infinite alternate
        }

        .home-banner-part .react__hero__card .react__thumb {
            position: relative
        }

        .home-banner-part .react__hero__card .react__thumb img {
            border-radius: 12px 12px 0 0
        }

        .home-banner-part .react__hero__card .react__thumb .react__price {
            border-radius: 50%;
            background-color: #3270fc;
            width: 50px;
            height: 50px;
            position: absolute;
            right: 29px;
            bottom: -23px;
            display: inline-block;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            line-height: 50px;
            text-align: center
        }

        .home-banner-part .react__hero__card .hero__card-content {
            padding: 30px
        }

        .home-banner-part .react__hero__card .hero__card-content .react-category {
            font-size: 14px;
            line-height: 28px;
            color: #f11e78;
            background-color: rgba(241, 30, 120, .059);
            border-radius: 12px;
            padding: 4px 14px
        }

        .home-banner-part .react__hero__card .hero__card-content .react-course-title {
            font-size: 20px;
            line-height: 1.5;
            margin: 14px 0 16px;
            font-weight: 800
        }

        .home-banner-part .react__hero__card .hero__card-content .react-course-title a {
            color: #0f1629
        }

        .home-banner-part .react__hero__card .hero__card-content .react-course-title a:hover {
            color: #3270fc
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon {
            justify-content: space-between
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon .hero__card-icon--1 svg {
            border-radius: 50%;
            background-color: #f2f6fe;
            padding: 7px;
            width: 32px;
            height: 32px;
            color: #3270fc
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon .hero__card-icon--1 span {
            font-weight: 500;
            font-size: 15px;
            color: #4b4c57;
            padding-left: 7px
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon .hero__card-icon--2 svg {
            border-radius: 50%;
            background-color: #fff9f1;
            padding: 7px;
            width: 32px;
            height: 32px;
            color: #ff9415
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon .hero__card-icon--2 span {
            font-weight: 500;
            font-size: 15px;
            color: #4b4c57;
            padding-left: 7px
        }

        .home-banner-part .react__hero__card .hero__card-content .hero__card-icon .react__user img {
            width: 35px;
            border-radius: 50%
        }

        @-webkit-keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes slide-top {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }

            100% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px)
            }
        }

        @keyframes slide-top {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0)
            }

            100% {
                -webkit-transform: translateY(-100px);
                transform: translateY(-100px)
            }
        }

        .hero4__area {
            overflow: hidden;
            position: relative;
            background: url(assets/images/hero/01.png) no-repeat center top;
            background-size: cover
        }

        .hero4__area .container.hero4__width {
            max-width: 1200px
        }

        .hero4__area .container.hero4__width .row {
            align-items: center
        }

        .hero4__area .hero4__content span {
            font-size: 24px;
            font-weight: 700;
            color: #fd4680
        }

        .hero4__area .hero4__content h1 {
            font-size: 70px;
            line-height: 74px;
            font-weight: 700;
            color: #fff;
            padding-bottom: 0;
            margin: 0 0 10px
        }

        .hero4__area .event__video-btn--plays {
            position: relative
        }

        .hero4__area .event__video-btn--plays .event__videos {
            position: relative;
            top: 7px
        }

        .hero4__area .event__video-btn--plays i {
            width: 50px;
            height: 50px;
            line-height: 50px;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, .2);
            display: inline-block;
            text-align: center;
            border-radius: 50px;
            font-size: 28px;
            transition: all .5s ease
        }

        .hero4__area .event__video-btn--plays i:hover {
            border-color: #3270fc
        }

        .hero4__area .event__video-btn--plays em {
            color: #fff;
            line-height: 25px;
            font-weight: 600;
            font-size: 16px;
            text-align: left;
            margin-left: 10px;
            font-style: normal;
            position: relative;
            top: -9px;
            transition: all .5s ease
        }

        .hero4__area .event__video-btn--plays .event__videos:hover {
            color: #3270fc
        }

        .hero4__area .event__video-btn--plays .event__videos:hover i {
            border-color: #3270fc;
            color: #3270fc
        }

        .hero4__area .event__video-btn--plays .event__videos:hover em {
            color: #3270fc
        }

        .hero4__area .hero4__content p {
            font-size: 18px;
            line-height: 28px;
            font-weight: 400;
            color: #fff;
            padding-bottom: 16px
        }

        .hero4__area .hero4__content .hero4-btn {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            background: #fff;
            padding: 14px 35px 14px 35px;
            color: #0f1216;
            display: inline-block;
            margin-top: 0;
            line-height: 20px;
            margin-right: 25px
        }

        .hero4__area .hero4__content .hero4-btn:hover {
            background: #3270fc;
            color: #fff
        }

        .hero4__area .hero4__image {
            padding-top: 90px;
            padding-left: 56px
        }

        .hero4__area .hero4__image-1 {
            position: relative;
            z-index: 1
        }

        .hero4__area .hero4__image-2 {
            position: absolute;
            top: 50%;
            right: 17.4%;
            -webkit-animation: hero3-image 3s linear infinite alternate;
            -moz-animation: hero3-image 3s linear infinite alternate;
            -o-animation: hero3-image 3s linear infinite alternate;
            animation: hero3-image 3s linear infinite alternate
        }

        .hero4__area .hero4__image-course {
            border-radius: 50%;
            position: absolute;
            box-shadow: 0 30px 40px 0 rgba(122, 0, 39, .2);
            background-color: #fd467f;
            top: 69.5%;
            right: 71.5%;
            width: 150px;
            height: 150px;
            -webkit-animation: hero3-image 3s linear infinite alternate;
            -moz-animation: hero3-image 3s linear infinite alternate;
            -o-animation: hero3-image 3s linear infinite alternate;
            animation: hero3-image 3s linear infinite alternate
        }

        .hero4__area .hero4__shape img {
            position: absolute;
            z-index: 1
        }

        .hero4__area .hero4__shape-1 {
            bottom: 60%;
            left: 13%;
            -webkit-animation: hero-leaf 3s linear infinite alternate;
            -moz-animation: hero-leaf 3s linear infinite alternate;
            -o-animation: hero-leaf 3s linear infinite alternate;
            animation: hero-leaf 3s linear infinite alternate
        }

        .hero4__area .hero4__shape-2 {
            top: 50%;
            left: 0;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .hero4__area .hero4__shape-3 {
            top: 53%;
            left: 54%;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .hero4__area .hero4__shape-4 {
            top: 38%;
            right: 13%;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .hero4__area .hero4__shape-5 {
            top: 76%;
            right: 12%;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        @keyframes hero-leaf {
            0% {
                transform: translateY(-50px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes hero-leaf-2 {
            0% {
                transform: translateY(0)
            }

            100% {
                transform: translateY(-30px)
            }
        }

        @keyframes hero3-image {
            0% {
                transform: translateY(-20px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes hero-leaf-4 {
            0% {
                transform: translateX(-30px)
            }

            100% {
                transform: translateX(0)
            }
        }

        .react-course-filter {
            background: #f5f5f5
        }

        .react-course-filter.related__course {
            background: 0 0;
            padding-top: 90px
        }

        .react-course-filter.related__course h3 {
            font-weight: 700;
            color: #0f1216;
            font-size: 20px;
            padding-bottom: 10px
        }

        .react-course-filter.related__course .single-studies .inner-course {
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            border-radius: 6px;
            background: #fff
        }

        .react-course-filter .react-filter {
            padding-bottom: 65px
        }

        .react-course-filter .react-filter button {
            border: none;
            margin: 0 0 0 15px;
            color: #5b5f64;
            padding: 4px 30px 6px;
            border-radius: 6px;
            font-weight: 400;
            transition: all .5s ease 0s;
            background: #fff;
            box-shadow: 0 1px 2px rgba(0, 14, 32, .1)
        }

        .react-course-filter .react-filter button:hover {
            background: #3270fc;
            color: #fff
        }

        .react-course-filter .react-filter button.active {
            background: #3270fc;
            color: #fff
        }

        .react-course-filter .react__title__section h2 {
            font-size: 44px;
            line-height: 56px;
            color: #0f1216
        }

        .react-course-filter .react__title__section h6 {
            font-size: 18px;
            color: #5b5f64;
            line-height: 22px;
            font-weight: 400;
            margin-top: 15px;
            display: block
        }

        .react-course-filter .single-studies {
            margin-bottom: 25px
        }

        .react-course-filter .single-studies .inner-course {
            background: #fff;
            border-radius: 10px
        }

        .react-course-filter .single-studies .inner-course .case-img {
            position: relative
        }

        .react-course-filter .single-studies .inner-course .case-img a {
            font-size: 14px;
            line-height: 17px;
            font-weight: 600;
            background: #3270fc;
            display: inline-block;
            padding: 4px 9px 7px;
            color: #fff;
            border-radius: 4px;
            position: absolute;
            right: 22px;
            top: 20px
        }

        .react-course-filter .single-studies .inner-course .case-content {
            padding: 30px 38px 20px 35px
        }

        .react-course-filter .single-studies .inner-course .case-content .case-title {
            margin: 6px 0 30px;
            font-size: 20px;
            font-weight: 600
        }

        .react-course-filter .single-studies .inner-course .case-content .case-title a {
            color: #0f1216
        }

        .react-course-filter .single-studies .inner-course .case-content .case-title a:hover {
            color: #3270fc
        }

        .react-course-filter .single-studies .inner-course .case-content .react__user {
            font-size: 16px;
            color: #5b5f64;
            font-weight: 400
        }

        .react-course-filter .single-studies .inner-course .case-content .react__user img {
            margin-right: 12px;
            height: 30px
        }

        .react-course-filter .single-studies .inner-course .case-content .react-ratings {
            border-top: 1px solid #eee;
            margin-top: 40px;
            padding-top: 14px;
            justify-content: space-between
        }

        .react-course-filter .single-studies .inner-course .case-content .react-ratings li:last-child {
            padding-right: 0
        }

        .react-course-filter .single-studies .inner-course .case-content .react-ratings li.price {
            color: #0f1216;
            font-size: 20px;
            font-weight: 600
        }

        .react-course-filter .single-studies .inner-course .case-content ul {
            display: flex
        }

        .react-course-filter .single-studies .inner-course .case-content ul li {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #5b5f64;
            font-weight: 400;
            padding-right: 30px
        }

        .react-course-filter .single-studies .inner-course .case-content ul li svg {
            margin-right: 10px;
            width: 20px
        }

        .react-course-filter .single-studies .inner-course .case-content ul li svg.feather-star {
            color: #ffa439
        }

        .owl-controls {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 1170px
        }

        .owl-controls .owl-dots {
            position: absolute;
            bottom: 0;
            left: 0
        }

        .owl-controls .owl-dots .owl-dot {
            display: inline-block;
            margin-right: 10px
        }

        .owl-controls .owl-dots .owl-dot span {
            display: inline-block;
            height: 15px;
            width: 15px;
            background: 0 0;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 100%;
            transition: all .5s ease 0s
        }

        .owl-controls .owl-dots .owl-dot.active span {
            background: #fff
        }

        .owl-controls .owl-dots .owl-dot:last-child {
            border-right: none
        }

        .owl-controls .owl-nav {
            display: none
        }

        .home-sliders {
            position: relative
        }

        .home-sliders .slider-content {
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .home-sliders .slider-content .slider-title {
            font-size: 70px;
            margin-bottom: 15px;
            color: #fff;
            line-height: 74px;
            font-weight: 700;
            display: block;
            margin-top: 20px
        }

        .home-sliders .slider-content .slider-pretitle {
            padding: 3px 15px 8px;
            font-size: 26px;
            color: #fff;
            margin-bottom: 22px;
            font-weight: 400;
            line-height: 32px;
            background: #d2093c
        }

        .home-sliders .slider-content .slider-desc {
            font-size: 18px;
            color: #fff
        }

        .home-sliders .slider-content .slider-btn {
            margin-top: 32px
        }

        .home-sliders .slider-content .slider-btn .react-btn-border {
            background: 0 0;
            color: #fff
        }

        .home-sliders .slider-content .slider-btn .react-btn-border:hover {
            background: #d2093c;
            color: #fff;
            border-color: #d2093c
        }

        .home-sliders .event__video-btn--play-btn {
            color: #00306e
        }

        .home-sliders .owl-nav {
            position: absolute;
            display: block;
            top: 43%;
            right: unset;
            width: 100%;
            opacity: 1;
            transition: all .5s ease 0s
        }

        .home-sliders .owl-nav [class*=owl-] {
            position: absolute;
            left: 20px;
            display: inline-block;
            font-size: 0;
            width: 70px;
            height: 70px;
            line-height: 70px;
            color: #fff;
            background: 0 0;
            border: 2px solid rgba(245, 245, 245, .08);
            border-radius: 100%;
            transition: all .5s ease 0s
        }

        .home-sliders .owl-nav [class*=owl-]:before {
            content: "\35";
            font-family: "Font Awesome 6 Free",sans-serif;
            font-weight: 900;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 45px;
            color: rgba(255, 255, 255, .48);
            line-height: 28px
        }

        .home-sliders .owl-nav [class*=owl-].owl-next {
            left: auto;
            right: 70px
        }

        .home-sliders .owl-nav [class*=owl-].owl-next span {
            font-size: 0
        }

        .home-sliders .owl-nav [class*=owl-].owl-prev {
            left: 70px;
            right: auto
        }

        .home-sliders .owl-nav [class*=owl-].owl-prev:before {
            content: '\34'
        }

        .home-sliders .owl-nav [class*=owl-].owl-prev span {
            font-size: 0
        }

        .home-sliders .owl-nav [class*=owl-]:hover {
            color: #00306e;
            background: #fff;
            border-color: #fff
        }

        .home-sliders .owl-nav [class*=owl-]:hover:before {
            color: #3270fc
        }

        .home-sliders .event__video-btn--play {
            right: 28%;
            left: auto
        }

        .home-sliders .event__video-btn--play em {
            position: absolute;
            width: 250px;
            color: #fff;
            margin-left: 50px;
            line-height: 25px;
            font-weight: 700;
            font-size: 20px;
            text-align: left;
            margin-top: 20px;
            font-style: normal
        }

        .my-element {
            animation: bounce;
            animation-duration: 8s
        }

        .category__area {
            padding: 115px 0 125px 0
        }

        .category__area .container.category__width {
            max-width: 1030px;
            position: relative
        }

        .category__area .container.category__width:before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            bottom: -21px;
            left: 0;
            right: 0;
            background: #eef4fe;
            border-radius: 50%;
            margin: 0 auto
        }

        .category__area .container.category__width .row {
            justify-content: center
        }

        .category__area .category__top-wrapper {
            padding-bottom: 38px
        }

        .category__area .category__top-wrapper-1 {
            font-size: 16px;
            font-weight: 600;
            color: #3563cc
        }

        .category__area .category__top-wrapper-2 {
            font-size: 40px;
            font-weight: 800;
            line-height: 50px;
            color: #020334
        }

        .category__area .category__wrapper {
            max-width: 100%;
            padding: 8px 22px 8px 22px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 30px 40px 0 rgba(0, 16, 35, .12);
            display: flex;
            align-items: center
        }

        .category__area .category__wrapper img {
            display: inline-block;
            width: 34px;
            height: 34px
        }

        .category__area .category__wrapper img:not(:last-child) {
            margin-right: 10px
        }

        .category__area .category__wrapper h4 {
            display: inline-block;
            font-size: 16px;
            font-weight: 800;
            line-height: 50px;
            vertical-align: sub;
            margin: 0
        }

        .category__area .category__wrapper h4 a {
            color: #00306e
        }

        .category__area .category__wrapper:hover a {
            color: #3270fc
        }

        .category__area .category__wrapper.category__wrapper2 img {
            height: 36px
        }

        .category__area .category__wrapper.category__wrapper6 img {
            height: 29px
        }

        .category__area .category__inner {
            position: relative;
            z-index: 1;
            transition: all .5s ease 0s;
            cursor: pointer;
            border-left: 3px solid #fff;
            border-radius: 6px
        }

        .category__area .category__inner:hover {
            transform: translateY(-2px);
            border-color: #3270fc
        }

        .react-logo-area.brand__area {
            padding: 0 0 120px
        }

        .react-logo-area.brand__area .brand__width {
            background: #f6f6fb;
            max-width: 1170px;
            margin: 0 auto;
            padding: 45px 0 70px;
            border-radius: 12px
        }

        .react-logo-area .brand__title {
            padding: 5px;
            display: inline-block;
            font-size: 24px;
            font-weight: 800;
            line-height: 50px;
            color: #020334
        }

        .react-logo-area .brand__slider {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center
        }

        .react-logo-area .brand__slider .brand__item {
            padding: 0 40px
        }

        .hero3__area {
            overflow: hidden;
            background: url(assets/images/banner2/bg2.png) no-repeat center top;
            padding-bottom: 180px;
            padding-top: 160px;
            background-size: cover
        }

        .hero3__area .about__content {
            max-width: 640px;
            margin: 0 auto;
            padding-top: 30px
        }

        .hero3__area .about__content ul {
            margin: 0;
            padding: 0;
            display: flex
        }

        .hero3__area .about__content ul li {
            display: flex;
            align-items: center;
            border-top: 1px solid #ededed;
            padding: 30px 28px
        }

        .hero3__area .about__content ul li:first-child {
            border-top: none
        }

        .hero3__area .about__content ul li .icon {
            margin-right: 15px
        }

        .hero3__area .about__content ul li .icon img {
            margin-top: -50px
        }

        .hero3__area .about__content ul li .text {
            flex: 1
        }

        .hero3__area .about__content ul li .text h4 {
            margin: 0 0 14px;
            font-weight: 700;
            font-size: 40px;
            line-height: 50px
        }

        .hero3__area .about__content ul li .text p {
            margin: 0;
            font-size: 16px;
            line-height: 22px;
            color: #5b5f64
        }

        .hero3__area .about__content ul li a {
            border-radius: 50%;
            width: 44px;
            height: 44px;
            border: 2px solid #ededed;
            text-align: center;
            line-height: 36px
        }

        .hero3__area .about__content ul li a svg {
            width: 18px;
            color: #00306e
        }

        .hero3__area .about__content ul li a:hover {
            background: #3270fc;
            color: #fff
        }

        .hero3__area .about__content ul li a:hover svg {
            color: #fff
        }

        .hero3__area .hero3__content {
            text-align: center
        }

        .hero3__area .hero3__content .hero3__title {
            font-size: 70px;
            line-height: 74px;
            font-weight: 600;
            color: #0f1216;
            margin: 0
        }

        .hero3__area .hero3__content .hero3__title em {
            color: #3270fc;
            font-style: normal
        }

        .hero3__area .hero3__content .search-form {
            background: #fff;
            border-radius: 0;
            padding: 14px 18px 16px 25px;
            box-shadow: 0 20px 20px rgba(0, 14, 32, .1);
            max-width: 570px;
            margin: 40px auto 25px;
            position: relative;
            border-left: 3px solid #3270fc
        }

        .hero3__area .hero3__content .search-form [type=text] {
            border: none;
            color: #4b5b70;
            font-size: 14px;
            outline: 0;
            background: 0 0;
            width: 100%
        }

        .hero3__area .hero3__content .search-form button {
            border: none;
            background: 0 0;
            padding: 0;
            position: absolute;
            right: 20px
        }

        .hero3__area .hero3__content .hero3__paragraph {
            font-size: 16px;
            line-height: 20.11px;
            color: #00306e
        }

        .hero3__area .hero3__content .hero3__paragraph a {
            color: #3270fc
        }

        .hero3__area .hero3__content .hero3__paragraph a svg {
            width: 18px
        }

        .p-relative {
            position: relative
        }

        .hero3__image {
            margin-left: 0;
            position: absolute;
            right: -10%;
            top: 8%
        }

        .hero3__image .hero3__image-1 {
            border-radius: 50%
        }

        .hero3__image-2 {
            position: absolute;
            top: 56%;
            right: -22%;
            -webkit-animation: hero3-image 3s linear infinite alternate;
            -moz-animation: hero3-image 3s linear infinite alternate;
            -o-animation: hero3-image 3s linear infinite alternate;
            animation: hero3-image 3s linear infinite alternate
        }

        .hero3__shape img {
            position: absolute;
            z-index: 1
        }

        .hero3__shape-1 {
            top: 32%;
            left: 2%;
            -webkit-animation: hero-leaf 3s linear infinite alternate;
            -moz-animation: hero-leaf 3s linear infinite alternate;
            -o-animation: hero-leaf 3s linear infinite alternate;
            animation: hero-leaf 3s linear infinite alternate
        }

        .hero3__shape-2 {
            top: 44%;
            left: 4.5%;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .hero3__shape-3 {
            top: 57%;
            left: 72%;
            -webkit-animation: hero-leaf-4 3s linear infinite alternate;
            -moz-animation: hero-leaf-4 3s linear infinite alternate;
            -o-animation: hero-leaf-4 3s linear infinite alternate;
            animation: hero-leaf-4 3s linear infinite alternate
        }

        .hero3__shape-4 {
            top: 14.5%;
            right: 19%;
            -webkit-animation: hero-leaf-4 3s linear infinite alternate;
            -moz-animation: hero-leaf-4 3s linear infinite alternate;
            -o-animation: hero-leaf-4 3s linear infinite alternate;
            animation: hero-leaf-4 3s linear infinite alternate
        }

        .hero3__shape-5 {
            top: 69%;
            right: 9%;
            -webkit-animation: hero-leaf 3s linear infinite alternate;
            -moz-animation: hero-leaf 3s linear infinite alternate;
            -o-animation: hero-leaf 3s linear infinite alternate;
            animation: hero-leaf 3s linear infinite alternate
        }

        .hero3__shape-6 {
            top: 30%;
            right: 0;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        @keyframes hero-leaf {
            0% {
                transform: translateY(-50px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes hero-leaf-2 {
            0% {
                transform: translateY(0)
            }

            100% {
                transform: translateY(-30px)
            }
        }

        @keyframes hero3-image {
            0% {
                transform: translateY(-20px)
            }

            100% {
                transform: translateY(0)
            }
        }

        @keyframes hero-leaf-4 {
            0% {
                transform: translateX(-30px)
            }

            100% {
                transform: translateX(0)
            }
        }

        .react_populars_topics .container {
            max-width: 1200px
        }

        .react_populars_topics .item__inner {
            border: 2px solid rgba(15, 22, 41, .078);
            border-radius: 6px;
            padding: 40px 35px 35px 35px;
            position: relative;
            transition: all .5s ease 0s;
            margin-bottom: 30px;
            text-align: center
        }

        .react_populars_topics .item__inner:before {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: -3px;
            border-radius: 6px 6px 0 0;
            height: 8px;
            width: 100%;
            z-index: 1;
            border-top: 3px solid #3270fc;
            transition: all .5s ease 0s;
            opacity: 0
        }

        .react_populars_topics .item__inner h3 {
            font-size: 20px;
            font-weight: 600;
            line-height: 26px;
            margin: 25px 0 0
        }

        .react_populars_topics .item__inner h3 a {
            color: #00306e
        }

        .react_populars_topics .item__inner h3 a:hover {
            color: #3270fc
        }

        .react_populars_topics .item__inner p {
            font-size: 16px;
            color: #5b5f64;
            margin: 0;
            line-height: 20px
        }

        .react_populars_topics .item__inner:hover {
            box-shadow: 0 30px 50px 0 rgba(0, 15, 56, .1), inset 0 3px 0 0 rgba(42, 109, 245, .004);
            border-color: #fff
        }

        .react_populars_topics .item__inner:hover:before {
            opacity: 1
        }

        .react_populars_topics.react_populars_topics .item__inner {
            text-align: left
        }

        .react_populars_topics.react_populars_topics2 .item__inner {
            border: none;
            border-radius: 10px;
            padding: 40px 35px 35px 35px;
            position: relative;
            transition: all .5s ease 0s;
            margin-bottom: 30px;
            text-align: left;
            box-shadow: 0 30px 60px rgba(15, 18, 22, .1)
        }

        .react_populars_topics.react_populars_topics2 .item__inner:before {
            opacity: 0
        }

        .react_populars_topics.react_populars_topics2 .item__inner h3 {
            font-weight: 700;
            margin: 25px 0 14px
        }

        .react_populars_topics.react_populars_topics2 .item__inner h3 a {
            color: #0f1216;
            font-size: 20px;
            font-weight: 700
        }

        .react_populars_topics.react_populars_topics2 .item__inner h3 a:hover {
            color: #3270fc
        }

        .react_populars_topics.react_populars_topics2 .item__inner p {
            font-size: 16px;
            color: #5b5f64;
            margin: 0;
            line-height: 24px
        }

        .react_populars_topics.react_populars_topics2 .item__inner a {
            font-size: 14px;
            font-weight: 600;
            color: #0f1216;
            display: inline-block;
            margin-top: 16px
        }

        .react_populars_topics.react_populars_topics2 .item__inner a svg {
            width: 18px
        }

        .react_populars_topics.react_populars_topics2 .item__inner a:hover {
            color: #3270fc
        }

        .react_populars_topics.react_populars_topics2 .item__inner:hover {
            box-shadow: 0 30px 50px 0 rgba(0, 15, 56, .1), inset 0 3px 0 0 rgba(42, 109, 245, .004);
            border-color: #fff
        }

        .react_populars_topics.react_populars_topics2 .item__inner:hover:before {
            opacity: 0
        }

        .react_populars_topics.react_populars_topics_about .react__title__section-all {
            background: #f2f4f9;
            max-width: 1350px;
            margin: 0 auto;
            padding-top: 100px;
            padding-bottom: 200px;
            border-radius: 10px
        }

        .react_populars_topics.react_populars_topics_about .container {
            margin-top: -200px
        }

        .react_populars_topics.react_populars_topics_about.react_populars_topics.react_populars_topics2 .item__inner {
            background: #fff
        }

        .react__title__section-all h2 {
            font-size: 44px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 10px;
            line-height: 54px
        }

        .react__title__section-all h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0 0 12px
        }

        .react_popular_topics .item__inner {
            position: relative;
            transition: all .5s ease 0s;
            margin-bottom: 30px
        }

        .react_popular_topics .item__inner .icon img {
            width: 100%
        }

        .react_popular_topics .item__inner:before {
            position: absolute;
            content: "";
            left: 0;
            right: 0;
            top: 0;
            border-radius: 6px 6px 0 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            background: linear-gradient(180deg, rgba(15, 18, 22, 0) 46.67%, rgba(15, 18, 22, .9) 91%);
            transition: all .5s ease 0s;
            bottom: 0
        }

        .react_popular_topics .item__inner .react-content {
            position: absolute;
            left: 20px;
            right: 20px;
            bottom: 20px;
            z-index: 2
        }

        .react_popular_topics .item__inner .react-content h3 {
            font-size: 22px;
            color: #fff;
            line-height: 27.65px;
            margin: 0;
            font-weight: 700
        }

        .react_popular_topics .item__inner .react-content h3 a {
            color: #fff
        }

        .react_popular_topics .item__inner .react-content h3 a:hover {
            color: #b5b2b2
        }

        .react_popular_topics .item__inner a.r__link {
            font-size: 14px;
            color: #fff;
            line-height: 17.6px;
            margin: 0;
            font-weight: 700
        }

        .react_popular_topics .item__inner a.r__link svg {
            width: 18px
        }

        .react_popular_topics .item__inner a.r__link:hover {
            color: #b5b2b2
        }

        .react_popular_topics .item__inner:hover:before {
            background: rgba(15, 18, 22, .8)
        }

        .react_popular_topics .item__inner:hover a.r__link {
            color: #b5b2b2
        }

        .about__area h2 {
            font-size: 50px;
            font-weight: 700;
            line-height: 54px
        }

        .about__area h2 em {
            color: #d2093c;
            font-style: normal
        }

        .about__area.about__area_one .about__content {
            padding-top: 60px;
            padding-left: 60px
        }

        .about__area.about__area_one .about__paragraph {
            font-size: 20px;
            color: #777;
            line-height: 30px
        }

        .about__area.about__area_one p.about__paragraph2 {
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 44px;
            margin-bottom: 38px
        }

        .about__area.about__area_one p {
            font-size: 16px;
            line-height: 26px;
            color: #777
        }

        .about__area.about__area_one p a {
            color: #d2093c;
            text-decoration: underline !important;
            font-weight: 700
        }

        .about__area.about__area_one p a svg {
            width: 18px
        }

        .about__area.about__area_one p a:hover {
            opacity: .9
        }

        .about__area.about__area_one ul {
            display: flex;
            margin-top: 40px
        }

        .about__area.about__area_one ul li .more-about {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 14px 35px 14px 35px;
            color: #00306e;
            display: inline-block;
            line-height: 20px
        }

        .about__area.about__area_one ul li .more-about svg {
            width: 18px
        }

        .about__area.about__area_one ul li .more-about:hover {
            background: #d2093c;
            color: #fff;
            border-color: #d2093c
        }

        .about__area.about__area_one ul li.last-li {
            background: url(assets/images/about/comment.png) no-repeat left top;
            padding-left: 72px;
            margin-left: 30px
        }

        .about__area.about__area_one ul li.last-li em {
            display: block;
            font-size: 14px;
            color: #999;
            line-height: 15px;
            margin-top: 5px;
            font-style: normal
        }

        .about__area.about__area_one ul li.last-li a {
            font-size: 18px;
            color: #00306e;
            font-weight: 700
        }

        .about__area.about__area_one ul li.last-li a:hover {
            color: #d2093c
        }

        .about2__area h2 {
            color: #0f1216;
            font-size: 44px;
            line-height: 56px
        }

        .about2__area h2 em {
            color: #3270fc
        }

        .about2__area .about__image {
            position: relative
        }

        .about2__area .react__shape__1 {
            position: absolute;
            left: -8%;
            top: 57%;
            -webkit-animation: slide-top 5s linear infinite alternate;
            animation: slide-top 5s linear infinite alternate;
            z-index: 1
        }

        .about2__area .about__content {
            padding-left: 70px
        }

        .about2__area .about__content .about__paragraph {
            font-size: 18px;
            line-height: 28px;
            color: #5b5f64
        }

        .about2__area .react__shape__2 {
            position: absolute;
            right: 60px;
            bottom: -30px;
            z-index: -1
        }

        .about2__area .react__shape__11 {
            position: absolute;
            left: -22px;
            top: -23px;
            z-index: -1
        }

        .about2__area .react__shape__33 {
            position: absolute;
            right: -13px;
            top: 60px;
            -webkit-animation: slide-top 5s linear infinite alternate-reverse;
            animation: slide-top 5s linear infinite alternate-reverse;
            z-index: 2
        }

        .about2__area .about__btn a {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #00306e;
            display: inline-block;
            margin-top: 30px;
            line-height: 20px
        }

        .about2__area .about__btn a svg {
            width: 18px
        }

        .about2__area .about__btn a:hover {
            background: #3270fc;
            color: #fff
        }

        .about2__area ul {
            margin: 0;
            padding: 0;
            overflow: hidden
        }

        .about2__area ul li {
            font-size: 16px;
            color: #0f1216;
            font-weight: 600;
            padding-bottom: 15px
        }

        .about2__area ul li i {
            margin-right: 10px;
            position: relative;
            background: rgba(210, 9, 60, .1);
            padding: 8px;
            color: #3270fc;
            border-radius: 50%;
            display: inline-block;
            margin-left: 5px
        }

        .about2__area.about2__area .about__content {
            padding-left: 0
        }

        .about2__area.about2__area .about__content h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0 0 12px
        }

        .about2__area.about2__area .about__content .about__btn a {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: none;
            padding: 16px 35px 16px 35px;
            color: #fff;
            display: inline-block;
            margin-top: 30px;
            line-height: 20px;
            background: #3270fc
        }

        .about2__area.about2__area .about__content .about__btn a:hover {
            opacity: .9;
            color: #fff
        }

        .about2__area.about3__area .about__content {
            padding-top: 85px
        }

        .react-breadcrumbs .breadcrumbs-wrap {
            position: relative;
            overflow: hidden
        }

        .react-breadcrumbs .breadcrumbs-wrap .container {
            position: relative
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner {
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text {
            text-align: center
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .breadcrumbs-title {
            width: 100%;
            font-size: 60px;
            text-transform: capitalize;
            color: #fff;
            font-weight: 700;
            line-height: 1;
            margin: 0 0 15px
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li {
            display: inline;
            color: #fff;
            font-size: 16px;
            font-weight: 400;
            opacity: .8
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li a {
            color: #fff
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li a:hover {
            opacity: .7
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li:after {
            content: "";
            margin: 0 6px 0 12px;
            background: #fff;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            display: inline-block
        }

        .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li:last-child:after {
            content: unset;
            margin: 0
        }

        .react-breadcrumbs.react-breadcrumbs-single .container {
            max-width: 1200px
        }

        .react-breadcrumbs.react-breadcrumbs-single .container .single-cate {
            background: #fff;
            color: #00306e;
            display: inline-block;
            padding: 4px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px
        }

        .react-breadcrumbs.react-breadcrumbs-single .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner {
            top: 61%
        }

        .react-breadcrumbs.react-breadcrumbs-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text {
            text-align: left
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .container {
            max-width: 1200px
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text {
            text-align: left
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text span {
            font-size: 16px;
            color: #fff;
            margin-bottom: 15px;
            display: block
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li {
            font-size: 14px;
            color: #fff;
            margin-right: 30px;
            opacity: 1
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li svg {
            width: 17px;
            height: 17px;
            margin-right: 4px;
            position: relative;
            top: -2px
        }

        .react-breadcrumbs.react-breadcrumbs-blog-single .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .back-nav ul li:after {
            display: none
        }

        .react_featured_online {
            background: #f5f5f5
        }

        .react_featured_online .container {
            max-width: 1200px
        }

        .react_featured_online .container .border-btns {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #00306e;
            display: inline-block;
            margin-top: 30px;
            line-height: 20px
        }

        .react_featured_online .container .border-btns svg {
            width: 18px
        }

        .react_featured_online .container .border-btns:hover {
            background: #3270fc;
            color: #fff
        }

        .react_featured_online .item__inner {
            display: flex;
            background: #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            border-radius: 6px;
            padding: 35px 30px;
            align-items: center;
            margin-bottom: 23px
        }

        .react_featured_online .item__inner .icon {
            flex: 0 0 45%
        }

        .react_featured_online .item__inner .icon img {
            height: 130px
        }

        .react_featured_online .item__inner .react-content {
            flex: 0 0 55%
        }

        .react_featured_online .item__inner .react-content h5 {
            margin: 0;
            color: #d2093c;
            font-size: 20px;
            font-weight: 600
        }

        .react_featured_online .item__inner .react-content h3 {
            margin: 10px 0 18px;
            color: #d2093c;
            font-size: 20px;
            font-weight: 600
        }

        .react_featured_online .item__inner .react-content h3 a {
            color: #0f1216
        }

        .react_featured_online .item__inner .react-content h3 a:hover {
            color: #3270fc
        }

        .react_featured_online .item__inner .react-content ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            align-items: center
        }

        .react_featured_online .item__inner .react-content ul li {
            color: #5b5f64;
            font-size: 16px;
            line-height: 20px;
            padding-right: 30px
        }

        .react_featured_online .item__inner .react-content ul li svg {
            width: 18px;
            position: relative;
            top: -2px;
            margin-right: 2px
        }

        .react_featured_online .item__inner .react-content ul li:last-child {
            padding-right: 0
        }

        .react_featured_online .item__inner:hover {
            box-shadow: 0 30px 30px rgba(15, 18, 22, .1)
        }

        .accordion__area {
            position: relative
        }

        .accordion__area .accordion__wrapper-1 h2 {
            font-size: 44px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 10px;
            line-height: 54px
        }

        .accordion__area .accordion__wrapper-1 h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0
        }

        .accordion__area .accordion__wrapper-1 p {
            font-size: 16px;
            color: #5b5f64;
            line-height: 26px
        }

        .accordion__area .accordion__wrapper-1 a.border-btns {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #00306e;
            display: inline-block;
            margin-top: 10px;
            line-height: 20px
        }

        .accordion__area .accordion__wrapper-1 a.border-btns svg {
            width: 18px
        }

        .accordion__area .accordion__wrapper-1 a.border-btns:hover {
            background: #3270fc;
            color: #fff
        }

        .accordion__area .accordion-item {
            border: none;
            margin-bottom: 10px;
            box-shadow: 0 20px 40px rgba(15, 18, 22, .1);
            border-radius: 6px
        }

        .accordion__area .accordion-button {
            padding: 20px 37px;
            border-radius: 6px;
            border: none
        }

        .accordion__area .accordion .accordion-header .accordion-button {
            font-size: 18px;
            font-weight: 600;
            color: #020334;
            border-radius: 0;
            box-shadow: none
        }

        .accordion__area .accordion .accordion-header .accordion-button::after {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            right: 28px;
            top: 45%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            font-family: "Font Awesome 6 Free",sans-serif;
            font-size: 22px;
            color: #091524;
            background-image: none;
            font-weight: 900;
            content: "\33"
        }

        .accordion__area .accordion .accordion-header .accordion-button:focus {
            box-shadow: none
        }

        .accordion__area .accordion .accordion-header .accordion-button.collapsed::after {
            content: "\32"
        }

        .accordion__area .accordion__shape img {
            position: absolute
        }

        .accordion__area .accordion__shape-1 {
            left: 39%;
            bottom: -14%;
            z-index: -1
        }

        .accordion__area .accordion__shape-1a {
            left: 7%;
            top: 72%;
            z-index: 1
        }

        .accordion__area.accordion__area .accordion-button:not(.collapsed) {
            background: 0 0;
            color: #3270fc;
            font-size: 20px
        }

        .accordion__area.accordion__area .accordion-button:not(.collapsed):after {
            color: #3270fc
        }

        .accordion__area.accordion__area .accordion-button:hover {
            background: 0 0;
            color: #3270fc;
            font-size: 20x
        }

        .accordion__area.accordion__area .accordion-button:hover:after {
            color: #3270fc
        }

        .accordion__area .accordion .accordion-body {
            padding-top: 0
        }

        .accordion__area .accordion .accordion-body p {
            font-size: 16px;
            font-weight: 400;
            color: #5b5f64;
            margin: 0;
            padding: 0 15px 24px
        }

        .instructor__area .container {
            max-width: 1590px
        }

        .instructor__area .container .instructors_lefts {
            text-align: left;
            padding-left: 120px
        }

        .instructor__area .container .instructors_lefts h2 {
            font-size: 44px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 10px;
            line-height: 54px
        }

        .instructor__area .container .instructors_lefts h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0
        }

        .instructor__area .container .instructor__content-one {
            box-shadow: none !important
        }

        .instructor__area .instructor__content h4 {
            margin: 0
        }

        .instructor__area .instructor__content p {
            margin: 0
        }

        .instructor__area .instructor__pre-title {
            font-size: 16px;
            font-weight: 600;
            color: #2a6df5
        }

        .instructor__area .instructor__content {
            display: flex;
            flex-direction: column;
            padding-top: 34px;
            padding-bottom: 34px
        }

        .instructor__area .instructor__content-1 img {
            background-size: cover;
            border: 5px solid #fff;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            box-shadow: 0 10px 30px rgba(15, 18, 22, .1)
        }

        .instructor__area .instructor__content-2 {
            margin-top: 15px
        }

        .instructor__area .instructor__content-2 h4 a {
            font-size: 20px;
            font-weight: 600;
            color: #0f1216
        }

        .instructor__area .instructor__content-2 h4 a:hover {
            color: #2a6df5;
            -webkit-transition: all .3s ease-out 0s;
            -moz-transition: all .3s ease-out 0s;
            -ms-transition: all .3s ease-out 0s;
            -o-transition: all .3s ease-out 0s;
            transition: all .3s ease-out 0s
        }

        .instructor__area .instructor__content-2 p {
            margin-top: 0;
            font-size: 16px;
            font-weight: 400;
            color: #5b5f64;
            line-height: 20px
        }

        .instructor__area .instructor__content-3 {
            margin-top: 5px
        }

        .instructor__area .instructor__content-3 ul li {
            display: inline-block;
            margin: 0 7px
        }

        .instructor__area .instructor__content-3 ul li:not(:last-child) {
            margin-right: 7px
        }

        .instructor__area .instructor__content-3 ul li a {
            font-size: 14px;
            font-weight: 500;
            color: #58606c;
            display: inline-block;
            text-align: center
        }

        .instructor__area .instructor__content-3 ul li a:hover {
            color: #2a6df5;
            -webkit-transition: all .3s ease-out 0s;
            -moz-transition: all .3s ease-out 0s;
            -ms-transition: all .3s ease-out 0s;
            -o-transition: all .3s ease-out 0s;
            transition: all .3s ease-out 0s
        }

        .instructor__area .instructor__content:hover {
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 30px 40px 0 rgba(1, 11, 60, .06);
            width: 100%;
            -webkit-transition: all .3s ease-out 0s;
            -moz-transition: all .3s ease-out 0s;
            -ms-transition: all .3s ease-out 0s;
            -o-transition: all .3s ease-out 0s;
            transition: all .3s ease-out 0s
        }

        .instructors___page .instructor__content {
            margin-bottom: 30px
        }

        .instructors___page .instructor__content .instructor__image {
            position: relative
        }

        .instructors___page .instructor__content .instructor__image img {
            border-radius: 4px;
            width: 100%
        }

        .instructors___page .instructor__content .instructor__image .content__hover {
            position: absolute;
            bottom: -50px;
            right: 0;
            left: 0;
            padding: 25px;
            opacity: 0;
            transition: all .5s ease
        }

        .instructors___page .instructor__content .instructor__image .content__hover p {
            margin: 0;
            color: #fff;
            font-size: 16px;
            line-height: 20px
        }

        .instructors___page .instructor__content .instructor__image .content__hover ul {
            display: flex;
            justify-content: start;
            margin-left: -5px;
            margin-top: 20px
        }

        .instructors___page .instructor__content .instructor__image .content__hover ul li {
            margin: 0 4px
        }

        .instructors___page .instructor__content .instructor__image .content__hover ul li a {
            border: 2px solid rgba(255, 255, 255, .1);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 37px;
            text-align: center;
            display: inline-block;
            color: #fff
        }

        .instructors___page .instructor__content .instructor__image .content__hover ul li a span {
            font-size: 14px
        }

        .instructors___page .instructor__content .instructor__image .content__hover ul li a:hover {
            background: #3270fc;
            border-color: #3270fc
        }

        .instructors___page .instructor__content .instructor__image:before {
            content: "";
            background: linear-gradient(180deg, rgba(15, 18, 22, 0) 46.67%, rgba(15, 18, 22, .9) 91%);
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 4px;
            opacity: 0;
            transition: all .5s ease
        }

        .instructors___page .instructor__content .bottom-content {
            text-align: center;
            margin-top: 20px;
            transition: all .5s ease
        }

        .instructors___page .instructor__content .bottom-content h4 {
            margin: 0;
            font-size: 20px;
            font-weight: 700
        }

        .instructors___page .instructor__content .bottom-content h4 a {
            color: #0f1216
        }

        .instructors___page .instructor__content .bottom-content h4 a:hover {
            color: #3270fc
        }

        .instructors___page .instructor__content .bottom-content p {
            margin: 0;
            font-size: 16px;
            color: #5b5f64
        }

        .instructors___page .instructor__content:hover .instructor__image:before {
            opacity: 1
        }

        .instructors___page .instructor__content:hover .content__hover {
            opacity: 1;
            bottom: 0
        }

        .instructors___page .instructor__content:hover .bottom-content {
            opacity: 0
        }

        .profile-page .profile-top {
            background: #fff
        }

        .profile-page .profile-top .follows {
            background: #3270fc;
            border-radius: 6px;
            color: #fff;
            padding: 8px 25px;
            text-align: center;
            display: block;
            max-width: 356px;
            font-weight: 600;
            font-size: 16px;
            margin-top: 10px
        }

        .profile-page .profile-top .follows svg {
            width: 18px
        }

        .profile-page .profile-top .follows:hover {
            opacity: .9
        }

        .profile-page .profile-top .teacher__course {
            padding-top: 0;
            margin-top: 50px;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 40px;
            line-height: 30px
        }

        .profile-page .profile-top .follow {
            border: 2px solid #e8eaf0;
            padding: 7px 24px 7px 24px;
            color: #00306e;
            font-size: 15px;
            font-weight: 600;
            border-radius: 5px
        }

        .profile-page .profile-top .follow:hover {
            background: #3270fc;
            border-color: #3270fc;
            color: #fff
        }

        .profile-page .profile-top .user-section {
            display: flex;
            align-items: center;
            padding-bottom: 30px;
            border-bottom: 1px solid #e8eaf0;
            margin-bottom: 30px
        }

        .profile-page .profile-top .user-section li {
            padding-right: 60px;
            line-height: 1.5;
            font-size: 16px;
            color: #0f1216;
            font-weight: 600
        }

        .profile-page .profile-top .user-section li em {
            display: block;
            font-style: normal;
            color: #5b5f64;
            font-weight: 400
        }

        .profile-page .profile-top .user-section li .back-ratings i {
            font-size: 14px;
            color: #ff9415
        }

        .profile-page .profile-top .user-section li.social a {
            color: #898a93;
            margin: 0 6px 0 0;
            font-size: 13px
        }

        .profile-page .profile-top .user-section li.social a:hover {
            color: #3270fc
        }

        .profile-page .profile-top h3 {
            font-size: 26px;
            font-weight: 600;
            color: #0f1216
        }

        .profile-page .react-course-filter.related__course {
            padding-top: 20px
        }

        .profile-page .count__area2 .count__content {
            display: flex;
            align-items: center;
            position: relative;
            border: 1px solid rgba(0, 48, 110, .1);
            border-radius: 6px;
            padding: 30px 25px
        }

        .profile-page .count__area2 .count__content .icon {
            margin-right: 15px
        }

        .profile-page .count__area2 .count__content .icon img {
            position: relative;
            top: -2px
        }

        .profile-page .count__area2 .count__content .text {
            flex: 1
        }

        .profile-page .count__area2 .count__content .text span {
            margin: 0 0 5px;
            font-weight: 400;
            font-size: 40px;
            line-height: 50px;
            color: #0f1216
        }

        .profile-page .count__area2 .count__content .text em {
            margin: 0 0 5px;
            font-weight: 400;
            font-size: 40px;
            line-height: 50px;
            color: #0f1216;
            font-style: normal
        }

        .profile-page .count__area2 .count__content .text p {
            margin: 0;
            font-size: 16px;
            line-height: 18px;
            color: #5b5f64
        }

        .react-clients {
            background: url(assets/images/testimonial/bg.jpg) no-repeat center top;
            background-size: cover
        }

        .react-clients .react__title__section h2 {
            font-size: 44px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 10px;
            line-height: 54px
        }

        .react-clients .react__title__section h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0
        }

        .react-clients .client-slider {
            margin: 0 auto;
            padding: 0;
            list-style: none;
            max-width: 1100px;
            position: relative
        }

        .react-clients .client-slider .single-client {
            position: relative;
            background: #fff;
            padding: 50px 60px 50px;
            border-radius: 10px;
            transition: all .5s ease 0s;
            overflow: hidden;
            border: 2px solid;
            border-color: rgba(2, 3, 52, .05);
            display: flex;
            align-items: center
        }

        .react-clients .client-slider .single-client .client-title {
            color: #0f1216;
            font-size: 20px;
            font-weight: 700;
            margin: 0 0 15px;
            display: block
        }

        .react-clients .client-slider .single-client .client-title em {
            color: #5b5f64;
            font-size: 16px;
            font-weight: 400;
            display: block;
            font-style: normal
        }

        .react-clients .client-slider .single-client .client-content {
            position: relative;
            padding-right: 40px
        }

        .react-clients .client-slider .single-client .client-content p {
            font-size: 20px;
            color: #5b5f64;
            line-height: 32px
        }

        .react-clients .client-slider .single-client .client-content .testimonial__ratings {
            font-size: 16px;
            color: #5b5f64;
            font-weight: 600
        }

        .react-clients .client-slider .single-client .client-content .testimonial__ratings em {
            color: #ffa439
        }

        .react-clients .client-slider .single-client .client-content .testimonial__ratings span em {
            color: #0f1216;
            font-weight: 600;
            font-style: normal
        }

        .react-clients .client-slider .single-client .client-content .comma {
            width: auto;
            position: absolute;
            right: 25px;
            bottom: -31%;
            z-index: 11
        }

        .react-clients .client-slider .single-client .client-author {
            padding: 0;
            width: 230px;
            display: block;
            margin-right: 70px
        }

        .react-clients .client-slider .single-client .client-author img {
            border-radius: 6px
        }

        .react-clients .client-slider.owl-carousel .owl-controls {
            position: unset;
            transform: unset;
            width: auto
        }

        .react-clients .client-slider.owl-carousel .owl-nav {
            position: absolute;
            display: block;
            top: 40%;
            right: unset;
            width: 100%;
            opacity: 1;
            transition: all .5s ease 0s
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-] {
            position: absolute;
            left: 20px;
            display: inline-block;
            font-size: 0;
            width: 70px;
            height: 70px;
            line-height: 67px;
            color: #00306e;
            background: #fff;
            border-radius: 100%;
            transition: all .5s ease 0s;
            border: 4px solid #f2f4f9;
            box-shadow: -6px 20px 30px rgba(15, 18, 22, .06)
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-]:before {
            content: "\35";
            font-family: "Font Awesome 6 Free",sans-serif;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 26px;
            font-weight: 900;
            line-height: 60px
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-].owl-next {
            left: auto;
            right: -35px
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-].owl-prev {
            left: -35px;
            right: auto
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-].owl-prev:before {
            content: '\34'
        }

        .react-clients .client-slider.owl-carousel .owl-nav [class*=owl-]:hover {
            color: #fff;
            background: #3270fc;
            border-color: #3270fc
        }

        .react-clients.react-clientso {
            background: url(assets/images/testimonial/bg3.png) no-repeat center top;
            background-size: cover
        }

        .react-clients.home-testimonial {
            background: #fff !important
        }

        .react-clients.home-testimonial .react__title__section h2 {
            color: #00306e
        }

        .react-clients.home-testimonial .client-slider.owl-carousel .owl-nav [class*=owl-]:hover {
            background: #d2093c;
            border-color: #d2093c
        }

        .react-blog__area.graybg-home {
            background: #f5f5f5
        }

        .react-blog__area.graybg-home .react__title__section h2 {
            color: #00306e
        }

        .react-blog__area.graybg-home .b_date {
            background: #d2093c
        }

        .react-blog__area.graybg-home .blog__card--title a {
            color: #00306e
        }

        .react-blog__area.graybg-home .blog__card--title a:hover {
            color: #d2093c
        }

        .react-blog__area .blog__subtitle {
            font-size: 16px;
            font-weight: 500;
            color: #2a6df5
        }

        .react-blog__area .react__title__section h2 {
            font-size: 44px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 10px;
            line-height: 54px
        }

        .react-blog__area .react__title__section h6 {
            font-size: 16px;
            line-height: 20px;
            color: #d2093c;
            font-weight: 600;
            margin: 0
        }

        .react-blog__area .blog__card {
            border-radius: 6px;
            box-shadow: 0 30px 60px 0 rgba(0, 15, 56, .1);
            margin: 0 3px
        }

        .react-blog__area .blog__thumb {
            position: relative;
            overflow: hidden
        }

        .react-blog__area .blog__thumb--image img {
            border-radius: 6px 6px 0 0;
            transition: all .5s ease 0s
        }

        .react-blog__area .blog__thumb--image img:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1)
        }

        .react-blog__area .b_date {
            font-size: 14px;
            font-weight: 600;
            line-height: 18px;
            padding: 4px 12px 5px 12px;
            color: #fff;
            background-color: #3270fc;
            border-radius: 4px;
            position: absolute;
            z-index: 1;
            right: 6%;
            top: 8%;
            font-style: normal
        }

        .react-blog__area .blog__card--content {
            padding: 28px 36px 32px 37px
        }

        .react-blog__area .blog__card--date {
            font-size: 16px;
            font-weight: 400;
            color: #d2093c
        }

        .react-blog__area .blog__card--title {
            font-size: 20px;
            font-weight: 600;
            line-height: 28px;
            padding: 5px 0 0 0;
            margin: 0 0 16px
        }

        .react-blog__area .blog__card--title a {
            color: #0f1216
        }

        .react-blog__area .blog__card--title:hover a {
            color: #3270fc
        }

        .react-blog__area .blog__card--link {
            font-size: 15px;
            font-weight: 600;
            line-height: 28px;
            color: #00306e
        }

        .react-blog__area .blog__card--link:hover {
            color: #3270fc
        }

        .react-blog__area .blog__card--link-icon {
            vertical-align: middle;
            padding-left: 5px
        }

        .react-blog__area .blog__card--icon {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative
        }

        .react-blog__area .blog__card--icon-1 svg {
            height: 17px;
            line-height: 10px;
            vertical-align: sub;
            color: #5b5f64
        }

        .react-blog__area .blog__card--icon-1 span {
            font-size: 16px;
            font-weight: 400;
            color: #5b5f64;
            padding-left: 2px;
            line-height: 10px;
            vertical-align: middle
        }

        .react-blog__area .blog__card--icon-2 {
            display: flex
        }

        .react-blog__area .blog__card--icon-2-first {
            margin-right: 17px
        }

        .react-blog__area .blog__card--icon-2-first svg {
            height: 17px
        }

        .react-blog__area .blog__card--icon-2-first span {
            vertical-align: middle
        }

        .react-blog__area .blog__card--icon-2-second svg {
            height: 17px
        }

        .react-blog__area .blog__card--icon-2-second span {
            vertical-align: middle
        }

        .campus_sec {
            background: url(assets/images/campus/cam.png) no-repeat center top;
            background-size: cover
        }

        .campus_sec .react__title__section img {
            margin-right: 120px
        }

        .campus_sec .about__image {
            position: relative
        }

        .campus_sec .about__image .shape-1 {
            position: absolute;
            bottom: 90px;
            right: 5px
        }

        .campus_sec .about__content {
            background: #fff;
            padding: 50px 60px;
            margin-right: 15px
        }

        .campus_sec .about__content ul {
            margin: 0;
            padding: 0
        }

        .campus_sec .about__content ul li {
            display: flex;
            align-items: center;
            border-top: 1px solid #ededed;
            padding: 30px 0
        }

        .campus_sec .about__content ul li:first-child {
            border-top: none
        }

        .campus_sec .about__content ul li .icon {
            margin-right: 15px
        }

        .campus_sec .about__content ul li .icon img {
            margin-top: -50px
        }

        .campus_sec .about__content ul li .text {
            flex: 1
        }

        .campus_sec .about__content ul li .text h4 {
            margin: 0 0 14px;
            font-weight: 700;
            font-size: 20px;
            line-height: 25px
        }

        .campus_sec .about__content ul li .text p {
            margin: 0;
            font-size: 16px;
            line-height: 22px;
            color: #4d5765
        }

        .campus_sec .about__content ul li a {
            border-radius: 50%;
            width: 44px;
            height: 44px;
            border: 2px solid #ededed;
            text-align: center;
            line-height: 36px
        }

        .campus_sec .about__content ul li a svg {
            width: 18px;
            color: #00306e
        }

        .campus_sec .about__content ul li a:hover {
            background: #00306e;
            color: #fff
        }

        .campus_sec .about__content ul li a:hover svg {
            color: #fff
        }

        .campus_sec .more-about {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #00306e;
            display: inline-block;
            margin-top: 60px;
            line-height: 20px
        }

        .campus_sec .more-about svg {
            width: 20px
        }

        .campus_sec .more-about:hover {
            background: #d2093c;
            color: #fff;
            border-color: #d2093c
        }

        .popular__course__area {
            background: #fff;
            position: relative
        }

        .popular__course__area .course__item {
            box-shadow: 0 20px 60px 0 rgba(0, 15, 56, .1)
        }

        .popular__course__area .course__item .course__inner {
            padding: 25px 0 17px
        }

        .popular__course__area .course__item .course__inner ul {
            display: flex;
            justify-content: start;
            padding-left: 25px;
            padding-right: 25px
        }

        .popular__course__area .course__item .course__inner ul li {
            font-size: 16px;
            line-height: 22px;
            color: #00306e;
            position: relative;
            padding-left: 16px;
            margin-right: 30px
        }

        .popular__course__area .course__item .course__inner ul li:before {
            content: "";
            position: absolute;
            left: 0;
            background: #00306e;
            width: 6px;
            height: 6px;
            top: 9px;
            border-radius: 50%
        }

        .popular__course__area .course__item .course__inner ul li:first-child {
            color: #d2093c
        }

        .popular__course__area .course__item .course__inner ul li:first-child:before {
            background: #d2093c
        }

        .popular__course__area .course__item .course__inner ul li:last-child {
            margin-right: 0
        }

        .popular__course__area .course__item .react-course-title {
            font-size: 20px;
            line-height: 25px;
            margin: 14px 0 30px;
            font-weight: 600;
            padding-left: 25px;
            padding-right: 25px
        }

        .popular__course__area .course__item .react-course-title a {
            color: #00306e
        }

        .popular__course__area .course__item .react-course-title a:hover {
            color: #d2093c
        }

        .popular__course__area .course__item .course__card-icon {
            justify-content: space-between;
            border-top: 1px solid #ededed;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 15px
        }

        .popular__course__area .course__item .course__card-icon .course__card-icon--1 svg {
            color: #00306e;
            width: 18px
        }

        .popular__course__area .course__item .course__card-icon .course__card-icon--1 span {
            font-weight: 400;
            font-size: 16px;
            color: #4d5765;
            padding-left: 7px
        }

        .popular__course__area .course__item .course__card-icon .react__user {
            font-size: 20px;
            color: #d2093c;
            font-weight: 700
        }

        .popular__course__area .view-courses {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #00306e;
            display: inline-block;
            margin-top: 60px;
            line-height: 20px
        }

        .popular__course__area .view-courses svg {
            width: 20px
        }

        .popular__course__area .view-courses:hover {
            background: #d2093c;
            color: #fff;
            border-color: #d2093c
        }

        .count__area .count__width {
            background: #d2093c;
            padding-top: 50px;
            padding-bottom: 50px
        }

        .count__area .count__width .col-lg-3 {
            border-right: 1px solid rgba(255, 255, 255, .2)
        }

        .count__area .count__width .col-lg-3:last-child {
            border-right: none
        }

        .count__area .count__width .count__content {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px
        }

        .count__area .count__width .count__content .count__content--paragraph {
            font-size: 20px;
            line-height: 24px;
            font-weight: 700;
            margin: 0;
            color: #fff
        }

        .count__area .count__width .count__content .count__content--title-1 {
            font-size: 60px;
            line-height: 75px;
            font-weight: 700;
            margin: 8px 0 5px;
            color: #fff
        }

        .count__area .count__width .count__content .count__content--paragraph2 {
            font-size: 12px;
            line-height: 15px;
            font-weight: 600;
            margin: 0;
            letter-spacing: 3px;
            color: #fff;
            text-transform: uppercase
        }

        .react-upcoming__event {
            background: #f5f5f5;
            padding-top: 98px;
            padding-bottom: 106px
        }

        .react-upcoming__event .event__card {
            background: #fff;
            padding: 25px 32px 42px
        }

        .react-upcoming__event .event__card .event__card--date {
            font-size: 16px;
            line-height: 20px;
            color: #4d5765
        }

        .react-upcoming__event .event__card .event__card--date em {
            font-size: 50px;
            line-height: 62px;
            font-weight: 700;
            font-style: normal;
            display: block;
            color: #d2093c
        }

        .react-upcoming__event .event__card .event_time {
            font-size: 16px;
            color: #d2093c;
            line-height: 22px;
            margin: 28px 0 4px
        }

        .react-upcoming__event .event__card .event__card--title {
            font-size: 20px;
            font-weight: 600;
            line-height: 25px;
            margin: 0
        }

        .react-upcoming__event .event__card .event__card--title a {
            color: #00306e
        }

        .react-upcoming__event .event__card .event__card--title a:hover {
            color: #3270fc
        }

        .react-upcoming__event .event__card .event_location {
            font-size: 16px;
            color: #4d5765;
            margin: 24px 0
        }

        .react-upcoming__event .event__card .event_location svg {
            width: 18px;
            color: #00306e;
            position: relative;
            top: -1px;
            margin-right: 2px
        }

        .react-upcoming__event .event__card .event__card--link {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 8px 35px 7px 35px;
            color: #00306e;
            display: inline-block;
            line-height: 20px;
            width: 100%;
            text-align: center
        }

        .react-upcoming__event .event__card .event__card--link svg {
            width: 20px
        }

        .react-upcoming__event .event__card .event__card--link:hover {
            background: #d2093c;
            color: #fff;
            border-color: #d2093c
        }

        .react-upcoming__event .owl-dots {
            text-align: center;
            margin-top: 50px
        }

        .react-upcoming__event .owl-dots .owl-dot span {
            width: 12px;
            height: 12px;
            background: #c4c4c4;
            display: inline-block;
            border-radius: 50%;
            margin: 0 5px
        }

        .react-upcoming__event .owl-dots .owl-dot.active span {
            background: #d2093c
        }

        .back__course__page_grid .shorting__course {
            background: #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            border-radius: 6px;
            padding: 15px 20px;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 50px
        }

        .back__course__page_grid .shorting__course .all__icons {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .back__course__page_grid .shorting__course .all__icons svg {
            cursor: pointer;
            transform: rotate(90deg);
            position: relative;
            width: 18px;
            color: #3270fc;
            top: -2px
        }

        .back__course__page_grid .shorting__course .all__icons svg.feather-list {
            color: #5c5c68;
            width: 28px;
            height: 28px
        }

        .back__course__page_grid .shorting__course .all__icons .result-count {
            padding-left: 10px;
            color: #0f1216;
            font-size: 16px;
            font-weight: 400
        }

        .back__course__page_grid .shorting__course .from-control {
            background: #f2f4f9;
            border: none;
            padding: 12px 15px;
            border-radius: 6px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border-right: 15px solid #f2f4f9;
            margin-left: 15px
        }

        .back__course__page_grid .shorting__course2 {
            background: 0 0;
            padding: 0;
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 20px
        }

        .back__course__page_grid .shorting__course2 .col-md-6 {
            padding: 0
        }

        .back__course__page_grid .shorting__course2 .all__icons .result-count {
            padding-left: 10px;
            color: #5b5f64;
            font-size: 16px;
            font-weight: 400
        }

        .back__course__page_grid .shorting__course2 .from-control {
            background: 0 0;
            border: none;
            padding: 12px 15px;
            border-radius: 6px;
            color: #5b5f64;
            font-size: 15px;
            font-weight: 400;
            cursor: pointer;
            margin-left: 15px
        }

        .back__course__page_grid .shorting__courses3 {
            margin-left: 0;
            margin-right: 0;
            padding: 10px 0;
            border-radius: 6px;
            margin-bottom: 30px
        }

        .back__course__page_grid .shorting__courses3 .col-md-6 {
            padding: 0
        }

        .back__course__page_grid .shorting__courses3 .all__icons {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .back__course__page_grid .shorting__courses3 .all__icons svg {
            cursor: pointer;
            position: relative;
            top: -2px
        }

        .back__course__page_grid .shorting__courses3 .all__icons .grid__icons {
            display: flex;
            align-items: center;
            border: 2px solid rgba(91, 95, 100, .1);
            border-radius: 6px;
            padding: 0 0 0 10px
        }

        .back__course__page_grid .shorting__courses3 .all__icons .grid__icons .grid__icons_inner {
            width: 22px;
            margin-right: 3px
        }

        .back__course__page_grid .shorting__courses3 .all__icons .grid__icons span {
            background: #3270fc;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            margin: 1px;
            float: left
        }

        .back__course__page_grid .shorting__courses3 .all__icons .list__icons {
            border-left: 2px solid #efeff0;
            margin-left: 5px;
            padding: 4px 10px
        }

        .back__course__page_grid .shorting__courses3 .all__icons .result-count {
            padding-left: 40px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 600
        }

        .back__course__page_grid .shorting__courses3 .from-control {
            background: #f2f4f9;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border-right: 15px solid #f2f4f9
        }

        .back__course__page_grid.back__course__page_grid_left {
            background: #ffff
        }

        .back__course__page_grid.back__course__page_grid_left .single-studies .inner-course {
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            border-radius: 6px
        }

        .back__course__page_grid.back__course__page_grid_left .back-pagination {
            justify-content: start
        }

        .back__course__page_grid.back__course__page_grid_left .back-pagination li a {
            border: 2px solid rgba(15, 18, 22, .1);
            box-shadow: none;
            line-height: 34px
        }

        .back__course__page_grid.back__course__page_grid_left .back-pagination li a:hover {
            border-color: #3270fc
        }

        .back__course__page_grid.back__course__page_grid_left .react-list .single-studies .inner-course {
            display: flex;
            background: #fff;
            box-shadow: 0 30px 30px rgba(15, 18, 22, .1);
            border-radius: 6px
        }

        .back__course__page_grid.back__course__page_grid_left .react-list .single-studies .inner-course .case-img {
            flex: 0 0 56%
        }

        .back__course__page_grid.back__course__page_grid_left .react-list .single-studies .inner-course .case-img img {
            border-radius: 0
        }

        .back__course__page_grid.back__course__page_grid_left .react-list .single-studies .inner-course .case-content {
            flex: 0 0 44%
        }

        .react-upcoming__event_page {
            background: #f2f4f9
        }

        .react-upcoming__event_page .event__card {
            margin-bottom: 25px
        }

        .react-upcoming__event_page .shorting__course3 {
            margin-left: 0;
            margin-right: 0;
            padding: 10px 0;
            border-radius: 6px;
            margin-bottom: 20px
        }

        .react-upcoming__event_page .shorting__course3 .col-md-6 {
            padding: 0
        }

        .react-upcoming__event_page .shorting__course3 .all__icons {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .react-upcoming__event_page .shorting__course3 .all__icons .result-count {
            padding-left: 0;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 600
        }

        .react-upcoming__event_page .shorting__course3 .from-control {
            background: #fff;
            border: none;
            padding: 13px 15px;
            border-radius: 6px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border-right: 15px solid #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            width: 100%;
            max-width: 300px
        }

        .react-upcoming__event_list {
            background: #fff
        }

        .react-upcoming__event_list .event__card {
            margin-bottom: 25px;
            padding: 0;
            background: #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            border-radius: 6px
        }

        .react-upcoming__event_list .event__card .event__card--content {
            padding: 25px 30px 42px
        }

        .react-upcoming__event_list .event__card .event_location {
            margin-bottom: 0;
            margin-top: 16px
        }

        .react-upcoming__event_list .event__card .event__card--date {
            color: #3270fc;
            margin-bottom: 8px
        }

        .react-upcoming__event_list .shorting__course3 {
            margin-left: 0;
            margin-right: 0;
            padding: 10px 0;
            border-radius: 6px;
            margin-bottom: 20px
        }

        .react-upcoming__event_list .shorting__course3 .col-md-6 {
            padding: 0
        }

        .react-upcoming__event_list .shorting__course3 .all__icons {
            display: flex;
            align-items: center;
            flex-wrap: wrap
        }

        .react-upcoming__event_list .shorting__course3 .all__icons .result-count {
            padding-left: 0;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 600
        }

        .react-upcoming__event_list .shorting__course3 .from-control {
            background: #fff;
            border: none;
            padding: 13px 15px;
            border-radius: 6px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border-right: 15px solid #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            width: 100%;
            max-width: 300px
        }

        .react-upcoming__event_list ul.related-courses {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .react-upcoming__event_list ul.related-courses li {
            display: flex;
            align-items: center;
            padding-bottom: 1.2em
        }

        .react-upcoming__event_list ul.related-courses li .back-ratings i {
            font-size: 10px;
            color: #ff9415
        }

        .react-upcoming__event_list ul.related-courses li .post-images {
            width: 87px;
            display: block
        }

        .react-upcoming__event_list ul.related-courses li .post-images img {
            display: block;
            width: 127px;
            border-radius: 6px
        }

        .react-upcoming__event_list ul.related-courses li .titles {
            display: block;
            padding-left: 20px
        }

        .react-upcoming__event_list ul.related-courses li .titles h4 {
            margin: 0 0 6px;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px
        }

        .react-upcoming__event_list ul.related-courses li .titles h4 a {
            color: #0f1216
        }

        .react-upcoming__event_list ul.related-courses li .titles h4:hover a {
            color: #3270fc
        }

        .react-upcoming__event_list ul.related-courses li .titles span {
            font-weight: 600;
            color: #0f1216
        }

        .react-upcoming__event_list ul.related-courses li:last-child {
            padding-bottom: 0
        }

        .react-upcoming__event_list .react-sidebar-event {
            border: none;
            box-shadow: none
        }

        .react-upcoming__event_list .widget {
            background: #fff;
            box-shadow: 0 20px 40px rgba(15, 18, 22, .08);
            border-radius: 6px
        }

        .react-upcoming__event_list .widget .event-input,
        .react-upcoming__event_list .widget .location-input {
            position: relative
        }

        .react-upcoming__event_list .widget .event-input svg,
        .react-upcoming__event_list .widget .location-input svg {
            position: absolute;
            top: 11px;
            right: 23px;
            color: #6f7985;
            width: 18px
        }

        .react-upcoming__event_list .blog-form {
            border: none;
            margin-bottom: 10px
        }

        .react-upcoming__event_list .blog-form form .search-form {
            position: relative
        }

        .react-upcoming__event_list .blog-form form .search-form button {
            background: 0 0 !important;
            padding: 2px 24px;
            margin: 0
        }

        .react-upcoming__event_list .blog-form form input {
            width: 100%;
            height: 48px;
            padding: 10px 30px 10px 20px;
            background: #f2f4f9;
            border: none;
            outline: 0;
            border-radius: 6px;
            margin-bottom: 12px;
            border: 2px solid #f2f4f9
        }

        .react-upcoming__event_list .blog-form form input:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .react-upcoming__event_list .blog-form form select.from-control {
            background: #f2f4f9;
            border: none;
            padding: 14px 15px;
            border-radius: 6px;
            color: #5c5c68;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border-right: 24px solid #f2f4f9;
            width: 100%;
            margin-bottom: 12px
        }

        .react-upcoming__event_list .blog-form form button {
            background: #3270fc;
            font-size: 16px;
            color: #fff;
            border-radius: 6px;
            padding: 14px 30px;
            display: inline-block;
            font-weight: 600;
            transition: all .5s ease 0s;
            border: none;
            outline: 0;
            box-shadow: none;
            cursor: pointer;
            margin-top: 25px
        }

        .react-upcoming__event_list .blog-form form button svg {
            width: 18px;
            color: #6f7985
        }

        .react-upcoming__event_list .blog-form form button:hover {
            color: #fff;
            background: #00306e
        }

        .react-upcoming__event_list .blog-form form ::-webkit-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-upcoming__event_list .blog-form form ::-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-upcoming__event_list .blog-form form :-ms-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-upcoming__event_list .blog-form form :-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content ul li svg {
            width: 16px;
            margin-right: 6px
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content ul li svg.feather-clock {
            font-size: 16px
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content ul li {
            font-size: 14px;
            color: #777
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .case-title {
            margin: 6px 0 15px;
            font-size: 18px;
            line-height: 26px;
            font-weight: 700
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .case-title a {
            color: #00306e
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .case-title a:hover {
            color: #3270fc
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-img a {
            left: 22px;
            right: auto;
            background: #d2093c
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .react-ratings {
            margin-top: 16px;
            padding-top: 12px
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .react-ratings li.react-book {
            font-size: 14px;
            color: #777
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .react-ratings li.react-book em {
            font-size: 14px;
            font-weight: 700;
            color: #e59818;
            font-style: normal
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .react-ratings li.react-book span {
            color: #e59818;
            margin: 0 2px
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-content .react-ratings li.price {
            color: #00306e;
            font-size: 14px;
            font-weight: 700
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-img a {
            font-size: 12px;
            line-height: 14px;
            font-weight: 500
        }

        body.courses-grid-page .react-course-filter .single-studies .inner-course .case-img a img {
            position: relative;
            top: -2px
        }

        .react-blog-page .single-blog {
            transition: all .5s ease 0s;
            background: #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .14);
            border-radius: 6px;
            margin-bottom: 60px
        }

        .react-blog-page .single-blog.no-thum-img {
            box-shadow: 0 2px 6px rgba(15, 18, 22, .14)
        }

        .react-blog-page .single-blog.blog__last {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none
        }

        .react-blog-page .single-blog .blog-img {
            position: relative
        }

        .react-blog-page .single-blog .blog-img .cate {
            background: #3270fc;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            border-radius: 4px;
            padding: 5px 10px 5px;
            line-height: 17px;
            position: absolute;
            right: 24px;
            top: 20px
        }

        .react-blog-page .single-blog .blog-img img {
            border-radius: 6px 6px 0 0
        }

        .react-blog-page .single-blog .blog-content {
            padding: 40px 40px 40px
        }

        .react-blog-page .single-blog .blog-content .top-part {
            display: flex;
            align-items: center;
            padding-bottom: 12px
        }

        .react-blog-page .single-blog .blog-content .top-part li {
            font-size: 15px;
            color: #737383;
            padding-right: 25px;
            font-weight: 500
        }

        .react-blog-page .single-blog .blog-content .top-part li svg {
            width: 18px;
            height: 18px;
            position: relative;
            top: -2px;
            margin-right: 4px
        }

        .react-blog-page .single-blog .blog-content .top-part li:first-child img {
            margin-right: 8px
        }

        .react-blog-page .single-blog .blog-content .blog-title {
            font-size: 34px;
            line-height: 40px;
            font-weight: 600;
            margin-bottom: 25px
        }

        .react-blog-page .single-blog .blog-content .blog-title a {
            color: #0f1216
        }

        .react-blog-page .single-blog .blog-content .blog-title a:hover {
            color: #3270fc
        }

        .react-blog-page .single-blog .blog-content .blog-desc {
            color: #55575c;
            margin-bottom: 30px
        }

        .react-blog-page .single-blog .blog-content .button__sec {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .react-blog-page .single-blog .blog-content .button__sec .blog-btn {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(0, 48, 110, .1);
            padding: 12px 35px 12px 35px;
            color: #0f1216;
            display: inline-block;
            line-height: 20px
        }

        .react-blog-page .single-blog .blog-content .button__sec .blog-btn svg {
            width: 20px
        }

        .react-blog-page .single-blog .blog-content .button__sec .blog-btn:hover {
            background: #3270fc;
            color: #fff;
            border-color: #3270fc
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course {
            color: #0f1216;
            font-size: 16px;
            font-weight: 600;
            display: block;
            text-align: center;
            position: relative
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course em {
            width: 45px;
            color: #3270fc;
            border: 2px solid rgba(15, 18, 22, .1);
            border-radius: 50%;
            padding: 1px 13px;
            display: inline-block;
            height: 45px;
            line-height: 37px;
            margin-left: 8px
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course em svg {
            width: 18px;
            position: relative;
            right: 2px
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course span {
            position: absolute;
            background: #000;
            padding: 7px 18px;
            border-radius: 4px;
            width: 133px;
            left: 40px;
            top: 0;
            opacity: 0;
            transition: all .5s ease
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course span:before {
            content: "";
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid #000;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%)
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course span a {
            padding: 0 7px;
            color: #fff;
            opacity: .6
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course span a:hover {
            opacity: 1
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course:hover em {
            background: #3270fc;
            color: #fff
        }

        .react-blog-page .single-blog .blog-content .button__sec .share-course:hover span {
            opacity: 1;
            top: -55px
        }

        .react-blog-page blockquote {
            position: relative;
            margin: 40px 0 60px;
            padding: 50px 40px 50px 40px;
            color: #0f1216;
            box-shadow: -3px 0 0 #3270fc, 0 20px 40px rgba(15, 18, 22, .1);
            border-radius: 6px;
            font-size: 24px;
            overflow: hidden;
            line-height: 34px;
            font-weight: 400;
            z-index: 1;
            border-left: 1px solid #3270fc
        }

        .react-blog-page blockquote:before {
            content: "";
            font-size: 120px;
            position: absolute;
            background: url(assets/images/blog-grid/qu.png) no-repeat right bottom;
            bottom: 0;
            right: 47px;
            width: 107px;
            height: 107px;
            z-index: 0
        }

        .react-blog-page blockquote.block__link_q {
            padding: 30px 50px 35px 95px
        }

        .react-blog-page blockquote.block__link_q:before {
            content: "";
            font-size: 120px;
            position: absolute;
            background: url(assets/images/blog-grid/link.png) no-repeat right bottom;
            top: 50%;
            left: 40px;
            width: 30px;
            height: 30px;
            z-index: -1;
            transform: translateY(-50%)
        }

        .react-blog-page blockquote em {
            display: block;
            font-style: normal;
            color: #5b5f64;
            font-size: 16px;
            margin-top: 16px;
            font-weight: 400;
            position: relative;
            padding-left: 22px
        }

        .react-blog-page blockquote em:before {
            content: "";
            position: absolute;
            bottom: 16px;
            left: 0;
            width: 15px;
            height: 2px;
            z-index: -1;
            background: #5b5f64
        }

        .blog-post-page .react-sidebar ul.related-courses li .titles span {
            color: #5b5f64;
            font-size: 15px;
            font-weight: 400
        }

        .blog-post-page .react-sidebar ul.related-courses li .titles span svg {
            width: 16px;
            margin-right: 2px;
            position: relative;
            top: -2px
        }

        .blog-post-page .back-pagination {
            justify-content: start
        }

        .blog-post-page .back-pagination li a {
            border: 2px solid rgba(15, 18, 22, .1);
            box-shadow: none;
            line-height: 33px
        }

        .blog-post-page .react-sidebar .widget.react-categories-course {
            box-shadow: none
        }

        .blog-post-page .react-sidebar .widget.react-categories-course .widget-title {
            margin-top: -5px
        }

        .blog-post-page .react-sidebar .widget.react-categories-course .recent-category li a em {
            display: block;
            float: right;
            clear: right;
            font-style: normal
        }

        .blog-post-page .widget-tags .tags li {
            display: inline-block;
            margin: 0 5px 13px 0
        }

        .blog-post-page .widget-tags .tags li a {
            padding: 8px 17px 8px;
            background: #f2f4f9;
            font-size: 13px;
            color: #5c5c68;
            font-weight: 600;
            border-radius: 4px
        }

        .blog-post-page .widget-tags .tags li a:hover {
            background: #3270fc;
            color: #fff
        }

        .blog-post-single-page .react-course-filter .single-studies .inner-course .case-content {
            padding: 30px 38px 30px 25px
        }

        .blog-post-single-page .react-course-filter .single-studies .inner-course .case-content em {
            display: block;
            font-size: 16px;
            color: #d2093c;
            font-style: normal
        }

        .blog-post-single-page .share-course {
            color: #0f1216;
            font-size: 16px;
            font-weight: 600;
            float: right;
            clear: right;
            text-align: right;
            position: relative
        }

        .blog-post-single-page .share-course em {
            width: 45px;
            color: #fff;
            background: #3270fc;
            border-radius: 50%;
            padding: 1px 13px;
            display: inline-block;
            height: 45px;
            line-height: 40px;
            margin-left: 8px
        }

        .blog-post-single-page .share-course em svg {
            width: 18px;
            position: relative;
            right: 2px
        }

        .blog-post-single-page .share-course span {
            position: absolute;
            background: #000;
            padding: 7px 18px;
            border-radius: 4px;
            width: 133px;
            left: 75px;
            top: 0;
            opacity: 0;
            transition: all .5s ease
        }

        .blog-post-single-page .share-course span:before {
            content: "";
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid #000;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%)
        }

        .blog-post-single-page .share-course span a {
            padding: 0 7px;
            color: #fff;
            opacity: .6
        }

        .blog-post-single-page .share-course span a:hover {
            opacity: 1
        }

        .blog-post-single-page .share-course:hover em {
            opacity: .9
        }

        .blog-post-single-page .share-course:hover span {
            opacity: 1;
            top: -55px
        }

        .blog-post-single-page .blog-single-inner .blog-image {
            margin-bottom: 42px
        }

        .blog-post-single-page .blog-single-inner .blog-content {
            color: #3e3e51
        }

        .blog-post-single-page .blog-single-inner .blog-content p:first-child {
            margin: -8px 0 0;
            overflow: hidden
        }

        .blog-post-single-page .blog-single-inner .blog-content p {
            margin-bottom: 40px;
            line-height: 28px;
            font-size: 18px;
            font-weight: 400;
            color: #5b5f64
        }

        .blog-post-single-page .blog-single-inner .blog-content h3 {
            color: #0f1216;
            font-weight: 600;
            font-size: 34px;
            line-height: 43px
        }

        .blog-post-single-page .blog-single-inner .blog-content .back-order-list h3 {
            color: #0f1216;
            font-weight: 600;
            font-size: 34px;
            line-height: 43px
        }

        .blog-post-single-page .blog-single-inner .blog-content .back-order-list ul li {
            margin: 20px 0;
            font-size: 16px;
            font-weight: 400;
            color: #0f1216
        }

        .blog-post-single-page .blog-single-inner .blog-content .back-order-list ul li i {
            background: rgba(50, 112, 252, .08);
            padding: 6px;
            border-radius: 50%;
            margin-right: 12px
        }

        .blog-post-single-page .blog-single-inner .blog-content blockquote {
            position: relative;
            margin: 40px 0 60px;
            padding: 38px 40px 40px 40px;
            color: #0f1216;
            box-shadow: -3px 0 0 #3270fc, 0 20px 40px rgba(15, 18, 22, .1);
            border-radius: 6px;
            font-size: 24px;
            overflow: hidden;
            line-height: 34px;
            font-weight: 400;
            z-index: 1;
            border-left: 1px solid #3270fc
        }

        .blog-post-single-page .blog-single-inner .blog-content blockquote:before {
            content: "";
            font-size: 120px;
            position: absolute;
            background: url(assets/images/blog-grid/qu.png) no-repeat right bottom;
            bottom: 0;
            right: 47px;
            width: 107px;
            height: 107px;
            z-index: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content blockquote.block__link_q:before {
            content: "";
            font-size: 120px;
            position: absolute;
            background: url(assets/images/blog-grid/link.png) no-repeat right bottom;
            bottom: -6px;
            right: 47px;
            width: 180px;
            height: 180px;
            z-index: -1
        }

        .blog-post-single-page .blog-single-inner .blog-content blockquote em {
            display: block;
            font-style: normal;
            color: #5b5f64;
            font-size: 16px;
            margin-top: 16px;
            font-weight: 400;
            position: relative;
            padding-left: 22px
        }

        .blog-post-single-page .blog-single-inner .blog-content blockquote em:before {
            content: "";
            position: absolute;
            bottom: 16px;
            left: 0;
            width: 15px;
            height: 2px;
            z-index: -1;
            background: #5b5f64
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags {
            margin-top: 40px;
            display: block;
            padding: 30px 0 25px;
            border-top: 1px solid #ecedf3
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags ul.mata-tags li {
            display: inline-block;
            margin-right: 5px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags ul.mata-tags li a {
            padding: 3px 20px;
            background: #f2f4f9;
            font-size: 13px;
            color: #4d5765;
            font-weight: 600;
            display: block;
            border-radius: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags ul.mata-tags li a:hover {
            background: #3270fc;
            color: #fff
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags ul.mata-tags li:last-child {
            margin: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-tags ul.mata-tags li.tags {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-right: 20px
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author {
            display: flex;
            align-items: center;
            padding: 40px;
            overflow: hidden;
            margin-top: 30px;
            background: #fff;
            box-shadow: 0 20px 40px rgba(15, 18, 22, .1);
            border-radius: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author .avatar {
            margin-right: 20px
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author .avatar img {
            border-radius: 50%;
            width: 122px
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author .info .name {
            margin: 0;
            color: #0f1216;
            transition: all .5s ease 0s;
            font-size: 18px;
            font-weight: 700
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author .info .designation a {
            font-size: 14px;
            color: #4d5765;
            margin-right: 8px
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author .info .designation a:hover {
            color: #3270fc
        }

        .blog-post-single-page .blog-single-inner .blog-content .post-author p {
            font-size: 16px;
            color: #5b5f64;
            margin: 9px 0 12px;
            line-height: 24px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment {
            margin-bottom: 0;
            margin-top: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment h4 {
            margin: 36px 0 20px;
            font-size: 20px;
            font-weight: 700;
            color: #0f1216
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment span {
            font-size: 15px;
            color: #7f7d86
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment span i:before {
            font-size: 13px;
            padding-right: 3px;
            position: relative;
            top: -1px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment h6 {
            margin: 0 0 3px;
            font-size: 16px;
            color: #0f1216;
            font-weight: 600
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul {
            padding: 0;
            margin: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li {
            margin: 0 0 35px;
            padding: 30px 57px 32px 35px;
            border: 1px solid rgba(0, 48, 110, .1);
            border-radius: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .col-sm-2 {
            text-align: left;
            padding-right: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(2) {
            margin-left: 120px;
            padding: 35px 52px 32px 35px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(2) .col-sm-2 {
            padding-right: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(2) .image-comments img {
            width: 55px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(3) {
            margin-left: 120px;
            padding: 35px 52px 38px 35px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(3) .col-sm-2 {
            padding-right: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li:nth-child(3) .image-comments img {
            width: 55px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .image-comments {
            margin-top: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .image-comments img {
            width: 55px;
            border-radius: 100%
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .reply {
            font-size: 14px;
            color: #5b5f64;
            font-weight: 400
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .reply a {
            color: #3270fc
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .reply a:hover {
            color: #3270fc
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .dsc-comments h4 {
            margin: 0 0 12px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .dsc-comments a {
            padding: 4px 0;
            font-size: 14px;
            color: #0f1216;
            font-weight: 600;
            border-radius: 6px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .dsc-comments a svg {
            width: 16px;
            position: relative;
            top: 0;
            margin-right: 2px
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .dsc-comments a:hover {
            color: #3270fc
        }

        .blog-post-single-page .blog-single-inner .blog-content .author-comment ul li .dsc-comments p {
            margin: 12px 0 15px;
            color: #55575c;
            font-size: 16px;
            line-height: 24px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form {
            margin-top: 98px;
            z-index: 9;
            position: relative
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form .back-input {
            position: relative
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form .back-input img {
            position: absolute;
            bottom: 55px;
            left: 30px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form .back-textarea img {
            position: absolute;
            top: 57px;
            left: 47px;
            z-index: 1
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form h3 {
            font-size: 20px;
            color: #0f1216;
            font-weight: 700;
            margin-bottom: 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form p {
            color: #5b5f64;
            font-size: 16px;
            font-weight: 400
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form input {
            width: 100%;
            height: 57px;
            padding: 10px 30px 10px 30px;
            background: #f2f4f9;
            border: none;
            outline: 0;
            border-radius: 10px;
            margin-bottom: 25px;
            border: 2px solid #f2f4f9
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form input:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form textarea {
            width: 100%;
            height: 160px;
            padding: 22px 30px;
            background: #f2f4f9;
            border: none;
            outline: 0;
            border-radius: 10px;
            margin-bottom: 25px;
            position: relative;
            border: 2px solid #f2f4f9
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form textarea:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form button {
            background: #3270fc;
            font-size: 16px;
            color: #fff;
            border-radius: 10px;
            padding: 10px 15px;
            display: inline-block;
            font-weight: 600;
            transition: all .5s ease 0s;
            border: none;
            outline: 0;
            box-shadow: none;
            cursor: pointer;
            width: 100%;
            max-width: 210px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form button svg {
            width: 18px;
            position: relative;
            top: -1px;
            margin-left: 2px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form button:hover {
            color: #fff;
            opacity: .8
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form .back-check-box {
            align-items: center;
            margin-top: -6px;
            margin-bottom: 30px;
            color: #55575c;
            font-size: 16px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form .back-check-box a {
            color: #1a152e
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form .back-check-box a:hover {
            color: #74727d
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form .back-check-box input {
            width: auto;
            margin: 0 8px 0 0;
            height: 16px;
            width: 16px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form ::-webkit-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form ::-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form :-ms-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .blog-post-single-page .blog-single-inner .blog-content .blog-form form :-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .blog-post-single-page .single-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 80px;
            position: relative;
            border-top: 1px solid #e8ecf0;
            border-bottom: 1px solid #e8ecf0;
            padding: 20px 0 30px
        }

        .blog-post-single-page .single-nav .back-next {
            text-align: right
        }

        .blog-post-single-page .single-nav .back-next a,
        .blog-post-single-page .single-nav .back-prev a {
            color: #4d5765;
            font-size: 12px;
            font-weight: 600
        }

        .blog-post-single-page .single-nav .back-next a em,
        .blog-post-single-page .single-nav .back-prev a em {
            display: block;
            font-style: normal;
            font-weight: 600;
            color: #0f1216;
            font-size: 18px;
            line-height: 18px
        }

        .blog-post-single-page .single-nav .back-next a:hover,
        .blog-post-single-page .single-nav .back-prev a:hover {
            color: #3270fc
        }

        .blog-post-single-page .single-nav .back-next a:hover em,
        .blog-post-single-page .single-nav .back-prev a:hover em {
            color: #3270fc
        }

        .blog-post-single-page .single-nav .back-prev {
            position: relative;
            padding-left: 55px;
            transition: all .5s ease
        }

        .blog-post-single-page .single-nav .back-prev i:before {
            font-size: 23px;
            margin: 0;
            font-weight: 600;
            position: absolute;
            top: 8px;
            left: 0;
            transition: all .5s ease;
            border: 2px solid rgba(15, 18, 22, .08);
            padding: 6px;
            border-radius: 50%
        }

        .blog-post-single-page .single-nav .back-prev:hover i:before {
            left: -6px
        }

        .blog-post-single-page .single-nav .back-next {
            position: relative;
            padding-right: 55px;
            transition: all .5s ease
        }

        .blog-post-single-page .single-nav .back-next i:before {
            font-size: 23px;
            margin: 0;
            font-weight: 600;
            position: absolute;
            top: 8px;
            right: 0;
            transition: all .5s ease;
            border: 2px solid rgba(15, 18, 22, .08);
            padding: 6px;
            border-radius: 50%
        }

        .blog-post-single-page .single-nav .back-next:hover i:before {
            right: -6px
        }

        .blog-post-single-page .single-nav .social-links svg {
            position: relative;
            top: 6px
        }

        .react-contact-page h2.contact-title {
            font-size: 34px;
            color: #0f1216;
            font-weight: 700;
            line-height: 42px;
            text-align: left
        }

        .react-contact-page .react-blog-form {
            padding-left: 70px
        }

        .react-contact-page .blog-form {
            z-index: 9;
            position: relative;
            padding-top: 15px
        }

        .react-contact-page .blog-form .back-input {
            position: relative
        }

        .react-contact-page .blog-form .back-input img {
            position: absolute;
            bottom: 55px;
            left: 30px
        }

        .react-contact-page .blog-form .react-textarea img {
            position: absolute;
            top: 57px;
            left: 47px;
            z-index: 1
        }

        .react-contact-page .blog-form form label {
            color: #1a152e;
            font-size: 14px;
            font-weight: 500
        }

        .react-contact-page .blog-form form input {
            width: 100%;
            height: 57px;
            padding: 10px 30px 10px 30px;
            background: #f5f8fd;
            border: none;
            outline: 0;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 2px solid #f5f8fd
        }

        .react-contact-page .blog-form form input:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .react-contact-page .blog-form form textarea {
            width: 100%;
            height: 160px;
            padding: 22px 30px;
            background: #f5f8fd;
            border: none;
            outline: 0;
            border-radius: 6px;
            margin-bottom: 20px;
            position: relative;
            border: 2px solid #f5f8fd
        }

        .react-contact-page .blog-form form textarea:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .react-contact-page .blog-form form button {
            background: #3270fc;
            font-size: 16px;
            color: #fff;
            border-radius: 6px;
            padding: 14px 38px;
            display: block;
            font-weight: 600;
            transition: all .5s ease 0s;
            border: none;
            outline: 0;
            box-shadow: none;
            cursor: pointer
        }

        .react-contact-page .blog-form form button svg {
            width: 18px
        }

        .react-contact-page .blog-form form button:hover {
            color: #fff;
            opacity: .9
        }

        .react-contact-page .blog-form form .react-check-box {
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #55575c;
            font-size: 16px
        }

        .react-contact-page .blog-form form .react-check-box a {
            color: #1a152e
        }

        .react-contact-page .blog-form form .react-check-box a:hover {
            color: #74727d
        }

        .react-contact-page .blog-form form .react-check-box input {
            width: auto;
            margin: 0 8px 0 0;
            height: 16px;
            width: 16px
        }

        .react-contact-page .blog-form form ::-webkit-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-contact-page .blog-form form ::-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-contact-page .blog-form form :-ms-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-contact-page .blog-form form :-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-contact-page .address-sec {
            padding: 35px;
            background: linear-gradient(138.95deg, #f2f4f9 0, rgba(242, 244, 249, 0) 63.81%);
            border-radius: 10px
        }

        .react-contact-page .address-sec li {
            display: flex;
            padding-bottom: 35px
        }

        .react-contact-page .address-sec li .icon {
            margin-right: 25px
        }

        .react-contact-page .address-sec li .text {
            font-size: 16px;
            line-height: 24px;
            color: #4d5765
        }

        .react-contact-page .address-sec li .text em {
            color: #0f1216;
            font-weight: 600;
            font-size: 20px;
            display: block;
            font-style: normal;
            margin: 0 0 8px
        }

        .react-contact-page .address-sec li .text a {
            display: block;
            color: #0f1216
        }

        .react-contact-page .address-sec li .text a:hover {
            color: #3270fc
        }

        .react-contact-page .react-contacts .back-title-sec h2 {
            font-weight: 600;
            font-size: 40px
        }

        .react-contact-page .react-contacts .react-image-maping {
            position: relative;
            padding-top: 15px
        }

        .react-contact-page .react-contacts .react-image-maping .react-tooltip1 {
            left: 50%;
            top: 50%;
            display: block
        }

        .react-contact-page .react-contacts .react-image-maping .react-ripple {
            background-color: #f94392;
            border-radius: 50%;
            animation: pi-ripple .7s linear infinite;
            position: absolute;
            cursor: pointer
        }

        .react-contact-page .react-contacts .react-image-maping .react-ripple .box {
            position: relative;
            width: 16px;
            height: 16px
        }

        .react-contact-page .react-contacts .react-image-maping .react-ripple .box span {
            font-size: 16px;
            color: #1a152e;
            font-weight: 600
        }

        @keyframes pi-ripple {
            0% {
                box-shadow: 0 0 0 0 rgba(249, 67, 146, .05), 0 0 0 16px rgba(249, 67, 146, .05), 0 0 0 20px rgba(249, 67, 146, .05), 0 0 0 24px rgba(249, 67, 146, .05)
            }

            100% {
                box-shadow: 0 0 0 16px rgba(249, 67, 146, .05), 0 0 0 20px rgba(249, 67, 146, .05), 0 0 0 24px rgba(249, 67, 146, .05), 0 0 0 38px rgba(249, 67, 146, 0)
            }
        }

        .react-contact-page .react-contacts .react-ripple:hover span {
            opacity: 1;
            top: -60px;
            left: -18px;
            z-index: 99;
            -webkit-transition: all .2s ease;
            -moz-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease
        }

        .react-contact-page .react-contacts .react-ripple span {
            background: #fff;
            font-weight: 400;
            padding: 8px 0;
            width: 140px;
            top: -20px;
            left: -18px;
            margin-left: 0;
            opacity: 0;
            position: absolute;
            text-align: center;
            z-index: 2;
            text-transform: none;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease;
            transition: all .3s ease-in-out;
            border-radius: 4px
        }

        .react-contact-page .react-contacts .react-ripple span:after {
            border-color: #fff transparent;
            border-style: solid;
            border-width: 10px 8px 0;
            bottom: -10px;
            content: "";
            display: block;
            left: 18px;
            position: absolute;
            width: 0
        }

        body.course-single .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text {
            text-align: left
        }

        body.course-single .react-breadcrumbs .breadcrumbs-wrap .breadcrumbs-inner .breadcrumbs-text .cate {
            background: #3270fc;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            border-radius: 4px;
            padding: 2px 10px 5px;
            line-height: 17px;
            margin-bottom: 12px
        }

        body.course-single .user-section {
            display: flex;
            align-items: center;
            padding-bottom: 50px
        }

        body.course-single .user-section li {
            padding-right: 40px;
            font-size: 16px;
            color: #fff;
            font-weight: 400
        }

        body.course-single .user-section li svg {
            width: 18px;
            position: relative;
            top: -2px;
            margin-right: 4px
        }

        body.course-single .user-section li.user {
            display: flex;
            align-items: center
        }

        body.course-single .user-section li.user span {
            padding-right: 12px
        }

        body.course-single .user-section li.user span img {
            width: 36px;
            border-radius: 50%
        }

        .react-courses__single-page .course-single-tab .nav.nav-tabs {
            padding: 0 0 1px 0;
            margin-top: 0;
            background: #f2f4f9;
            border-radius: 6px;
            margin-bottom: 50px;
            border: none
        }

        .react-courses__single-page .course-single-tab .nav.nav-tabs li a {
            border: none;
            color: #5b5f64;
            font-size: 14px;
            font-weight: 600;
            line-height: 18px;
            padding: 19px 25px;
            text-align: center;
            display: inline-block;
            margin: 10px 8px
        }

        .react-courses__single-page .course-single-tab .nav.nav-tabs li a.active,
        .react-courses__single-page .course-single-tab .nav.nav-tabs li a:hover {
            background: #fff;
            box-shadow: 0 6px 10px rgba(15, 18, 22, .1);
            border-radius: 6px;
            color: #0f1216
        }

        .react-courses__single-page .course-single-tab #back-tab-content h3 {
            font-size: 26px;
            color: #0f1216;
            font-weight: 600;
            margin: 0 0 20px
        }

        .react-courses__single-page .course-single-tab #back-tab-content p {
            font-size: 16px;
            color: #4b4b57
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-tag a {
            font-size: 16px;
            font-weight: 500;
            color: #737383
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-tag a:hover {
            color: #3270fc
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-tag svg {
            width: 18px;
            height: 18px;
            margin-right: 4px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-objectives {
            background: #f7f7f8;
            overflow: hidden;
            padding: 40px;
            border-radius: 2px;
            margin-top: 50px;
            margin-bottom: 40px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-objectives h3 {
            font-size: 20px;
            color: #00306e;
            font-weight: 800;
            margin: 0 0 20px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-objectives li {
            float: left;
            width: 50%;
            font-size: 15px;
            font-weight: 600;
            color: #00306e;
            position: relative;
            padding-left: 42px;
            margin: 10px 0 17px;
            line-height: 1.3
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-objectives li:first-child {
            float: none;
            width: 100%;
            padding: 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .back-objectives li i {
            background: #3270fc;
            padding: 6px;
            color: #fff;
            border-radius: 50%;
            display: inline-block;
            position: absolute;
            left: 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week {
            background: #f7f7f8;
            padding: 40px 40px 30px 40px;
            border-radius: 6px;
            margin-bottom: 20px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .week__top {
            display: flex;
            border-bottom: 1px solid rgba(2, 3, 52, .078);
            justify-content: space-between;
            font-size: 20px;
            font-weight: 800;
            padding-bottom: 10px;
            margin-bottom: 28px;
            color: #00306e
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .week__top li:last-child {
            color: #828287;
            font-weight: 700
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li {
            border-bottom: 1px solid rgba(2, 3, 52, .078);
            color: #4b4c57;
            padding: 12px 0 12px;
            overflow: hidden
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li svg {
            width: 20px;
            height: 20px;
            margin-right: 7px;
            position: relative;
            top: -2px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li em {
            font-style: normal;
            float: right
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li em svg {
            width: 17px;
            height: 17px;
            margin-right: 3px;
            position: relative;
            top: -2px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li em.questions {
            background-color: rgba(248, 69, 45, .102);
            color: #f8452d;
            padding: 6px 10px;
            line-height: 1;
            border-radius: 6px;
            margin-left: 20px;
            font-weight: 500
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li b {
            font-weight: 700;
            color: #00306e
        }

        .react-courses__single-page .course-single-tab #back-tab-content .single-week .course__title li:last-child {
            border: none
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 {
            border: 1px solid rgba(0, 48, 110, .1);
            border-radius: 6px;
            padding: 40px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 .skill_inners {
            display: flex;
            align-items: center;
            margin-bottom: 15px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 .skill_inners span.skillbar-title {
            flex: 0 0 15%;
            color: #5b5f64;
            font-size: 14px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 .skill_inners span {
            color: #5b5f64
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 .skillbars {
            position: relative;
            display: block;
            background: #e6e9f1;
            height: 10px;
            width: 100%;
            clear: both;
            margin: 0 20px 0 0;
            border-radius: 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .skillbar-style2 .skillbars .skillbar-bar {
            height: 10px;
            width: 0;
            background: #3270fc;
            display: block;
            margin: 0;
            position: relative;
            border-radius: 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .five__number {
            border: 1px solid rgba(0, 48, 110, .1);
            text-align: center;
            padding: 75px 50px;
            border-radius: 6px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .five__number em {
            font-size: 50px;
            color: #0f1216;
            font-style: normal;
            line-height: 1.2;
            margin-bottom: 12px;
            font-weight: 700;
            display: block
        }

        .react-courses__single-page .course-single-tab #back-tab-content .five__number i {
            color: #ff9415;
            font-size: 14px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .five__number h6 {
            color: #0f1216
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author {
            display: flex;
            align-items: center;
            padding: 25px 40px 30px;
            overflow: hidden;
            margin-bottom: 20px;
            border: 1px solid rgba(0, 48, 110, .1);
            border-radius: 6px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author .avatar {
            margin-right: 20px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author .avatar img {
            border-radius: 50%;
            width: 80px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author .info .back-ratings i {
            color: #ff9415;
            font-size: 14px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author .info .name {
            margin: 0;
            color: #0f1216;
            transition: all .5s ease 0s;
            font-size: 20px;
            font-weight: 600
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author .info .name .designation {
            font-size: 16px;
            color: #5b5f64;
            margin: 0;
            font-weight: 400
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author p {
            font-size: 16px;
            color: #4b4b57;
            margin: 0;
            line-height: 24px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .post-author:hover .info .name {
            color: #3270fc
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form p {
            margin-top: -15px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-ratings {
            padding-bottom: 25px;
            padding-top: 6px;
            line-height: 1
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-ratings i {
            font-size: 14px;
            color: #b8b9bf
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-ratings i:nth-child(1),
        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-ratings i:nth-child(2) {
            color: #ff9415
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form input {
            width: 100%;
            height: 57px;
            padding: 10px 30px 10px 30px;
            background: #f2f4f9;
            border: none;
            outline: 0;
            border-radius: 6px;
            margin-bottom: 25px;
            border: 2px solid #f2f4f9
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form input:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form textarea {
            width: 100%;
            height: 160px;
            padding: 22px 30px;
            background: #f2f4f9;
            border: none;
            outline: 0;
            border-radius: 6px;
            margin-bottom: 5px;
            position: relative;
            border: 2px solid #f2f4f9
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form textarea:focus {
            border: 2px solid #3270fc;
            background: 0 0
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form button {
            background: #3270fc;
            font-size: 16px;
            color: #fff;
            border-radius: 6px;
            padding: 14px 30px;
            display: inline-block;
            font-weight: 600;
            transition: all .5s ease 0s;
            border: none;
            outline: 0;
            box-shadow: none;
            cursor: pointer;
            margin-top: 25px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form button svg {
            width: 18px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form button:hover {
            color: #fff;
            background: #00306e
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-check-box {
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #55575c;
            font-size: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-check-box a {
            color: #1a152e
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-check-box a:hover {
            color: #74727d
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form .back-check-box input {
            width: auto;
            margin: 0 8px 0 0;
            height: 16px;
            width: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form ::-webkit-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form ::-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form :-ms-input-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .blog-form form :-moz-placeholder {
            color: #7b7d82;
            opacity: 1;
            font-size: 16px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .social-links h4 {
            font-size: 16px;
            font-weight: 800;
            margin: 0 0 26px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .social-links li a {
            border-radius: 6px
        }

        .react-courses__single-page .course-single-tab #back-tab-content .social-links li:first-child {
            float: none;
            width: 100%;
            padding: 0;
            display: block
        }

        .back-pagination {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .back-pagination li a {
            width: 40px;
            height: 40px;
            background: #fff;
            box-shadow: 0 1px 2px rgba(15, 18, 22, .1);
            display: inline-block;
            line-height: 40px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            border-radius: 50%;
            color: #5b5f64;
            margin: 0 5px
        }

        .back-pagination li a:hover {
            background: #3270fc;
            color: #fff
        }

        .back-pagination li a svg {
            width: 18px;
            position: relative;
            transition: all .5s ease 0s;
            top: -1px
        }

        .react-sidebar {
            background: #fff;
            box-shadow: 0 20px 40px rgba(15, 18, 22, .08);
            border-radius: 6px
        }

        .react-sidebar.react-back-course2 {
            box-shadow: none
        }

        .react-sidebar .widget {
            padding: 35px;
            border-bottom: 1px solid #e8ecf0
        }

        .react-sidebar .widget.back-post .widget-title {
            margin-top: -10px
        }

        .react-sidebar .widget.back-category {
            padding: 30px 35px 30px 35px
        }

        .react-sidebar .widget.related__courses {
            background: #fff;
            box-shadow: 0 30px 50px 0 rgba(1, 11, 60, .1);
            margin-top: 22px
        }

        .react-sidebar .widget.react-categories-course {
            box-shadow: 0 30px 50px 0 rgba(1, 11, 60, .1);
            background: #fff;
            border-radius: 6px
        }

        .react-sidebar .widget.react-categories-course ul li a {
            font-size: 16px;
            color: #5b5f64;
            font-weight: 400;
            line-height: 32px;
            display: block
        }

        .react-sidebar .widget.react-categories-course ul li a:hover {
            color: #3270fc
        }

        .react-sidebar .widget.get-back-course {
            box-shadow: 0 30px 50px 0 rgba(1, 11, 60, .1);
            background: #fff;
            margin-bottom: 10px;
            border-radius: 6px;
            padding: 0
        }

        .react-sidebar .widget.get-back-course .price {
            display: flex;
            align-items: center;
            padding: 25px 40px 25px;
            border-bottom: 1px solid #e8ecf0
        }

        .react-sidebar .widget.get-back-course .price li {
            font-size: 30px;
            font-weight: 700;
            color: #3270fc;
            line-height: 1
        }

        .react-sidebar .widget.get-back-course .price li:nth-child(2) {
            font-size: 16px;
            font-weight: 600;
            text-decoration: line-through;
            margin-left: 9px;
            color: #9da1a6
        }

        .react-sidebar .widget.get-back-course .price li:nth-child(3) {
            font-size: 13px;
            color: #d2093c;
            background: rgba(210, 9, 60, .06);
            border-radius: 4px;
            margin-left: 10px;
            padding: 5px 6px;
            font-weight: 600
        }

        .react-sidebar .widget.get-back-course .start-btn {
            border-radius: 6px;
            width: auto;
            text-align: center;
            background: #3270fc;
            color: #fff;
            padding: 11px 25px;
            display: block;
            font-size: 16px;
            font-weight: 600;
            margin-left: 35px;
            margin-right: 35px;
            margin-top: 30px;
            margin-bottom: 25px
        }

        .react-sidebar .widget.get-back-course .start-btn svg {
            width: 18px
        }

        .react-sidebar .widget.get-back-course .start-btn:hover {
            opacity: .9
        }

        .react-sidebar .widget.get-back-course .share-course {
            color: #0f1216;
            font-size: 16px;
            font-weight: 600;
            display: block;
            text-align: center;
            padding-bottom: 30px;
            position: relative
        }

        .react-sidebar .widget.get-back-course .share-course em {
            width: 45px;
            color: #3270fc;
            border: 2px solid rgba(15, 18, 22, .1);
            border-radius: 50%;
            padding: 1px 13px;
            display: inline-block;
            height: 45px;
            line-height: 37px;
            margin-left: 8px
        }

        .react-sidebar .widget.get-back-course .share-course em svg {
            width: 18px;
            position: relative;
            right: 2px
        }

        .react-sidebar .widget.get-back-course .share-course span {
            position: absolute;
            background: #000;
            padding: 7px 18px;
            border-radius: 4px;
            width: 133px;
            left: 190px;
            top: 0;
            opacity: 0;
            transition: all .5s ease
        }

        .react-sidebar .widget.get-back-course .share-course span:before {
            content: "";
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid #000;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%)
        }

        .react-sidebar .widget.get-back-course .share-course span a {
            padding: 0 7px;
            color: #fff;
            opacity: .6
        }

        .react-sidebar .widget.get-back-course .share-course span a:hover {
            opacity: 1
        }

        .react-sidebar .widget.get-back-course .share-course:hover em {
            background: #3270fc;
            color: #fff
        }

        .react-sidebar .widget.get-back-course .share-course:hover span {
            opacity: 1;
            top: -55px
        }

        .react-sidebar .widget.get-back-course .price__course {
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px
        }

        .react-sidebar .widget.get-back-course .price__course li {
            padding: 10px 0;
            box-shadow: 0 1px 0 #e8ecf0;
            color: #0f1216
        }

        .react-sidebar .widget.get-back-course .price__course li i {
            position: relative;
            color: #0f1216;
            display: inline-block;
            margin-right: 10px;
            font-size: 14px
        }

        .react-sidebar .widget.get-back-course .price__course li b {
            font-size: 16px;
            font-weight: 400;
            color: #5b5f64;
            float: right;
            clear: right
        }

        .react-sidebar .widget.get-back-course .price__course li b.prs {
            font-size: 30px;
            color: #3270fc;
            font-weight: 700;
            line-height: 26px
        }

        .react-sidebar .widget.get-back-course .price__course li:last-child {
            border: none
        }

        .react-sidebar .widget.back-rating ul.recent-category input[type=checkbox]+label::before {
            border-radius: 50%;
            margin-right: 10px;
            top: 0
        }

        .react-sidebar .widget.back-rating em {
            font-style: normal;
            display: inline-block;
            margin-left: 6px
        }

        .react-sidebar .widget.back-rating i {
            color: #ffa439;
            font-size: 14px
        }

        .react-sidebar .widget.back-price ul.recent-category input[type=checkbox]+label::before {
            border-radius: 50%;
            margin-right: 10px;
            top: 0
        }

        .react-sidebar .widget.react-date-sec {
            box-shadow: 0 30px 50px 0 rgba(1, 11, 60, .1);
            background: #fff;
            margin-bottom: 10px;
            border-radius: 6px
        }

        .react-sidebar .widget.react-date-sec ul li {
            font-size: 16px;
            color: #0f1216;
            font-weight: 600;
            margin-bottom: 20px
        }

        .react-sidebar .widget.react-date-sec ul li b {
            color: #5b5f64;
            font-weight: 400;
            font-size: 16px;
            display: block
        }

        .react-sidebar .widget.react-date-sec ul li:last-child {
            margin-bottom: 0
        }

        .react-sidebar ul.recent-category {
            margin: -8px 0 0;
            padding: 0;
            list-style: none
        }

        .react-sidebar ul.recent-category li {
            margin: 8px 0
        }

        .react-sidebar ul.recent-category input[type=checkbox]+label {
            cursor: pointer
        }

        .react-sidebar ul.recent-category input[type=checkbox] {
            display: none
        }

        .react-sidebar ul.recent-category label {
            color: #5b5f64;
            font-size: 16px;
            font-weight: 400
        }

        .react-sidebar ul.recent-category input[type=checkbox]+label:before {
            content: "\2714";
            border: .1em solid #d9d8d8;
            border-radius: 4px;
            display: inline-block;
            width: 23px;
            height: 23px;
            line-height: 11px;
            margin-right: 12px;
            vertical-align: middle;
            color: transparent;
            transition: .2s;
            background: #fff;
            padding: 5px 6px;
            font-size: 13px;
            position: relative;
            top: -2px
        }

        .react-sidebar ul.recent-category input[type=checkbox]+label:active:before {
            transform: scale(0)
        }

        .react-sidebar ul.recent-category input[type=checkbox]:checked+label:before {
            background-color: #3270fc;
            border-color: #3270fc;
            color: #fff
        }

        .react-sidebar ul.recent-category input[type=checkbox]:disabled+label:before {
            transform: scale(1);
            border-color: #eee
        }

        .react-sidebar ul.related-courses {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .react-sidebar ul.related-courses li {
            display: flex;
            align-items: center;
            padding-bottom: 1.2em
        }

        .react-sidebar ul.related-courses li .back-ratings i {
            font-size: 10px;
            color: #ff9415
        }

        .react-sidebar ul.related-courses li .post-images {
            width: 87px;
            display: block
        }

        .react-sidebar ul.related-courses li .post-images img {
            display: block;
            width: 127px;
            border-radius: 6px
        }

        .react-sidebar ul.related-courses li .titles {
            display: block;
            padding-left: 20px
        }

        .react-sidebar ul.related-courses li .titles h4 {
            margin: 0 0 6px;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px
        }

        .react-sidebar ul.related-courses li .titles h4 a {
            color: #0f1216
        }

        .react-sidebar ul.related-courses li .titles h4:hover a {
            color: #3270fc
        }

        .react-sidebar ul.related-courses li .titles span {
            font-weight: 600;
            color: #0f1216
        }

        .react-sidebar ul.related-courses li:last-child {
            padding-bottom: 0
        }

        .react-sidebar ul.recent-posts {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .react-sidebar ul.recent-posts li {
            display: flex;
            align-items: center;
            padding-bottom: 1.2em
        }

        .react-sidebar ul.recent-posts li .back-ratings i {
            font-size: 10px;
            color: #ff9415
        }

        .react-sidebar ul.recent-posts li .post-images {
            width: 87px;
            display: block
        }

        .react-sidebar ul.recent-posts li .post-images img {
            display: block;
            width: 127px;
            border-radius: 6px
        }

        .react-sidebar ul.recent-posts li .titles {
            display: block;
            padding-left: 20px
        }

        .react-sidebar ul.recent-posts li .titles h4 {
            margin: 0 0 6px;
            font-weight: 800;
            font-size: 16px;
            line-height: 20px
        }

        .react-sidebar ul.recent-posts li .titles h4 a {
            color: #00306e
        }

        .react-sidebar ul.recent-posts li .titles h4:hover a {
            color: #3270fc
        }

        .react-sidebar ul.recent-posts li .titles span {
            font-weight: 600;
            color: #737383
        }

        .react-sidebar ul.recent-posts li:last-child {
            padding-bottom: 0
        }

        .react-sidebar h3.widget-title {
            margin: 0;
            font-size: 20px;
            padding-bottom: 1.1em;
            color: #0f1216;
            font-weight: 600;
            line-height: 1.2
        }

        .react-sidebar form {
            position: relative
        }

        .react-sidebar form input {
            width: 100%;
            padding: 12px 28px;
            background: #eef1f5;
            outline: 0;
            border-radius: 6px;
            border: none;
            padding-right: 80px
        }

        .react-sidebar form button {
            background: 0 0;
            color: #fff;
            display: inline-block;
            padding: 4px 23px;
            border-radius: 0 3px 3px 0;
            font-size: 16px;
            border: none;
            outline: 0;
            cursor: pointer;
            margin-top: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: all .5s ease
        }

        .react-sidebar form button svg {
            color: #333;
            position: relative;
            top: 6px
        }

        .react-sidebar form button svg:hover {
            color: #3270fc
        }

        .react-sidebar form button:hover {
            opacity: .9
        }

        .events-details .videos {
            padding-bottom: 30px
        }

        .events-details h3 {
            font-size: 26px;
            font-weight: 600;
            color: #0f1216
        }

        .events-details p {
            font-size: 18px;
            line-height: 28px;
            color: #5b5f64
        }

        .events-details ul.mata-tags {
            border-top: 1px solid #e8ecf0;
            padding-top: 30px;
            padding-bottom: 30px;
            margin-top: 40px
        }

        .events-details ul.mata-tags li {
            display: inline-block;
            margin-right: 5px
        }

        .events-details ul.mata-tags li a {
            padding: 3px 20px;
            background: #f2f4f9;
            font-size: 13px;
            color: #4d5765;
            font-weight: 600;
            display: block;
            border-radius: 4px
        }

        .events-details ul.mata-tags li a:hover {
            background: #3270fc;
            color: #fff
        }

        .events-details ul.mata-tags li:last-child {
            margin: 0
        }

        .events-details ul.mata-tags li.tags {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-right: 20px
        }

        .events-details .others-instructors {
            display: flex;
            justify-content: start;
            flex-wrap: wrap;
            padding-top: 60px
        }

        .events-details .others-instructors li {
            text-align: center;
            margin-right: 32px
        }

        .events-details .others-instructors li span {
            display: block;
            font-size: 20px;
            font-weight: 700;
            color: #0f1216;
            line-height: 25px
        }

        .events-details .others-instructors li span em {
            display: block;
            color: #5b5f64;
            font-weight: 400;
            font-style: normal
        }

        .events-details .others-instructors li:first-child {
            flex: 0 0 100%;
            text-align: left;
            margin-bottom: 16px
        }

        .events-details .others-instructors li:first-child h3 {
            margin: 0
        }

        .events-details .others-instructors li:last-child {
            margin-right: 0
        }

        body.event-page .react-upcoming__event .event__card .event__card--link:hover {
            background: #3270fc;
            border-color: #3270fc
        }

        body.event-page .react-upcoming__event .event__card .event__card--date em,
        body.event-page .react-upcoming__event .event__card .event_time {
            color: #3270fc
        }

        .student_satisfaction-section {
            background: url(assets/images/testimonial/bg.jpg) no-repeat center top;
            background-size: cover;
            padding-top: 100px;
            padding-bottom: 100px
        }

        .student_satisfaction-section .event__card .event__card--content {
            background: #fff;
            padding: 40px 44px 42px;
            border-radius: 10px;
            position: relative
        }

        .student_satisfaction-section .event__card .event__card--content .testimonial__ratings {
            font-size: 14px;
            color: #797e84
        }

        .student_satisfaction-section .event__card .event__card--content .testimonial__ratings em {
            color: #ffa439
        }

        .student_satisfaction-section .event__card .event__card--content .parag {
            color: #5b5f64;
            line-height: 30px;
            margin: 6px 0 0;
            font-size: 18px
        }

        .student_satisfaction-section .poly {
            position: absolute;
            bottom: -11px;
            width: 24px !important;
            z-index: 11111;
            left: 40px;
            transform: rotate(-53deg);
            height: 24px;
            background: #fff
        }

        .student_satisfaction-section .author-sec {
            display: flex;
            align-items: center;
            padding: 30px 28px
        }

        .student_satisfaction-section .author-sec .icon {
            margin-right: 15px
        }

        .student_satisfaction-section .author-sec .text {
            flex: 1
        }

        .student_satisfaction-section .author-sec .text h4 {
            margin: 0 0 5px;
            font-weight: 700;
            font-size: 18px;
            line-height: 23px;
            color: #0f1216
        }

        .student_satisfaction-section .author-sec .text p {
            margin: 0;
            font-size: 14px;
            line-height: 17px;
            color: #5b5f64
        }

        .student_satisfaction-section .author-sec a {
            border-radius: 50%;
            width: 44px;
            height: 44px;
            border: 2px solid #ededed;
            text-align: center;
            line-height: 36px
        }

        .student_satisfaction-section .author-sec a svg {
            width: 18px;
            color: #00306e
        }

        .student_satisfaction-section .author-sec a:hover {
            background: #3270fc;
            color: #fff
        }

        .student_satisfaction-section .author-sec a:hover svg {
            color: #fff
        }

        .student_satisfaction-section .owl-carousel .owl-controls {
            position: unset;
            transform: unset;
            width: auto
        }

        .student_satisfaction-section .owl-carousel .owl-nav {
            position: absolute;
            display: block;
            top: 29%;
            right: unset;
            width: 100%;
            opacity: 1;
            transition: all .5s ease 0s
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-] {
            position: absolute;
            left: 20px;
            display: inline-block;
            font-size: 0;
            width: 50px;
            height: 50px;
            line-height: 48px;
            color: #00306e;
            background: #fff;
            border-radius: 100%;
            transition: all .5s ease 0s;
            box-shadow: -6px 20px 30px rgba(15, 18, 22, .06)
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-]:before {
            content: "\35";
            font-family: "Font Awesome 6 Free",sans-serif;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 26px;
            font-weight: 900
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-].owl-next {
            left: auto;
            right: -35px
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-].owl-prev {
            left: -35px;
            right: auto
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-].owl-prev:before {
            content: '\34'
        }

        .student_satisfaction-section .owl-carousel .owl-nav [class*=owl-]:hover {
            color: #fff;
            background: #3270fc;
            border-color: #3270fc
        }

        .student_satisfaction-section .count__area2 {
            padding-top: 90px
        }

        .student_satisfaction-section .count__area2 .container {
            border-top: 1px solid rgba(15, 18, 22, .08);
            border-bottom: 1px solid rgba(15, 18, 22, .08);
            max-width: 1280px
        }

        .student_satisfaction-section .count__area2 .container ul li {
            border-right: 1px solid rgba(15, 18, 22, .08);
            padding-top: 25px;
            padding-bottom: 25px;
            padding-left: 70px
        }

        .student_satisfaction-section .count__area2 .container ul li:last-child {
            border-right: none
        }

        .student_satisfaction-section .count__area2 .container ul li:first-child {
            padding-left: 0
        }

        .student_satisfaction-section .count__area2 .count__content {
            display: flex;
            align-items: center;
            position: relative
        }

        .student_satisfaction-section .count__area2 .count__content .icon {
            margin-right: 15px
        }

        .student_satisfaction-section .count__area2 .count__content .icon img {
            position: relative;
            top: -2px
        }

        .student_satisfaction-section .count__area2 .count__content .text {
            flex: 1
        }

        .student_satisfaction-section .count__area2 .count__content .text span {
            margin: 0 0 5px;
            font-weight: 600;
            font-size: 50px;
            line-height: 60px;
            color: #0f1216
        }

        .student_satisfaction-section .count__area2 .count__content .text em {
            margin: 0 0 5px;
            font-weight: 600;
            font-size: 50px;
            line-height: 60px;
            color: #0f1216;
            font-style: normal
        }

        .student_satisfaction-section .count__area2 .count__content .text p {
            margin: 0;
            font-size: 15px;
            line-height: 18px;
            color: #5b5f64;
            text-transform: uppercase
        }

        .student_satisfaction-section .count__area2 .count__content:last-child {
            border-right: 0
        }

        .high_quality-section .react-tab-gird {
            position: relative
        }

        .high_quality-section .react-tab-gird .shape__1 {
            position: absolute;
            top: 40%;
            left: 4.5%;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .high_quality-section .react-tab-gird .shape__2 {
            position: absolute;
            top: 54%;
            left: 7.5%;
            z-index: -1
        }

        .high_quality-section .react-tab-gird .shape__3 {
            position: absolute;
            top: -15%;
            right: 2%;
            z-index: -1;
            -webkit-animation: hero-leaf-2 3s linear infinite alternate;
            -moz-animation: hero-leaf-2 3s linear infinite alternate;
            -o-animation: hero-leaf-2 3s linear infinite alternate;
            animation: hero-leaf-2 3s linear infinite alternate
        }

        .high_quality-section .react-tab-gird .nav-tabs {
            display: flex;
            border: none;
            justify-content: center
        }

        .high_quality-section .react-tab-gird .nav-tabs li a {
            display: flex;
            background: #fff;
            align-items: center;
            color: #0f1216;
            padding: 16px 32px 15px 25px;
            margin: 0 12px;
            transition: all .5s ease 0s;
            font-size: 18px;
            line-height: 1;
            font-weight: 600;
            box-shadow: none;
            cursor: pointer;
            position: relative;
            vertical-align: middle;
            transition: 1s all cubic-bezier(.075, .82, .165, 1);
            box-shadow: 0 30px 50px rgba(0, 14, 32, .1);
            border-radius: 10px;
            border: none
        }

        .high_quality-section .react-tab-gird .nav-tabs li a em {
            font-style: normal
        }

        .high_quality-section .react-tab-gird .nav-tabs li a em.icon {
            margin-right: 14px
        }

        .high_quality-section .react-tab-gird .nav-tabs li a.active,
        .high_quality-section .react-tab-gird .nav-tabs li a:hover {
            opacity: .9;
            color: #0f1216
        }

        .high_quality-section .react-tab-gird .tab-pane {
            border: 6px solid #fff;
            box-shadow: 0 30px 50px rgba(15, 18, 22, .14);
            border-radius: 10px;
            max-width: 985px;
            margin: 30px auto 40px;
            line-height: 0
        }

        .react-footer {
            position: relative;
            background-color: #0f1216;
            color: #fff
        }

        .react-footer .footer-top-cta {
            background: url(assets/images/cta.jpg) no-repeat center top;
            background-size: cover;
            border-radius: 10px;
            padding: 50px 55px;
            position: absolute;
            width: 100%;
            top: -17%;
            max-width: 1300px;
            z-index: 1
        }

        .react-footer .footer-top-cta .row {
            align-items: center
        }

        .react-footer .footer-top-cta h4 {
            font-size: 16px;
            color: #fff;
            margin: 0 0 8px;
            line-height: 20px;
            font-weight: 600
        }

        .react-footer .footer-top-cta h3 {
            font-size: 44px;
            color: #fff;
            margin: 0;
            line-height: 50px;
            font-weight: 700
        }

        .react-footer .footer-top-cta a {
            font-size: 16px;
            font-weight: 600;
            border-radius: 6px;
            border: 2px solid rgba(255, 255, 255, .2);
            padding: 15px 35px 12px 35px;
            color: #fff;
            display: inline-block;
            margin-top: 0;
            line-height: 20px
        }

        .react-footer .footer-top-cta a svg {
            width: 18px
        }

        .react-footer .footer-top-cta a:hover {
            background: #fff;
            color: #0f1216
        }

        .react-footer .footer-top {
            padding: 100px 0 93px
        }

        .react-footer .footer-top .footer-menu li {
            margin-bottom: 2px
        }

        .react-footer .footer-top .footer-menu li a {
            color: #b7b7b9;
            position: relative;
            display: inline-block;
            transition: all .5s ease 0s;
            font-size: 16px;
            font-weight: 600;
            line-height: 30px
        }

        .react-footer .footer-top .footer-menu li a:after {
            content: "";
            display: block;
            position: relative;
            z-index: 1;
            top: auto;
            bottom: 0;
            left: 0;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none;
            width: 0;
            height: 1px;
            -webkit-transition: all .3s ease;
            -ms-transition: all .3s ease;
            transition: all .3s ease;
            background-color: #3270fc
        }

        .react-footer .footer-top .footer-menu li a:hover {
            color: #3270fc;
            margin-left: 5px
        }

        .react-footer .footer-top .footer-menu li a:hover:after {
            width: 100%
        }

        .react-footer .footer-top .footer-menu li:last-child {
            margin-bottom: 0
        }

        .react-footer .footer-top .footer-desc p {
            margin-bottom: 0
        }

        .react-footer .footer-top .footer3__form {
            margin: 40px 0 30px
        }

        .react-footer .footer-top .footer3__form form {
            position: relative
        }

        .react-footer .footer-top .footer3__form p {
            font-size: 16px;
            line-height: 24px
        }

        .react-footer .footer-top .footer3__form input {
            padding: 15px 80px 16px 30px;
            border: none;
            outline: 0;
            background: #fff;
            border-radius: 4px;
            width: 100%
        }

        .react-footer .footer-top .footer3__form input::placeholder {
            font-size: 15px;
            font-weight: 400;
            color: #4b4b57
        }

        .react-footer .footer-top .footer3__form input:focus {
            -webkit-box-shadow: 0 20px 30px 0 rgba(8, 0, 42, .14);
            -moz-box-shadow: 0 20px 30px 0 rgba(8, 0, 42, .14);
            box-shadow: 0 20px 30px 0 rgba(8, 0, 42, .14);
            z-index: 1
        }

        .react-footer .footer-top .footer3__form-1 {
            position: absolute;
            width: 60px;
            bottom: 0;
            border-radius: 0 4px 4px 0;
            background-color: #3270fc;
            color: #fff;
            top: 0;
            right: 0;
            border: none
        }

        .react-footer .footer-top .footer3__form-1:hover {
            opacity: .9
        }

        .react-footer .footer-top .footer3__form-1 i {
            position: absolute;
            font-size: 22px;
            top: 19px;
            left: 17px
        }

        .react-footer .footer-top .footer-subtitle {
            color: #fff;
            margin-top: 25px;
            line-height: 24px
        }

        .react-footer .footer-top .footer-widget-1 {
            margin-top: -10px
        }

        .react-footer .footer-top .footer-widget-3 {
            margin-left: 50px
        }

        .react-footer .footer-top .footer-widget.footer-widget-2 {
            padding-left: 100px
        }

        .react-footer .footer-top .footer-widget .footer-title {
            margin-bottom: 30px;
            position: relative;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            line-height: 24px
        }

        .react-footer .footer-top .footer-widget .footer-address {
            margin-bottom: 30px
        }

        .react-footer .footer-top .footer-widget .footer-address li {
            width: 100%;
            font-size: 15px;
            margin-bottom: 10px;
            display: inline-flex;
            color: #b7b7b9;
            font-weight: 600
        }

        .react-footer .footer-top .footer-widget .footer-address li a {
            color: #b7b7b9;
            margin-left: 10px;
            line-height: 24px;
            font-size: 18px
        }

        .react-footer .footer-top .footer-widget .footer-address li a:hover {
            color: #3270fc
        }

        .react-footer .footer-top .footer-widget .footer-address li svg {
            position: relative;
            top: 0;
            color: #fff;
            width: 21px
        }

        .react-footer .footer-top .footer-widget .footer-address li:last-child {
            margin-bottom: 0
        }

        .react-footer .footer-top .footer-widget .footer-address li.react-address svg {
            margin-right: 10px;
            width: 22px;
            position: relative;
            top: 1px
        }

        .react-footer.react-footer-two .footer-top .footer3__form-1 {
            background: #3270fc
        }

        .react-footer.react-footer-two .footer-top .footer3__form-1:hover {
            opacity: .9
        }

        .react-footer.react-footer-two .copyright .react-copy-left a,
        .react-footer.react-footer-two .footer-top .footer-menu li a:hover,
        .react-footer.react-footer-two .footer-top .footer-widget .footer-address li a:hover {
            color: #3270fc
        }

        .react-footer.react-footer-two .footer-top .footer-menu li a::after {
            background: #3270fc
        }

        .react-footer.react-footer-two .social-links li a:hover {
            background: #3270fc;
            border-color: #3270fc
        }

        .react-footer .copyright {
            text-align: center
        }

        .react-footer .copyright .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid rgba(255, 255, 255, .1);
            padding-top: 20px;
            padding-bottom: 20px
        }

        .react-footer .copyright .follow {
            font-size: 16px;
            line-height: 20px;
            color: #b7b7b9;
            font-weight: 700;
            margin-right: 20px
        }

        .react-footer .copyright .react-copy-left {
            font-size: 14px;
            margin-bottom: 0;
            color: #a6a6a8;
            font-weight: 600;
            line-height: 22px
        }

        .react-footer .copyright .react-copy-left a {
            color: #3270fc;
            transition: all .7s ease
        }

        .react-footer .copyright .react-copy-left a:hover {
            color: #3270fc
        }

        .react-footer .copyright .react-copy-right ul {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center
        }

        .react-footer .copyright .react-copy-right ul li {
            padding-left: 6px
        }

        .react-footer .copyright .react-copy-right ul li a {
            color: #fff;
            font-size: 13px;
            font-weight: 500
        }

        .react-footer .copyright .react-copy-right ul li a:hover {
            color: #fff
        }

        .react-footer.home-main .copyright .react-copy-left a,
        .react-footer.home-main .footer-top .footer-menu li a:hover,
        .react-footer.home-main .footer-top .footer-widget .footer-address li a:hover {
            color: #d2093c
        }

        .react-footer.home-main .footer-top .footer-menu li a:after {
            background: #d2093c
        }

        .react-footer.home-main .social-links li a:hover {
            background: #d2093c;
            border-color: #d2093c
        }

        .react-footer.home-main .footer-top .footer3__form-1 {
            background-color: #d2093c
        }

        .social-links li {
            display: inline-block;
            margin-right: 6px
        }

        .social-links li a {
            border: 2px solid rgba(255, 255, 255, .1);
            color: #fff;
            background: 0 0;
            display: block;
            width: 44px;
            height: 44px;
            line-height: 43px;
            text-align: center;
            transition: all .7s ease 0s;
            border-radius: 50%
        }

        .social-links li a:hover {
            color: #fff;
            background: #3270fc;
            border-color: #3270fc
        }

        .social-links li:last-child {
            margin-right: 0
        }

        #react__preloader {
            display: -webkit-box;
            display: -ms-flexbox;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            display: -webkit- flex;
            display: -ms- flex;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100vh;
            background: #fff;
            position: fixed;
            z-index: 999999;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .react__loader_logo {
            position: absolute
        }

        .react__loader_logo img {
            width: 40px
        }

        #react__circle_loader {
            width: 100px;
            height: 100px;
            border-style: solid;
            border-width: 5px;
            border-top-color: #465fe9;
            border-right-color: #465fe9;
            border-bottom-color: #d5eaff;
            border-left-color: #d5eaff;
            border-radius: 50%;
            -webkit-animation: spinLoader 2s linear infinite;
            animation: spinLoader 2s linear infinite
        }

        @-webkit-keyframes spinLoader {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spinLoader {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        #backscrollUp {
            position: fixed;
            bottom: 40px;
            right: 15px;
            transition: all .5s ease;
            z-index: 99999;
            cursor: pointer;
            display: none;
            background: #3270fc;
            border-radius: 3px
        }

        #backscrollUp.home {
            background: #d2093c
        }

        #backscrollUp span {
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 3px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            display: none;
            transition: all .5s ease
        }

        #backscrollUp span:before {
            transition: all .5s ease;
            display: block;
            margin: 0;
            font-size: 22px
        }

        #backscrollUp span:hover {
            opacity: .9
        }

        #backscrollUp.react__up___scroll span {
            display: block
        }

        .react-login-page {
            background: url(assets/images/login/1.jpg) no-repeat center top;
            background-size: cover
        }

        .react-login-page.react-signup-page {
            background: url(assets/images/login/1.jpg) no-repeat center top;
            background-size: cover
        }

        .react-login-page .login-left-content h1 {
            font-size: 50px;
            font-weight: 700;
            color: #0f1216;
            margin: 0 0 18px
        }

        .react-login-page .login-left-content p {
            margin: 0 0 50px;
            font-size: 17px;
            color: #55545b
        }

        .react-login-page .login-left-content p a {
            font-weight: 600;
            color: #3270fc
        }

        .react-login-page .login-left-content p a:hover {
            color: #55545b
        }

        .react-login-page .login-right-form {
            background: #fff;
            padding: 50px;
            max-width: 470px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 40px 60px rgba(15, 18, 22, .08)
        }

        .react-login-page .login-right-form form .login-top {
            text-align: center;
            padding-bottom: 35px
        }

        .react-login-page .login-right-form form .login-top h3 {
            margin: 0 0 8px;
            color: #0f1216;
            font-size: 26px;
            font-weight: 700
        }

        .react-login-page .login-right-form form .login-top p {
            margin: 0;
            font-size: 16px;
            color: #4d5765
        }

        .react-login-page .login-right-form form .social-links {
            text-align: center
        }

        .react-login-page .login-right-form form .social-links li a {
            border-radius: 50%;
            background: #3270fc;
            color: #fff;
            width: 44px;
            height: 44px;
            line-height: 44px;
            border: none
        }

        .react-login-page .login-right-form form .social-links li a:hover {
            opacity: .9
        }

        .react-login-page .login-right-form form .social-links li:last-child a {
            border: 2px solid #e8ecf0;
            font-size: 16px;
            background: 0 0;
            color: #9ea9b6;
            position: relative;
            top: 3px
        }

        .react-login-page .login-right-form form .social-links li:last-child a:hover {
            background: #3270fc;
            border-color: #3270fc;
            color: #fff
        }

        .react-login-page .login-right-form form span.back-or {
            display: block;
            font-size: 14px;
            color: #7a797f;
            text-align: center;
            font-weight: 500;
            margin: 20px 0 16px
        }

        .react-login-page .login-right-form form p label {
            display: block;
            color: #0f1216;
            font-size: 14px;
            font-weight: 600;
            margin: 0 0 8px
        }

        .react-login-page .login-right-form form input {
            border: none;
            background: #f2f4f9;
            width: 100%;
            padding: 12px 20px;
            border-radius: 6px
        }

        .react-login-page .login-right-form form [type=submit] {
            background: #3270fc;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 5px;
            display: inline-block;
            padding: 12px 38px;
            transition: all .5s ease 0s;
            border: none;
            width: 100%
        }

        .react-login-page .login-right-form form [type=submit]:hover {
            opacity: .9
        }

        .react-login-page .login-right-form form [type=submit] svg {
            width: 18px
        }

        .react-login-page .login-right-form form .signup {
            font-weight: 500;
            font-size: 14px;
            color: #7a797f;
            font-style: normal;
            text-align: center;
            display: block;
            padding-top: 20px
        }

        .react-login-page .login-right-form form .signup a {
            color: #3270fc
        }

        .react-login-page .login-right-form form .signup a:hover {
            color: #7a797f
        }

        .react-login-page .login-right-form form .back-check-box {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #7a797f;
            margin-top: -16px;
            margin-bottom: 35px
        }

        .react-login-page .login-right-form form .back-check-box input {
            width: auto;
            margin-right: 5px
        }

        .react-login-page .login-right-form form .back-check-box p {
            margin: 0;
            flex: 1;
            text-align: right
        }

        .react-login-page .login-right-form form .back-check-box em {
            font-weight: 600;
            font-style: normal;
            color: #00306e
        }

        .react-login-page .container {
            max-width: 1050px
        }

        .react-login-page .row.align-center {
            align-items: center
        }
    </style>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/custom-spacing.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/custom-spacing.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/responsive.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/responsive.css") ?>">
    </noscript>



    <!-- SCRIPTS -->
    <?= $settings->analytics ?>
    <?= $settings->metrica ?>
    <?= $settings->live_support ?>
    <script>
        let base_url = "<?= asset_url() ?>";
    </script>

</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?=$settings->company_name?>" class="img-fluid lazyload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->