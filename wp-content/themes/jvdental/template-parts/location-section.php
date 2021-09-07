<section class="location-section">
  <div class="contact-form-area">
    <div class="contact-form-area__column">
      <div class="contact-form-area__title">
      <?=pll__('Есть вопросы?')?>
      </div>
      <div class="contact-form-area__sub-title">
        <?=pll__('Мы вам перезвоним!')?>
      </div>
      <?php if (pll_current_language() == 'uk') { ?>

        <?php echo do_shortcode('[contact-form-7 id="203" title="Форма записи ukr"]'); ?>

      <?php } elseif (pll_current_language() == 'en'){ ?>

        <?php echo do_shortcode('[contact-form-7 id="204" title="Форма записи eng"]'); ?>

      <?php } else{ ?>

        <?php echo do_shortcode('[contact-form-7 id="272" title="Callback форма rus"]'); ?>
      <?php } ?>
    </div>
  </div>
  <div id="map"></div>
</section>