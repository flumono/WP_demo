<?php
/*
 * Template name: Контакты
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="contacts-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <?=pll__('наши контакты')?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contacts-section__inner">
                        <div class="contacts-item">
                            <svg class="icon icon-telephone">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-telephone"></use>
                            </svg>
                            <span> <a href="tel:+38<?= preg_replace('![^0-9+]+!', '', get_field("telefon", "option")) ?>"> <? the_field("telefon", "option") ?></a></span>
                        </div>
                        <div class="contacts-item">
                            <svg class="icon icon-mail">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-mail"></use>
                            </svg>
                            <span><a href="mailto:<? the_field("email", "option") ?>"><? the_field("email", "option") ?></a></span>
                        </div>
                        <div class="contacts-item">
                            <svg class="icon icon-clock">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-clock"></use>
                            </svg>
                            <span><? the_field("grafik_raboty", "option") ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/location-section'); ?>

<?php get_footer();