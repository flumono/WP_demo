<?php
/*
 * Template name: Галерея
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="gallery">
        <div class="container">
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
                <div class="col-md-12">
                    <div class="gallery-wrapper">
                        <div class="carousel-container">
                            <div class="carousel carousel-main" data-flickity>
                              <?php while (have_rows('galereya')):
                                ?>
                                <?php the_row(); ?>
                                <?php // vars
                                $izobrazhenie = get_sub_field('izobrazhenie');
                                ?>
                                  <div class="carousel-cell">
                                      <a data-fancybox="gallery" href="<?= $izobrazhenie ?>">
                                          <img src="<?= $izobrazhenie ?>" alt="">
                                      </a>
                                  </div>
                              <?php endwhile; ?>
                            </div>
                            <div class="carousel-nav">
                              <?php while (have_rows('galereya')):
                                ?>
                                <?php the_row(); ?>
                                <?php // vars
                                $izobrazhenie = get_sub_field('izobrazhenie');
                                ?>
                                  <div class="carousel-cell is-nav-selected">
                                      <img src="<?= $izobrazhenie ?>" alt="">
                                  </div>
                              <?php endwhile; ?>
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
                        <?=pll__('Наши пациенты')?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-tabs-wrapper">
                        <ul class="gallery-tabs">
                            <li class="active"><?= get_field("tabgalname1") ?></li>
                            <li><?= get_field("tabgalname2") ?></li>
                            <li><?= get_field("tabgalname3") ?></li>
                            <li><?= get_field("tabgalname4") ?></li>
                            <li><?= get_field("tabgalname5") ?></li>
                            <li><?= get_field("tabgalname6") ?></li>
                        </ul>
                        <div class="gallery-tabs-content">
                            <div class="gallery-tab_content active">
                                <div id="gallery-comparison-slider comparison-slider-1"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal1')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                                 <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                                   <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="gallery-tab_content">
                                <div id="gallery-comparison-slider comparison-slider-2"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal2')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                                  <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                              <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="gallery-tab_content">
                                <div id="gallery-comparison-slider comparison-slider-3"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal3')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                                 <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                        <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="gallery-tab_content">
                                <div id="gallery-comparison-slider comparison-slider-4"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal4')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                                  <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                              <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="gallery-tab_content">
                                <div id="gallery-comparison-slider comparison-slider-5"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal5')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                           <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                           <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
                                </div>
                            </div>
                            <div class="gallery-tab_content">
                                <div id="gallery-comparison-slider comparison-slider-6"
                                     class="comparison-wrapper owl-carousel owl-theme gallery-comparison-slider comparison-slider">
                                  <?php while (have_rows('tabgal6')):
                                    ?>
                                    <?php the_row(); ?>
                                    <?php // vars
                                    $do = get_sub_field('do');
                                    $posle = get_sub_field('posle');
                                    ?>
                                      <div class="comparison__content">
                                          <div class="comparison-magic">
                                              <div class="before-title">
                                                  <?=pll__('до')?>
                                              </div>
                                              <div class="after-title">
                                                 <?=pll__('после')?>
                                              </div>
                                              <div class='comparison-container'>
                                                  <div class="beer-slider" data-beer-label="" data-start="50">
                                                      <img src="<?= $posle ?>" alt="">
                                                      <div class="beer-reveal" data-beer-label="">
                                                          <img src="<?= $do ?>" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endwhile; ?>
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
                            <?=pll__('Наши контакты')?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/location-section'); ?>

<?php get_footer();