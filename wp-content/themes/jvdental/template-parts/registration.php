<section class="registration">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="registration-inner">
          <div class="registration-inner__column">
            <div class="registration-inner__title">
              <?=pll__('Напишите нам')?>
            </div>
            <?php if (pll_current_language() == 'uk') { ?>

              <?php echo do_shortcode('[contact-form-7 id="203" title="Форма записи ukr"]'); ?>

            <?php } elseif (pll_current_language() == 'en'){ ?>

              <?php echo do_shortcode('[contact-form-7 id="204" title="Форма записи eng"]'); ?>

            <?php } else{ ?>

              <?php echo do_shortcode('[contact-form-7 id="9" title="Форма записи rus"]'); ?>
            <?php } ?>
          </div>
          <div class="registration-inner__column">
            <div class="registration-inner__title">
              <?=pll__('ждем вас')?>
            </div>
            <div class="registration-inner__fields">
              <div class="field-group">

              </div>
              <div class="form-additional">
                <svg class="icon icon-pin">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-pin"></use>
                </svg>
                <div class="form-additional__title"><?=pll__('адрес')?></div>
                <span><? the_field("adres", "option") ?></span>
              </div>
              <div class="form-additional">
                <svg class="icon icon-mail">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-mail"></use>
                </svg>
                <div class="form-additional__title">e-mail</div>
                <span><a href="mailto:<? the_field("email", "option") ?>"><? the_field("email", "option") ?></a></span>
              </div>
              <div class="form-additional">
                <svg class="icon icon-telephone">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-telephone"></use>
                </svg>
                <div class="form-additional__title"><?=pll__('телефон')?></div>
                <span><a href="tel:+38<?= preg_replace('![^0-9+]+!', '', get_field("telefon", "option")) ?>"> <? the_field("telefon", "option") ?></a></span>
              </div>
              <div class="form-additional">
                <svg class="icon icon-clock">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-clock"></use>
                </svg>
                <div class="form-additional__title">график работы</div>
                <span><? the_field("grafik_raboty", "option") ?></span>
              </div>
              <div class="form-additional">
                <svg class="icon icon-info">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-info"></use>
                </svg>
                <div class="form-additional__title"><?=pll__('примечание')?></div>
                <span><?= get_field("primechanie", "option") ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>