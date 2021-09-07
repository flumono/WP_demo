<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jvdental
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGD779Q');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="preload" rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGD779Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a href="javascript:" id="return-to-top">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
<g>
    <g>
        <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
            c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
            c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
            c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"/>
    </g>
</g>
</svg>
</a>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="header-contacts">
                        <div class="header-top__item">
                            <svg class="icon icon-telephone">
                                <use xmlns:xlink="https://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-telephone"></use>
                            </svg>
                            <span><a href="tel:<?= preg_replace('![^0-9+]+!', '', get_field("telefon", "option")) ?>"> <? the_field("telefon", "option") ?></a></span>
                        </div>
                        <div class="header-top__item">
                            <svg class="icon icon-mail">
                                <use xmlns:xlink="https://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-mail"></use>
                            </svg>
                            <span><a href="mailto:<? the_field("email", "option") ?>"><? the_field("email", "option") ?></a></span>
                        </div>
                        <div class="header-top__item">
                            <svg class="icon icon-clock">
                                <use xmlns:xlink="https://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-clock"></use>
                            </svg>
                            <span><? the_field("grafik_raboty", "option") ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                	 <div class="scroll-logo">
                    <div class="logo">
                        <a href="/">
                            <img src="<? the_field("logotip", "option") ?>" alt="" class="logo">
                        </a>
                    </div>
                    </div>
                    <div class="header-top-links">
                        <ul class="langs" style="display: none;">
                          <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1)); ?>
                        </ul>
                        <div class="social-links">
                            <a href="<? the_field("facebook", "option") ?>">
                                <svg class="icon icon-facebook">
                                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-facebook"></use>
                                </svg>
                            </a>
                            <a href="<? the_field("instagram", "option") ?>">
                                <svg class="icon icon-instagram">
                                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-instagram"></use>
                                </svg>
                            </a>
                            <a href="<? the_field("youtube", "option") ?>">
                                <svg class="icon icon-youtube">
                                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-youtube"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="/">
                            <img src="<? the_field("logotip", "option") ?>" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="nav-menus-wrapper">
                      <?php
                      wp_nav_menu(array(
                        'theme_location' => 'menu-header',
                        'menu_id' => 'primary-menu',
                        'menu_class' => 'menu',
                        'menu' => '',
                        'container' => 'ul',
                        'container_class' => 'collapse collapsing navbar-collapse',
//                    'container_id'    => 'navbar-menu',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 3,
//                                'walker' => new My_Walker_Nav_Menu(),
                      ));
                      ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="header-callback">
                        <button class="button main-style" data-toggle="modal" data-target="#modal-callback">
                          <?=pll__('Заказать звонок')?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-toggle"></div>
    <div id="menu-mobile">
    	                      <?php
                      wp_nav_menu(array(
                        'theme_location' => 'menu-header',
                        'menu_id' => 'menu',
                        'menu_class' => 'menu',
                        'menu' => '',
                        'container' => 'ul',
                        'container_class' => 'collapse collapsing navbar-collapse',
//                    'container_id'    => 'navbar-menu',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 3,
//                                'walker' => new My_Walker_Nav_Menu(),
                      ));
                      ?>
            <div class="social-links">
            <a href="<? the_field("facebook", "option") ?>">
                <svg class="icon icon-facebook">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-facebook"></use>
                </svg>
            </a>
            <a href="<? the_field("instagram", "option") ?>">
                <svg class="icon icon-instagram">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-instagram"></use>
                </svg>
            </a>
            <a href="<? the_field("youtube", "option") ?>">
                <svg class="icon icon-youtube">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-youtube"></use>
                </svg>
            </a>
        </div>
        <ul class="langs" style="display: none;">
            <li class="lang-item lang-item-2 lang-item-ru current-lang lang-item-first">
                <a lang="ru-RU" hreflang="ru-RU" href="https://jvdental/">RU</a>
            </li>
            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="">UA</a></li>
            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="">EN</a></li>
        </ul>
    </div>
</header>