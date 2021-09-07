<?php
/**
 * Template Name: Категория
 * Template Post Type: post, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jvdental
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-category">
                        <a href="#">
                            подраздел категории #1
                        </a>
                        <a href="#">
                            подраздел категории #2
                        </a>
                        <a href="#">
                            подраздел категории #3
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-l-title-section">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-l-title">
                        <div class="about-l-title-img"
                             style="background-image: url('<?= get_field("izobrazhenie_kategorii") ?>')">
                            <div class="about-l-title-img-bg"
                                 style="background-image: url('<?php bloginfo('template_url'); ?>/img/squadbg.png')"></div>
                        </div>
                        <div class="about-l-title-info">
                            <div class="about-l-title-info__heading">
                              <?= get_field("nazvanie_kategorii") ?>
                            </div>
                            <div class="about-l-title-info__intro">
                              <?= get_field("opisanie_kategorii") ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-content">
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
                    <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                      <?= get_field("zagolok_bloka_etapov") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-tabs-wrapper">
                        <div class="tab_container">
                          <?php if (get_field('kolichestvo_etapov') == '1') { ?>
                              <div id="tab1" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">1 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_1_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_1opisanie") ?>
                                      </div>
                                  </div>
                              </div>


                          <?php } elseif (get_field('kolichestvo_etapov') == '2') { ?>
                              <div id="tab1" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">1 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_1_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_1opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab2" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">2 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_2_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_2opisanie") ?>
                                      </div>
                                  </div>
                              </div>

                          <?php } elseif (get_field('kolichestvo_etapov') == '3') { ?>
                              <div id="tab1" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">1 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_1_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_1opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab2" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">2 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_2_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_2opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab3" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">3 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_3_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_3opisanie") ?>
                                      </div>
                                  </div>
                              </div>

                          <?php } elseif (get_field('kolichestvo_etapov') == '4') { ?>
                              <div id="tab1" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">1 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_1_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_1opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab2" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">2 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_2_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_2opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab3" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">3 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_3_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_3opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab4" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">4 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_4_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_4opisanie") ?>
                                      </div>
                                  </div>
                              </div>

                          <?php } elseif (get_field('kolichestvo_etapov') == '5') { ?>
                              <div id="tab1" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">1 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_1_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_1opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab2" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">2 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_2_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_2opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab3" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">3 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_3_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_3opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab4" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">4 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_4_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_4opisanie") ?>
                                      </div>
                                  </div>
                              </div>
                              <div id="tab5" class="tab_content">
                                  <div class="service-stage-item">
                                      <div class="service-stage-item__title">5 <?= pll__('этап') ?></div>
                                      <div class="service-stage-item__sub-title"><?= get_field("etap_5_zagolovok") ?>
                                      </div>
                                      <div class="service-stage-item__text">
                                        <?= get_field("etap_5opisanie") ?>
                                      </div>
                                  </div>
                              </div>

                          <?php } else { ?>

                          <?php } ?>
                        </div>
                        <ul class="tabs service-tabs">
                          <?php if (get_field('kolichestvo_etapov') == '1') { ?>

                              <li class="active" rel="tab1">
                                  <span>01</span>
                              </li>

                          <?php } elseif (get_field('kolichestvo_etapov') == '2') { ?>
                              <li class="active" rel="tab1">
                                  <span>01</span>
                              </li>
                              <li class="" rel="tab2">
                                  <span>02</span>
                              </li>

                          <?php } elseif (get_field('kolichestvo_etapov') == '3') { ?>
                              <li class="active" rel="tab1">
                                  <span>01</span>
                              </li>
                              <li class="" rel="tab2">
                                  <span>02</span>
                              </li>
                              <li class="" rel="tab3">
                                  <span>03</span>
                              </li>

                          <?php } elseif (get_field('kolichestvo_etapov') == '4') { ?>
                              <li class="active" rel="tab1">
                                  <span>01</span>
                              </li>
                              <li class="" rel="tab2">
                                  <span>02</span>
                              </li>
                              <li class="" rel="tab3">
                                  <span>03</span>
                              </li>
                              <li class="" rel="tab4">
                                  <span>04</span>
                              </li>


                          <?php } elseif (get_field('kolichestvo_etapov') == '5') { ?>
                              <li class="active" rel="tab1">
                                  <span>01</span>
                              </li>
                              <li class="" rel="tab2">
                                  <span>02</span>
                              </li>
                              <li class="" rel="tab3">
                                  <span>03</span>
                              </li>
                              <li class="" rel="tab4">
                                  <span>04</span>
                              </li>
                              <li class="" rel="tab5">
                                  <span>05</span>
                              </li>

                          <?php } else { ?>

                          <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="service-content">
        <div class="container container_custom">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 30px;" class="section-title"><?= get_field("zagolovok_posle_tabov_s_etapami") ?></h2>
                    <p><?= get_field("tekst_posle_tabov_s_etapami") ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="service-price">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="service-price-wrapper">
                      <?php while (have_rows('prajs')):
                        ?>
                        <?php the_row(); ?>
                        <?php // vars
                        $usluga = get_sub_field('usluga');
                        $stoimost = get_sub_field('stoimost');
                        ?>
                          <div class="price-item">
                              <div class="price-title">
                                <?= $usluga ?>
                              </div>
                              <div class=" price-check">
                                  <span class="price"><?= $stoimost ?></span>
                              </div>
                          </div>
                      <?php endwhile; ?>
                    </div>
                    <div class="col-md-12 price-button">
                        <a href="/prajs/" class="button main-style">
                          <?= pll__('полный прайс') ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="section-title">
                      <?= get_field("zagolovok_bloka_prajs") ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
<?php get_template_part( 'template-parts/reviews'); ?>
    <div class="section-title">
      <?= pll__('Наши контакты') ?>
    </div>

<?php get_template_part('template-parts/location-section'); ?>
<?php get_footer();



