<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", $product->title) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url(lang("routes_products")); ?>" rel="dofollow" title="<?= strto("lower|upper", lang("products")) ?>"><?= strto("lower|upper", lang("products")) ?></a>
                        </li>
                        <?php if (!empty($product->category_ids)) : ?>
                            <li>
                                <?php $i = 1 ?>
                                <?php $count = count(explode(",", $product->category_ids)) ?>
                                <?php foreach (explode(",", $product->category_titles) as $k => $v) : ?>
                                    <?php $seo_url = explode(",", $product->category_seos)[$k]; ?>
                                    <?php if ($i < $count) : ?>
                                        <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= strto("lower|upper", $v) ?>"><?= strto("lower|upper", $v) ?></a>,
                                    <?php else : ?>
                                        <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= strto("lower|upper", $v) ?>"><?= strto("lower|upper", $v) ?></a>
                                    <?php endif ?>
                                    <?php $i++ ?>
                                <?php endforeach ?>
                            </li>
                        <?php endif ?>
                        <li>
                            <span><?= strto("lower|upper", $product->title) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_detail_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("products")) ?>">
    </div>
</div>


<div class="product-details-area products-area py-3 py-lg-4 pt-lg-5">
    <div class="container-fluid">
        <div class="top">
            <div class="row align-items-top">
                <div class="col-lg-8">
                    <div class="outer">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-dark" data-bs-ride="carousel">
                            <div class="row">
                                <div class="col-3 col-sm-3 col-lg-12 col-xl-12 col-xxl-2 order-1 order-lg-2 order-xxl-1">
                                    <div class="carousel-indicators owl-thumbs position-relative d-block d-md-block d-lg-flex d-xxl-block mx-3 mx-xxl-0">
                                        <?php $i = 0 ?>
                                        <?php if (!empty($product_own_images)) : ?>
                                            <?php foreach ($product_own_images as $k => $v) : ?>
                                                <?php if ($v->product_id == $product->id) : ?>
                                                    <div data-bs-target="#carouselExampleCaptions" class="owl-thumb-item mx-1 mx-xxl-0 single-product-thumbb <?= ($i == 0 ? "active" : null) ?>" data-bs-touch="true" data-bs-slide-to="<?= $i ?>" data-variation-group-id="<?= $v->variation_group_id ?>" data-image="<?= get_picture("products_v", $v->url) ?>">
                                                        <div class="top-img">
                                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $v->url) ?>" alt="<?= $product->title ?>" class="lazyload rounded img-fluid">
                                                        </div>
                                                    </div>
                                                    <?php $i++ ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-9 col-sm-9 col-lg-12 col-xl-12 col-xxl-10 order-2 order-lg-1 order-xxl-2">
                                    <div class="carousel-inner">
                                        <?php $i = 0 ?>
                                        <?php if (!empty($product_own_images)) : ?>
                                            <?php foreach ($product_own_images as $k => $v) : ?>
                                                <?php if ($v->product_id == $product->id) : ?>
                                                    <div class="carousel-item item <?= $i == 0 ? "active" : null ?>" data-index="<?= $i ?>">
                                                        <a rel="dofollow" title="<?= $product->title ?>" href="<?= get_picture("products_v", $v->url) ?>" data-index="<?= $i ?>" class="d-block fancyboximg top-img product-simple-preview-image">
                                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("products_v", $v->url) ?>" alt="<?= $product->title ?>" data-zoom-image="<?= get_picture("products_v", $v->url) ?>" class="product-zoom rounded img-fluid product-simple-preview-image-zoom lazyload" data-variation-group-id="<?= $v->variation_group_id ?>">
                                                        </a>
                                                    </div>
                                                    <?php $i++ ?>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                        <button aria-label="<?= $settings->company_name ?>" class="carousel-control-prev btn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="nextWhenVisible">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button aria-label="<?= $settings->company_name ?>" class="carousel-control-next btn" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="nextWhenVisible">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center justify-content-center text-start-xl justify-content-xl-start">
                    <div class="top-content">
                        <h2><?= $product->title ?></h2>
                        <ul class="reviews">
                            <?php $i = 1 ?>
                            <?php $count = count(explode(",", $product->category_ids)) ?>
                            <?php foreach (explode(",", $product->category_titles) as $k => $v) : ?>
                                <?php $seo_url = explode(",", $product->category_seos)[$k]; ?>
                                <li class="d-inline-flex w-auto">
                                    <?php if ($i < $count) : ?>
                                        <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>,
                                    <?php else : ?>
                                        <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" title="<?= $v ?>"><?= $v ?></a>
                                    <?php endif ?>
                                </li>
                                <?php $i++ ?>
                            <?php endforeach ?>
                            <li class="priceWrapper">
                                <h3>
                                    <span class="price">
                                        <?php if ($product->isDiscount) : ?>
                                            <div class="badge discountBadge fs-6 bg-green mb-2" data-discount="<?= $product->discount ?>"><?= $product->discount ?>% <?= strto("lower|upper", lang("discount")) ?></div>
                                            <div>
                                                <del class="text-dark oldPrice me-1" data-newprice="<?= (float)$product->price ?>"><?= $formatter->formatCurrency((float)$product->price, $currency) ?></del>
                                                <span class="fw-bold fs-4 text-danger newPrice" data-newprice="<?= ((float)$product->price - ((float)$product->price * (float)$product->discount) / 100) ?>"><?= $formatter->formatCurrency(((float)$product->price - ((float)$product->price * (float)$product->discount) / 100), $currency) ?></span>
                                            </div>
                                        <?php else : ?>
                                            <span class="fw-bold fs-4 text-dark newPrice" data-newprice="<?= ((float)$product->price) ?>"><?= $formatter->formatCurrency((float)$product->price, $currency) ?></span>
                                        <?php endif ?>
                                    </span>
                                </h3>
                            </li>
                        </ul>
                        <p><?= $product->description ?></p>
                        <ul class="tag stockWrapper">
                            <li><?= lang("stockStatus") ?>:
                                <?php if ($product->stockStatus) : ?>
                                    <span class="stockCount"><?= $product->stock ?></span>
                                    <i class="bx bx-box"></i> - <?= lang("inStock") ?>
                                    <span class="product-stock-in"><i class="bx bx-check-circle text-green"></i></span>
                                <?php else : ?>
                                    <span class="text-danger"><i class="bx bx-times-circle"></i></span>
                                    <?= lang("outStock") ?>
                                <?php endif ?>
                            </li>
                        </ul>
                        <?php $variation_ids = [] ?>
                        <?php $category_ids = [] ?>
                        <?php $variation_id_w_stock = [] ?>
                        <?php if (!empty($productVariationGroups)) : ?>
                            <?php foreach ($productVariationGroups as $key => $value) : ?>
                                <?php if ($value->stock > 0 && $value->stockStatus) : ?>
                                    <?php if (!empty($value->category_id)) : ?>
                                        <?php foreach (explode(",", $value->category_id) as $kk => $vv) : ?>
                                            <?php if (!in_array($vv, $category_ids)) : ?>
                                                <?php array_push($category_ids, $vv) ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>

                                    <?php if (!empty($value->variation_id)) : ?>
                                        <?php foreach (explode(",", $value->variation_id) as $k => $v) : ?>
                                            <?php if (!in_array($v, $variation_ids)) : ?>
                                                <?php array_push($variation_ids, $v) ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                    <?php array_push($variation_id_w_stock, [$value->variation_id => $value->stock]) ?>
                                <?php endif ?>
                            <?php endforeach ?>
                        <?php endif ?>
                        <script>
                            let variationCategories = [];
                        </script>
                        <?php if (!empty($productVariationCategories)) : ?>
                            <?php foreach ($productVariationCategories as $key => $value) : ?>
                                <div class="color-checkboxes my-3">
                                    <script>
                                        variationCategories.push("<?= $value->title ?>");
                                    </script>
                                    <h4 class="my-auto py-auto"><?= $value->title ?>:</h4>
                                    <?php if (!empty($productVariations)) : ?>
                                        <?php $i = 0 ?>
                                        <?php foreach ($productVariations as $k => $v) : ?>
                                            <?php if ($v->category_id == $value->id && in_array($v->id, $variation_ids)) : ?>
                                                <div id="change">
                                                    <input <?= $i == 0 ? "checked" : null ?> id="<?= $v->id . "_" . $v->title ?>" name="<?= $value->title . "_" . $value->id ?>" type="radio" class="radio variant" data-variation-category-id="<?= $v->category_id ?>" data-variation-id="<?= $v->id ?>">
                                                    <label class="label white mt-2 mb-2" for="<?= $v->id . "_" . $v->title ?>"><?= $v->title ?></label>
                                                </div>
                                                <?php $i++ ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                        <script>
                            /**
                             * IsEmpty Function
                             */
                            function isEmpty(obj) {
                                if (typeof obj == "number") return false;
                                else if (typeof obj == "string") return obj.length === 0;
                                else if (Array.isArray(obj)) return obj.length === 0;
                                else if (typeof obj == "object")
                                    return obj == null || Object.keys(obj).length === 0;
                                else if (typeof obj == "boolean") return false;
                                else return !obj;
                            }
                            /**
                             * Array Compare
                             */
                            function arrayCompare(_arr1, _arr2) {
                                if (
                                    !Array.isArray(_arr1) ||
                                    !Array.isArray(_arr2) ||
                                    _arr1.length !== _arr2.length
                                ) {
                                    return false;
                                }
                                const arr1 = _arr1.concat().sort();
                                const arr2 = _arr2.concat().sort();

                                for (let i = 0; i < arr1.length; i++) {
                                    if (arr1[i] !== arr2[i]) {
                                        return false;
                                    }
                                }
                                return true;
                            }

                            Array.prototype.containsArray = function(val) {
                                var hash = {};
                                for (var i = 0; i < this.length; i++) {
                                    hash[this[i]] = i;
                                }
                                return hash.hasOwnProperty(val);
                            };

                            let combination_data = [];
                            let available_combinations = [];
                            <?php if (!empty($productVariationGroups)) : ?>
                                <?php foreach ($productVariationGroups as $key => $value) : ?>
                                    <?php $exploded_ids = array_map('intval', explode(",", $value->variation_id)) ?>
                                    available_combinations.push(<?= json_encode(["pvgId" => $value->id, "combination" => $exploded_ids, "price" => $value->price, "discount" => $value->discount, "stock" => $value->stock, "stockStatus" => $value->stockStatus, "symbol" => $symbol, "isActive" => $value->isActive]) ?>);
                                <?php endforeach ?>
                            <?php endif ?>
                            let checkedVariations = [];
                            let allCombinations = [];
                            let checkedInputs = [];

                            window.addEventListener('DOMContentLoaded', function() {
                                $(window).on("load", function() {
                                    $("input.variant").each(function() {
                                        let $this = $(this);
                                        if ($this.is(":checked")) {
                                            checkedInputs.push($this);
                                            checkedVariations.push($this.data("variation-id"))
                                        }
                                    });
                                    if (!isEmpty(checkedVariations)) {
                                        available_combinations.forEach(function(e, i) {
                                            allCombinations.push(e.combination);
                                            if (arrayCompare(e.combination, checkedVariations)) {
                                                if (parseFloat(e.stock) > 0 && Boolean(e.stockStatus) && Boolean(e.isActive)) {
                                                    $(".stockCount").text(e.stock);
                                                    $(".oldPrice").text(parseFloat(e.price).toFixed(2) + e.symbol);
                                                    if (!isEmpty(e.discount) && parseFloat(e.discount) > 0) {
                                                        $(".newPrice").text((parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)).toFixed(2) + e.symbol);
                                                        $(".newPrice").data("newprice", (parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)));
                                                        $(".installmentOptionsBtn").data("price", (parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)));
                                                        $(".newPrice").addClass("text-danger");
                                                        $(".discountBadge").text(e.discount + "% " + "<?= strto("lower|upper", lang("discount")) ?>");
                                                        $(".discountBadge").data("discount", e.discount);
                                                    } else {
                                                        $(".newPrice").text(parseFloat(e.price).toFixed(2) + e.symbol);
                                                        $(".newPrice").data("newPrice", parseFloat(e.price));
                                                        $(".installmentOptionsBtn").data("price", parseFloat(e.price).toFixed(2));
                                                    }
                                                    if (!isEmpty(e.discount) && parseFloat(e.discount) > 0 && $(".oldPrice").hasClass("d-none")) {
                                                        $(".oldPrice").removeClass("d-none");
                                                    }
                                                    $(".addToCart").data("pvgId", e.pvgId);
                                                    let zumbaId = 0;
                                                    let zumbaIdd = 0;
                                                    $(".single-product-thumbb").each(function(index, elem) {
                                                        let variationGroupIds = (!isEmpty($(this).data("variation-group-id")) ? $(this).data("variation-group-id").toString().split(",") : []);
                                                        for (let j = 0; j < variationGroupIds.length; j++) {
                                                            variationGroupIds[j] = +parseInt(variationGroupIds[j]);
                                                        };
                                                        if (!variationGroupIds.includes(parseInt(e.pvgId))) {
                                                            $(this).addClass("d-none");
                                                            $(this).removeClass("active");
                                                            $(".item[data-index='" + zumbaId + "']").addClass("d-none");
                                                            $(".item[data-index='" + zumbaId + "']").removeClass("carousel-item");
                                                            $(this).removeAttr("data-bs-slide-to");
                                                            $(this).removeAttr("data-bs-target");

                                                        } else {
                                                            $(this).removeClass("d-none");
                                                            $(".item[data-index='" + zumbaId + "']").removeClass("d-none");
                                                            $(".item[data-index='" + zumbaId + "']").addClass("carousel-item");
                                                            $(this).attr("data-bs-slide-to", zumbaIdd);
                                                            $(this).attr("data-bs-target", "#carouselExampleCaptions");
                                                            zumbaIdd++;
                                                        }
                                                        zumbaId++;
                                                    });
                                                    $(".single-product-thumbb:not(.d-none):first").addClass("active");
                                                    $(".item:not(.d-none):first").addClass("active");
                                                    $(".add-tocart-wrap").removeClass("d-none");
                                                    $(".add-tocart-wrap").addClass("d-flex");
                                                    $(".combinationAlert").addClass("d-none");
                                                    $(".stockWrapper").removeClass("d-none");
                                                    $(".priceWrapper").removeClass("d-none");
                                                }
                                            }
                                        });
                                        if (!allCombinations.containsArray(checkedVariations)) {
                                            if (checkedVariations.length === variationCategories.length) {
                                                $(".add-tocart-wrap").removeClass("d-flex");
                                                $(".add-tocart-wrap").addClass("d-none");
                                                $(".combinationAlert").removeClass("d-none");
                                                $(".stockWrapper").addClass("d-none");
                                                $(".priceWrapper").addClass("d-none");
                                            } else {
                                                $("input.variant").each(function() {
                                                    $(this).prop("readonly", false);
                                                });
                                            }
                                        } else {
                                            $(".add-tocart-wrap").removeClass("d-none");
                                            $(".add-tocart-wrap").addClass("d-flex");
                                            $(".combinationAlert").addClass("d-none");
                                            $(".stockWrapper").removeClass("d-none");
                                            $(".priceWrapper").removeClass("d-none");
                                        }
                                    }
                                    $(document).on("click", ".single-product-thumbb:not(.d-none)", function() {
                                        $(".single-product-thumbb").each(function() {
                                            $(this).removeClass("active");
                                        });
                                        $(this).addClass("active");
                                    });
                                });
                                $(document).on("click", ".variant", function(e) {
                                    $(this).prop("checked", true);
                                    $(this).prop("readonly", false);
                                });
                                $(document).on("change", ".variant", function(e) {
                                    e.preventDefault();
                                    e.stopImmediatePropagation();
                                    $('.carousel-inner .item').each(function(i) {
                                        $(this).removeClass("active");
                                    });
                                    checkedVariations = [];
                                    checkedInputs = [];
                                    $(this).prop("readonly", false);
                                    $(this).prop("checked", true);
                                    $("input.variant").each(function() {
                                        let $this = $(this);
                                        if ($this.is(":checked")) {
                                            checkedInputs.push($this);
                                            checkedVariations.push($this.data("variation-id"));
                                        }
                                    });
                                    if (!isEmpty(checkedVariations)) {
                                        if (allCombinations.containsArray(checkedVariations)) {
                                            available_combinations.forEach(function(e, i) {
                                                if (arrayCompare(e.combination, checkedVariations)) {
                                                    if (parseFloat(e.stock) > 0 && Boolean(e.stockStatus) && Boolean(e.isActive)) {
                                                        $(".stockCount").text(e.stock);
                                                        $(".oldPrice").text(parseFloat(e.price).toFixed(2) + e.symbol);
                                                        if (!isEmpty(e.discount) && parseFloat(e.discount) > 0) {
                                                            $(".newPrice").text((parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)).toFixed(2) + e.symbol);
                                                            $(".newPrice").data("newprice", (parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)));
                                                            $(".installmentOptionsBtn").data("price", (parseFloat(e.price) - ((parseFloat(e.price) * parseFloat(!isEmpty(e.discount) ? e.discount : 0)) / 100)));
                                                            $(".newPrice").addClass("text-danger");
                                                            $(".discountBadge").text(e.discount + "% " + "<?= strto("lower|upper", lang("discount")) ?>");
                                                            $(".discountBadge").data("discount", e.discount);
                                                        } else {
                                                            $(".newPrice").text(parseFloat(e.price).toFixed(2) + e.symbol);
                                                            $(".newPrice").data("newprice", parseFloat(e.price));
                                                            $(".installmentOptionsBtn").data("price", parseFloat(e.price).toFixed(2));
                                                        }
                                                        if (!isEmpty(e.discount) && parseFloat(e.discount) > 0 && $(".oldPrice").hasClass("d-none")) {
                                                            $(".oldPrice").removeClass("d-none");
                                                        }
                                                        $(".addToCart").data("pvgId", e.pvgId);
                                                        let zumbaId = 0;
                                                        let zumbaIdd = 0;
                                                        $(".single-product-thumbb").each(function(index, elem) {
                                                            let variationGroupIds = (!isEmpty($(this).data("variation-group-id")) ? $(this).data("variation-group-id").toString().split(",") : []);
                                                            for (let j = 0; j < variationGroupIds.length; j++) {
                                                                variationGroupIds[j] = +parseInt(variationGroupIds[j]);
                                                            }
                                                            if (!variationGroupIds.includes(parseInt(e.pvgId))) {
                                                                $(this).addClass("d-none");
                                                                $(this).removeClass("active");
                                                                $(".item[data-index='" + zumbaId + "']").addClass("d-none");
                                                                $(".item[data-index='" + zumbaId + "']").removeClass("carousel-item");
                                                                $(this).removeAttr("data-bs-slide-to");
                                                                $(this).removeAttr("data-bs-target");
                                                            } else {
                                                                $(this).removeClass("d-none");
                                                                $(".item[data-index='" + zumbaId + "']").removeClass("d-none");
                                                                $(".item[data-index='" + zumbaId + "']").addClass("carousel-item");
                                                                $(this).attr("data-bs-slide-to", zumbaIdd);
                                                                $(this).attr("data-bs-target", "#carouselExampleCaptions");
                                                                zumbaIdd++;
                                                            }
                                                            zumbaId++;

                                                        });
                                                        $(".item:not(.d-none):first").addClass("active");
                                                        $(".add-tocart-wrap").removeClass("d-none");
                                                        $(".add-tocart-wrap").addClass("d-flex");
                                                        $(".combinationAlert").addClass("d-none");
                                                        $(".stockWrapper").removeClass("d-none");
                                                        $(".priceWrapper").removeClass("d-none");
                                                    }
                                                }
                                            })
                                        } else {
                                            if (checkedVariations.length === variationCategories.length) {
                                                checkedInputs.forEach(function(e, i) {
                                                    if (e.is(":checked")) {
                                                        e.prop("checked", false);
                                                        e.prop("readonly", true);
                                                    }
                                                });
                                                $(".add-tocart-wrap").removeClass("d-flex");
                                                $(".add-tocart-wrap").addClass("d-none");
                                                $(".combinationAlert").removeClass("d-none");
                                                $(".stockWrapper").addClass("d-none");
                                                $(".priceWrapper").addClass("d-none");
                                            } else {
                                                $("input.variant").each(function() {
                                                    $(this).prop("readonly", false);
                                                });
                                            }
                                        }
                                    }
                                    $("#carouselExampleCaptions").carousel().carousel(0);
                                    $(".single-product-thumbb:not(.d-none):first").click();
                                });

                            });
                        </script>
                        <?php if ($product->stockStatus && (int)$product->stock > 0) : ?>
                            <div class="alert alert-warning d-none combinationAlert" role="alert">
                                <?= lang("availableCombinationNotFound") ?>
                            </div>

                            <ul class="cart add-tocart-wrap flex-wrap text-center justify-content-center align-items-center align-self-center mb-3">
                                <li class="my-2 flex-shrink-1 text-center justify-content-center align-items-center align-self-center me-1">
                                    <ul class="number w-100">
                                        <li>
                                            <span class="minus">-</span>
                                            <label for="quantity" class="d-none">-+</label>
                                            <input id="quantity" class="cart-plus-minus" name="quantity" min="0" value="1" type="text" onchange="$('.add-tocart-wrap a.addToCart').data('quantity',$(this).val())" />
                                            <span class="plus">+</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="my-2 flex-fill text-center justify-content-center align-items-center align-self-center me-1">
                                    <div class="d-flex">
                                        <a rel="dofollow" title="<?= lang("addToCart") ?>" class="common-btn bg-dark-green text-white text-center w-100 add-to-cart addToCart add-cart-custom-button" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" data-product-id="<?= $product->id ?>" data-quantity="1">
                                            <i class="bx bx-cart"></i> <?= lang("addToCart") ?>
                                        </a>
                                    </div>
                                </li>
                                <?php
                                if (!empty($this->session->userdata("weddingPackage")) && !empty($_GET["key"])) :
                                    $key = !empty($_GET["key"]) ? $_GET["key"] : null;
                                    $pCategories = explode(",", $product->category_ids);
                                ?>
                                    <li class="my-2 flex-fill text-center justify-content-center align-items-center align-self-center">
                                        <?php $csrf = array(
                                            'name' => $this->security->get_csrf_token_name(),
                                            'hash' => $this->security->get_csrf_hash()
                                        ); ?>
                                        <form onsubmit="return false;" method="POST" id="packageForm" class="d-flex">
                                            <input type="hidden" class="yourPackage" name="your_package" value="<?= $key ?>">
                                            <input type="hidden" class="productpackage" name="product" value="<?= $product->id ?>">
                                            <input type="hidden" class="loadUrl" name="loadUrl" value="<?= asset_url("home/loadForm") ?>">
                                            <input type="hidden" class="categorypackage" name="category" value="<?= (in_array(3, $pCategories) ? "bedroom" : (in_array(4, $pCategories) ? "sofa_set" : (in_array(5, $pCategories) ? "dining_room" : "option"))) ?>">
                                            <input type="hidden" class="redirect" name="redirect" value="<?= base_url(lang("routes_create-wedding-package") . "?key=" . $key) ?>">
                                            <input type="hidden" name="<?= $csrf["name"] ?>" value="<?= $csrf["hash"] ?>">
                                            <a data-url="<?= asset_url("home/createWeddingPackage") ?>" class="common-btn w-100 text-center text-white addtopackage bg-primary" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>">
                                                <i class="bx bx-male-female"></i> <?= lang("addToWeddingPackage") ?>
                                            </a>
                                        </form>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <a rel="dofollow" title="<?= lang("addToWishlist") ?>" class="wishlist-btn addToWishlist" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$product->url}" . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>" data-product-id="<?= $product->id ?>">
                                <i class='bx bx-heart <?= checkWishlist($userWishlists, $product->id) ?>'></i> <?= lang("addToWishlist") ?>
                            </a>

                            <?php if (!empty($productParts)) : ?>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 col-xxl-7 my-3 mb-0 mb-sm-3">
                                        <button class="common-btn installmentOptionsBtn w-100" data-bs-toggle="modal" data-bs-target="#installmentModal" data-price="<?= ((float)$product->price - ((float)$product->price * (float)$product->discount) / 100) ?>" aria-label="<?= lang("paymentOptions") ?>"><?= lang("paymentOptions") ?></button>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 col-xxl-5 my-3">
                                        <button onclick="$('html,body').animate({scrollTop:$('#myAccord>li:first').offset().top - ($('.mean-bar').length > 0 ? 151 : 78)},'slow')" class="text-white common-btn bg-dark w-100" aria-label="<?= lang("productParts") ?>"><?= lang("productParts") ?></button>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="my-3">
                                    <button class="common-btn installmentOptionsBtn w-100" data-bs-toggle="modal" data-bs-target="#installmentModal" data-price="<?= ((float)$product->price - ((float)$product->price * (float)$product->discount) / 100) ?>" aria-label="<?= lang("paymentOptions") ?>"><?= lang("paymentOptions") ?></button>
                                </div>
                            <?php endif ?>
                            <?php if (!empty($productDimensions)) : ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle justify-content-center fs-4 bg-dark-green text-white" colspan="4"><?= lang("productDimensions") ?></th>
                                            </tr>
                                            <tr class="bg-white">
                                                <th class="text-center align-middle justify-content-center text-green"><?= lang("productName") ?></th>
                                                <th class="text-center align-middle justify-content-center text-green"><?= lang("width") ?></th>
                                                <th class="text-center align-middle justify-content-center text-green"><?= lang("height") ?></th>
                                                <th class="text-center align-middle justify-content-center text-green"><?= lang("depth") ?></th>
                                            </tr>
                                        <tbody>
                                            <?php foreach ($productDimensions as $pdKey => $pdValue) : ?>
                                                <tr>
                                                    <td class="text-center align-middle justify-content-center fw-bold"><?= $pdValue->title ?></td>
                                                    <td class="text-center align-middle justify-content-center"><?= $pdValue->width ?> <?= lang("cm") ?></td>
                                                    <td class="text-center align-middle justify-content-center"><?= $pdValue->height ?> <?= lang("cm") ?></td>
                                                    <td class="text-center align-middle justify-content-center"><?= $pdValue->depth ?> <?= lang("cm") ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="common-faq-area products-area py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="faq-item">
                    <ul class="accordion" id="myAccord">
                        <?php if (!empty($productParts) && empty($this->session->userdata("weddingPackage")) && empty($_GET["key"])) : ?>
                            <li>
                                <h3 class="faq-head"><?= lang("productParts") ?></h3>
                                <div class="faq-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-borderless table-hover">
                                            <thead>
                                                <tr class="bg-light">
                                                    <th class="text-center align-middle justify-content-center py-3"><?= lang("quantity") ?></th>
                                                    <th class="text-start align-middle justify-content-start ps-5 py-3"><?= lang("productName") ?></th>
                                                    <th class="text-end align-middle justify-content-end py-3"><?= lang("price") ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <script>
                                                    let partArray = [];
                                                    let cData = null;
                                                </script>
                                                <?php foreach ($productParts as $ppKey => $ppValue) : ?>
                                                    <script>
                                                        cData = <?= json_encode(["id" => (float)$ppValue->id, "quantity" => 0, "title" => stripslashes($ppValue->title), "price" => (float)$ppValue->price], JSON_UNESCAPED_UNICODE) ?>;
                                                        partArray.push(cData);
                                                    </script>
                                                    <tr>
                                                        <td class="text-center align-middle justify-content-center" style="width:120px">
                                                            <ul class="number w-100">
                                                                <li>
                                                                    <span class="part-minus" data-part-id="<?= $ppValue->id ?>" data-part-quantity="<?= $ppValue->quantity ?>" data-part-price="<?= $ppValue->price ?>">-</span>
                                                                    <label for="quantity<?= $ppKey ?>" class="d-none">-+</label>
                                                                    <input id="quantity<?= $ppKey ?>" class="cart-plus-minus" name="qty" min="0" type="text" value="0" />
                                                                    <span class="part-plus" data-part-id="<?= $ppValue->id ?>" data-part-quantity="<?= $ppValue->quantity ?>" data-part-price="<?= $ppValue->price ?>">+</span>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td class="text-start align-middle justify-content-start ps-5"><?= $ppValue->title ?></td>
                                                        <td class="text-end align-middle justify-content-end" style="width:120px"><?= number_format($ppValue->price, 2) ?><?= $symbol ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($product->content)) : ?>
                            <li>
                                <h3 class="faq-head"><?= lang("description") ?></h3>
                                <div class="faq-content">
                                    <?= $product->content ?>
                                </div>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($product->features)) : ?>
                            <li>
                                <h3 class="faq-head"><?= lang("features") ?></h3>
                                <div class="faq-content">
                                    <?= $product->features ?>
                                </div>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">

            </div>
        </div>

    </div>
