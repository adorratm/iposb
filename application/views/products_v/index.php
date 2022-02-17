<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= !empty($products_category) ? strto("lower|upper", $products_category->title) : strto("lower|upper", lang("products")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url(lang("routes_products")); ?>" rel="dofollow" title="<?= strto("lower|upper", lang("products")) ?>"><?= strto("lower|upper", lang("products")) ?></a>
                        </li>
                        <?php if (!empty($products_category)) : ?>
                            <li>
                                <span><?= strto("lower|upper", $products_category->title) ?></span>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= !empty($products_category) ? get_picture("product_categories_v", $products_category->banner_url) : get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("products")) ?>">
    </div>
</div>


<section class="blog-area four py-4">
    <div class="container-lg container-fluid-xl">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="widget-area">
                    <?php $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    ); ?>
                    <div class="search widget-item">
                        <form action="<?= !empty($this->uri->segment(2) && !is_numeric($this->uri->segment(2))) ? base_url(lang("routes_products") . "/" . $this->uri->segment(3)) : base_url(lang("routes_products")) ?>" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="key" value="<?= (!empty($_GET["key"]) ? clean($_GET["key"]) : null) ?>">
                            <input type="hidden" name="orderBy" value="<?= (!empty($_GET["orderBy"]) ? $_GET["orderBy"] : "p.id DESC") ?>">
                            <input type="hidden" name="amount" value="<?= (!empty($_GET["amount"]) ? $_GET["amount"] : null) ?>">
                            <input name="search" class="form-control" type="text" placeholder="<?= lang("searchProduct") ?>..." required>
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <button aria-label="<?= $settings->company_name ?>" type="submit" class="btn"><i class="bx bx-search"></i></button>
                        </form>
                    </div>
                    <form id="priceForm" action="<?= !empty($this->uri->segment(3) && !is_numeric($this->uri->segment(3))) ? base_url(lang("routes_products") . "/" . $this->uri->segment(3)) : base_url(lang("routes_products")) ?>" method="GET" enctype="multipart/form-data">

                        <div class="accordion" id="accordionExample">
                            <button aria-label="<?= $settings->company_name ?>" class="common-btn mb-3 w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?= lang("filters") ?>
                            </button>
                            <div id="collapseOne" class="border-0 accordion-collapse collapse <?= (!$this->agent->is_mobile() ? "show" : null) ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <?php if (!empty($categories)) : ?>
                                    <div class="categories widget-item">
                                        <h3 class="text-dark-green"><?= lang("productCategories") ?>:</h3>
                                        <?= show_categories($lang) ?>
                                    </div>
                                <?php endif ?>
                                <?= show_product_categories() ?>
                                <div class="widget-item mt-50">
                                    <ul class="list-unstyled">
                                        <li class='mb-3'>
                                            <div class='form-group d-flex flex-wrap'>
                                                <input class='me-3' style='width:25px!important;height:25px!important' type="checkbox" name="isDiscount" <?= (!empty($_GET["isDiscount"]) ? "checked" : null) ?> value="1">
                                                <b><?= lang("discountProducts") ?></b>
                                            </div>
                                        </li>
                                        <li class='mb-3'>
                                            <div class='form-group d-flex flex-wrap'>
                                                <input class='me-3' style='width:25px!important;height:25px!important' type="checkbox" name="isSuggested" <?= (!empty($_GET["isSuggested"]) ? "checked" : null) ?> value="1">
                                                <b><?= lang("suggestedProducts") ?></b>
                                            </div>
                                        </li>
                                        <li class='mb-3'>
                                            <div class='form-group d-flex flex-wrap'>
                                                <input class='me-3' style='width:25px!important;height:25px!important' type="checkbox" name="isNew" <?= (!empty($_GET["isNew"]) ? "checked" : null) ?> value="1">
                                                <b><?= lang("newProducts") ?></b>
                                            </div>
                                        </li>
                                        <li class='mb-3'>
                                            <div class='form-group d-flex flex-wrap'>
                                                <input class='me-3' style='width:25px!important;height:25px!important' type="checkbox" name="isViewed" <?= (!empty($_GET["isViewed"]) ? "checked" : null) ?> value="1">
                                                <b><?= lang("mostlyViewedProducts") ?></b>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-item shop-sidebar-price-range mt-50">
                                    <h3 class="text-dark-green"><?= lang("filterByPrice") ?></h3>
                                    <div class="sidebar-price-range price-range range-widget">
                                        <input type="hidden" name="key" value="<?= (!empty($_GET["key"]) ? clean($_GET["key"]) : null) ?>">
                                        <input type="hidden" name="orderBy" value="<?= (!empty($_GET["orderBy"]) ? $_GET["orderBy"] : "p.id DESC") ?>">
                                        <input type="hidden" name="search" value="<?= (!empty($_GET["search"]) ? $_GET["search"] : null) ?>">
                                        <label for="amount" class="d-none"><?= lang("filterByPrice") ?></label>
                                        <input type="text" class="form-control" id="amount" name="amount" value="<?= $minPrice[0]->newPrice != 0 ? $minPrice[0]->newPrice - 1 : $minPrice[0]->newPrice ?><?= $symbol ?> - <?= $maxPrice[0]->newPrice ?><?= $symbol ?>" data-minprice="<?= $minPrice[0]->newPrice != 0 ? $minPrice[0]->newPrice - 1 : $minPrice[0]->newPrice ?>" data-maxprice="<?= $maxPrice[0]->newPrice ?>" onchange="$('#priceForm').submit()" onblur="$('#priceForm').submit()">
                                    </div>
                                </div>

                                <div class="widget-item mt-25">
                                    <button aria-label="<?= $settings->company_name ?>" type="submit" class="common-btn w-100"><?= lang("applyFilter") ?></button>
                                    <?php if (!empty($_GET)) : ?>
                                        <a rel="dofollow" title="<?= lang("clearFilter") ?>" class="common-btn bg-danger mt-2 text-center w-100" href="<?= base_url(lang("routes_products") . "/" . $this->uri->segment(3) . (!empty($_GET["key"]) ? "?key=" . clean($_GET["key"]) : null)) ?>"><?= lang("clearFilter") ?></a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php if (!empty($products)) : ?>
                        <div class="col-12 col-sm-12 col-md-9 align-middle align-items-center align-self-center mb-3">
                            <?= $offset == 0 ? (!empty($products) ? 1 : 0) : (empty($products) ? 0 : $offset) ?>–<?= $total_rows > $offset + $per_page ? (empty($products) ? 0 : $offset + $per_page) : (empty($products) ? 0 : $total_rows) ?> / <?= empty($products) ? 0 : $total_rows ?>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 align-middle align-items-center align-self-center mb-3">
                            <select class="orderby w-100" id="orderBy" onchange="$('input[name=orderBy]').val($(this).val());$('#priceForm').submit()">
                                <option <?= (!empty($_GET["orderBy"]) && $_GET["orderBy"] == "id DESC" ? "selected" : null) ?> value="id DESC"><?= lang("sortByNew") ?></option>
                                <option <?= (!empty($_GET["orderBy"]) && $_GET["orderBy"] == "id ASC" ? "selected" : null) ?> value="id ASC"><?= lang("sortByOld") ?></option>
                                <option <?= (!empty($_GET["orderBy"]) && $_GET["orderBy"] == "(CASE when isDiscount = 1 then discountedPrice else newPrice end) ASC" ? "selected" : null) ?> value='(CASE when isDiscount = 1 then discountedPrice else newPrice end) ASC'><?= lang("sortByPriceAsc") ?></option>
                                <option <?= (!empty($_GET["orderBy"]) && $_GET["orderBy"] == "(CASE when isDiscount = 1 then discountedPrice else newPrice end) DESC" ? "selected" : null) ?> value='(CASE when isDiscount = 1 then discountedPrice else newPrice end) DESC'><?= lang("sortByPriceDesc") ?></option>
                            </select>
                        </div>
                        <?php foreach ($products as $key => $value) : ?>
                            <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                                <div class="col-sm-6 col-lg-4 mb-3">
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
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php else : ?>
                        <div class="col-12">
                            <div class="alert w-100" role="alert">
                                <h4 class="alert-heading text-green"><?= lang("cannotFindProductTitle") ?></h4>
                                <p><?= lang("cannotFindProductDesc") ?></p>
                                <hr class="text-dark-green">
                                <p><?= lang("cannotFindProductDesc1") ?></p>
                                <p><?= lang("cannotFindProductDesc2") ?></p>
                                <p><?= lang("cannotFindProductDesc3") ?></p>
                                <p><?= lang("cannotFindProductDesc4") ?></p>
                                <p><?= lang("cannotFindProductDesc5") ?></p>
                            </div>
                        </div>

                    <?php endif ?>
                </div>
                <div class="text-center">
                    <?= $links ?>
                </div>
            </div>
        </div>
    </div>
</section>

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