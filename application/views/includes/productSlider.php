<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!empty($data)) : ?>
    <div class="products-area py-3 py-lg-4">
        <div class="container-fluid">
            <div class="section-title">
                <h2 class="text-center text-dark-green mb-5"><?= $title ?></h2>
            </div>
            <div class="products-slider owl-theme owl-carousel">
                <?php foreach ($data as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="products-item h-100">
                            <div class="top">
                                <?php if ($value->isDiscount && (int)$value->discount > 0) : ?>
                                    <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>" class="product-type two">%<?= (int)$value->discount ?></a>
                                <?php endif ?>
                                <a class="wishlist addToWishlist" data-product-id="<?= $value->id ?>" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>">
                                    <i class="bx bx-heart <?= checkWishlist($userWishlists, $value->id) ?>"></i>
                                </a>
                                <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>">
                                    <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                                </a>
                                <div class="inner">
                                    <h3>
                                        <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
                                    </h3>
                                    <span>
                                        <?php $i = 1 ?>
                                        <?php $count = count(explode(",", $value->category_ids)) ?>
                                        <?php foreach (explode(",", $value->category_titles) as $k => $v) : ?>
                                            <?php $seo_url = explode(",", $value->category_seos)[$k]; ?>
                                            <?php if ($i < $count) : ?>
                                                <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>,
                                            <?php else : ?>
                                                <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>
                                            <?php endif ?>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                        <span class="d-block">
                                            <?php if ($value->isDiscount && (int)$value->discount > 0) : ?>
                                                <del class="text-dark me-1"><?= $formatter->formatCurrency((float)$value->price, $currency) ?></del>
                                                <span class="fw-bold text-danger"><?= $formatter->formatCurrency((((float)$value->price) - (((float)$value->price * (float)$value->discount) / 100)), $currency) ?></span>
                                            <?php else : ?>
                                                <span class="fw-bold text-dark"><?= $formatter->formatCurrency((float)$value->price, $currency) ?></span>
                                            <?php endif ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif ?>