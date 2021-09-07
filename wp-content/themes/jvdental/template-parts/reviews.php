<section id="reviews" class="section-padding">
    <div itemscope itemtype="http://schema.org/Product">
        <meta itemprop="name" content="<?= get_field("nazvanie_uslugi") ?>"/>
        <div class="">
            <div class="text-center">
                <div class="section-title">
                    <h2 class="h3"><?=pll__('Отзывы')?></h2>
                    <span class="line"></span>
                    <?php get_template_part('template-parts/aggregaterating'); ?>
                </div>
            </div>

          <?php comments_template() ?>
        </div>
</section>

