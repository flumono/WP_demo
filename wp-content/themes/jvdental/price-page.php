<?php
/*
 * Template name: Прайс
 */
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <section class="price-accordion">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                            <?= get_field("zagolovok_straniczy") ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="price-accordion__inner">
                      <?php while (have_rows('prajsa')):
                        ?>
                        <?php the_row(); ?>
                        <?php // vars
                        $zagolovok_kategorii_uslug = get_sub_field('zagolovok_kategorii_uslug');
                        ?>
                          <div class="price-accordion-item">
                              <div class="price-accordion-toggle-title"><span><?= $zagolovok_kategorii_uslug ?></span>
                              </div>
                              <div class="accordion-inner show">
                                  <div class="price-item price-item_heading">
                                      <div class="price-title">
                                        <?= pll__('Наименование услуги') ?>
                                      </div>
                                      <div class=" price-check">
                                          <span class="price"><?= pll__('Цена') ?></span>
                                      </div>
                                  </div>
                                <?php while (have_rows('uslugi')):
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
                          </div>
                      <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/registration'); ?>
<?php get_template_part('template-parts/location-section'); ?>

<?php get_footer();