</div>

<?php if (!empty($sameProducts)) : ?>
    <?php $this->load->view("includes/productSlider", ["data" => $sameProducts, "title" => lang("sameProducts"), "userWishlists" => $userWishlists, "formatter" => $formatter]) ?>
<?php endif ?>

<?php if (!empty($mostlyViewedProducts)) : ?>
    <?php $this->load->view("includes/productSlider", ["data" => $mostlyViewedProducts, "title" => lang("mostlyViewedProducts"), "userWishlists" => $userWishlists, "formatter" => $formatter]) ?>
<?php endif ?>
<?php if (!empty($suggestedProducts)) : ?>
    <?php $this->load->view("includes/productSlider", ["data" => $suggestedProducts, "title" => lang("suggestedProducts"), "userWishlists" => $userWishlists, "formatter" => $formatter]) ?>
<?php endif ?>
<?php if (!empty($newProducts)) : ?>
    <?php $this->load->view("includes/productSlider", ["data" => $newProducts, "title" => lang("newProducts"), "userWishlists" => $userWishlists, "formatter" => $formatter]) ?>
<?php endif ?>
<?php if (!empty($discountProducts)) : ?>
    <?php $this->load->view("includes/productSlider", ["data" => $discountProducts, "title" => lang("discountProducts"), "userWishlists" => $userWishlists, "formatter" => $formatter]) ?>
