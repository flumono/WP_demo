<?php
/*
 * Template name: Главная
 */
?>
<?php get_header(); ?>
    <section class="video-section">
        <video loop="loop" autoplay="autoplay" playsinline="" muted="" preload="auto"
               src="<?php bloginfo('template_url'); ?>/img/video.m4v" style="">
            <source type="video/m4v" src="<?php bloginfo('template_url'); ?>/img/video.m4v">
        </video>
    </section>
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("intro_zagolovok") ?>
                    </div>
                    <div class="section-title__sub">
                      <?= get_field("intro_podzagolovok") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container_custom">
            <div class="row">
                <div class="col-custom">
                    <div class="intro-wrapper">
                        <div class="tab_container">
                            <div id="tab1" class="tab_content">
                                <div class="intro-picture">
                                    <img src="<?php bloginfo('template_url'); ?>/img/jemchug.jpg" alt="">
                                </div>
                                <div class=" intro-content">
                                    <div class="intro-content__title">
                                      <?= get_field("zagolovok_vkladki_1") ?>
                                    </div>
                                    <div class="intro-content__inner">
                                      <?php if (get_field('pereklyuchatel_1') == true) { ?>
                                        <ul>
                                          <?php while (have_rows('tekst_vkladki_1')):
                                            ?>
                                            <?php the_row(); ?>
                                            <?php // vars
                                            $element = get_sub_field('element');
                                            ?>
                                              <li class="animate__animated animate__fadeInRight wow"><?= $element ?></li>
                                          <?php endwhile; ?>
                                        </ul>
                                        <?php } else { ?>
                                        <?= get_field("tekstovoe_soderzhimoe_1") ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content">
                                <div class="intro-picture">
                                    <img src="<?php bloginfo('template_url'); ?>/img/jemchug.jpg" alt="">
                                </div>
                                <div class=" intro-content">
                                    <div class="intro-content__title">
                                      <?= get_field("zagolovok_vkladki_2") ?>
                                    </div>
                                    <div class="intro-content__inner">
                                      <?php if (get_field('pereklyuchatel_2') == true) { ?>
                                        <ul>
                                          <?php while (have_rows('tekst_vkladki_2')):
                                            ?>
                                            <?php the_row(); ?>
                                            <?php // vars
                                            $element = get_sub_field('element');
                                            ?>
                                              <li class="animate__animated animate__fadeInRight wow"><?= $element ?></li>
                                          <?php endwhile; ?>
                                        </ul>
                                        <?php } else { ?>
                                        <?= get_field("tekstovoe_soderzhimoe_2") ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab_content">
                                <div class="intro-picture">
                                    <img src="<?php bloginfo('template_url'); ?>/img/jemchug.jpg" alt="">
                                </div>
                                <div class=" intro-content">
                                    <div class="intro-content__title">
                                      <?= get_field("zagolovok_vkladki_3") ?>
                                    </div>
                                    <div class="intro-content__inner">
                                      <?php if (get_field('pereklyuchatel_3') == true) { ?>
                                        <ul>
                                          <?php while (have_rows('tekst_vkladki_3')):
                                            ?>
                                            <?php the_row(); ?>
                                            <?php // vars
                                            $element = get_sub_field('element');
                                            ?>
                                              <li class="animate__animated animate__fadeInRight wow"><?= $element ?></li>
                                          <?php endwhile; ?>
                                        </ul>
                                        <?php } else { ?>
                                        <?= get_field("tekstovoe_soderzhimoe_3") ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-tabs-keys">
                            <ul class="tabs intro-tabs">
                                <li class="active" rel="tab1">
                                    <span>1</span>
                                    <span><?= get_field("nazvanie_vkladki_1") ?></span>
                                </li>
                                <li rel="tab2">
                                    <span>2</span>
                                    <span><?= get_field("nazvanie_vkladki_2") ?></span>
                                </li>
                                <li rel="tab3">
                                    <span>3</span>
                                    <span><?= get_field("nazvanie_vkladki_3") ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_s_uslugami") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-services-wrapper">
                        <div class="toggle-content">
                          <?php
                          function uslugi_na_glavnoj($atts)
                          {
                            $uslugi_na_glavnoj = get_field('uslugi_na_glavnoj');
                            if (isset($uslugi_na_glavnoj)) {
                              $html = '<div class="toggle-readmore__hide">';

                              foreach ($uslugi_na_glavnoj as $item) {
                                $html .= '
                                           <a href="' . get_the_permalink($item->ID) . '">
                                          <div class="service-item">
                                            <div class="service-item__svg-bg">
                                              ' . get_field("svg_ikonka", $item->ID) . '
                                            </div>
                                            <div class="service-corner-icon">
                                              ' . get_field("svg_ikonka", $item->ID) . '
                                            </div>
                                            <div class="service-item__title">
                                              ' . get_the_title($item->ID) . '
                                            </div>
                                          </div>
                                        </a>
                                         ';
                              }
                              $html .= '</div>';
                              return $html;
                            } else {
                              return "";
                            }
                          }
                          add_shortcode('uslugi_na_glavnoj', 'uslugi_na_glavnoj');
                          //END
                          ?>
                          <?php echo do_shortcode('[uslugi_na_glavnoj]'); ?>
                            <div class="button link-style toggle-readmore__btn">
                                <span><?= pll__('Раскрыть') ?></span><span><?= pll__('Скрыть') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comparison">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_vashi_ulybki") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="comparison-wrapper owl-carousel owl-theme comparison-slider">
                      <?php while (have_rows('vashi_ulybki')):
                        ?>
                        <?php the_row(); ?>
                        <?php // vars
                        $izobrazhenie_do = get_sub_field('izobrazhenie_do');
                        $izobrazhenie_posle = get_sub_field('izobrazhenie_posle');
                        $zagolovok = get_sub_field('zagolovok');
                        $opisanie = get_sub_field('opisanie');
                        $ssylka = get_sub_field('ssylka');
                        ?>
                          <div class="comparison__content">
                              <div class="comparison-magic">
                                  <div class="before-title">
                                    <?= pll__('до') ?>
                                  </div>
                                  <div class="after-title">
                                    <?= pll__('после') ?>
                                  </div>

                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                      <img src="<?= $izobrazhenie_posle ?>" alt="">
                                      <div class="beer-reveal" data-beer-label="">
                                          <img src="<?= $izobrazhenie_do ?>" alt="">
                                      </div>
                                  </div>
                              </div>
                              <div class="comparison-content">
                                  <div class="comparison-content__inner">
                                      <div class="comparison-content__title">
                                        <?= $zagolovok ?>
                                      </div>
                                      <div class="comparison-content__text">
                                        <?= $opisanie ?>
                                      </div>
                                      <a href="/<?= $ssylka ?>" class="button main-style">
                                        <?= pll__('Подробнее') ?>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="privilege">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_preimushhestva") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="privilege__inner" style="background-image: url('<?= get_field("izobrazhenie_bloka_preimushhestv") ?>')">
                    <div class="privilege-hover tl">
                        <div class="privilege-hover__title"><?= get_field("preimushhestvo_1_zagolovok") ?>
                        </div>
                        <div class="privilege-hover__content">
                            <div class="privilege-hover__content-inner nano-content">
                              <?= get_field("preimushhestvo_1_opisanie") ?>
                            </div>
                            <span class="privilege-hover-close">
                                    <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                        </div>
                    </div>
                    <div class="privilege-hover bl">
                        <div class="privilege-hover__title"><?= get_field("preimushhestvo_2_zagolovok") ?>
                        </div>
                        <div class="privilege-hover__content">
                            <div class="privilege-hover__content-inner nano-content">
                              <?= get_field("preimushhestvo_2_opisanie") ?>
                            </div>
                            <span class="privilege-hover-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                        </div>
                    </div>
                    <div class="privilege-hover tr">
                        <div class="privilege-hover__title"><?= get_field("preimushhestvo_3_zagolovok") ?>
                        </div>
                        <div class="privilege-hover__content">
                            <div class="privilege-hover__content-inner nano-content">
                              <?= get_field("preimushhestvo_3_opisanie") ?>
                            </div>
                            <span class="privilege-hover-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                        </div>
                    </div>
                    <div class="privilege-hover br">
                        <div class="privilege-hover__title"><?= get_field("preimushhestvo_4_zagolovok") ?>
                        </div>
                        <div class="privilege-hover__content">
                            <div class="privilege-hover__content-inner nano-content">
                              <?= get_field("preimushhestvo_4_opisanie") ?>
                            </div>
                            <span class="privilege-hover-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="privilege-mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_preimushhestva") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion-item active">
                <div class="accordion-item__title"><?= get_field("preimushhestvo_1_zagolovok") ?>
                </div>
                <div class="accordion-item__content">
                    <div class="accordion-item__content-inner nano-content">
                      <?= get_field("preimushhestvo_1_opisanie") ?>
                    </div>
                    <span class="accordion-item-close">
                                    <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__title"><?= get_field("preimushhestvo_2_zagolovok") ?>
                </div>
                <div class="accordion-item__content">
                    <div class="accordion-item__content-inner nano-content">
                      <?= get_field("preimushhestvo_2_opisanie") ?>
                    </div>
                    <span class="accordion-item-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__title"><?= get_field("preimushhestvo_3_zagolovok") ?>
                </div>
                <div class="accordion-item__content">
                    <div class="accordion-item__content-inner nano-content">
                      <?= get_field("preimushhestvo_3_opisanie") ?>
                    </div>
                    <span class="accordion-item-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item__title"><?= get_field("preimushhestvo_4_zagolovok") ?>
                </div>
                <div class="accordion-item__content">
                    <div class="accordion-item__content-inner nano-content">
                      <?= get_field("preimushhestvo_4_opisanie") ?>
                    </div>
                    <span class="accordion-item-close">
        <svg class="icon icon-close">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
        </svg>
                        </span>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
<?php get_template_part('template-parts/social-review'); ?>
<?php get_template_part('template-parts/location-section'); ?>
<?php if (get_field('vklyuchit_seo_tekst') == true) { ?>
<?php get_template_part('template-parts/seo-text'); ?>
    <?php } else { ?>
    <?php } ?>


<?php get_footer();