<?php
/*
 * Template name: Про нас
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="about-l-title-section">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-l-title">
                        <div class="about-l-title-img" style="background-image: url('<?= get_field("izobrazhenie1") ?>')">
                            <div class="about-l-title-img-bg"
                                 style="background-image: url('<?php bloginfo('template_url'); ?>/img/squadbg.png')"></div>
                        </div>
                        <div class="about-l-title-info">
                            <div class="about-l-title-info__heading">
                              <?= get_field("zagolovok1") ?>
                            </div>
                            <div class="about-l-title-info__intro">
                              <?= get_field("opisanie1") ?>
                                <ul>
                                  <?php while (have_rows('spisok1')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $element_spiska = get_sub_field('element_spiska');
                                    ?>
                                      <li><?= $element_spiska ?></li>
                                  <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-r-title-section">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-r-title">
                        <div class="about-r-title-info">
                            <div class="about-r-title-info__heading">
                              <?= get_field("zagolovok2") ?>
                            </div>
                            <div class="about-r-title-info__intro">
                              <?= get_field("opisanie2") ?>
                            </div>
                        </div>
                        <div class="about-r-title-img" style="background-image: url('<?= get_field("izobrazhenie2") ?>')">
                            <div class="about-r-title-img-bg"
                                 style="background-image: url('<?php bloginfo('template_url'); ?>/img/squadbg.png')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_infografiki") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-numb">
                        <div class="item">
                            <div class="item__title">
                              <?= get_field("infografika_1") ?>
                            </div>
                            <div class="item-square">
                                <div class="item-square__numb timer" data-from="0" data-to="<?= get_field("czifra_1") ?>" data-speed="1000">
                                  <?= get_field("czifra_1") ?>
                                </div>
                                <div class="item-square__text">
                                  <?= get_field("podpis_1") ?>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                              <?= get_field("infografika_2") ?>
                            </div>
                            <div class="item-square">
                                <div class="item-square__numb timer" data-from="0" data-to="<?= get_field("czifra_2") ?>" data-speed="1000">
                                  <?= get_field("czifra_2") ?>
                                </div>
                                <div class="item-square__text">
                                  <?= get_field("podpis_2") ?>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                              <?= get_field("infografika_3") ?>
                            </div>
                            <div class="item-square">
                                <div class="item-square__numb timer" data-from="0" data-to="<?= get_field("czifra_3") ?>" data-speed="1000">
                                  <?= get_field("czifra_3") ?>
                                </div>
                                <div class="item-square__text">
                                  <?= get_field("podpis_3") ?>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                              <?= get_field("infografika_4") ?>
                            </div>
                            <div class="item-square">
                                <div class="item-square__numb timer" data-from="0" data-to="<?= get_field("czifra_4") ?>" data-speed="1000">
                                  <?= get_field("czifra_4") ?>
                                </div>
                                <div class="item-square__text">
                                  <?= get_field("podpis_4") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_service") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-text">
                      <?= get_field("tekst_service") ?>
                        <ul>
                          <?php while (have_rows('spisok_service')):
                            ?>
                            <?php the_row(); ?>
                            <?php // vars
                            $element_spiska = get_sub_field('element_spiska');
                            ?>
                              <li><?= $element_spiska ?></li>
                          <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_stage") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-tabs-wrapper">
                        <div class="tab_container">
                            <div id="tab1" class="tab_content">
                                <div class="about-stage-item">
                                    <div class="about-stage-item__title">1 <?=pll__('этап')?></div>
                                    <div class="about-stage-item__sub-title"><?= get_field("zagolovok_etap_1") ?></div>
                                    <div class="about-stage-item__text">
                                      <?= get_field("opisanie_etap_1") ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content">
                                <div class="about-stage-item">
                                    <div class="about-stage-item__title">2 <?=pll__('этап')?></div>
                                    <div class="about-stage-item__sub-title"><?= get_field("zagolovok_etap_2") ?></div>
                                    <div class="about-stage-item__text">
                                      <?= get_field("opisanie_etap_2") ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab3" class="tab_content">
                                <div class="about-stage-item">
                                    <div class="about-stage-item__title">3 <?=pll__('этап')?></div>
                                    <div class="about-stage-item__sub-title"><?= get_field("zagolovok_etap_3") ?></div>
                                    <div class="about-stage-item__text">
                                      <?= get_field("opisanie_etap_3") ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab4" class="tab_content">
                                <div class="about-stage-item">
                                    <div class="about-stage-item__title">4 <?=pll__('этап')?></div>
                                    <div class="about-stage-item__sub-title"><?= get_field("zagolovok_etap_4") ?></div>
                                    <div class="about-stage-item__text">
                                      <?= get_field("opisanie_etap_4") ?>
                                    </div>
                                </div>
                            </div>
                            <div id="tab5" class="tab_content">
                                <div class="about-stage-item">
                                    <div class="about-stage-item__title">5 <?=pll__('этап')?></div>
                                    <div class="about-stage-item__sub-title"><?= get_field("zagolovok_etap_5") ?></div>
                                    <div class="about-stage-item__text">
                                      <?= get_field("opisanie_etap_5") ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="tabs about-tabs">
                            <li class="active" rel="tab1">
                                <span>01</span>
                            </li>
                            <li rel="tab2">
                                <span>02</span>
                            </li>
                            <li rel="tab3">
                                <span>03</span>
                            </li>
                            <li rel="tab4">
                                <span>04</span>
                            </li>
                            <li rel="tab5">
                                <span>05</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="staff-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_speczialistov") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container_custom">
            <div class="row">
                <div class="col-lg-12 staff-col">
                      <?php
                      // Shortcode to output service on ALL service page
                      function speczialisty($atts)
                      {
                        $favorservices = get_field('speczialisty');
                        if (isset($favorservices)) {
                          $html = '<div class="col-lg-12 staff-col">';

                          foreach ($favorservices as $item) {
                            //      $www = get_field("tehserviceicon",$item->ID);
                            //      echo $www;

                            $html .= '
<div class="staff-item">
    <div class="staff-item-img-wrapper">
<div class="staff-item-img" style="background-image: url(' . get_field("fotografiya", $item->ID) . ')"></div>
    </div>
    <div class="staff-item-info">
        <div class="staff-item-info-inner">
            <div class="staff-item-info-inner__heading">
                ' . get_field("fio", $item->ID) . '
            </div>
            <div class="staff-item-info-inner__sub-heading">
                ' . get_field("dolzhnost", $item->ID) . '
            </div>
            <div class="staff-item-info-inner__short-bio">
                ' . wp_trim_words(get_field("kratkoe_opisanie", $item->ID), 7, '...') . '
            </div>
            <div class="staff-item-info-inner__link">
                <a href="' . get_the_permalink($item->ID) . '">Подробная анкета врача</a>
            </div>
        </div>
    </div>
</div>
                                         ';
                          }
                          $html .= '</div>';
                          return $html;
                        } else {
                          return "";
                        }
                      }
                      add_shortcode('speczialisty', 'speczialisty');
                      //END
                      ?>
                      <?php echo do_shortcode('[speczialisty]'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_template_part('template-parts/social-review'); ?>

    <section class="blog-grid about-blog-grid" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <?= get_field("zagolovok_bloka_blog") ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
<!--            <div class="row about-mob-blog owl-theme">-->
<!--            col-md-12 col-md-6 blog-card-full-width-->
              <?php
              function stati_bloga($atts)
              {
                $stati_bloga = get_field('stati_bloga');
                if (isset($stati_bloga)) {
                  $html = '<div class="row about-mob-blog owl-theme">';
                  foreach ($stati_bloga as $item) {
                    $html .= '
                        <div class="col-md-6">
                    <div class="blog-card">
                         <div class="blog-card-image" style="background-image: url(' . get_field("izobrazhenie_stati", $item->ID) . ')">
                        </div>
                        <div class="blog-card-content">
                            <div class="blog-card-content__title">
    ' . get_field("nazvanie_stati", $item->ID) . '
                            </div>
                            <div class="blog-card-content__preview">
  ' . get_field("opisanie_stati", $item->ID) . '
                            </div>
                            <div class="blog-card-content__date">
                                                  ' . get_the_date('j.n.Y') . '
                            </div>
                            <div class="blog-card-content__link">
                                <a href="' . get_the_permalink($item->ID) . '">
                                ' . pll__('Читать статью') . '
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
         
                                         ';
                  }
                  $html .= '</div>';

                  return $html;
                } else {
                  return "";
                }
              }

              add_shortcode('stati_bloga', 'stati_bloga');
              ?>
              <?php echo do_shortcode('[stati_bloga]'); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <a href="/<?= get_field("ssylka_na_blog") ?>" class="button main-style">
                        Все статьи
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
    <div class="section-title">
        наши контакты
    </div>
<?php get_template_part('template-parts/location-section'); ?>

<?php get_footer();