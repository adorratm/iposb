<?php if (!empty($slides)) : ?>
    <div class="banner-area-two">
        <div class="banner-slider owl-theme owl-carousel">
            <?php $i = 0 ?>
            <?php foreach ($slides as $key => $value) : ?>
                <div class="banner-item">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid px-5">
                                <div class="banner-content">
                                    <h2 class="fs-1 text-dark-green"><?= $value->title ?></h2>
                                    <p><?= $value->description ?></p>
                                    <?php if ($value->allowButton) : ?>
                                        <?php $sUrl = null; ?>
                                        <?php if (!empty($value->button_url)) : ?>
                                            <?php $sUrl = $value->button_url ?>
                                        <?php endif ?>
                                        <?php if (!empty($value->category_id) && $value->category_id > 0) : ?>
                                            <?php $sCategory = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->category_id]); ?>
                                            <?php if (!empty($sCategory)) : ?>
                                                <?php $sUrl = base_url(lang("routes_products") . "/" . $sCategory->seo_url) ?>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <?php if (!empty($value->product_id) && $value->product_id > 0) : ?>
                                            <?php $sProduct = $this->general_model->get("products", null, ["isActive" => 1, "id" => $value->product_id]); ?>
                                            <?php if (!empty($sProduct)) : ?>
                                                <?php $sUrl = base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $sProduct->url) ?>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <?php if (!empty($value->page_id) && $value->page_id > 0) : ?>
                                            <?php $sPage = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->page_id]); ?>
                                            <?php if (!empty($sPage)) : ?>
                                                <?php $sUrl = base_url(lang("routes_products") . "/" . $sPage->url) ?>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <a class="common-btn d-inline" rel="dofollow" target="<?= $value->target ?>" title="<?= $value->button_caption ?>" href="<?= $sUrl ?>">
                                            <?= $value->button_caption ?>
                                        </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img <?= ($i != 0 ? "loading='lazy'" : null) ?> width="1920" height="1280" class="lazyload w-100 img-fluid owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($menuCategories)) : ?>
    <div class="sale-area mt-0 pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <?php $i = 0 ?>
                <?php foreach ($menuCategories as $key => $value) : ?>
                    <?php if ($value->top_id == 0) : ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 <?= ($i <= 2 ? "col-xxl-4" : "col-xxl-3") ?> my-2">
                            <div class="vk-sparta-image ">
                                <div class="vk-sparta-image-item">
                                    <div class="vk-sparta-item-img ">
                                        <a rel="dofollow" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . $value->seo_url) ?>">
                                            <img loading="lazy" width="1920" height="1280" data-src="<?= get_picture("product_categories_v", $value->img_url) ?>" class="img-fluid w-100 lazyload" style="border-radius: 30px;" alt="<?= $value->title ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if (!empty($menuCategories)) : ?>
    <?php foreach ($menuCategories as $mkey => $mvalue) : ?>
        <?php if ($mvalue->top_id == 0) : ?>
            <?php
            $wheres["p.isActive"] = 1;
            $wheres["pi.isCover"] = 1;
            $wheres["p.lang"] = $this->viewData->lang;
            $wheres["pc.id"] = $mvalue->id;
            $joins = ["products_w_categories pwc" => ["p.id = pwc.product_id", "left"], "product_categories pc" => ["pwc.category_id = pc.id", "left"], "product_variation_groups pvg" => ["p.id = pvg.product_id", "left"], "product_images pi" => ["pi.product_id = p.id", "left"]];
            $select = "GROUP_CONCAT(pc.seo_url) category_seos,GROUP_CONCAT(pc.title) category_titles,GROUP_CONCAT(pc.id) category_ids,p.id,p.title,p.url,pi.url img_url,IFNULL(pvg.price,p.price) price,IFNULL(pvg.discount,p.discount) discount,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isDiscount isDiscount,p.sharedAt";
            $distinct = true;
            $groupBy = ["p.id", "pwc.product_id"];

            /**
             * Get Home Products
             */
            $homeProducts = $this->general_model->get_all("products p", $select, "RAND()", $wheres, [], $joins, [10], [], $distinct, $groupBy);
            ?>
            <?php if (!empty($homeProducts)) : ?>
                <div class="products-area pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 text-center justify-content-center">
                                <div class="section-title text-center justify-content-center">
                                    <img loading="lazy" width="581" height="71" data-src="<?= get_picture("product_categories_v", $mvalue->home_url) ?>" class="lazyload img-fluid w-100" alt="<?= $mvalue->title ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="products-slider owl-theme owl-carousel">
                            <?php $i = 0 ?>
                            <?php foreach ($homeProducts as $key => $value) : ?>
                                <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                                    <?php if (in_array($mvalue->id, explode(",", $value->category_ids))) : ?>
                                        <div class="products-item h-100">
                                            <div class="top">
                                                <?php if ($value->isDiscount && (int)$value->discount > 0) : ?>
                                                    <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}") ?>" title="<?= $value->title ?>" class="product-type two">%<?= (int)$value->discount ?></a>
                                                <?php endif ?>
                                                <a class="wishlist addToWishlist" data-product-id="<?= $value->id ?>" title="<?= $value->title ?>" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}") ?>">
                                                    <i class="bx bx-heart <?= checkWishlist($userWishlists, $value->id) ?>"></i>
                                                </a>
                                                <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}") ?>" title="<?= $value->title ?>">
                                                    <img loading="lazy" width="1920" height="1280" data-src="<?= get_picture("products_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload owl-lazy">
                                                </a>
                                                <div class="inner">
                                                    <h3>
                                                        <a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/{$value->url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a>
                                                    </h3>
                                                    <span>
                                                        <?php $i = 1 ?>
                                                        <?php $count = count(explode(",", $value->category_ids)) ?>
                                                        <?php foreach (explode(",", $value->category_titles) as $k => $v) : ?>
                                                            <?php $seo_url = explode(",", $value->category_seos)[$k]; ?>
                                                            <?php if ($i < $count) : ?>
                                                                <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}") ?>" title="<?= $v ?>"><?= $v ?></a>,
                                                            <?php else : ?>
                                                                <a style="color:#0d0d0dd1;" rel="dofollow" href="<?= base_url(lang("routes_products") . "/{$seo_url}") ?>" title="<?= $v ?>"><?= $v ?></a>
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
                                        <?php $i++ ?>
                                    <?php endif ?>
                                <?php endif ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        <?php endif ?>
    <?php endforeach ?>
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