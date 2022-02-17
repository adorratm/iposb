<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="modal-header">
    <h2><?= lang("wishlist") ?> </h2>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= $settings->company_name ?>"></button>
</div>
<div class="modal-body">
    <div class="cart-table">
        <div class="table">
            <?php if (!empty($userWishlists)) : ?>
                <?php foreach ($userWishlists as $items) : ?>
                    <?php
                    /**
                     * Cart & Wishlist Products
                     */
                    $wheres["p.isActive"] = 1;
                    $wheres["pi.isCover"] = 1;
                    $wheres["p.id"] = $items;
                    $wheres["p.lang"] = $lang;
                    $joins = ["products_w_categories pwc" => ["p.id = pwc.product_id", "left"], "product_variation_groups pvg" => ["p.id = pvg.product_id", "left"], "product_images pi" => ["pi.product_id = p.id", "left"]];
                    $select = "p.id,p.title,p.url,pi.url img_url,IFNULL(pvg.price,p.price) price,IFNULL(pvg.discount,p.discount) discount,p.vat vat,p.vatRate vatRate,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isActive,p.isDiscount isDiscount,p.sharedAt,IFNULL(pvg.price,p.price) AS newPrice";
                    $distinct = null;
                    $groupBy = ["pwc.product_id"];
                    $product = $this->general_model->get("products p", $select, $wheres, $joins, [], [], $distinct, $groupBy);
                    ?>
                    <?php if (!empty($product)) : ?>
                        <div class="d-flex">
                            <div class="flex-shrink-1 my-auto py-auto text-center justify-content-center">
                                <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= $product->title ?>">
                                    <picture>
                                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $product->img_url) ?>" alt="<?= $product->title ?>" class="lazyload img-fluid" width="100" height="100" style="object-fit: scale-down;">
                                    </picture>
                                </a>
                            </div>
                            <div class="flex-grow-1 my-auto py-auto text-center justify-content-center">
                                <a class="offcanvas-cart-item-link text-dark-green fs-6 fw-bold" rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= $product->title ?>"><?= $product->title ?></a>
                            </div>
                            <div class="flex-shrink-1 my-auto py-auto text-center justify-content-center">
                                <a class="close offcanvas-cart-item-delete text-dark-green removeWishlistItem" data-id="<?= $items ?>" title="<?= $product->title ?>">
                                    <i class="bx bx-x"></i>
                                </a>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</div>
<div class="modal-footer">
    <div class="d-flex flex-wrap justify-content-end text-end">
        <a rel="dofollow" class="common-btn btn btn-sm px-2 me-1 bg-dark-green" href="<?= base_url(lang("routes_wishlist")) ?>" title="<?= lang("wishlist") ?>"><i class="bx bx-heart"></i> <?= lang("wishlist") ?></a>
        <a rel="dofollow" class="common-btn btn btn-sm px-2 emptyWishlist" href="<?= base_url(lang("routes_wishlist")) ?>" title="<?= lang("emptyWishlist") ?>"><i class="bx bx-trash"></i> <?= lang("emptyWishlist") ?></a>
    </div>
</div>