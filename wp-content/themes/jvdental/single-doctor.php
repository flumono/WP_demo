<?php
/**
 * Template Name: Персонал
 * Template Post Type: post, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jvdental
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section>
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="bio">
                        <div class="bio-img" style="background-image: url('<?= get_field("fotografiya") ?>')">
                            <div class="bio-img-bg"
                                 style="background-image: url('<?php bloginfo('template_url'); ?>/img/squadbg.png')"></div>
                        </div>
                        <div class="bio-info">
                            <div class="bio-info__heading">
                              <?= get_field("fio") ?>
                            </div>
                            <div class="bio-info__sub-heading">
                              <?= get_field("dolzhnost") ?>
                            </div>
                            <div class="bio-info__intro">
                              <?= get_field("kratkoe_opisanie") ?>
                            </div>
                            <div class="bio-bold-title">
                              <?= pll__('Образование') ?>
                            </div>
                            <div class="bio-info__education">
                     <div class="toggle-content">
                    <div class="toggle-readmore__hide showmore">
                                                      <ul>
                                  <?php while (have_rows('obrazovanie')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $element_spiska = get_sub_field('element');
                                    ?>
                                      <li><?= $element_spiska ?></li>
                                  <?php endwhile; ?>
                                </ul>
                    </div>
                    <div class="button link-style toggle-readmore__btn showmore">
                        <span><?= pll__('Читать больше') ?></span><span><?= pll__('Скрыть') ?></span>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="bio">
                        <div class="bio-info bio-info_wide">
                            <div class="bio-bold-title">
                              <?= pll__('Стаж роботы') ?>
                            </div>
                            <div class="bio-info__education">
                                <ul>
                                  <?php while (have_rows('stazh_raboty')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $element_spiska = get_sub_field('element');
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
    <section class="all-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= pll__('Работает в следующих направления') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-services-wrapper">
                                                <?php
                          // Shortcode to output service on ALL service page
                          function favorservices($atts)
                          {
                            $favorservices = get_field('napravleniya');
                            if (isset($favorservices)) {
                              $html = '<div class="toggle-readmore__hide">';

                              foreach ($favorservices as $item) {
                        //      $www = get_field("tehserviceicon",$item->ID);
                        //      echo $www;
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
                          add_shortcode('favorservices', 'favorservices');
                          //END
                          ?>
                          <?php echo do_shortcode('[favorservices]'); ?>
                        <div class="toggle-content" style="display: none;">
                            <div class="button link-style toggle-readmore__btn">
                                <span><?= pll__('Раскрыть') ?></span><span><?= pll__('Скрыть') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
      <?php if (get_field('zagolovok_diplomy') == true) { ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= pll__('Врачебные дипломы и сертификаты') ?>
                    </div>
                </div>
            </div>
        </div>
      <?php } else { ?>
      <?php } ?>
        <div class="container">
            <div class="row docs-wrapper">
              <?php while (have_rows('diplomy')):
                ?>
                <?php the_row(); ?>
                <?php // vars
                $element_spiska = get_sub_field('element');
                ?>
                  <div class="col-md-4">
                      <div class="license-item">
                          <a data-fancybox="gallery" href="<?= $element_spiska ?>"><img src="<?= $element_spiska ?>"
                                                                                        alt=""></a>
                      </div>

                  </div>
              <?php endwhile; ?>
              <div style="clear: both;"></div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
<?php get_template_part('template-parts/location-section'); ?>
<?php get_footer();



