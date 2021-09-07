<?php
/*
 * Template name: Блог
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="blog-grid">
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
              function glavnaya_novost($atts)
              {
                $glavnaya_novost = get_field('glavnaya_novost');
                if (isset($glavnaya_novost)) {
                  $html = '<div class="col-md-12 blog-card-full-width">';
                  foreach ($glavnaya_novost as $item) {
                    $html .= '
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
                                         ';
                  }
                  $html .= '</div>';
                  return $html;
                } else {
                  return "";
                }
              }

              add_shortcode('glavnaya_novost', 'glavnaya_novost');
              ?>
              <?php echo do_shortcode('[glavnaya_novost]'); ?>
            </div>
        </div>


        <div class="container">
        	<!-- начало блока с выводом статей и тут же код пагинации -->
        	<!-- код пагинации -->
          <?php
          if (get_query_var('post')) {
            $page = get_query_var('post');
          } else {
            $page = 1;
          }
          // Variables
          $row = 0;
          $blocks_per_page = 1; // How many blocks to display on each page
          $blocks = get_field('novosti');
          $total = count($blocks);
          $pages = ceil($total / $blocks_per_page);
          $min = (($page * $blocks_per_page) - $blocks_per_page) + 1;
          $max = ($min + $blocks_per_page) - 1;
          ?>
          <?php
          //              var_dump(get_permalink());
          $permalinks = get_permalink();
          ?>
          <!-- конец кода пагинации -->
          <?php
          $post_objects = get_field('novosti');
          if ($post_objects): ?>
              <div class="row">
                <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php
                  $row++;
                  // Ignore this image if $row is lower than $min
                  if($row < $min) { continue; }
                  // Stop loop completely if $row is higher than $max
                  if($row > $max) { break; } ?>
                    <div class="col-md-6">
                        <div class="blog-card">
                            <div class="blog-card-image" style="background-image: url('<? the_field('izobrazhenie_stati') ?>')">
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-content__title">
                                  <?php echo get_field("nazvanie_stati", $item->ID) ?>
                                </div>
                                <div class="blog-card-content__date">
                                  <?php echo get_the_date('j.n.Y') ?>
                                </div>
                                <div class="blog-card-content__link">
                                    <a href="<?php the_permalink(); ?>">
                                      <?php echo pll__('Читать статью') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
              </div>
              <!--                --><?php //wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif;?>


        </div>
         <!-- блок со страницами пагинации -->
        <div class="container">
            <div class="row">
                <div class="pagination" style="    text-align: center;
    width: 100%;
    display: flex;
    justify-content: center;">
                  <?php
                  if (get_query_var('page')) {
                    $page = get_query_var('page');
                  } else {
                    $page = 1;
                  }
                  echo paginate_links(array(
                    'base' => $permalinks . '%#%' . '/',
                    'format' => '/',
                    'current' => $page,
                    'total' => $pages
                  ));
                  ?>
                </div>
            </div>
        </div>
                 <!-- конец блока со страницами пагинации -->
    </section>
<?php get_footer();