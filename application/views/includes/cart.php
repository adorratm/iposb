<!--====== Cart Start ======-->
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $vat = 0 ?>
<?php $totalVat = 0 ?>
<?php $coupon = null ?>
<?php $mainQuantity = 0 ?>
<?php if (!empty($_SESSION["couponName"])) : ?>
    <?php $coupon = $this->general_model->get("coupons", null, ["isActive" => 1], [], ["title" => @$_SESSION["couponName"]]); ?>
<?php endif ?>

<div class="checkout-area pt-30 pb-30">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center text-green"><?= lang("cart") ?></h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cart-table table-responsive">
                    <table class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="delete product_remove text-center align-middle"><?= lang("delete") ?></th>
                                <th class="product_thumb text-center align-middle"><?= lang("image") ?></th>
                                <th class="product product_name text-center align-middle"><?= lang("productName") ?></th>
                                <th class="price product-price text-center align-middle"><?= lang("price") ?></th>
                                <th class="quantity text-center align-middle"><?= lang("quantity") ?></th>
                                <th class="Total product_total text-center align-middle"><?= lang("subTotal") ?></th>
                            </tr>
                        </thead>
                        <tbody>
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
                                $select = "p.id,pvg.id pvgId,p.title,p.url,pi.url img_url,IFNULL(pvg.price,p.price) price,IFNULL(pvg.discount,p.discount) discount,p.vat vat,p.vatRate vatRate,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isActive,p.isDiscount isDiscount,p.sharedAt,IFNULL(pvg.price,p.price) AS newPrice,CAST(IFNULL(pvg.price,p.price) AS FLOAT) - (CAST(IFNULL(pvg.price,p.price) AS FLOAT)*CAST(IFNULL(pvg.discount,p.discount) AS FLOAT) / 100) AS discountedPrice";
                                $distinct = true;
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
                                    <?php ((bool)$product->vat ? $vat =  (((float)$items['price'] * (float)$items["qty"]) - ((float)$items["qty"] * (float)$product->newPrice)) : 0) ?>
                                    <?php ((bool)$product->vat ? $totalVat +=  (((float)$items['price'] * (float)$items["qty"]) - ((float)$items["qty"] * (float)$product->newPrice)) : 0) ?>
                                    <tr>
                                        <td class="delete text-center align-middle">
                                            <a rel="dofollow" href="javascript:void(0)" class="removeItem text-dark-green product-delete" data-rowid="<?= $items['rowid'] ?>" title="<?= stripslashes($items["name"]) ?>"><i class="bx bx-trash"></i></a>
                                        </td>
                                        <td class="product text-center align-middle">
                                            <div class="cart-product">
                                                <div class="product-image">
                                                    <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= stripslashes($items["name"]) ?>">
                                                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $product->img_url) ?>" alt="<?= stripslashes($items['name']); ?>" class="img-fluid lazyload" style="width: 150px;" width="150" height="150">
                                                    </a>
                                                </div>

                                            </div>
                                        </td>
                                        <td class="product text-center align-middle">
                                            <div class="product-content">
                                                <h5 class="title">
                                                    <a class="text-dark-green" rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}") ?>" title="<?= stripslashes($items["name"]) ?>"><?= stripslashes($items["name"]) ?>
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
                                                </h5>

                                            </div>
                                        </td>
                                        <td class="price text-center align-middle">
                                            <p class="cart-price price"><?= $symbol . $this->cart->format_number((empty($items["options"]["mainQuantity"]) || $items["options"]["mainQuantity"] == FALSE ? $items["price"] - $product->discountedPrice : $items['price'])); ?></p>
                                        </td>
                                        <td class="text-center align-middle" style="width: 120px;">
                                            <ul class="number">
                                                <li>
                                                    <span class="minus">-</span>
                                                    <input id="quantity" class="cart-plus-minus updateItem quantity" name="qty" min="1" data-rowid="<?= $items['rowid'] ?>" value="<?= $items["qty"] ?>" type="text" />
                                                    <span class="plus">+</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="Total text-center align-middle">
                                            <p class="cart-price price"><?= $symbol . $this->cart->format_number((empty($items["options"]["mainQuantity"]) || $items["options"]["mainQuantity"] == FALSE ? $items["subtotal"] - $product->discountedPrice * $items["qty"] : $items['subtotal'])); ?></p>
                                        </td>
                                    </tr>
                                    <!-- /.single product  -->
                                    <?php if ((empty($items["options"]["mainQuantity"]) || $items["options"]["mainQuantity"] == FALSE)) : ?>
                                        <?php $mainQuantity += $product->discountedPrice * $items["qty"] ?>
                                    <?php endif; ?>
                                    <?php $vat = 0 ?>
                                    <?php $product_variation_categories = [] ?>
                                    <?php $product_variations = [] ?>
                                <?php endif ?>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6"><a rel="dofollow" href="javascript:void(0)" class="emptyCart common-btn btn w-100" title="<?= lang("emptyCart") ?>"><?= lang("emptyCart") ?></a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-order">
                    <h3 class="mb-1"><?= lang("coupon") ?></h3>
                    <p><?= lang("couponDesc") ?></p>
                    <?php if (!empty($_SESSION["couponName"])) : ?>
                        <a class="btn common-btn text-center" href="<?= base_url(lang("routes_cart") . "?removecoupon=true") ?>" title="<?= lang("couponCodeAppliedRemove") ?>"><?= $_SESSION["couponName"] ?> <?= lang("couponCodeAppliedRemove") ?></a>
                    <?php else : ?>
                        <div class="single-form">
                            <input class="mb-2 form-control form-control-lg rounded-0" placeholder="<?= lang("couponCode") ?>" name="coupon" type="text">
                        </div>
                        <div class="cart-form-btn text-center">
                            <a rel="dofllow" type="button" href="javascript:void(0)" role="button" class="coupon-code common-btn btn applyCoupon w-100" title="<?= lang("applyCoupon") ?>"><?= lang("applyCoupon") ?></a>
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-xl-8 position-relative mt-30">
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
                $subTotalPrice -= $mainQuantity;
                $totalPrice -= $mainQuantity;
                ?>
                <div class="checkout-order">
                    <h3><?= lang("cartTotals") ?>:</h3>
                    <div class="inner">
                        <h4><?= lang("subTotal") ?>:
                            <span>
                                <?= $symbol . $this->cart->format_number($subTotalPrice); ?>
                            </span>
                        </h4>
                    </div>
                    <hr>
                    <?php if ($totalVat > 0) : ?>
                        <div class="inner">
                            <h4><?= lang("vat") ?>:
                                <span>
                                    <?= $symbol . $this->cart->format_number($totalVat); ?>
                                </span>
                            </h4>
                        </div>
                        <hr>
                    <?php endif ?>
                    <?php if ($shipping > 0) : ?>
                        <div class="inner">
                            <h4><?= lang("shipping") ?>:
                                <span>
                                    <?= $symbol . $this->cart->format_number($shipping); ?>
                                </span>
                            </h4>
                        </div>
                        <hr>
                    <?php endif ?>
                    <div class="inner">
                        <h4><?= lang("total") ?>:
                            <span>
                                <?php
                                if (!empty($coupon)) :
                                    $totalPrice = ($totalPrice - ((float)$totalPrice * (float)$coupon->discount) / 100);
                                endif;
                                ?>
                                <?php if (!empty($coupon)) : ?>
                                    <small class="text-dark-green">(<?= $coupon->title ?> = <?= $coupon->discount ?>%)</small>
                                <?php endif ?>
                                <?= $symbol . $this->cart->format_number($totalPrice); ?>

                            </span>
                        </h4>
                        <?php $checkoutData = [
                            "cart" => $this->cart->contents(),
                            "subTotal" => (float)$subTotalPrice,
                            "vat" => (float)$totalVat,
                            "shipping" => (float)$shipping,
                            "total" => (float)$totalPrice,
                            "symbol" => $symbol
                        ];
                        if (!empty($coupon)) :
                            $checkoutData["couponName"] = $coupon->title;
                            $checkoutData["couponDiscount"] = $coupon->discount;
                        endif;
                        $this->session->set_userdata("checkout", $checkoutData);
                        ?>
                    </div>
                    <hr>
                    <div class="inner d-flex flex-wrap justify-content-end">
                        <div class="flex-grow-1 mx-1 ms-sm-0 mb-3">
                            <a class="btn common-btn bg-dark-green w-100" rel="dofollow" href="<?= base_url(lang("routes_products")) ?>" title="<?= lang("continueShopping") ?>"><?= lang("continueShopping") ?></a>
                        </div>
                        <div class="flex-grow-1 mx-1 me-sm-0 mb-3">
                            <a class="btn common-btn w-100" rel="dofollow" href="<?= base_url(lang("routes_choose-address")) ?>" title="<?= lang("choosingAddress") ?>"><?= lang("choosingAddress") ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        $(document).on('click', '.minus', function() {
            let $input = $(this).parent().find('input');
            let count = parseInt($input.val()) - 1;
            count = count < 1 ? 0 : count;
            if ($input.attr("min") < parseInt($input.val())) {
                $input.val(count);
                $input.change();
            }
        });
        $(document).on('click', '.plus', function() {
            let $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
        });
    });
</script>


<!--====== Cart Ends ======-->