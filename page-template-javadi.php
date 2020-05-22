<?php
require_once dirname(__FILE__) . '/../../../wp-includes/option.php';

?>
<!DOCTYPE html>
<!-- saved from url=(0022)./ -->
<html class="rtl yui3-js-enabled webkit rtl js chrome chrome79 chrome79-0 win" dir="rtl" lang="fa-IR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>صفحه اصلی - دفتر</title>
    <link href="favicon.ico" rel="Shortcut Icon">
    <link href="./" rel="canonical">
    <link href="./" hreflang="x-default" rel="alternate">
    <link href="./" hreflang="fa-IR" rel="alternate">
    <link href="./en/" hreflang="en-US" rel="alternate">
    <link href="./ar/" hreflang="ar-SA" rel="alternate">
    <link href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/main(1).css" rel="stylesheet" type="text/css">
    <link href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/main(2).css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/jquery-migrate-git.min.js"></script>
    <meta content="article" property="og:type">
    <meta content="رحمت بی انتها .." property="og:title">
    <meta content="article" property="og:type">
    <meta content="ویدئو؛ رحمت پروردگار" property="og:title">
    <meta content="/image/journal/article?img_id=2658082&amp;t=1577587899189" property="og:image">
    <link class="lfr-css-file" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/main(3).css" rel="stylesheet" type="text/css">
    <link href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/responsiveslides.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .bottomMenu>div {
            display: block;
        }

        .bottomMenu>div>ul {
            display: inline;
            float: right;
            margin-top: 13px;
        }

        .bottomMenu>div>li {
            list-style-type: none;
            display: inline;
            font-size: 12px;
        }

        .bottomMenu>div>li a {
            color: #fff;
            line-height: 15px;
            text-decoration: none;
            font-weight: normal;
            border-right: thin solid #fff;
            padding: 0 7px 0 3px;
        }

        .bottomMenu>div>li a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .bottomMenu div>li:last-child>a {
            border-right: none;
        }

        /* remove pipe from last item */
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'sans-light';
            src: url('<?php echo plugin_dir_url(__FILE__) ?>assets/font/IRANSans.eot?#') format('eot'), url('<?php echo plugin_dir_url(__FILE__) ?>assets/font/IRANSans.woff2') format('woff2'), url('<?php echo plugin_dir_url(__FILE__) ?>assets/font/IRANSans.woff') format('woff');
            font-weight: 200
        }

        .portlet-body {
            min-height: 1px
        }

        div#main-content {
            min-height: 84%
        }

        .video-style,
        .video-style2 {
            position: relative;
            z-index: 0;
            width: 100%;
            top: 0
        }

        @media screen and (min-width:560px) {
            .asset-slide-show-12 .rslides {
                margin-top: -70px !important
            }

            .video-style {
                transform: translate3d(0px, -25%, 0px);
                margin-bottom: -25%
            }
        }

        @media screen and (max-width:560px) {
            .asset-slide-show-12 .rslides {
                margin-top: -5px !important
            }
        }

        #_118_INSTANCE_9pfVMsCLeHvy_column-3 {
            display: none !important
        }

        #layout-column__118_INSTANCE_9pfVMsCLeHvy__column-1 {
            display: none !important
        }

        #_118_INSTANCE_9pfVMsCLeHvy_column-2 {
            display: none !important
        }

        .asset-slide-show-12 .rslides img {
            display: none !important
        }

        .asset-slide-show-12 a.prev {
            display: none
        }

        .asset-slide-show-12 a.next {
            display: none
        }

        .asset-slide-show-12 .rslides {
            height: 85px;
            background: rgba(0, 0, 0, 0.8)
        }

        .asset-slide-show-12 .caption-con {
            max-height: none !important;
            bottom: auto !important;
            background: transparent !important;
            position: relative !important
        }

        .asset-slide-show-12 a.caption {
            font-family: sans-light;
            padding: 7px !important
        }

        a.caption.title {
            color: #dc3522 !important;
            font-size: 14px;
            line-height: 26px !important;
            font-weight: bold
        }

        a.caption.summary {
            font-size: 12px !important;
            line-height: 24px !important
        }

        .sec-icons .journal-content-article {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/png/motoon.jpg") top right repeat;
            padding: 15px
        }

        .sec-icons img.pagination-centered.img-fluid {
            margin: 0 auto
        }

        .sec-icons .carousel-inner>.carousel-item>a>img,
        .carousel-inner>.carousel-item>img,
        .img-fluid {
            display: block;
            max-width: 100%;
            height: auto
        }

        .sec-text .journal-content-article {
            background: #8ea1b6;
            min-height: 100px;
            padding: 34px 15px
        }

        .sec-text .journal-content-article p {
            direction: rtl;
            color: #FFF;
            line-height: 32px;
            font-size: 15px;
            text-align: center;
            font-family: sans-light
        }

        .sec-droos .columns-3 {
            background: white;
            margin-left: auto !important;
            margin-right: auto !important;
            padding-left: 15px !important;
            padding-right: 15px !important
        }

        .sec-droos li.title-list.content.default-icon {
            line-height: 25px
        }

        .dars .portlet-borderless-container {
            border: 1px solid #b9b9b9;
            border-radius: 4px
        }

        .sec-droos .btn-droos {
            width: 90%;
            text-align: center;
            background: #c7c7c7;
            padding: 6px;
            display: block;
            margin: 5%
        }

        .btn {
            width: 100%;
            text-align: center;
            background: #c7c7c7;
            /* padding: 6px; */
            display: block;
            /* margin: 5% */
        }

        .btn-nim {
            width: 50%;
        }

        @media(min-width:992px) {
            .sec-droos .columns-3 {
                max-width: 992px
            }
        }

        .sec-droos .image-doross {
            height: 150px;
            background-size: cover !important;
            border-radius: 4px 4px 0 0 !important;
            border: none !important;
            box-shadow: none !important
        }

        .sec-droos .title-doross {
            margin-left: auto;
            margin-right: auto;
            margin-top: -50px;
            height: 100px;
            width: 100px;
            border-radius: 50%;
            background-size: cover !important;
            border: 3px solid #f9f9f9
        }

        .sec-droos .portlet-column-content {
            padding: 0 !important
        }

        .dars-tafsir .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/tafsir.jpg") no-repeat
        }

        .dars-tafsir .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Tafsirr.jpg") no-repeat
        }

        .dars-akhlagh .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/akhlagh.jpg") no-repeat
        }

        .dars-akhlagh .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/akhlaghh.jpg") no-repeat
        }

        .dars-erfan .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/erfan.jpg") no-repeat
        }

        .dars-erfan .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Feghhh.jpg") no-repeat
        }

        .dars-fegh .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/feghh.jpg") no-repeat
        }

        .dars-fegh .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Feghhh.jpg") no-repeat
        }

        .dars-esteftaat .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/estefta.jpg") no-repeat
        }

        .dars-esteftaat .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Esteftaat.jpg") no-repeat
        }

        .dars-maghalat .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/article.jpg") no-repeat
        }

        .dars-maghalat .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Maghalat.jpg") no-repeat
        }

        .dars-payam .title-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/payam.jpg") no-repeat
        }

        .dars-payam .image-doross {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/img/Hajagha.jpg") no-repeat
        }

        @media screen and (min-width:1023px) {
            .botton-news .lead_description_larg-section-blocker {
                width: 23%;
                margin: 1% !important;
                height: 450px
            }
        }

        @media screen and (max-width:1023px) and (min-width:561px) {
            .botton-news .lead_description_larg-section-blocker {
                width: 48%;
                margin: 1% !important
            }
        }

        @media screen and (max-width:1023px) and (min-width:769px) {
            .botton-news .lead_description_larg-section-blocker {
                height: 480px
            }
        }

        @media screen and (max-width:768px) and (min-width:561px) {
            .botton-news .lead_description_larg-section-blocker {
                height: 450px
            }
        }

        @media screen and (max-width:560px) {
            .botton-news .lead_description_larg-section-blocker {
                width: 90%;
                margin: 20px 5% !important;
                height: auto
            }
        }

        .botton-news .lead_description_larg-section-blocker {
            float: right;
            padding: 15px;
            border: 1px solid #c7c7c7;
            background-color: white
        }

        .botton-news img.omran-yazd-small-image {
            width: 100%;
            height: auto;
            border: 1px solid;
        }

        .botton-news .lead_description_larg-article-image {
            width: 100%
        }

        .botton-news .lead_description_larg-article-body-image {
            width: 100% !important;
            float: none !important;
            margin-left: auto !important;
            margin-right: auto !important;
            border: none !important;
            padding: 0 !important;
            height: auto
        }

        .botton-news .portlet-body {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/png/motoon.jpg")
        }

        .botton-news .lead_description_larg-article-content {
            font-family: sans-light !important;
            font-size: 12px !important;
            color: #616161 !important;
            line-height: 24px !important
        }

        .botton-news a.lead_description_larg-article-title-a {
            color: #616161;
            font-size: 12px;
            text-align: justify !important;
            font-family: sans-light !important;
            font-weight: bold;
            line-height: 24px
        }

        .botton-sec h1.header-title {
            font-size: 14px !important;
            font-family: sans-light;
            line-height: 30px !important;
            color: red;
            text-align: justify;
            font-weight: normal !important
        }

        .botton-right:hover {
            overflow-y: auto;
            direction: rtl
        }

        .botton-right {
            overflow-y: hidden;
            max-height: 350px
        }

        .botton-right .asset-full-content-body {
            text-align: justify;
            line-height: 20px
        }

        .copyright-solar {
            text-align: center;
            border-top: 1px solid #787878;
            width: 48%;
            float: right;
            margin: 25px 26% 0 26%
        }

        span.copyright-txt {
            color: #FFF;
            font-family: Tahoma;
            font-size: 12px;
            margin: 7px 0;
            display: block
        }

        .footer-fa-esra {
            direction: rtl;
            line-height: 16.8px;
            text-align: right;
            padding: 10px
        }

        section.footer {
            background: #3e3e3e !important;
            padding-top: 10px !important;
            color: white !important
        }

        a#esra-link-footer {
            color: #fff;
            font-size: 13px;
            font-family: Tahoma
        }

        .footer-fa-esra {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/png/5.gif") no-repeat right !important;
            padding-right: 22px;
            display: block !important;
            transition: background .5s ease !important
        }

        hr {
            margin-top: 0 !important;
            margin-bottom: 20px;
            border: 0;
            border-top: 0 solid #eee !important
        }

        h3.widget-title-footer {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            border-bottom: 1px solid #787878;
            overflow: visible;
            font-size: 20px;
            line-height: 29px
        }

        span.block-title-footer {
            background: none !important;
            border-bottom: 1px solid #dc3522;
            padding: 0;
            top: 1px;
            text-transform: capitalize
        }

        .footer .container {
            width: 100% !important;
            padding: 0 5%
        }

        .archive-page .portlet-layout {
            background: url("<?php echo plugin_dir_url(__FILE__) ?>assets/png/motoon.jpg")
        }

        .archive-page .portlet-column {
            float: right !important
        }

        .asar-cat *:focus {
            outline: 0
        }

        .asar-cat form#_advancedsearch_WAR_advancedsearchportlet_fm {
            float: right !important
        }

        .asar-cat .accordion {
            list-style: none;
            width: 100%;
            margin: 0 !important;
            background: #FFF;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px
        }

        .asar-cat .accordion .link {
            cursor: pointer;
            display: block;
            padding: 15px 15px 15px 42px;
            color: #4d4d4d;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .asar-cat .accordion li:last-child .link {
            border-bottom: 0
        }

        .asar-cat .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #fff;
            -webkit-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease
        }

        .asar-cat .accordion li i.fa-chevron-down {
            right: 5px;
            left: auto;
            font-size: 14px
        }

        .asar-cat .accordion li.open .link {
            color: #fff
        }

        .asar-cat .accordion li.open i {
            color: #fff
        }

        .asar-cat .accordion li.open i.fa-chevron-down {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .asar-cat .submenu {
            display: none;
            background: #444359;
            font-size: 14px
        }

        .asar-cat .submenu li {
            border-bottom: 1px solid #4b4a5e
        }

        .asar-cat .submenu a {
            display: inline-block;
            text-decoration: none;
            color: #d9d9d9;
            width: 85%;
            padding: 12px;
            padding-left: 42px;
            -webkit-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease
        }

        .asar-cat .submenu a:hover {
            background: #868282;
            color: #FFF
        }

        .asar-cat li.facet-value div {
            float: left
        }

        .asar-cat span.taglib-text {
            padding-right: 20px
        }

        .asar-cat .search-asset-vocabulary-list-container .link .icon {
            display: none
        }

        .asar-cat .lfr-panel-title {
            padding-right: 20px !important;
            font-weight: normal !important;
            font-size: 13px !important;
            font-family: sans-light
        }

        .asar-cat .lfr-panel-titlebar.link.aui-helper-unselectable {
            background: #868282 !important;
            background-image: none !important;
            padding: 10px !important;
            border-color: white !important;
            color: white;
            margin-bottom: 0 !important;
            border-bottom: none !important
        }

        .asar-cat .aui-helper-clearfix.aui-tree-node-content.aui-tree-data-content.aui-tree-node-content.aui-tree-node-leaf strong {
            font-weight: normal !important;
            color: #868282 !important;
            font-size: 12px;
            font-family: sans-light;
            line-height: 2em
        }

        .asar-cat li.close-list {
            border-bottom: 1px solid white
        }

        .asar-cat .lfr-panel-container.taglib-asset-categories-navigation {
            border: none !important
        }

        .asar-cat a.tag-selected {
            pointer-events: none;
            cursor: default;
            opacity: .5
        }

        @media(min-width:768px) {
            .asar-cat-all button#summenu2265 {
                display: none
            }

            .asar-cat-all ul#accordion {
                display: block !important
            }
        }

        @media(max-width:768px) {
            .asar-cat-all button#summenu2265 {
                display: block
            }

            .asar-cat-all ul#accordion {
                display: none
            }
        }

        button#summenu2265:before {
            font-size: 25px;
            font-family: FontAwesome;
            content: "\f0c9";
            color: #9e9e9e;
            text-shadow: none;
            line-height: 1em
        }

        button#summenu2265 {
            background: #d4d4d4;
            padding: 5px 7px
        }

        .archive-noimage .lead_description_larg-article-body-image {
            display: none
        }

        .new-archive .lead_description_larg-article-image {
            margin-left: 20px !important
        }

        .new-archive .lead_description_larg-article-body-image {
            height: 85px !important;
            width: auto !important;
            padding: 0 !important
        }

        .new-archive img.omran-yazd-small-image {
            height: 85px !important;
            width: auto !important
        }

        .new-archive .lead_description_larg-section-blocker {
            padding: 20px !important;
            border: 1px solid #BBB;
            background-color: rgba(255, 255, 255, 0.57)
        }

        .new-archive .lead_description_larg-article-title-a {
            color: #000 !important;
            font-family: sans-light !important;
            font-size: 14px
        }

        .new-archive .lead_description_larg-article-content {
            font-family: sans-light !important;
            color: #6b6b6b !important;
            font-size: 12px !important;
            line-height: 2em !important
        }

        .new-archive .lead_description_larg-section-blocker:hover {
            background-color: #f5f5f5
        }

        .display-content1 h1.header-title {
            font-size: 18px !important;
            font-family: sans-light !important;
            line-height: 2em !important
        }

        .display-content1 .main-content {
            font-size: 14px !important;
            font-family: sans-light !important;
            line-height: 2em !important
        }

        h1.header-title {
            font-size: 18px !important;
            font-family: sans-light !important;
            line-height: 2em !important
        }

        .main-content {
            font-size: 14px !important;
            font-family: sans-light !important;
            line-height: 2em !important
        }

        .asset-content {
            font-size: 14px;
            font-family: sans-light;
            line-height: 2em
        }
    </style>
    <style type="text/css">
        #p_p_id_118_INSTANCE_9pfVMsCLeHvy_,
        #p_p_id_56_INSTANCE_qDFjvN9ZKIG8_ {}

        #p_p_id_118_INSTANCE_GLSMo6d7vSgB_ {
            margin-top: 20px;
            margin-right: 0;
            margin-bottom: 15px;
            margin-left: 0;
            padding: 0;
        }

        #p_p_id_118_INSTANCE_EZBPB2ElWPgk_ {
            background-color: #fff;
            border-width: 0;
            border-style: solid;
            padding: 15px
        }

        #p_p_id_101_INSTANCE_0mlBSOfu6TpQ_ {
            margin-top: 0;
            margin-right: -5px;
            margin-bottom: 0;
            margin-left: -5px;
            padding: 0
        }

        #p_p_id_101_INSTANCE_Cj1mJpYdufV7_ {
            margin-top: 0;
            margin-right: -5px;
            margin-bottom: 0;
            margin-left: -5px;
            padding: 0
        }

        #p_p_id_101_INSTANCE_m8eg3UQsTVm2_ {
            margin-top: 0;
            margin-right: -5px;
            margin-bottom: 0;
            margin-left: -5px;
            padding: 0
        }

        #p_p_id_101_INSTANCE_B1jYkb8G5mfl_ {
            border-top-width: 0;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 1px;
            border-style: solid;
            border-color: #c8c9ca;
            margin: 0;
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 15px
        }

        #p_p_id_101_INSTANCE_Svc6SL2iJkeV_ {
            margin: 0
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport">
    <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/creative.css">
    <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/creative_rtl.css">
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/respond.min.js"></script>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/respond.matchmedia.addListener.min.js"></script>
    <style type="text/css">
        @font-face {
            font-family: 'bnazanin';
            src: './../../fonts/bnazanin.ttf';
        }

        .srg {
            min-width: 750px;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body class=" yui3-skin-sam controls-visible signed-out public-page site inner-page" id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <div class="navbar-brand page-scroll">
                    <ul>
                        <li><a class="fa fa-search" href="./?s=خطبه"></a></li>
                        <li><a class="fa fa-user" href="./wp-admin" title="ورود"></a></li>
                        <li style="display:none"><a class="fa fa-language" href="./#lang"></a>
                            <ul id="drop-down-language-box">
                                <li> <a href="/">English</a> </li>
                                <li> <a href="/">Persian</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div> <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="logo custom-logo">
                        <a href="./">
                            <!-- mainlogo -->
                            <?php
                            $fimage = plugin_dir_url(__FILE__) . "assets/layout_set_logo";
                            $args = array(
                                'numberposts' => 1,
                                'offset' => 0,
                                'category_name' => 'لوگو',
                                'orderby' => 'post_date',
                                'order' => 'DESC',
                                'post_type' => 'post',
                                'post_status' => 'draft',
                                'suppress_filters' => true
                            );

                            $recent_posts = wp_get_recent_posts($args);
                            foreach ($recent_posts as $recent) {
                                $imageid = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]), 'full');
                                $fimage = $imageid['0'];
                            }
                            echo '<img alt="" src="' . $fimage . '"  >';

                            ?>
                            <!-- <img alt="دفتر" src="">  -->
                        </a> </li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="logo custom-logo"> <a href="./home?p_auth=a8blRCps&amp;p_p_auth=kcMAp4QL&amp;p_p_id=49&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_pos=7&amp;p_p_col_count=9&amp;_49_struts_action=%2Fmy_sites%2Fview&amp;_49_groupId=28506&amp;_49_privateLayout=false" title="برو به دفتر" > 
                    <li class=""> <a href="./home" >صفحه اصلی</a> </li>
                    <li class=""> <a href="./manasek" >مناسک حج</a> </li>
                    <li class=""> <a href="http://mp3.esra.ir/pdf/resaleh.pdf" >توضیح المسائل</a> </li>
                    <li class=""> <a href="./offices" >دفاتر معظم له</a> </li>
                    <li class=""> <a href="http://news.esra.ir/gallery-news" >گزارش تصویری</a> </li>
                    <li> <a href="./contact" >ارتباط با ما</a> </li>
                </ul> -->

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class'
                ));
                ?>


            </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container-fluid -->
    </nav>
    <div class="place-ov-static-background-video"> </div>
    <div id="p_p_id_103_" class="portlet-boundary portlet-boundary_103_ portlet-static portlet-static-end "> <span id="p_103"></span>
        <div class="portlet-body"> </div>
    </div>
    <div class="columns-1" id="main-content" role="main" style="display: block;">
        <div class="portlet-layout">
            <div class="portlet-column portlet-column-only" id="column-1">
                <div class="portlet-dropzone portlet-column-content portlet-column-content-only" id="layout-column_column-1">
                    <div id="p_p_id_56_INSTANCE_0pBzG5bAU6nD_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_0pBzG5bAU6nD"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <div class="journal-content-article" id="article_10155_28506_23515742_1.3">
                                        <?php echo do_shortcode('[supsystic-slider id=1 position="center"]'); ?>
                                    </div>
                                    <div class="entry-links"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_101_INSTANCE_u4WITwIcfjPS_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher "> <span id="p_101_INSTANCE_u4WITwIcfjPS"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/responsiveslides.js"></script>


                                    <script type="text/javascript">
                                        /*<![CDATA[*/
                                        jQuery(function($) {
                                            $("#_101_INSTANCE_u4WITwIcfjPS_rslides").responsiveSlides({
                                                auto: true, // Boolean: Animate automatically, true or false
                                                speed: 500, // Integer: Speed of the transition, in milliseconds
                                                timeout: 4000, // Integer: Time between slide transitions, in milliseconds
                                                pager: false, // Boolean: Show pager, true or false
                                                nav: false, // Boolean: Show navigation, true or false
                                                random: false, // Boolean: Randomize the order of the slides, true or false
                                                pause: true, // Boolean: Pause on hover, true or false
                                                pauseControls: true, // Boolean: Pause when hovering controls, true or false
                                                prevText: "Previous", // String: Text for the "previous" button
                                                nextText: "Next", // String: Text for the "next" button
                                                maxwidth: "", // Integer: Max-width of the slideshow, in pixels
                                                navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
                                                manualControls: "", // Selector: Declare custom pager navigation
                                                namespace: "rslides", // String: Change the default namespace used
                                                before: function() {}, // Function: Before callback
                                                after: function() {} // Function: After callback
                                            });
                                        }); /*]]>*/
                                    </script>
                                    <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/style.css">
                                    <style type="text/css">
                                        .asset-slide-show-13 #_101_INSTANCE_u4WITwIcfjPS_rslides img {
                                            height: 200px
                                        }
                                    </style>
                                    <div class="asset-slide-show-12 asset-slide-show-13">

                                        <ul class="rslides rslides1" id="_101_INSTANCE_u4WITwIcfjPS_rslides">
                                            <!-- <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;"> <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/shams.jpg" alt="">
                                                <div class="caption-con"> <a class="caption title" href="./-/%D9%BE%DB%8C%D8%A7%D9%85-%D8%AA%D8%B3%D9%84%DB%8C%D8%AA-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D8%AC%D9%88%D8%A7%D8%AF%DB%8C-%D8%A7%D9%85%D9%84%DB%8C-%D8%AF%D8%B1-%D9%BE%DB%8C-%D8%A7%D8%B1%D8%AA%D8%AD%D8%A7%D9%84-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%AD%D8%A7%D8%AC-%D8%B3%DB%8C%D8%AF-%D8%AD%D8%B3%DB%8C%D9%86-%D8%B4%D9%85%D8%B3-%D8%AE%D8%B1%D8%A7%D8%B3%D8%A7%D9%86%DB%8C" > پیام تسلیت آیت الله العظمی جوادی آملی در پی ارتحال آیت الله حاج سید حسین شمس خراسانی </a> <a class="caption summary" href="./-/%D9%BE%DB%8C%D8%A7%D9%85-%D8%AA%D8%B3%D9%84%DB%8C%D8%AA-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D8%AC%D9%88%D8%A7%D8%AF%DB%8C-%D8%A7%D9%85%D9%84%DB%8C-%D8%AF%D8%B1-%D9%BE%DB%8C-%D8%A7%D8%B1%D8%AA%D8%AD%D8%A7%D9%84-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%AD%D8%A7%D8%AC-%D8%B3%DB%8C%D8%AF-%D8%AD%D8%B3%DB%8C%D9%86-%D8%B4%D9%85%D8%B3-%D8%AE%D8%B1%D8%A7%D8%B3%D8%A7%D9%86%DB%8C" > پایگاه اطلاع رسانی اسراء: حضرت آیت الله العظمی جوادی آملی در پیامی, ارتحال عالم ربانى، فقيه و اصولى وارسته آیت الله حاج سید حسین شمس خراسانی را تسلیت گفتند. </a> </div>
                                            </li>
                                            <li id="rslides1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;"> <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/IMG_3790.JPG.jpg" alt="">
                                                <div class="caption-con"> <a class="caption title" href="./-/%D8%BA%D8%B1%D8%A8%DB%8C-%D9%87%D8%A7-%D9%87%D8%B1%DA%AF%D8%B2-%D9%86%D9%85%DB%8C-%D8%AA%D9%88%D8%A7%D9%86%D9%86%D8%AF-%D8%A8%D8%B1%D8%A7%DB%8C-%D9%85%D9%88%D8%B6%D9%88%D8%B9%D8%A7%D8%AA%DB%8C-%D9%87%D9%85%DA%86%D9%88%D9%86-%D8%AD%D9%82%D9%88%D9%82-%D8%A8%D8%B4%D8%B1%D8%8C-%DA%A9%D9%88%D8%AF%DA%A9-%D9%88-%D8%B2%D9%86-%D8%AA%D8%B5%D9%85%DB%8C%D9%85-%D8%A8%DA%AF%DB%8C%D8%B1%D9%86%D8%AF%D8%8C-%DA%86%D8%B1%D8%A7%DA%A9%D9%87-%D8%AF%D8%B1-%D9%86%DA%AF%D8%A7%D9%87-%D8%A7%D9%86%D9%87%D8%A7-%D8%A7%D9%86%D8%B3%D8%A7%D9%86-%DB%8C%DA%A9-%D9%85%D9%88%D8%AC%D9%88%D8%AF-%D9%81%D8%A7%D9%86%DB%8C-%D8%A7%D8%B3%D8%AA" > غربی ها هرگز نمی توانند برای موضوعاتی همچون حقوق بشر، کودک و زن تصمیم بگیرند، چراکه در نگاه آنها انسان یک موجود فانی است </a> <a class="caption summary" href="./-/%D8%BA%D8%B1%D8%A8%DB%8C-%D9%87%D8%A7-%D9%87%D8%B1%DA%AF%D8%B2-%D9%86%D9%85%DB%8C-%D8%AA%D9%88%D8%A7%D9%86%D9%86%D8%AF-%D8%A8%D8%B1%D8%A7%DB%8C-%D9%85%D9%88%D8%B6%D9%88%D8%B9%D8%A7%D8%AA%DB%8C-%D9%87%D9%85%DA%86%D9%88%D9%86-%D8%AD%D9%82%D9%88%D9%82-%D8%A8%D8%B4%D8%B1%D8%8C-%DA%A9%D9%88%D8%AF%DA%A9-%D9%88-%D8%B2%D9%86-%D8%AA%D8%B5%D9%85%DB%8C%D9%85-%D8%A8%DA%AF%DB%8C%D8%B1%D9%86%D8%AF%D8%8C-%DA%86%D8%B1%D8%A7%DA%A9%D9%87-%D8%AF%D8%B1-%D9%86%DA%AF%D8%A7%D9%87-%D8%A7%D9%86%D9%87%D8%A7-%D8%A7%D9%86%D8%B3%D8%A7%D9%86-%DB%8C%DA%A9-%D9%85%D9%88%D8%AC%D9%88%D8%AF-%D9%81%D8%A7%D9%86%DB%8C-%D8%A7%D8%B3%D8%AA" > پایگاه اطلاع رسانی اسراء: جمعی از اعضای شورای فرهنگی اجتماعی زنان شورای عالی انقلاب فرهنگی با حضور در بنیاد بین المللی علوم وحیانی اسراء با حضرت آیت الله العظمی جوادی آملی دیدار و... </a> </div>
                                            </li>
                                            <li id="rslides1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;"> <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/A66Q1728.JPG.jpg" alt="">
                                                <div class="caption-con"> <a class="caption title" href="./-/%D9%86%D9%85%D8%A7%D8%B2-%D9%86%D8%AC%D9%88%D8%A7%DB%8C-%D8%A7%D9%86%D8%B3%D8%A7%D9%86-%D9%85%D9%88%D9%85%D9%86-%D8%A8%D8%A7-%D8%AE%D8%AF%D8%A7%DB%8C-%D8%AE%D9%88%D8%AF-%D8%A7%D8%B3%D8%AA-%D8%A7%D9%8A%D9%85%D9%87-%D8%AC%D9%85%D8%B9%D9%87-%D9%87%D9%85%D9%88%D8%A7%D8%B1%D9%87-%D8%A8%D8%A7%DB%8C%D8%AF-%D8%AF%D8%B1-%D8%AC%D9%87%D8%AA-%D8%B1%D8%B4%D8%AF-%D9%85%D8%B9%D9%86%D9%88%DB%8C-%D8%AE%D9%88%D8%AF-%D8%A8%DA%A9%D9%88%D8%B4%D9%86%D8%AF" > نماز نجوای انسان مومن با خدای خود است/ائمه جمعه همواره باید در جهت رشد معنوی خود بکوشند </a> <a class="caption summary" href="./-/%D9%86%D9%85%D8%A7%D8%B2-%D9%86%D8%AC%D9%88%D8%A7%DB%8C-%D8%A7%D9%86%D8%B3%D8%A7%D9%86-%D9%85%D9%88%D9%85%D9%86-%D8%A8%D8%A7-%D8%AE%D8%AF%D8%A7%DB%8C-%D8%AE%D9%88%D8%AF-%D8%A7%D8%B3%D8%AA-%D8%A7%D9%8A%D9%85%D9%87-%D8%AC%D9%85%D8%B9%D9%87-%D9%87%D9%85%D9%88%D8%A7%D8%B1%D9%87-%D8%A8%D8%A7%DB%8C%D8%AF-%D8%AF%D8%B1-%D8%AC%D9%87%D8%AA-%D8%B1%D8%B4%D8%AF-%D9%85%D8%B9%D9%86%D9%88%DB%8C-%D8%AE%D9%88%D8%AF-%D8%A8%DA%A9%D9%88%D8%B4%D9%86%D8%AF" > پایگاه اطلاع رسانی اسراء: جمعی از ائمه جمعه شهرهای مختلف استان آذربایجان غربی به همراه مسئول حوزه های علمیه و نمایندگان طلاب این استان با حضور در بنیاد بین المللی علوم وحیانی اسراء... </a> </div>
                                            </li>
                                            <li id="rslides1_s3" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;"> <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/IMG_6258-2.JPG.jpg" alt="">
                                                <div class="caption-con"> <a class="caption title" href="./-/%D8%AF%DB%8C%D8%AF%D8%A7%D8%B1-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D8%AC%D9%88%D8%A7%D8%AF%DB%8C-%D8%A7%D9%85%D9%84%DB%8C-%D9%88-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D9%85%DA%A9%D8%A7%D8%B1%D9%85-%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2%DB%8C" > دیدار آیت الله العظمی جوادی آملی و آیت الله العظمی مکارم شیرازی </a> <a class="caption summary" href="./-/%D8%AF%DB%8C%D8%AF%D8%A7%D8%B1-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D8%AC%D9%88%D8%A7%D8%AF%DB%8C-%D8%A7%D9%85%D9%84%DB%8C-%D9%88-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D9%85%DA%A9%D8%A7%D8%B1%D9%85-%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2%DB%8C" > پایگاه اطلاع رسانی اسراء: آیت الله العظمی جوادی آملی با حضور در بیت آیت الله العظمی مکارم شیرازی با ایشان دیدار کردند و در جریان آخرین وضعیت سلامتی ایشان قرار گرفتند. </a> </div>
                                            </li>
                                            <li id="rslides1_s4" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;"> <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/m (1)-4.jpg" alt="">
                                                <div class="caption-con"> <a class="caption title" href="./-/%D8%A8%D8%B1%D8%AA%D8%B1%DB%8C-%D8%A7%D8%B3%D9%84%D8%A7%D9%85-%D8%A8%D8%B1-%D8%B3%D8%A7%DB%8C%D8%B1-%D8%A7%D8%AF%DB%8C%D8%A7%D9%86-%D8%A7%D9%84%D9%87%DB%8C-%D9%87%D9%85%D8%A7%D9%86-%C2%AB%D9%85%D9%87%D9%8A%D9%85%D9%86%D8%A7-%D8%B9%D9%84%D9%8A%D9%87%C2%BB-%D8%A7%D8%B3%D8%AA-%D8%AF%D8%B1-%D8%AA%D8%A8%D9%84%DB%8C%D8%BA-%D8%AF%DB%8C%D9%86%D8%8C-%D9%86%D8%A8%D8%A7%DB%8C%D8%AF-%D8%A7%D8%B2-%D8%AA%D9%88%D8%AF%D9%87-%D9%85%D8%B1%D8%AF%D9%85-%D8%BA%D8%A7%D9%81%D9%84-%D8%B4%D8%AF" > برتری اسلام بر سایر ادیان الهی همان «مُهَيْمِناً عَلَيْه» است/ در تبلیغ دین، نباید از توده مردم غافل شد </a> <a class="caption summary" href="./-/%D8%A8%D8%B1%D8%AA%D8%B1%DB%8C-%D8%A7%D8%B3%D9%84%D8%A7%D9%85-%D8%A8%D8%B1-%D8%B3%D8%A7%DB%8C%D8%B1-%D8%A7%D8%AF%DB%8C%D8%A7%D9%86-%D8%A7%D9%84%D9%87%DB%8C-%D9%87%D9%85%D8%A7%D9%86-%C2%AB%D9%85%D9%87%D9%8A%D9%85%D9%86%D8%A7-%D8%B9%D9%84%D9%8A%D9%87%C2%BB-%D8%A7%D8%B3%D8%AA-%D8%AF%D8%B1-%D8%AA%D8%A8%D9%84%DB%8C%D8%BA-%D8%AF%DB%8C%D9%86%D8%8C-%D9%86%D8%A8%D8%A7%DB%8C%D8%AF-%D8%A7%D8%B2-%D8%AA%D9%88%D8%AF%D9%87-%D9%85%D8%B1%D8%AF%D9%85-%D8%BA%D8%A7%D9%81%D9%84-%D8%B4%D8%AF" > پایگاه اطلاع رسانی اسراء: حجت الاسلام و المسلمین دکتر محمد هادی مفتح رییس مرکز اسلامی هامبورگ با حضور در بنیاد بین المللی علوم وحیانی اسراء با آیت الله العظمی جوادی آملی دیدار و... </a> </div>
                                            </li> -->
                                            <?php
                                            // the query
                                            $the_query = new WP_Query(array(
                                                'category_name' => 'خبرمتنی',
                                                'posts_per_page' => 4,
                                            ));
                                            ?>

                                            <?php if ($the_query->have_posts()) : ?>
                                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                    <?php
                                                    echo '
                                            <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">';
                                                    ?>
                                                    <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/shams.jpg" alt="">
                                                    <?php
                                                    echo '<div class="caption-con"> <a class="caption title" href="/category/%d8%ae%d8%a8%d8%b1%d9%85%d8%aa%d9%86%db%8c/" >' . get_the_title() . '</a> ';
                                                    echo '<a class="caption summary" href="https://www.hosseinilavasani.com/category/%d8%ae%d8%a8%d8%b1%d9%85%d8%aa%d9%86%db%8c/" >' . get_the_excerpt() . '</a> ';
                                                    echo '</div>
                                            </li>';
                                                    ?>
                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>

                                            <?php else : ?>

                                                <li id="rslides1_s4" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out 0s;">
                                                    <img src="<?php echo plugin_dir_url(__FILE__) ?>assets/images/m (1)-4.jpg" alt="">
                                                    <div class="caption-con">
                                                        <a class="caption title" href="./">خبری یافت نشد</a>
                                                        <a class="caption summary" href="./">شرح خبر ...</a>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>

                                        <a href="./#" class="rslides_nav rslides1_nav prev">Previous</a><a href="./#" class="rslides_nav rslides1_nav next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_56_INSTANCE_PAuOKE0xrebd_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content sec-icons"> <span id="p_56_INSTANCE_PAuOKE0xrebd"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <!-- <div class="journal-content-article" id="article_10155_28506_882663_1.9">
                                        <div class="background-sec placeholders">
                                            <div class="col-xs-6 col-sm-3 placeholder ii"> <a href="./-/%D9%88%D8%AC%D9%88%D9%87%D8%A7%D8%AA-%D8%B4%D8%B1%D8%B9%DB%8C%D9%87" ><img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg1" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Vojohat.png"></a> <img class="pagination-centered img-fluid title img-responsive vojohat" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/4.png" style="width: 171px; height: 72px;"></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="http://shahrie.esra.ir/" ><img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg2" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Samaneh.png"></a> <img class="pagination-centered img-fluid title img-responsive shahrie" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/3.png" style="width: 171px; height: 72px;"></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="http://iranebook.ir/list.aspx?content=publisher&amp;pubid=a3681c75-8f9a-4076-af3c-eae7c19ec5b7#" > <img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg3" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/ketabkhaneh.png"> <img class="pagination-centered img-fluid title img-responsive tch" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/2.png" style="width: 171px; height: 72px;"></a></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="./%D8%B3%D9%88%D8%A7%D9%84%D8%A7%D8%AA-%D8%B4%D8%B1%D8%B9%DB%8C" > <img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg4" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Soalat.png"> <img class="pagination-centered img-fluid title img-responsive solat" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/1.png" style="width: 171px; height: 72px;"></a></div>
                                        </div>
                                    </div> -->
                                    <div class="journal-content-article" id="article_10155_28506_882663_1.9">
                                        <div class="background-sec placeholders">
                                            <!-- <div class="col-xs-6 col-sm-3 placeholder ii"> <a href="./-/%D9%88%D8%AC%D9%88%D9%87%D8%A7%D8%AA-%D8%B4%D8%B1%D8%B9%DB%8C%D9%87" ><img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg1" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Vojohat.png"></a> <img class="pagination-centered img-fluid title img-responsive vojohat" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/4.png" style="width: 171px; height: 72px;"></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="http://shahrie.esra.ir/" ><img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg2" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Samaneh.png"></a> <img class="pagination-centered img-fluid title img-responsive shahrie" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/3.png" style="width: 171px; height: 72px;"></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="http://iranebook.ir/list.aspx?content=publisher&amp;pubid=a3681c75-8f9a-4076-af3c-eae7c19ec5b7#" > <img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg3" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/ketabkhaneh.png"> <img class="pagination-centered img-fluid title img-responsive tch" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/2.png" style="width: 171px; height: 72px;"></a></div>
                                            <div class="col-xs-6 col-sm-3 placeholder"> <a href="./%D8%B3%D9%88%D8%A7%D9%84%D8%A7%D8%AA-%D8%B4%D8%B1%D8%B9%DB%8C" > <img alt="Generic placeholder thumbnail" class="pagination-centered img-fluid chimg4" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/Soalat.png"> <img class="pagination-centered img-fluid title img-responsive solat" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/1.png" style="width: 171px; height: 72px;"></a></div> -->

                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'my-custom-menu-for-sections',
                                                'container_class' => 'custom-menu-class my-custom-menu-for-sections'
                                            ));
                                            ?>
                                        </div>
                                    </div>
                                    <div class="entry-links"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_56_INSTANCE_Ib0uNxYYmh3S_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content sec-text"> <span id="p_56_INSTANCE_Ib0uNxYYmh3S"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <div class="journal-content-article" id="article_10155_28506_882996_2.3">
                                        <p dir="RTL">
                                            <?php if (have_posts()) : while (have_posts()) : the_post();
                                                    the_content();
                                                endwhile;
                                            else : ?>
                                                <p>Sorry, no posts matched your criteria.</p>
                                            <?php endif; ?> </p>
                                    </div>
                                    <div class="entry-links"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_118_INSTANCE_GLSMo6d7vSgB_" class="portlet-boundary portlet-boundary_118_ portlet-static portlet-static-end portlet-borderless portlet-nested-portlets sec-droos"> <span id="p_118_INSTANCE_GLSMo6d7vSgB"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <div class="columns-3" id="_118_INSTANCE_GLSMo6d7vSgB_main-content" role="main">
                                        <div class="portlet-layout">
                                            <div class="portlet-column portlet-column-first col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_GLSMo6d7vSgB_column-1">
                                                <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column__118_INSTANCE_GLSMo6d7vSgB__column-1">
                                                    <div id="p_p_id_101_INSTANCE_0mlBSOfu6TpQ_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars-akhlagh dars"> <span id="p_101_INSTANCE_0mlBSOfu6TpQ"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">

                                                                        <?php
                                                                        $args = array(
                                                                            'numberposts' => 3,
                                                                            'offset' => 0,
                                                                            'category_name' => 'درس اخلاق',
                                                                            'orderby' => 'post_date',
                                                                            'order' => 'DESC',
                                                                            'post_type' => 'post',
                                                                            'post_status' => 'publish',
                                                                            'suppress_filters' => true
                                                                        );

                                                                        $recent_posts = wp_get_recent_posts($args);
                                                                        foreach ($recent_posts as $recent) {


                                                                            echo '<li class="title-list content default-icon"> <span> <a class="taglib-icon" href="' . get_permalink($recent["ID"]) . '" id="_101_INSTANCE_0mlBSOfu6TpQ_bqvz" > <img class="icon" src="' . plugin_dir_url(__FILE__) . 'assets/png/spacer.png" alt="" style="background-image: url(&#39;' . plugin_dir_url(__FILE__) . 'assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">' . $recent["post_title"] . '</span> </a> </span>
                                                                                <div class="asset-metadata"> </div>
                                                                                </li>';
                                                                        }
                                                                        ?>

                                                                    </ul>
                                                                </div><a href="category/دروس/درس-اخلاق/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-column col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_GLSMo6d7vSgB_column-2">
                                                <div class="portlet-dropzone portlet-column-content" id="layout-column__118_INSTANCE_GLSMo6d7vSgB__column-2">
                                                    <div id="p_p_id_101_INSTANCE_Cj1mJpYdufV7_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars-erfan dars"> <span id="p_101_INSTANCE_Cj1mJpYdufV7"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">

                                                                        <?php
                                                                        $args = array(
                                                                            'numberposts' => 3,
                                                                            'offset' => 0,
                                                                            'category_name' => 'درس عرفان',
                                                                            'orderby' => 'post_date',
                                                                            'order' => 'DESC',
                                                                            'post_type' => 'post',
                                                                            'post_status' => 'publish',
                                                                            'suppress_filters' => true
                                                                        );

                                                                        $recent_posts = wp_get_recent_posts($args);
                                                                        foreach ($recent_posts as $recent) {


                                                                            echo '<li class="title-list content default-icon"> <span> <a class="taglib-icon" href="' . get_permalink($recent["ID"]) . '" id="_101_INSTANCE_0mlBSOfu6TpQ_bqvz" > <img class="icon" src="' . plugin_dir_url(__FILE__) . 'assets/png/spacer.png" alt="" style="background-image: url(&#39;' . plugin_dir_url(__FILE__) . 'assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">' . $recent["post_title"] . '</span> </a> </span>
                                                                                <div class="asset-metadata"> </div>
                                                                                </li>';
                                                                        }
                                                                        ?>

                                                                    </ul>
                                                                </div><a href="category/دروس/درس-عرفان/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-column portlet-column-last col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_GLSMo6d7vSgB_column-3">
                                                <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column__118_INSTANCE_GLSMo6d7vSgB__column-3">
                                                    <div id="p_p_id_101_INSTANCE_m8eg3UQsTVm2_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars-tafsir dars"> <span id="p_101_INSTANCE_m8eg3UQsTVm2"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">

                                                                        <?php
                                                                        $args = array(
                                                                            'numberposts' => 3,
                                                                            'offset' => 0,
                                                                            'category_name' => 'درس تفسیر',
                                                                            'orderby' => 'post_date',
                                                                            'order' => 'DESC',
                                                                            'post_type' => 'post',
                                                                            'post_status' => 'publish',
                                                                            'suppress_filters' => true
                                                                        );

                                                                        $recent_posts = wp_get_recent_posts($args);
                                                                        foreach ($recent_posts as $recent) {


                                                                            echo '<li class="title-list content default-icon"> <span> <a class="taglib-icon" href="' . get_permalink($recent["ID"]) . '" id="_101_INSTANCE_0mlBSOfu6TpQ_bqvz" > <img class="icon" src="' . plugin_dir_url(__FILE__) . 'assets/png/spacer.png" alt="" style="background-image: url(&#39;' . plugin_dir_url(__FILE__) . 'assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">' . $recent["post_title"] . '</span> </a> </span>
                                                                                <div class="asset-metadata"> </div>
                                                                                </li>';
                                                                        }
                                                                        ?>

                                                                    </ul>
                                                                </div><a href="category/دروس/درس-تفسیر/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_118_INSTANCE_9pfVMsCLeHvy_" class="portlet-boundary portlet-boundary_118_ portlet-static portlet-static-end portlet-borderless portlet-nested-portlets sec-droos"> <span id="p_118_INSTANCE_9pfVMsCLeHvy"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <div class="columns-3" id="_118_INSTANCE_9pfVMsCLeHvy_main-content" role="main">
                                        <div class="portlet-layout">
                                            <div class="portlet-column portlet-column-first col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_9pfVMsCLeHvy_column-1">
                                                <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column__118_INSTANCE_9pfVMsCLeHvy__column-1">
                                                    <div id="p_p_id_101_INSTANCE_yH953ndVMLZG_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars-esteftaat dars"> <span id="p_101_INSTANCE_yH953ndVMLZG"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D8%A7%DB%8C%D8%A7-%D8%A7%D8%B3%D8%AA%D8%B9%D9%85%D8%A7%D9%84-%D8%AA%D8%AA%D9%86-%D9%88-%D8%B3%DB%8C%DA%AF%D8%A7%D8%B1-%D8%B1%D9%88%D8%B2%D9%87-%D8%B1%D8%A7-%D8%A8%D8%A7%D8%B7%D9%84-%D9%85%DB%8C-%DA%A9%D9%86%D8%AF%D8%9F" id="_101_INSTANCE_yH953ndVMLZG_zyuh"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">آیا استعمال تتن و سیگار روزه را باطل می کند؟</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D8%A7%D8%AE%D8%AA%D8%B5%D8%A7%D8%B5-%D9%81%D8%B6%D8%A7%DB%8C%DB%8C-%D8%A7%D8%B2-%D9%85%D8%B3%D8%AC%D8%AF-%D8%A8%D9%87-%D9%83%D8%AA%D8%A7%D8%A8%D8%AE%D8%A7%D9%86%D9%87" id="_101_INSTANCE_yH953ndVMLZG_ozlt"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">اختصاص فضایی از مسجد به كتابخانه</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D9%81%D8%B1%D9%88%D8%B4-%D9%85%D9%84%D9%83-%D9%88%D9%82%D9%81%E2%80%8C%D8%B4%D8%AF%D9%87" id="_101_INSTANCE_yH953ndVMLZG_rpwo"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">فروش ملك وقف‌شده</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                    </ul>
                                                                </div><a href="./archive-esteftat1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-column col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_9pfVMsCLeHvy_column-2">
                                                <div class="portlet-dropzone portlet-column-content" id="layout-column__118_INSTANCE_9pfVMsCLeHvy__column-2">
                                                    <div id="p_p_id_101_INSTANCE_PCXSp7tTrfmo_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars dars-maghalat"> <span id="p_101_INSTANCE_PCXSp7tTrfmo"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D8%A7%D9%8A%D9%86%D8%AF%D9%87-%D8%AC%D9%87%D8%A7%D9%86-%D8%A7%D8%B2-%D9%86%D8%B8%D8%B1-%D8%A7%D8%B3%D9%84%D8%A7%D9%85" id="_101_INSTANCE_PCXSp7tTrfmo_rjus"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">آينده جهان از نظر اسلام</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D9%87%D9%85%D8%AA%D8%A7%D9%8A%D9%8A-%D8%AD%D8%B6%D8%B1%D8%AA-%D9%81%D8%A7%D8%B7%D9%85%D9%87-%D9%88-%D8%B9%D9%84%D9%8A-%D8%B9%D9%84%D9%8A%D9%87%D9%85%D8%A7%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85" id="_101_INSTANCE_PCXSp7tTrfmo_ctvk"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">همتايي حضرت فاطمه و علي (عليهماالسلام)</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D8%A7%D9%82%D8%AA%D8%AF%D8%A7%D9%8A-%D8%A7%D9%85%D8%A7%D9%85-%D8%AE%D9%85%D9%8A%D9%86%D9%8A-%D8%A8%D9%87-%D9%86%D9%87%D8%B6%D8%AA-%D8%A7%D9%85%D8%A7%D9%85-%D8%AD%D8%B3%D9%8A%D9%86-%D8%B9" id="_101_INSTANCE_PCXSp7tTrfmo_suxb"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">اقتداي امام خميني به نهضت امام حسين(ع)</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                    </ul>
                                                                </div><a href="./archive-article1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-column portlet-column-last col-sm-4 col-xs-12 no-margin" id="_118_INSTANCE_9pfVMsCLeHvy_column-3">
                                                <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column__118_INSTANCE_9pfVMsCLeHvy__column-3">
                                                    <div id="p_p_id_101_INSTANCE_lpuaXrRhep3Q_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher dars dars-payam"> <span id="p_101_INSTANCE_lpuaXrRhep3Q"></span>
                                                        <div class="portlet-body">
                                                            <div class="portlet-borderless-container" style="">
                                                                <div class="image-doross"></div>
                                                                <div class="title-doross"></div>
                                                                <div class="portlet-body">
                                                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl.css" rel="stylesheet">
                                                                    <ul class="title-list default-icon">
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D9%BE%DB%8C%D8%A7%D9%85-%D8%A8%D9%87-%D9%87%D9%85%D8%A7%DB%8C%D8%B4-%D9%85%D9%84%DB%8C-%C2%AB%D8%A8%D8%B1%D8%B1%D8%B3%DB%8C-%D8%A7%D8%B1%D8%A7%D8%A1-%D9%88-%D8%A7%D9%86%D8%AF%DB%8C%D8%B4%D9%87-%D9%87%D8%A7%DB%8C-%D8%AA%D9%81%D8%B3%DB%8C%D8%B1%DB%8C-%D8%A7%DB%8C%D8%AA-%D8%A7%D9%84%D9%84%D9%87-%D8%A7%D9%84%D8%B9%D8%B8%D9%85%DB%8C-%D8%AC%D9%88%D8%A7%D8%AF%DB%8C-%D8%A7%D9%85%D9%84%DB%8C%C2%BB" id="_101_INSTANCE_lpuaXrRhep3Q_gezi"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">پیام به همایش ملی «بررسی آراء و اندیشه های تفسیری آیت الله العظمی جوادی آملی»</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D9%BE%DB%8C%D8%A7%D9%85-%D8%A8%D9%87-%DA%86%D9%87%D8%A7%D8%B1%D9%85%DB%8C%D9%86-%D9%87%D9%85%D8%A7%DB%8C%D8%B4-%D8%A8%DB%8C%D9%86%E2%80%8C%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-%C2%AB%D8%B3%DB%8C%D8%B1%D9%87-%D9%86%D8%A8%D9%88%DB%8C-%D8%AF%D8%B1-%D8%B7%D8%A8%C2%BB-%D8%AF%D8%B1-%D8%B4%DB%8C%D8%B1%D8%A7%D8%B2" id="_101_INSTANCE_lpuaXrRhep3Q_fmzi"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">پیام به چهارمین همایش بین‌المللی «سیره نبوی در طب» در شیراز</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                        <li class="title-list content default-icon"> <span> <a class="taglib-icon" href="./-/%D9%BE%DB%8C%D8%A7%D9%85-%D8%A8%D9%87-%DA%86%D9%87%D8%A7%D8%B1%D9%85%DB%8C%D9%86-%D8%A7%D8%AC%D9%84%D8%A7%D8%B3%DB%8C%D9%87-%C2%AB%D9%85%D8%AC%D8%A7%D9%87%D8%AF%D8%A7%D9%86-%D8%AF%D8%B1-%D8%BA%D8%B1%D8%A8%D8%AA%C2%BB" id="_101_INSTANCE_lpuaXrRhep3Q_mefv"> <img class="icon" src="<?php echo plugin_dir_url(__FILE__) ?>assets/png/spacer.png" alt="" style="background-image: url(&#39;/wp-content/plugins/javadi.esra.ir-wordpress-template-/assets/images/common/_sprite.png&#39;); background-position: 50% -657px; background-repeat: no-repeat; height: 16px; width: 16px;"> <span class="taglib-text">پیام به چهارمین اجلاسیه «مجاهدان در غربت»</span> </a> </span>
                                                                            <div class="asset-metadata"> </div>
                                                                        </li>
                                                                    </ul>
                                                                </div><a href="./archive-payamha1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_56_INSTANCE_qDFjvN9ZKIG8_" class="portlet-boundary portlet-boundary_56_ portlet-static portlet-static-end portlet-borderless portlet-journal-content "> <span id="p_56_INSTANCE_qDFjvN9ZKIG8"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <div class="journal-content-article" id="article_10155_28506_890131_1.2">
                                        <div class="div-video">
                                            <video autoplay class="video-style2" id="my-video" loop="" preload="metadata">
                                                <source src="<?php echo plugin_dir_url(__FILE__) ?>assets/videos/lavasani.mp4" type="video/mp4">
                                                <source src="<?php echo plugin_dir_url(__FILE__) ?>assets/videos/lavasani.webm" type="video/webm">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="entry-links"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="p_p_id_101_INSTANCE_yz5GYlekwPmY_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher botton-news"> <span id="p_101_INSTANCE_yz5GYlekwPmY"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl(1).css" rel="stylesheet">
                                    <div>
                                        <?php
                                        $args = array(
                                            'numberposts' => 4,
                                            'offset' => 0,
                                            'category_name' => 'اخبار',
                                            'orderby' => 'post_date',
                                            'order' => 'DESC',
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'suppress_filters' => true
                                        );

                                        $recent_posts = wp_get_recent_posts($args);
                                        foreach ($recent_posts as $recent) {
                                            $imageid = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]), 'full');
                                            $featimage = $imageid['0'];
                                            //$printable_url = '<img src="' . $featimage . '">';
                                            echo '<div class="lead_description_larg-section-blocker">';
                                            echo '<div class="lead_description_larg-article-image">';
                                            echo ' <a class="lead_description_larg-image-link" href="' . get_permalink($recent["ID"]) . '" >';
                                            echo '        <div class="lead_description_larg-article-body-image">';

                                            if ($featimage)
                                                echo ' <img alt="" class="omran-yazd-small-image" src="' . $featimage  . '" width="288px" height="191px">';
                                            else
                                                echo ' <img alt="" class="omran-yazd-small-image" src="' .  plugin_dir_url(__FILE__)  . 'assets/images/default.jpg" width="288px" height="191px">';


                                            // echo $featimage.'</div>';
                                            echo '</div>';
                                            echo '    </a> </div>';
                                            echo '<div class="lead_description_larg-title-content-block">';
                                            //echo '    <div class="lead_description_larg-lead"> ' . $recent["post_title"] . ' </div>';
                                            echo '    <div class="lead_description_larg-article-title"> <a class="lead_description_larg-article-title-a" target="_blank" style="text-decoration: none; " href="' . get_permalink($recent["ID"]) . '" >' . $recent["post_title"] . '</a> </div>';
                                            echo '    <div class="lead_description_larg-article-content">' . strpos($recent["post_content"], '<!--more-->') ? substr($recent["post_content"], 0, strpos($recent["post_content"], '<!--more-->')) : substr($recent["post_content"], 0, 150) . '</div>';
                                            echo '<a href="' . get_permalink($recent["ID"]) . '">... ادامه خبر...</a> </div>';
                                            echo '<div class="lead_description_larg-wrapper"></div>';
                                            echo '</div>';

                                            //echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .$recent["post_title"] . '</a> </li> ';

                                        }
                                        ?>

                                        <div style="clear: both;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display:none;" id="p_p_id_101_INSTANCE_yz5GYlekwPmY_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher botton-news"> <span id="p_101_INSTANCE_yz5GYlekwPmY"></span>
                        <div class="portlet-body">
                            <div class="portlet-borderless-container" style="">
                                <div class="portlet-body">
                                    <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl(1).css" rel="stylesheet">
                                    <div>
                                        <?php
                                        $args = array(
                                            'numberposts' => 4,
                                            'offset' => 4,
                                            'category_name' => 'اخبار',
                                            'orderby' => 'post_date',
                                            'order' => 'DESC',
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'suppress_filters' => true
                                        );

                                        $recent_posts = wp_get_recent_posts($args);
                                        foreach ($recent_posts as $recent) {
                                            $imageid = wp_get_attachment_image_src(get_post_thumbnail_id($recent["ID"]), 'full');
                                            $featimage = $imageid['0'];
                                            //$printable_url = '<img src="' . $featimage . '">';
                                            echo '<div class="lead_description_larg-section-blocker">';
                                            echo '<div class="lead_description_larg-article-image">';
                                            echo ' <a class="lead_description_larg-image-link" href="' . get_permalink($recent["ID"]) . '" >';
                                            echo '        <div class="lead_description_larg-article-body-image">';

                                            if ($featimage)
                                                echo ' <img alt="" class="omran-yazd-small-image" src="' . $featimage  . '" width="288px" height="191px">';
                                            else
                                                echo ' <img alt="" class="omran-yazd-small-image" src="' .  plugin_dir_url(__FILE__)  . 'assets/images/default.jpg" width="288px" height="191px">';


                                            // echo $featimage.'</div>';
                                            echo '</div>';
                                            echo '    </a> </div>';
                                            echo '<div class="lead_description_larg-title-content-block">';
                                            //echo '    <div class="lead_description_larg-lead"> ' . $recent["post_title"] . ' </div>';
                                            echo '    <div class="lead_description_larg-article-title"> <a class="lead_description_larg-article-title-a" target="_blank" style="text-decoration: none; " href="' . get_permalink($recent["ID"]) . '" >' . $recent["post_title"] . '</a> </div>';
                                            echo '    <div class="lead_description_larg-article-content">' . strpos($recent["post_content"], '<!--more-->') ? substr($recent["post_content"], 0, strpos($recent["post_content"], '<!--more-->')) : substr($recent["post_content"], 0, 150) . '</div>';
                                            echo '<a href="' . get_permalink($recent["ID"]) . '">... ادامه خبر...</a> </div>';
                                            echo '<div class="lead_description_larg-wrapper"></div>';
                                            echo '</div>';

                                            //echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .$recent["post_title"] . '</a> </li> ';

                                        }
                                        ?>

                                        <div style="clear: both;"></div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a href="category/اخبار/" target="_blank" class="btn" style="margin:1px;padding:1px;">اخبار بیشتر </a>

                </div>



                <div id="p_p_id_101_INSTANCE_yz5GYlekwPmY_" class=" twitter-block portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher botton-news"> <span id="p_101_INSTANCE_yz5GYlekwPmY"></span>
                    <div class="portlet-body">
                        <div class="portlet-borderless-container" style="">
                            <div class="portlet-body">
                                <link type="text/css" href="<?php echo plugin_dir_url(__FILE__) ?>assets/css/rtl(1).css" rel="stylesheet">
                                <div class="twitt-block">

                                    <div class="tw-block-parent">
                                        <div class="timeline-TweetList-tweet">

                                            <?php
                                            // the query
                                            $the_query = new WP_Query(array(
                                                'category_name' => 'گاه نوشت',
                                                'posts_per_page' => 4,
                                            ));
                                            ?>

                                            <?php if ($the_query->have_posts()) : ?>
                                                <?php while ($the_query->have_posts()) : $the_query->the_post();
                                                    $get_the_title = get_the_title();
                                                    $get_the_excerpt = get_the_excerpt();
                                                    $get_permalink = get_permalink();
                                                    $post_tags = get_the_tags();

                                                    $separator = ' ';
                                                    $output = "( ";
                                                    if (!empty($post_tags)) {
                                                        foreach ($post_tags as $tag) {
                                                            $output .= '#<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>' . $separator;
                                                        }
                                                        $output .= ")";
                                                    }

                                                ?>
                                                    <div class="timeline-Tweet">
                                                        <div class="timeline-Tweet-brand">
                                                            <div class="Icon Icon--twitter"></div>
                                                        </div>
                                                        <div class="timeline-Tweet-author">
                                                            <div class="TweetAuthor"><a class="TweetAuthor-link" href="https://twitter.com/hashtag/%D9%84%D9%88%D8%A7%D8%B3%D8%A7%D9%86%DB%8C?lang=fa"> </a><span class="TweetAuthor-avatar">
                                                                    <div class="Avatar"> </div>
                                                                </span><span class="TweetAuthor-name">سید سعید حسینی لواسانی</span><span class="Icon Icon--verified"> </span><span class="TweetAuthor-screenName"><a href="https://twitter.com/lavasani_13">@lavasani_13</span></a></div>
                                                        </div>
                                                        <div class="timeline-Tweet-text"><?php echo $get_the_excerpt ?> <span></span><?php echo $output ?></div>
                                                        <div class="timeline-Tweet-metadata"><span class="timeline-Tweet-timestamp"><?php echo $get_the_title ?></span></div>
                                                        <ul class="timeline-Tweet-actions">
                                                            <li class="timeline-Tweet-action"><a class="Icon Icon--heart" href="<?php echo $get_permalink ?>"></a></li>
                                                            <li class="timeline-Tweet-action"><a class="Icon Icon--share" href="<?php echo $get_permalink ?>"></a></li>
                                                        </ul>
                                                    </div>


                                                <?php endwhile; ?>
                                                <?php wp_reset_postdata(); ?>
                                            <?php endif; ?>
                                            <!-- <div class="timeline-Tweet">
                                            <div class="timeline-Tweet-brand">
                                                <div class="Icon Icon--twitter"></div>
                                            </div>
                                            <div class="timeline-Tweet-author">
                                                <div class="TweetAuthor"><a class="TweetAuthor-link" href="#channel"> </a><span class="TweetAuthor-avatar">
                                                        <div class="Avatar"> </div>
                                                    </span><span class="TweetAuthor-name">سید سعید حسینی لواسانی</span><span class="Icon Icon--verified"> </span><span class="TweetAuthor-screenName">@HosseiniLavasani_com</span></div>
                                            </div>
                                            <div class="timeline-Tweet-text">همه عمر برندارم سر از این خمار مستی. که هنوز من نبودم که تو در دلم نشستینشستینشستینشستینشستینشستینشستینشستی. <a href="#">@khamenei_ir</a><span>!</span><a href="#">#قرآن</a><a href="#"></a></div>
                                            <div class="timeline-Tweet-metadata"><span class="timeline-Tweet-timestamp">9 ساعت پیش</span></div>
                                            <ul class="timeline-Tweet-actions">
                                                <li class="timeline-Tweet-action"><a class="Icon Icon--heart" href="#"></a></li>
                                                <li class="timeline-Tweet-action"><a class="Icon Icon--share" href="#"></a></li>
                                            </ul>
                                        </div> -->
                                        </div>
                                    </div>
                                    <a href="category/گاه-نوشت/" target="_blank" class="btn">توییت های بیشتر </a>
                                    <div style="clear: both;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="p_p_id_118_INSTANCE_EZBPB2ElWPgk_" class="portlet-boundary portlet-boundary_118_ portlet-static portlet-static-end portlet-borderless portlet-nested-portlets botton-sec"> <span id="p_118_INSTANCE_EZBPB2ElWPgk"></span>
                    <div class="portlet-body">
                        <div class="portlet-borderless-container" style="">
                            <div class="portlet-body">
                                <div class="columns-2" id="_118_INSTANCE_EZBPB2ElWPgk_main-content" role="main">
                                    <div class="portlet-layout">
                                        <div class="portlet-column portlet-column-first col-sm-6 col-xs-12 no-margin" id="_118_INSTANCE_EZBPB2ElWPgk_column-1">
                                            <div class="portlet-dropzone portlet-column-content portlet-column-content-first" id="layout-column__118_INSTANCE_EZBPB2ElWPgk__column-1">
                                                <div id="p_p_id_101_INSTANCE_Svc6SL2iJkeV_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher botton-right"> <span id="p_101_INSTANCE_Svc6SL2iJkeV"></span>
                                                    <div class="portlet-body">
                                                        <div class="portlet-borderless-container" style="">
                                                            <div class="portlet-body">
                                                                <div class="taglib-header ">

                                                                    <!-- video -->
                                                                    <?php
                                                                    $args = array(
                                                                        'numberposts' => 1,
                                                                        'offset' => 0,
                                                                        'category_name' => 'خبرویدئویی',
                                                                        'orderby' => 'post_date',
                                                                        'order' => 'DESC',
                                                                        'post_type' => 'post',
                                                                        'post_status' => 'published',
                                                                        'suppress_filters' => true,
                                                                        'meta_query' => array(
                                                                            array(
                                                                                'key' => 'myvideo',
                                                                                'value' => '',
                                                                                'compare' => '!='
                                                                            )
                                                                        )
                                                                    );

                                                                    $recent_posts = wp_get_recent_posts($args);
                                                                    foreach ($recent_posts as $recent) {
                                                                        $v_title = $recent["post_title"];
                                                                        $vid_url = get_post_meta($recent["ID"], 'myvideo', true)["guid"];
                                                                        echo '<h1 class="header-title" style="font-size: 51.8333px;"> <a href="category/خبرویدئویی/" ><span> ویدئو؛ ' . $v_title . ' </span> </a> </h1>';
                                                                        echo '</div>';
                                                                        echo '<div class="asset-full-content default-asset-publisher show-asset-title">';
                                                                        echo '<div class="asset-content">';
                                                                        echo '<div class="asset-full-content-body">';
                                                                        echo '<p>';
                                                                        echo '</p> <video class="home-video2" controls="" preload="metadata">';
                                                                        // echo '<img alt="" src="' . $vid_url . '"  >';
                                                                        echo '<source src="' . $vid_url . '" type="video/mp4">
                                                                        <source src="' . $vid_url . '" type="video/webm"> </video>';
                                                                    }
                                                                    ?>
                                                                    <!-- <source src="https://www.hosseinilavasani.com/wp-content/uploads/2020/02/VID-20200204-WA0071.mp4" type="video/mp4">
                                                                        <source src="https://www.hosseinilavasani.com/wp-content/uploads/2020/02/VID-20200204-WA0071.mp4" type="video/webm"> </video> -->
                                                                </div> <br>
                                                                <a href="category/خبرویدئویی/" target="_blank" class="btn btn-nim">خبرویدئویی بیشتر </a>

                                                            </div>
                                                            <div class="asset-metadata"> </div>
                                                        </div>
                                                        <div class="final-separator">
                                                            <!-- -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                // the query
                                $the_query = new WP_Query(array(
                                    'category_name' => 'رحمت بی انتها',
                                    'posts_per_page' => 1,
                                ));
                                ?>

                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                                        $get_the_title = get_the_title();
                                        $get_the_excerpt = get_the_excerpt();
                                    ?>

                                        <div class="portlet-column portlet-column-last col-sm-6 col-xs-12 no-margin" id="_118_INSTANCE_EZBPB2ElWPgk_column-2">
                                            <div class="portlet-dropzone portlet-column-content portlet-column-content-last" id="layout-column__118_INSTANCE_EZBPB2ElWPgk__column-2">
                                                <div id="p_p_id_101_INSTANCE_B1jYkb8G5mfl_" class="portlet-boundary portlet-boundary_101_ portlet-static portlet-static-end portlet-borderless portlet-asset-publisher botton-right"> <span id="p_101_INSTANCE_B1jYkb8G5mfl"></span>
                                                    <div class="portlet-body">
                                                        <div class="portlet-borderless-container" style="">
                                                            <div class="portlet-body">
                                                                <div class="taglib-header ">
                                                                    <h1 class="header-title" style="font-size: 50.5px;"> <span> <?php echo $get_the_title ?> </span> </h1>
                                                                </div>
                                                                <div class="asset-full-content default-asset-publisher show-asset-title">
                                                                    <div class="asset-content">
                                                                        <div class="asset-full-content-body">
                                                                            <p dir="RTL"> <?php echo $get_the_excerpt ?> </p>

                                                                        </div> <br>
                                                                    </div>
                                                                    <div class="asset-metadata"> </div>
                                                                </div>
                                                                <div class="final-separator">
                                                                    <!-- -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="category/رحمت-بی-انتها/" target="_blank" class="btn btn-nim">موارد بیشتر </a>

                                        </div>

                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>
    </div>
    </div>
    </div>
    </div>
    <form action="./#" id="hrefFm" method="post" name="hrefFm"> <span></span> </form>
    <section class="footer" id="contact">
        <div class="container">
            <div class="row">
                <hr style="margin-bottom: 0; width: 100%">
                <div class="col-xs-12">
                    <div class="col-md-3 col-xs-12" id="footer-sidebar1">
                        <h3 class="widget-title-footer"> <span class="block-title-footer"><span>سایت های مرتبط</span></span></h3>

                        <div class="bottomMenu">
                            <?php wp_nav_menu(array('theme_location' => 'primaryfooter')); ?>
                        </div>
                        <!-- 
                        <div style="padding-top: 20px;">
                            <div class="footer-fa-esra"> <a href="http://www.portal.esra.ir/Pages/Index.aspx" ><span style="color:#ffff00;"><strong>سایت قدیم بنیاد اسراء</strong></span></a></div>
                            <div class="footer-fa-esra"> <a href="http://www.news.esra.ir/" id="esra-link-footer" >پایگاه اطلاع رسانی اسراء</a></div>
                            <div class="footer-fa-esra"> <a href="http://tv.esra.ir/" id="esra-link-footer" >تلویزیون اینترنتی اسراء</a></div>
                            <div class="footer-fa-esra"> <a href="http://nashresra.ir/" id="esra-link-footer" >مرکز بین المللی نشر اسراء</a></div>
                        </div> -->
                    </div>
                    <div class="col-md-3 col-xs-12" id="footer-sidebar2">
                        <h3 class="widget-title-footer"> <span class="block-title-footer"><span>سایت های مرتبط </span></span></h3>

                        <div class="bottomMenu">
                            <?php wp_nav_menu(array('theme_location' => 'secondaryfooter')); ?>
                        </div>
                        <!--
                        <div style="padding-top: 20px;">
                            <div class="footer-fa-esra"> <a href="http://www.maarej.esra.ir/" id="esra-link-footer" >پژوهشگاه علوم وحیانی معارج</a></div>
                            <div class="footer-fa-esra"> <a href="http://hikmat.isramags.ir/" id="esra-link-footer" >فصلنامه حکمت اسراء</a></div>
                            <div class="footer-fa-esra"> <a href="http://ethics.isramags.ir/" id="esra-link-footer" >فصلنامه اخلاق وحیانی</a></div>
                            <div class="footer-fa-esra"> <a href="http://maarij.isramags.ir/" id="esra-link-footer" >فصلنامه علوم قرآن و تفسیر معارج</a></div>
                        </div> -->
                    </div>
                    <div class="col-md-3 col-xs-12" id="footer-sidebar3">
                        <h3 class="widget-title-footer"> <span class="block-title-footer"><span>لینک های مرتبط</span></span></h3>

                        <div class="bottomMenu">
                            <?php wp_nav_menu(array('theme_location' => '3rdfooter')); ?>
                        </div>
                        <!--    
                        <div style="padding-top: 20px;">
                            <div class="footer-fa-esra"> <a href="./web/office/master" id="esra-link-footer" >زندگینامه آیت الله جوادی آملی</a></div>
                            <div class="footer-fa-esra"> <a href="http://www.portal.esra.ir/Pages/Index.aspx?Command=Q29udGVudHNHcm91cExpc3QxJjh%2bMTEy-hmJ4NzNm2Gg%3d&amp;lang=fa&amp;Argument=IyMjQ29udGVudCMjIw%3d%3d-NXnF4ID5GRE%3d" id="esra-link-footer" >خطبه های نماز جمعه </a></div>
                            <div class="footer-fa-esra"> <a href="./archive-esteftat1" id="esra-link-footer" > استفتائات معظم له</a></div>
                            <div class="footer-fa-esra"> <a href="http://mp3.esra.ir/pdf/resaleh.pdf" id="esra-link-footer" >توضیح المسائل معظم له</a></div>
                        </div>
                        <p> &nbsp;</p> -->
                    </div>
                    <div class="col-md-3 col-xs-12" id="footer-sidebar4">
                        <h3 class="widget-title-footer"> <span class="block-title-footer"><span>لینک های مرتبط</span></span></h3>

                        <div class="bottomMenu">
                            <?php wp_nav_menu(array('theme_location' => '4thfooter')); ?>
                        </div>
                        <!--
                        <div style="padding-top: 20px;">
                            <div class="footer-fa-esra"> <a href="./archive-tafsir1" id="esra-link-footer" >درس تفسیر آیت الله جوادی آملی</a></div>
                            <div class="footer-fa-esra"> <a href="./archive-feghe1" id="esra-link-footer" > دروس فقه معظم له</a></div>
                            <div class="footer-fa-esra"> <a href="./archive-akhlagh1" id="esra-link-footer" > دروس اخلاق معظم له</a></div>
                            <div class="footer-fa-esra"> <a href="./archive-article1" id="esra-link-footer" >مقالات معظم له</a></div>
                        </div>
                        <p> &nbsp;</p> -->
                    </div>
                </div>
                <hr style="margin-bottom: 0; width: 100%">
                <div class="$namespace col-sm-5 col-xs-12">
                    <div class="col-lg-4 text-center">
                        <p class="section-heading wow bounceIn footer-head-top" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;"> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/make-layouts-responsive.js"></script>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/jquery.fittext.js"></script>
    <script src="<?php echo plugin_dir_url(__FILE__) ?>assets/js/wow.min.js"></script>
    <!--<script src="assets/js/creative.js"></script> -->

    <script type="text/javascript">
        /*<![CDATA[*/
        $(document).ready(function() {
            document.getElementById("main-content").style.display = "none ";
            // var a = $(".dars-tafsir .portlet-borderless-container .portlet-body").clone();
            // $(".dars-tafsir .portlet-borderless-container .portlet-body").remove();
            // $(".dars-tafsir .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-tafsir .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-tafsir .portlet-borderless-container").append(a);
            // $(".dars-tafsir .portlet-borderless-container ").append('<a href="category/دروس/درس-تفسیر/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-akhlagh .portlet-borderless-container .portlet-body").clone();
            // $(".dars-akhlagh .portlet-borderless-container .portlet-body").remove();
            // $(".dars-akhlagh .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-akhlagh .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-akhlagh .portlet-borderless-container").append(a);
            // $(".dars-akhlagh .portlet-borderless-container ").append('<a href="category/دروس/درس-اخلاق/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-fegh .portlet-borderless-container .portlet-body").clone();
            // $(".dars-fegh .portlet-borderless-container .portlet-body").remove();
            // $(".dars-fegh .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-fegh .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-fegh .portlet-borderless-container").append(a);
            // $(".dars-fegh .portlet-borderless-container ").append('<a href="category/دروس/درس-عرفان/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-erfan .portlet-borderless-container .portlet-body").clone();
            // $(".dars-erfan .portlet-borderless-container .portlet-body").remove();
            // $(".dars-erfan .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-erfan .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-erfan .portlet-borderless-container").append(a);
            // $(".dars-erfan .portlet-borderless-container ").append('<a href="category/دروس/درس-عرفان/" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-esteftaat .portlet-borderless-container .portlet-body").clone();
            // $(".dars-esteftaat .portlet-borderless-container .portlet-body").remove();
            // $(".dars-esteftaat .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-esteftaat .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-esteftaat .portlet-borderless-container").append(a);
            // $(".dars-esteftaat .portlet-borderless-container ").append('<a href="./archive-esteftat1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-maghalat .portlet-borderless-container .portlet-body").clone();
            // $(".dars-maghalat .portlet-borderless-container .portlet-body").remove();
            // $(".dars-maghalat .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-maghalat .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-maghalat .portlet-borderless-container").append(a);
            // $(".dars-maghalat .portlet-borderless-container ").append('<a href="./archive-article1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            // var a = $(".dars-payam .portlet-borderless-container .portlet-body").clone();
            // $(".dars-payam .portlet-borderless-container .portlet-body").remove();
            // $(".dars-payam .portlet-borderless-container ").append('<div class="image-doross"></div>');
            // $(".dars-payam .portlet-borderless-container ").append('<div class="title-doross"></div>');
            // $(".dars-payam .portlet-borderless-container").append(a);
            // $(".dars-payam .portlet-borderless-container ").append('<a href="./archive-payamha1" target="_blank" class="btn-droos"> <span class="span-btn"></span> بیشتر </a>');
            document.getElementById("main-content").style.display = "block"
        }); /*]]>*/
    </script>
    <?php wp_footer(); ?>
</body>

</html>