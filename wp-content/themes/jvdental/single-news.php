<?php
/**
 * Template Name: Статья
 * Template Post Type: post, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jvdental
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="about-l-title-section">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-l-title">
                        <div class="about-l-title-img"
                             style="background-image: url('<?= get_field("izobrazhenie_stati") ?>')">
                            <div class="about-l-title-img-bg"
                                 style="background-image: url('<?php bloginfo('template_url'); ?>/img/squadbg.png')"></div>
                        </div>
                        <div class="about-l-title-info">
                            <div class="about-l-title-info__heading">
                              <?= get_field("nazvanie_stati") ?>
                            </div>
                            <div class="about-l-title-info__intro">
                              <?= get_field("opisanie_stati") ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-content blogpost-content">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                  <?php if (have_rows('flexible_content')): ?>
                    <?php while (have_rows('flexible_content')):
                      the_row(); ?>
                      <?php if (get_row_layout() == 'headingh'): ?>
                          <div class="heading">
                            <?php the_sub_field('zagolovok'); ?>
                          </div>
                    <?php elseif (get_row_layout() == 'textareablock'): ?>
                          <p><?php the_sub_field('tekst'); ?></p>
                    <?php elseif (get_row_layout() == 'subheading'): ?>
                          <div class="sub-heading">
                            <?php the_sub_field('zagolovok'); ?>
                          </div>
                    <?php elseif (get_row_layout() == 'listblock'): ?>
                          <ul>
                            <?php while (have_rows('spisok')):
                              ?>
                              <?php the_row(); ?>
                              <?php // vars
                              $element_spiska = get_sub_field('element_spiska');
                              ?>
                                <li><?= $element_spiska ?></li>
                            <?php endwhile; ?>
                          </ul>
                    <?php elseif (get_row_layout() == 'blockquote'): ?>
                          <div class="blockquote-wrapper">
                              <blockquote>
                                <?php the_sub_field('tekst_czitaty'); ?>
                              </blockquote>
                          </div>
                          <!--Таблица-->
                    <?php elseif (get_row_layout() == 'tablepost'): ?>
                          <div class="flexible-table">
                              <!--                                                  <pre>-->
                            <?php //var_dump(the_sub_field( 'flextablecontent' )); ?><!--</pre>-->
                              <p class="article-heading-big made-in">
                                <?php the_sub_field('flextablecontentpre'); ?>
                              </p>
                            <?php
                            $table = get_sub_field('flextablecontent');
                            if ($table) {
                              echo '<table class="scrollable" border="0">';
                              if ($table['header']) {
                                echo '<thead>';
                                echo '<tr>';
                                foreach ($table['header'] as $th) {
                                  echo '<th>';
                                  echo $th['c'];
                                  echo '</th>';
                                }
                                echo '</tr>';
                                echo '</thead>';
                              }
                              echo '<tbody>';
                              foreach ($table['body'] as $tr) {
                                echo '<tr>';
                                foreach ($tr as $key => $td) {
                                  echo '<td data-title="' . $table['header'][$key]['c'] . '">';
                                  echo $td['c'];
                                  echo '</td>';
                                }
                                echo '</tr>';
                              }
                              echo '</tbody>';
                              echo '</table>';
                            }
                            ?>
                          </div>
                    <?php elseif (get_row_layout() == 'servicegallery'): ?>
                          <div class="comparison-wrapper comparison-slider owl-carousel">
                            <?php while (have_rows('kontent_galerei')):
                              ?>
                              <?php the_row(); ?>
                              <?php // vars
                              $izobrazhenie_do = get_sub_field('izobrazhenie_do');
                              $izobrazhenie_posle = get_sub_field('izobrazhenie_posle');
                              ?>
                                <div class="comparison__content">
                                    <div class="comparison-magic">
                                        <div class="before-title">
                                          <?= pll__('до') ?>
                                        </div>
                                        <div class="after-title">
                                          <?= pll__('после') ?>
                                        </div>
                                        <div class="ba-slider">
                                            <img src="<?= $izobrazhenie_posle ?>" alt="">
                                            <div class="resize">
                                                <img src="<?= $izobrazhenie_do ?>" alt="">
                                            </div>
                                            <div class="handle"></div>
                                        </div>

                                    </div>
                                </div>
                            <?php endwhile; ?>
                          </div>
                          <div class="col-md-12 d-flex justify-content-center">
                              <button class="button main-style" data-toggle="modal" data-target="#modal-want-to">
                                <?= pll__('Хочу так же!') ?>
                              </button>
                          </div>
                    <?php elseif (get_row_layout() == 'singlepict'): ?>
                          <div class="blogpost-content-image-wrapper">
                              <div class="blogpost-content-image">
                                  <img src="<?php the_sub_field('izobrazhenie'); ?>" alt="">
                                  <div class="blogpost-content-image__title">
                                    <?php the_sub_field('podpis_k_izobrazheniyu'); ?>
                                  </div>
                              </div>
                          </div>
                    <?php elseif (get_row_layout() == 'doublepic'): ?>
                          <div class="blogpost-content-image-wrapper blogpost-content-image-wrapper_double">
                              <div class="blogpost-content-image">
                                  <img src="<?php the_sub_field('izobrazhenie'); ?>" alt="">
                                  <div class="blogpost-content-image__title">
                                    <?php the_sub_field('podpis_k_izobrazheniyu'); ?>
                                  </div>
                              </div>
                              <div class="blogpost-content-image">
                                  <img src="<?php the_sub_field('izobrazhenie2'); ?>" alt="">
                                  <div class="blogpost-content-image__title">
                                    <?php the_sub_field('podpis_k_izobrazheniyu2'); ?>
                                  </div>
                              </div>
                          </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<section class="blogpost-pagination">
    <div class="container">
      <?php
      $next_post = get_next_post(true);
      if (!empty($next_post)) {
        ?>
          <div class="row">
              <div class="col-md-12">
                  <div class="title">
                    <?= pll__('Следующая статья:') ?>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="blog-card">
                      <div class="blog-card-image"
                           style="background-image: url('<?php echo get_the_post_thumbnail_url($next_post->ID, 'thumbnail'); ?>')">
                      </div>
                      <div class="blog-card-content">
                          <div class="blog-card-content__title">
                              <a href="<?php echo get_permalink($next_post); ?>">
                                <?php echo wp_trim_words(esc_html($next_post->post_title), 13, '...'); ?>
                              </a>
                          </div>
                          <div class="blog-card-content__date">
                            <?php echo get_the_date('j.n.Y') ?>
                          </div>
                          <div class="blog-card-content__link">
                              <a href="<?php echo get_permalink($next_post); ?>"><?= pll__('Читать статью') ?></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <?php
      }
      ?>
    </div>
</section>
<?php get_footer();


