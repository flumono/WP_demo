<?php
/*
 * Template name: Специалисты
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="staff-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolovok_straniczy") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container_custom">
            <div class="row">
              <?php
              // Shortcode to output service on ALL service page
              function vse_speczialisty($atts)
              {
                $favorservices = get_field('vse_speczialisty');
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
                                  ' . wp_trim_words(get_field("kratkoe_opisanie", $item->ID), 9, '...') . '
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
              add_shortcode('vse_speczialisty', 'vse_speczialisty');
              //END

              ?>
              <?php echo do_shortcode('[vse_speczialisty]'); ?>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
<?php get_template_part('template-parts/location-section'); ?>

<?php get_footer();