<?php endif ?>

<script>
    window.addEventListener("pageshow", () => {
        $("input[name='qty']").val(0);
    });
    window.addEventListener('DOMContentLoaded', function() {
        let originalPrice = parseFloat($(".priceWrapper").find(".newPrice").data("newprice"));
        $(document).on('click', '.part-minus', function() {
            let $this = $(this);
            let $input = $(this).parent().find('input');
            let count = parseInt($input.val()) - 1;
            count = count < 1 ? 0 : count;
            let price = parseFloat($(this).data("part-price"));
            if ($input.attr("min") < parseInt($input.val())) {
                if (!isEmpty(price)) {
                    let changedPrice = originalPrice - price;
                    if ($(".discountBadge").length > 0 && parseFloat($(".discountBadge").data("discount")) > 0) {
                        changedPrice = changedPrice;
                    } else {
                        changedPrice = changedPrice - price;
                    }
                    $(".priceWrapper").find(".newPrice").text(parseFloat(changedPrice).toFixed(2) + "<?= $symbol ?>");
                    $(".installmentOptionsBtn").data("price", parseFloat(changedPrice).toFixed(2));
                    originalPrice = parseFloat(originalPrice - price);
                }
                for (let obj of partArray) {
                    if (parseFloat(obj.id) === parseFloat($this.data("part-id"))) {
                        if ((count - obj.quantity) < 0) {
                            obj.quantity = 0
                        } else {
                            obj.quantity = count
                        }
                    }
                }
                $(".addToCart").data("part-array", partArray);
                $input.val(count);
                $input.change();
            }
        });
        $(document).on('click', '.part-plus', function() {
            let $this = $(this);
            let price = $(this).data("part-price");
            let $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            if (!isEmpty(price)) {
                let changedPrice = originalPrice + price;
                if ($(".discountBadge").length > 0 && parseFloat($(".discountBadge").data("discount")) > 0) {
                    changedPrice = changedPrice;
                } else {
                    changedPrice = changedPrice + price;
                }
                $(".priceWrapper").find(".newPrice").text(parseFloat(changedPrice).toFixed(2) + "<?= $symbol ?>");
                $(".installmentOptionsBtn").data("price", parseFloat(changedPrice).toFixed(2));
                originalPrice = parseFloat(originalPrice + price);
                for (let obj of partArray) {
                    if (parseFloat(obj.id) === parseFloat($this.data("part-id"))) {
                        obj.quantity = parseFloat(parseInt($input.val()))
                    }
                }
                $(".addToCart").data("part-array", partArray);
            }
        });
        $(document).on('click', '.minus', function() {
            let $input = $(this).parent().find('input');
            let count = parseInt($input.val()) - 1;
            count = count < 1 ? 0 : count;
            if ($input.attr("min") < parseInt($input.val())) {
                if (count >= 0) {
                    originalPrice -= parseFloat($(".priceWrapper").find(".newPrice").data("newprice"));
                    $(".priceWrapper").find(".newPrice").text(parseFloat(originalPrice).toFixed(2) + "<?= $symbol ?>");
                    $(".installmentOptionsBtn").data("price", parseFloat(originalPrice).toFixed(2));
                }
                $input.val(count);
                $input.change();
            }
        });
        $(document).on('click', '.plus', function() {
            let $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            originalPrice += parseFloat($(".priceWrapper").find(".newPrice").data("newprice"));
            $(".priceWrapper").find(".newPrice").text(parseFloat(originalPrice).toFixed(2) + "<?= $symbol ?>");
            $(".installmentOptionsBtn").data("price", parseFloat(originalPrice).toFixed(2));
            $input.change();
        });
        $(document).on("click", ".addtopackage", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let formData = new FormData(document.getElementById("packageForm"));
            createAjax("<?= asset_url("home/productPackage") ?>", formData, function() {
                setTimeout(function() {
                    window.location.href = formData.get("redirect");
                }, 2000)
            });
        });
        $().fancybox({
            selector: '.item:not(.d-none)>.fancyboximg',
            backFocus: false,
            scrolling: 'hidden',
            helpers: {
                overlay: {
                    locked: false
                }
            },
            beforeShow: function() {
                $("body").css({
                    'overflow': 'hidden'
                });
            },
            afterClose: function() {
                $("body").css({
                    'overflow-y': 'visible'
                });
            },
        });
        $(".carousel").on("slid.bs.carousel", function(event) {
            $(".single-product-thumbb:not('.d-none')[data-bs-slide-to=" + event.from + "]").removeClass("active");
            $(".single-product-thumbb:not('.d-none')[data-bs-slide-to=" + event.to + "]").addClass("active");
            if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1399px)').matches) {
                let x = $(".single-product-thumbb.active:not('.d-none')[data-bs-slide-to=" + event.to + "]").width();
                $('.owl-thumbs').animate({
                    scrollLeft: event.to * x
                }, 500);
            } else {
                let y = $('.owl-thumbs').scrollTop();
                $('.owl-thumbs').animate({
                    scrollTop: $(".single-product-thumbb.active:not('.d-none')[data-bs-slide-to=" + event.to + "]").position().top + y
                }, 500);
            }
        });
        $('.accordion > li:eq(0) .faq-head').addClass('active').next().slideDown();
        $('.accordion .faq-head').on('click', function(j) {
            let dropDown = $(this).closest('li').find('.faq-content');
            $(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp(300);
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('.faq-head.active').removeClass('active');
                $(this).addClass('active');
            }
            dropDown.stop(false, true).slideToggle(300);
            j.preventDefault();
        });
        $(document).on("click", ".installmentOptionsBtn", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let formData = new FormData();
            formData.append("price", parseFloat($(this).data("price")));
            formData.append("title", "<?= $product->title ?>");
            formData.append("quantity", parseFloat($("input#quantity").val()));
            formData.append('<?= $this->security->get_csrf_token_name() ?>', '<?= $this->security->get_csrf_hash() ?>');
            createAjax("<?= asset_url("home/installmentTable") ?>", formData, function(response) {
                $("#installmentModal").find(".footerScript").html(response.script);
            })
        });
    });
</script>

<div class="modal fade" id="installmentModal" tabindex="-1" aria-labelledby="installmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="installmentModalLabel"><?= lang("paymentOptions") ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang("close") ?>"></button>
            </div>
            <div class="modal-body">
                <div id="paytr_taksit_tablosu"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang("close") ?></button>
                <div class="footerScript"></div>
            </div>
        </div>
    </div>
</div>