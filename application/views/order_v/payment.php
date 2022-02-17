<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("payment")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("payment")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("payment")) ?>">
    </div>
</div>

<!-- ...:::: Start Cart Section:::... -->
<section class="cart-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <?php if (!empty($_GET["payment"]) && $_GET["payment"] == "success") : ?>
                    <div class="mx-auto text-center">
                        <img loading="lazy" data-src="<?= asset_url("public/images/okok.gif") ?>" alt="<?= $settings->company_name ?>" class="img-fluid lazyload" width="500" height="500">
                        <p class="text-center h2"><?= lang("paymentSuccessMessage") ?></p>
                        <a class="btn common-btn my-3" href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>" data-toggle="tooltip" data-placement="bottom" data-title="<?= $settings->company_name ?>"><?= lang("goToHome") ?></a>
                    </div>
                <?php else : ?>
                    <div class="mx-auto text-center">
                        <img loading="lazy" data-src="<?= asset_url("public/images/Error_96px.webp") ?>" alt="<?= $settings->company_name ?>" class="img-fluid lazyload" width="500" height="500">
                        <p class="text-center h2"><?= lang("paymentErrorMessage") ?> <a rel="dofollow" title="<?=lang("paymentErrorMessageEnd")?>" href="<?= base_url(lang("routes_choose-payment-type")) ?>"><?= lang("paymentErrorMessageEnd") ?></a></p>
                        <a class="btn common-btn my-3" href="<?= base_url() ?>" rel="dofollow" title="<?= $settings->company_name ?>" data-toggle="tooltip" data-placement="bottom" data-title="<?= $settings->company_name ?>"><?= lang("goToHome") ?></a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>