<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php if (!empty($this->session->userdata('weddingPackage'))) : ?>
    <?php
    $wheres["p.isActive"] = 1;
    $wheres["pi.isCover"] = 1;
    $wheres["p.lang"] = $this->viewData->lang;
    $joins = ["products_w_categories pwc" => ["p.id = pwc.product_id", "left"], "product_categories pc" => ["pwc.category_id = pc.id", "left"], "product_variation_groups pvg" => ["p.id = pvg.product_id", "left"], "product_images pi" => ["pi.product_id = p.id", "left"]];
    $select = "GROUP_CONCAT(pc.seo_url) category_seos,GROUP_CONCAT(pc.title) category_titles,GROUP_CONCAT(pc.id) category_ids,p.id,p.title,p.url,pi.url img_url,p.description,p.content,p.features,p.external_url,IFNULL(pvg.price,p.price) price,p.vat vat,p.vatRate vatRate,IFNULL(pvg.discount,p.discount) discount,IFNULL(pvg.stock,p.stock) stock,IFNULL(pvg.stockStatus,p.stockStatus) stockStatus,p.isActive,p.isDiscount isDiscount,p.sharedAt,IFNULL(pvg.price,p.price) AS newPrice";
    $distinct = true;
    $groupBy = ["p.id", "pwc.product_id"];
    ?>
    <h2 class="text-center py-5 font-weight-bold">
        <?= lang("yourWeddingPackages") ?>
    </h2>
    <div class="accordion" id="accordionExample">
        <?php $i = 0 ?>
        <?php foreach ((array)$this->session->userdata('weddingPackage') as $key => $item) : ?>
            <?php $total = 0; ?>
            <?php $total2 = 0; ?>
            <?php $total3 = 0; ?>
            <div class="accordion-item card mb-3 rounded-0 shadow" id="card-<?= $key ?>">
                <div class="accordion-header card-header rounded-0" id="heading-<?= $key ?>">
                    <div class="input-group rounded-0 d-flex flex-wrap justify-content-center align-items-center align-middle w-100">
                        <div class="flex-grow-1 rounded-0 my-auto py-auto justify-content-center align-items-center align-middle">
                            <button aria-label="<?=$settings->company_name?>" style="outline: none!important;border:none!important; box-shadow: none;" class="btn rounded-0 text-dark btn-lg btn-link btn-block d-flex justify-content-center align-items-center align-middle flex-wrap my-auto py-auto text-decoration-none <?= $key ?> <?= !empty($_GET["key"]) && $_GET["key"] == $key ? "collapsed" : (empty($_GET["key"]) && $i == 0 ? "collapsed" : null) ?>" data-bs-toggle="collapse" data-bs-target="#<?= $key ?>" aria-expanded="<?= !empty($_GET["key"]) && $_GET["key"] == $key ? "true" : (empty($_GET["key"]) && $i == 0 ? "true" : "false") ?>" aria-controls="<?= $key ?>">
                                <span class="my-auto py-auto justify-content-center align-items-center rounded-0 align-middle text-center font-weight-bold"><?= $item["title"] ?></span>
                            </button>
                        </div>
                        <div class="flex-shrink-1 my-auto py-auto justify-content-center align-items-center align-middle rounded-0">
                            <div class="input-group-append my-auto py-auto justify-content-center align-items-center align-middle rounded-0">
                                <div class="input-group-text my-auto py-auto justify-content-center align-items-center align-middle rounded-0">
                                    <button aria-label="<?=$settings->company_name?>" style="outline: none!important;border:none!important; box-shadow: none;" data-id="<?= $key ?>" class="btn btn-sm package-delete my-auto py-auto justify-content-center rounded-0 align-items-center align-middle"><i class="bx bx-x "></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="<?= $key ?>" class="accordion-collapse collapse <?= !empty($_GET["key"]) && $_GET["key"] == $key ? "show" : (empty($_GET["key"]) && $i == 0 ? "show" : null) ?>" aria-labelledby="heading-<?= $key ?>" data-bs-parent="#accordionExample">
                    <div class="card-body accordion-body rounded-0">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 h-100 mb-2">
                                        <?php $data = null ?>
                                        <?php if (!empty($item["bedroom"])) : ?>
                                            <?php $wheres["p.id"] = $item["bedroom"] ?>
                                            <?php $data = $this->general_model->get("products p", $select, $wheres, $joins, [], [], $distinct, $groupBy); ?>
                                        <?php endif ?>
                                        <?php $category = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => 3]); ?>
                                        <div class="vk-sparta-image">
                                            <div class="vk-sparta-image-item">
                                                <div class="vk-sparta-item-img">
                                                    <a rel="dofollow" title="<?= !empty($data->title) ? $data->title : $category->title ?>" href="<?= !empty($data) ? base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key) : base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key); ?>">
                                                        <?php if (empty($data)) : ?>
                                                            <?php if (!empty($category)) : ?>
                                                                <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("product_categories_v", $category->img_url) ?>">
                                                            <?php endif ?>
                                                        <?php else : ?>
                                                            <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("products_v", $data->img_url) ?>">
                                                        <?php endif ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center justify-content-center">
                                            <?= lang("bedRoomSet") ?>
                                            <span class="font-weight-bold">
                                                <?php if (empty($item["bedroom"])) : ?>
                                                    <?= lang("notSelectedYet") ?> <a rel="dofollow" title="<?= lang("chooseNow") ?>" class="text-site d-block text-dark-green fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("chooseNow") ?></a>
                                                <?php else : ?>
                                                    <?php $total += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : $settings->weddingDiscount) / 100)); ?>
                                                    <?php $total2 += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : 0) / 100)); ?>
                                                    <?php $total3 += ((float)$data->price); ?>
                                                    <a rel="dofollow" title="<?= $data->title ?>" class="text-green" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key); ?>"><?= $data->title ?></a>
                                                    <a rel="dofollow" title="<?= lang("changeProduct") ?>" class="text-site d-block text-dark-green fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("changeProduct") ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 h-100 mb-2">
                                        <?php $data = null ?>
                                        <?php if (!empty($item["sofa_set"])) : ?>
                                            <?php $wheres["p.id"] = $item["sofa_set"] ?>
                                            <?php $data = $this->general_model->get("products p", $select, $wheres, $joins, [], [], $distinct, $groupBy); ?>
                                        <?php endif ?>
                                        <?php $category = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => 4]); ?>
                                        <div class="vk-sparta-image">
                                            <div class="vk-sparta-image-item">
                                                <div class="vk-sparta-item-img">
                                                    <a rel="dofollow" title="<?= !empty($data->title) ? $data->title : $category->title ?>" href="<?= !empty($data) ? base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key) : base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key); ?>">
                                                        <?php if (empty($data)) : ?>
                                                            <?php if (!empty($category)) : ?>
                                                                <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("product_categories_v", $category->img_url) ?>">
                                                            <?php endif ?>
                                                        <?php else : ?>
                                                            <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("products_v", $data->img_url) ?>">
                                                        <?php endif ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center justify-content-center">
                                            <?= lang("sofaSet") ?>
                                            <span class="font-weight-bold">
                                                <?php if (empty($item["sofa_set"])) : ?>
                                                    <?= lang("notSelectedYet") ?> <a rel="dofollow" title="<?= lang("chooseNow") ?>" class="text-site d-block text-dark-green fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("chooseNow") ?></a>
                                                <?php else : ?>
                                                    <?php $total += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : $settings->weddingDiscount) / 100)); ?>
                                                    <?php $total2 += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : 0) / 100)); ?>
                                                    <?php $total3 += ((float)$data->price); ?>
                                                    <a rel="dofollow" title="<?= $data->title ?>" class="text-green" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key); ?>"><?= $data->title ?></a>
                                                    <a rel="dofollow" title="<?= lang("changeProduct") ?>" class="text-site d-block text-dark-green fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("changeProduct") ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 h-100 mb-2">
                                        <?php $data = null ?>
                                        <?php if (!empty($item["dining_room"])) : ?>
                                            <?php $wheres["p.id"] = $item["dining_room"] ?>
                                            <?php $data = $this->general_model->get("products p", $select, $wheres, $joins, [], [], $distinct, $groupBy); ?>
                                        <?php endif ?>
                                        <?php $category = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => 5]); ?>
                                        <div class="vk-sparta-image">
                                            <div class="vk-sparta-image-item">
                                                <div class="vk-sparta-item-img">
                                                    <a rel="dofollow" title="<?= !empty($data->title) ? $data->title : $category->title ?>" href="<?= !empty($data) ? base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key) : base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key); ?>">
                                                        <?php if (empty($data)) : ?>
                                                            <?php if (!empty($category)) : ?>
                                                                <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("product_categories_v", $category->img_url) ?>">
                                                            <?php endif ?>
                                                        <?php else : ?>
                                                            <img width="1920" height="1280" loading="lazy" style="border-radius: 30px;" class="img-fluid w-100 lazyload" data-src="<?= get_picture("products_v", $data->img_url) ?>">
                                                        <?php endif ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center justify-content-center">
                                            <?= lang("diningRoomSet") ?>
                                            <span class="font-weight-bold">
                                                <?php if (empty($item["dining_room"])) : ?>
                                                    <?= lang("notSelectedYet") ?> <a rel="dofollow" title="<?= lang("chooseNow") ?>" class="text-site text-dark-green d-block fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("chooseNow") ?></a>
                                                <?php else : ?>
                                                    <?php $total += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : $settings->weddingDiscount) / 100)); ?>
                                                    <?php $total2 += ((float)$data->price - ((float)$data->price * (!$data->isDiscount && (float)$data->discount > 0 ? (float)$data->discount : 0) / 100)); ?>
                                                    <?php $total3 += ((float)$data->price); ?>
                                                    <a rel="dofollow" title="<?= $data->title ?>" class="text-green" href="<?= base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . seo($data->url) . "?key=" . $key); ?>"><?= $data->title ?></a>
                                                    <a rel="dofollow" title="<?= lang("changeProduct") ?>" class="text-site d-block text-dark-green fs-5" href="<?= base_url(lang("routes_products") . "/" . $category->seo_url . "?key=" . $key) ?>"><?= lang("changeProduct") ?></a>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="sticky-top" style="z-index:1;top:78px">
                                    <ul class="list-group rounded-0">
                                        <li class="list-group-item"><?= lang("weddingTotal") ?> <span class="font-weight-bold text-right float-right"> <?= number_format($total3, 2) ?><?= $symbol ?></span></li>
                                        <li class="list-group-item"><?= lang("discountedWeddingTotal") ?> <span class="font-weight-bold text-right float-right"> <?= number_format($total2, 2) ?><?= $symbol ?></span></li>
                                        <?php
                                        $discount = ($total * $settings->weddingDiscount) / 100;
                                        $discount = $total - $discount;
                                        ?> <li class="list-group-item"><?= lang("weddingPackageAdvantage") ?> <br>(<?= lang("weddingDiscountInfo") ?> %<?= $settings->weddingDiscount ?> <?= lang("discount") ?>):<span class="font-weight-bold text-right float-right"> <?= number_format($total, 2) ?><?= $symbol ?></span></li>
                                    </ul>
                                    <?php
                                    if (!empty($item["bedroom"]) && !empty($item["sofa_set"]) && !empty($item["dining_room"])) :
                                    ?>
                                        <select name="gift_select" id="<?= $key ?>-gift" class="w-100 my-2 gift_select" required>
                                            <option value=""><?= lang("chooseYourWeddingGift") ?></option>
                                            <?php $gifts = [];
                                            if (!empty($settings->weddingGifts)) :
                                                $gifts = explode(",", $settings->weddingGifts);
                                            endif;
                                            if (!empty($gifts)) :
                                                foreach ($gifts as $k => $value) :
                                            ?>
                                                    <option value="<?= $value ?>"><?= $value ?></option>
                                                <?php endforeach; ?>
                                            <?php endif ?>
                                        </select>
                                        <a rel="dofollow" data-url="<?=asset_url("home/createPreview")?>" title="<?= lang("addToCart") ?>" href="javascript:void(0)" class="common-btn text-center w-100 add-basket-package" data-id="<?= $key ?>"><i class="bx bx-cart"></i> <?= lang("addToCart") ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++ ?>
        <?php endforeach; ?>
    </div>

<?php else : ?>
    <div class="alert alert-success bg-dark-green border" role="alert">
        <h5 class="alert-heading text-white"><i class="bx bx-info-circle"></i> <?= lang("hello") ?> <?= $settings->company_name ?> <?= lang("weddingWelcomeMessage") ?></h5>
        <hr class="text-white">
        <p class="text-white">- <?= lang("weddingMessage") ?></p>
        <p class="text-white">- <?= lang("weddingMessage2") ?></p>
        <p class="text-white">- <?= lang("weddingMessage3") ?></p>
        <p class="mb-0 text-white">- <?= lang("weddingMessage4") ?></p>
    </div>
<?php endif; ?>