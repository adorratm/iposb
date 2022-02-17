<div class="account-table table-responsive">
    <h2 class="text-center"><?= lang("wishlist") ?></h2>
    <table class="table table-bordered table-striped table-hover table-light">
        <!-- Start Cart Table Head -->
        <thead>
            <tr>
                <th class="product_remove align-middle text-center"><?= lang("delete") ?></th>
                <th class="product_thumb align-middle text-center"><?= lang("image") ?></th>
                <th class="product_name align-middle text-center"><?= lang("productName") ?></th>
            </tr>
        </thead> <!-- End Cart Table Head -->
        <tbody>
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
                    <!-- Start Cart Single Item-->
                    <tr>
                        <td class="product_remove align-middle text-center"><a title="<?=$product->title?>" href="javascript:void(0)" class="common-btn d-inline removeWishlistItem" data-id="<?= $items ?>"><i class="bx bx-trash"></i></a>
                        </td>
                        <td class="product_thumb align-middle text-center">
                            <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= $product->title ?>">
                                <picture>
                                    <img loading="lazy" data-src="<?= get_picture("products_v", $product->img_url) ?>" alt="<?= $product->title ?>" class="offcanvas-cart-image img-fluid lazyload" style="width:150px" width="150" height="150">
                                </picture>
                            </a>
                        </td>
                        <td class="product_name align-middle text-center"><a class="text-dark-green" rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= $product->title ?>"><?= $product->title ?></a></td>
                    </tr>
                    <!-- End Cart Single Item-->
                <?php endif ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a rel="dofollow" href="javascript:void(0)" title="<?=lang("emptyWishlist")?>" class="btn w-100 common-btn emptyWishlist"><?= lang("emptyWishlist") ?></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>