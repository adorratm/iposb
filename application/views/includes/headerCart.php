<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $vat = 0 ?>
<?php $totalVat = 0 ?>
<?php $mainQuantity = 0 ?>
<div class="modal-header">
    <h2><?= lang("myCart") ?></h2>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= $settings->company_name ?>"></button>
</div>
<div class="modal-body">
    <div class="cart-table">
        <div class="table">
            <?php foreach ($this->cart->contents() as $items) : ?>
                <?php
                /**
                 * Cart & Wishlist Products
                 */
                $wheres["p.isActive"] = 1;
                $wheres["pi.isCover"] = 1;
                $wheres["p.id"] = $items["id"];
                $wheres["p.lang"] = $lang;
                if (!empty($items["options"]) && !empty($items["options"]["pvgId"])) :
                    $wheres["pvg.id"] = $items["options"]["pvgId"];
                else :
                    if (array_key_exists("pvg.id", $wheres)) :
                        unset($wheres["pvg.id"]);
                    endif;
                endif;
                $joins = ["products_w_categories pwc" => ["p.id = pwc.product_id", "left"], "product_variation_groups pvg" => ["p.id = pvg.product_id", "left"], "product_images pi" => ["pi.product_id = p.id", "left"]];
                $select = "p.id,p.title,p.url,pi.url img_url,IFNULL(pvg.price,p.price) price,IFNULL(pvg.discount,p.discount) discount,p.vat vat,p.vatRate vatRate,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isActive,p.isDiscount isDiscount,p.sharedAt,IFNULL(pvg.price,p.price) AS newPrice,CAST(IFNULL(pvg.price,p.price) AS FLOAT) - (CAST(IFNULL(pvg.price,p.price) AS FLOAT)*CAST(IFNULL(pvg.discount,p.discount) AS FLOAT) / 100) AS discountedPrice";
                $distinct = null;
                $groupBy = ["pwc.product_id"];
                $product = $this->general_model->get("products p", $select, $wheres, $joins, [], [], $distinct, $groupBy);
                if (!empty($items["options"]["pvgId"])) :
                    $product_variation_group = $this->general_model->get("product_variation_groups", null, ["isActive" => 1, "id" => $items["options"]["pvgId"], "lang" => $lang]);
                    $product_variation_group_in_group = explode(",", $product_variation_group->category_id);
                    $product_variation_in_group = explode(",", $product_variation_group->variation_id);
                    $product_variations = [];
                    $product_variation_categories = [];
                    if (!empty($product_variation_in_group)) :
                        foreach ($product_variation_in_group as $key => $value) :
                            $product_variation = $this->general_model->get("product_variations", null, ["isActive" => 1, "id" => $value, "lang" => $lang]);
                            $product_variation_group = $this->general_model->get("product_variation_categories", null, ["isActive" => 1, "id" => $product_variation_group_in_group[$key], "lang" => $lang]);
                            array_push($product_variation_categories, $product_variation_group->title);
                            array_push($product_variations, $product_variation->title);
                        endforeach;
                    endif;
                endif;
                ?>
                <?php if (!empty($product)) : ?>
                    <?php ((bool)$product->vat ? $vat =  ((float)$items['price'] * (float)$items["qty"]) - ((float)$items["qty"] * (float)$product->discountedPrice) : 0) ?>
                    <?php ($product->vat ? $totalVat +=  ((float)$items['price'] * (float)$items["qty"]) - ((float)$items["qty"] * (float)$product->discountedPrice) : 0) ?>
                    <div class="d-flex">
                        <div class="flex-shrink-1 my-auto py-auto text-center justify-content-center">
                            <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= stripslashes($items["name"]) ?>">
                                <picture>
                                    <img width="1920" height="1280" loading="lazy" src="<?= get_picture("products_v", $product->img_url) ?>" data-src="<?= get_picture("products_v", $product->img_url) ?>" alt="<?= $items['name']; ?>" class="img-fluid lazyload" width="100" height="100" style="object-fit: scale-down;">
                                </picture>
                            </a>
                        </div>
                        <div class="flex-grow-1 my-auto py-auto text-center justify-content-center">
                            <a class="text-dark-green fs-6 fw-bold" rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= stripslashes($items["name"]) ?>"><?= stripslashes($items["name"]) ?>
                                <?php if (!empty($items["options"]["pvgId"])) : ?>
                                    <?php if (!empty($product_variation_categories) && !empty($product_variations)) : ?>
                                        <?php $count = count($product_variation_categories) ?>
                                        <?php $i = 1; ?>
                                        (
                                        <?php foreach ($product_variation_categories as $key => $value) : ?>
                                            <?php if ($i < $count) : ?>
                                                <?= $value ?> : <?= $product_variations[$key] ?>,
                                            <?php else : ?>
                                                <?= $value ?> : <?= $product_variations[$key] ?>
                                            <?php endif ?>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                        )
                                    <?php endif ?>
                                <?php endif ?>
                            </a>
                            <span class="price rate"><?= $items['qty'] ?> x <?= $symbol . $this->cart->format_number((empty($items["options"]["mainQuantity"]) || (bool)$items["options"]["mainQuantity"] == FALSE ? $items["price"] - $product->discountedPrice : $items['price'])); ?> <?= ((bool)$product->vat ? ("+" . $symbol . $this->cart->format_number($vat) . " (KDV)") : null) ?> <span>= <?= $symbol . $this->cart->format_number((empty($items["options"]["mainQuantity"]) || (bool)$items["options"]["mainQuantity"] == FALSE ? $items["subtotal"] - $product->discountedPrice * $items["qty"] : $items['subtotal'])); ?> </span></span>
                        </div>
                        <div class="flex-shrink-1 my-auto py-auto text-center justify-content-center">
                            <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" class="removeItem text-dark-green product-cancel" data-rowid="<?= $items['rowid'] ?>" title="<?= stripslashes($items["name"]) ?>"><i class="bx bx-x"></i></a>
                        </div>
                    </div>
                    <?php if ((empty($items["options"]["mainQuantity"]) || (bool)$items["options"]["mainQuantity"] == FALSE)) : ?>
                        <?php $mainQuantity += $product->discountedPrice * $items["qty"] ?>
                    <?php endif; ?>
                    <?php $vat = 0 ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
        <?php
        $totalPrice = 0;
        $subTotalPrice = 0;

        $totalPrice = (float)$this->cart->total();
        $subTotalPrice = (float)$this->cart->total() - (float)$totalVat;
        /**
         * Calculate Shipping
         */
        $shipping = ($totalPrice >= (float)$settings->shippingMinPrice ? 0 : (float)$settings->shippingPrice);
        if ($totalPrice == 0) :
            $shipping = 0;
        endif;
        $totalPrice += (float)$shipping;
        if ((empty($items["options"]["mainQuantity"]) || (bool)$items["options"]["mainQuantity"] == FALSE)) :
            $subTotalPrice -= $mainQuantity;
            $totalPrice -= $mainQuantity;
        endif;
        ?>
        <div class="total-amount">
            <h3><?= lang("subTotal") ?>: <span><?= $symbol . $this->cart->format_number($subTotalPrice); ?></span></h3>
        </div>
        <hr>
        <?php if ($totalVat > 0) : ?>
            <div class="total-amount">
                <h3><?= lang("vat") ?>: <span><?= $symbol . $this->cart->format_number($totalVat); ?></span></h3>
            </div>
            <hr>
        <?php endif ?>
        <?php if ($shipping > 0) : ?>
            <div class="total-amount">
                <h3><?= lang("shipping") ?>: <span><?= $symbol . $this->cart->format_number($shipping); ?></span></h3>
            </div>
            <hr>
        <?php endif ?>
        <div class="total-amount">
            <h3><?= lang("total") ?>: <span><?= $symbol . $this->cart->format_number($totalPrice); ?></span></h3>
        </div>
        <hr>
    </div>
</div>
<div class="modal-footer">
    <div class="d-flex flex-wrap justify-content-end text-end">
        <a rel="dofollow" class="common-btn btn btn-sm px-2 bg-dark-green me-1" href="<?= base_url(lang("routes_cart")) ?>" title="<?= lang("cart") ?>"><i class="bx bx-cart"></i> <?= lang("cart") ?></a>
        <a rel="dofollow" class="common-btn btn btn-sm px-2 emptyCart" href="<?= base_url(lang("routes_cart")) ?>" title="<?= lang("emptyCart") ?>"><i class="bx bx-trash"></i> <?= lang("emptyCart") ?></a>
    </div>
</div>