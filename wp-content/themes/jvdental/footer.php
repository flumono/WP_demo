<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jvdental
 */

?>
<footer class="footer">
  <div class="container">
    <div class="row flex-order">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-col">
          <div class="footer-logo">
            <div class="logo">
              <a href="/">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" class="logo">
              </a>
            </div>
          </div>
          <div class="copywriting">
            © 2018-<?php echo date('Y'); ?>, <? the_field("kopirajting", "option") ?><br>
          </div>
          <div class="dev-link mb-n">
            <?php if (pll_current_language() == 'uk') { ?>
              <a href="https://lungor.com.ua/" target="_blank">Створення та розкрутка сайту</a>
            <?php } else { ?>
              <a href="https://lungor.com.ua/" target="_blank">Создание и раскрутка сайта</a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-col">
          <div class="footer-col__head">
            <?=pll__('ждем вас')?>
          </div>
          <div class="footer-col__item">
            <svg class="icon icon-pin">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-pin"></use>
            </svg>
            <span><? the_field("adres", "option") ?></span>
          </div>
          <div class="footer-col__item">
            <svg class="icon icon-mail">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-mail"></use>
            </svg>
            <span><a href="mailto:<? the_field("email", "option") ?>"><? the_field("email", "option") ?></a></span>
          </div>
          <div class="footer-col__item">
            <svg class="icon icon-telephone">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-telephone"></use>
            </svg>
            <span>
            <a href="tel:<?= preg_replace('![^0-9+]+!', '', get_field("telefon", "option")) ?>"> <? the_field("telefon", "option") ?></a></span>
          </div>
          <div class="footer-col__item">
            <svg class="icon icon-clock">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-clock"></use>
            </svg>
            <span><? the_field("grafik_raboty", "option") ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-col footer-col d-flex flex-column align-items-lg-center align-items-md-center">
          <div class="footer-col__item">
            <div class="social-links">
              <a href="<? the_field("facebook", "option") ?>">
                <svg class="icon icon-facebook">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-facebook"></use>
                </svg>
              </a>
              <a href="<? the_field("instagram", "option") ?>">
                <svg class="icon icon-instagram">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-instagram"></use>
                </svg>
              </a>
              <a href="<? the_field("youtube", "option") ?>">
                <svg class="icon icon-youtube">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-youtube"></use>
                </svg>
              </a>
            </div>
          </div>
          <div class="footer-col__item">
            <div class="footer-menu">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'footermenu',
                'menu_id' => 'footer-menu',
                'menu_class' => 'menu',
                'menu' => '',
                'container' => 'ul',
                'container_class' => 'collapse collapsing navbar-collapse',
//                    'container_id'    => 'navbar-menu',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3,
//                                'walker' => new My_Walker_Nav_Menu(),
              ));
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-col footer-col d-flex flex-column align-items-lg-center align-items-md-center">
          <div class="footer-col">
            <div class="copywriting-sm">
              © 2018-<?php echo date('Y'); ?>, <? the_field("kopirajting", "option") ?><br>
              <div class="dev-link">
                <?php if (pll_current_language() == 'uk') { ?>
                  <a href="https://lungor.com.ua/" target="_blank">Створення та розкрутка сайту</a>
                <?php } else { ?>
                  <a href="https://lungor.com.ua/" target="_blank">Создание и раскрутка сайта</a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMdbkFk5JKCRU8QdRjtq502NUCrD3-j2A&callback=initMap"></script>
<script src="<?php bloginfo('template_url'); ?>/js/map.js"></script>
<div class="modal fade callback" id="modal-callback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                     <svg class="icon icon-close">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
                            </svg>
                    </span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form-area">
          <div class="contact-form-area__column">
            <div class="contact-form-area__title">
             <?=pll__('Есть вопросы?')?>
            </div>
            <div class="contact-form-area__sub-title">
              <?=pll__('Мы вам перезвоним!')?>
            </div>
            <?php if (pll_current_language() == 'uk') { ?>
              <?php echo do_shortcode('[contact-form-7 id="726" title="Callback форма ukr"]'); ?>
            <?php } elseif (pll_current_language() == 'en'){ ?>
              <?php echo do_shortcode('[contact-form-7 id="727" title="Callback форма eng"]'); ?>
            <?php } else{ ?>
              <?php echo do_shortcode('[contact-form-7 id="272" title="Callback форма rus"]'); ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade want-to" id="modal-want-to" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                     <svg class="icon icon-close">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="<?php bloginfo('template_url'); ?>/svg/jvdentaladds.svg#icon-close"></use>
                            </svg>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-area">
                    <div class="contact-form-area__column">
                        <div class="contact-form-area__title">
                            <?=pll__('Запись на консультацию')?>
                        </div>
                        <div class="contact-form-area__sub-title">
                            <?=pll__('Мы перезвоним, чтобы
                            согласовать удобное время')?>
                        </div>
            <?php if (pll_current_language() == 'uk') { ?>
              <?php echo do_shortcode('[contact-form-7 id="726" title="Callback форма ukr"]'); ?>
            <?php } elseif (pll_current_language() == 'en'){ ?>
              <?php echo do_shortcode('[contact-form-7 id="727" title="Callback форма eng"]'); ?>
            <?php } else{ ?>
              <?php echo do_shortcode('[contact-form-7 id="272" title="Callback форма rus"]'); ?>
            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>