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
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>JvDental homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="header-contacts">
                        <div class="header-top__item">
                            <svg class="icon icon-telephone">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-telephone"></use>
                            </svg>
                            <span> <a href="tel:+38 (097) 501 35 35"> +38 (097) 501 35 35</a></span>
                        </div>
                        <div class="header-top__item">
                            <svg class="icon icon-mail">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-mail"></use>
                            </svg>
                            <span><a href="jvdental7@gmail.com">jvdental7@gmail.com</a></span>
                        </div>
                        <div class="header-top__item">
                            <svg class="icon icon-clock">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-clock"></use>
                            </svg>
                            <span>Пн-Cб, 10:00 - 20:00 </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="header-top-links">
                        <ul class="langs">
                            <li class="lang-item lang-item-2 lang-item-ru current-lang lang-item-first">
                                <a lang="ru-RU" hreflang="ru-RU" href="https://energo-climat.com/">RU</a>
                            </li>
                            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="https://energo-climat.com/uk/">UA</a></li>
                            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="https://energo-climat.com/uk/">EN</a></li>
                        </ul>
                        <div class="social-links">
                            <a href="">
                                <svg class="icon icon-facebook">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-facebook"></use>
                                </svg>
                            </a>
                            <a href="">
                                <svg class="icon icon-instagram">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-instagram"></use>
                                </svg>
                            </a>
                            <a href="">
                                <svg class="icon icon-youtube">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-youtube"></use>
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
                            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" class="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="nav-menus-wrapper">
                        <ul>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">услуги</a></li>
                            <li><a href="#">галерея</a></li>
                            <li><a href="#">прайс</a></li>
                            <li><a href="#">контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="header-callback">
                        <button class="button main-style" data-toggle="modal" data-target="#modal-catalog">
                            Заказать звонок
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-toggle">Menu</div>
    <ul id="menu">
        <li><a href="#">Главная</a></li>
        <li>
            <a href="#">Услуги</a>
            <ul class="sub-menu">
                <li><a href="#">Услуга 1</a></li>
                <li><a href="#">Услуга 2</a></li>
                <li><a href="#">Услуга 3</a>
                    <ul class="sub-menu">
                        <li><a href="#">Подуслуга 1</a></li>
                        <li><a href="#">Подуслуга 2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">Галерея</a></li>
        <li><a href="#">Врачи</a></li>
        <li><a href="#">Прайс</a></li>
        <li><a href="#">блог</a></li>
        <li><a href="#">контакты</a></li>
        <div class="social-links">
            <a href="">
                <svg class="icon icon-facebook">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-facebook"></use>
                </svg>
            </a>
            <a href="">
                <svg class="icon icon-instagram">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-instagram"></use>
                </svg>
            </a>
            <a href="">
                <svg class="icon icon-youtube">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-youtube"></use>
                </svg>
            </a>
        </div>
        <ul class="langs">
            <li class="lang-item lang-item-2 lang-item-ru current-lang lang-item-first">
                <a lang="ru-RU" hreflang="ru-RU" href="https://energo-climat.com/">RU</a>
            </li>
            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="">UA</a></li>
            <li class="lang-item lang-item-5 lang-item-uk"><a lang="uk" hreflang="uk" href="">EN</a></li>
        </ul>
    </ul>
</header>