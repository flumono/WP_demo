                        <meta itemprop="price" content="<?php the_field('stoimost'); ?>">
                        <meta itemprop="priceCurrency" content="UAH">
                    <div class="rating tec-wpd-rating-stars" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                        <meta itemprop="name" content="<?= get_field("nazvanie_uslugi") ?>">
                        <meta itemprop="ratingValue" content="<?php the_field('rejting'); ?>">
                        <meta itemprop="reviewCount" content="<?= get_field("obshhee_kolichestvo") ?>">
                    </div>