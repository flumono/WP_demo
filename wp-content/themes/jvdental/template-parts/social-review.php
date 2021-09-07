<section class="reviews-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                        <?= pll__('отзывы наших пациентов') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="reviews-wrapper">
                    <div class="review__border_top">
                        <div class="review__border_top-inner animate__animated wow animate__fadeInLeft"></div>
                    </div>
                    <div class="g-review">
                        <div class="g-review__title">
                            google
                        </div>
                        <div class="g-review__item">
                            <div class="review__border_l">
                                <div class="review__border_l-inner animate__animated wow animate__fadeInLeft"></div>
                            </div>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
                        </div>
                    </div>
                    <div class="f-review">
                        <div class="f-review__title">
                            facebook
                        </div>
                        <div class="f-review__item">
                            <div class="review__border_r">
                                <div class="review__border_r-inner animate__animated wow animate__fadeInRight"></div>
                            </div>
                            <?php dynamic_sidebar( 'sidebar-2' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>