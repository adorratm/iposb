<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("chooseAddress")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("chooseAddress")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("chooseAddress")) ?>">
    </div>
</div>
<section class="blog-area four ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <div class="d-flex flex-wrap align-items-center align-self-center">
                        <div class="flex-grow-1">
                            <h3 class="billing-address text-dark-green my-auto"><?= lang("deliveryAndInvoiceAddress") ?></h3>
                        </div>
                        <div class="flex-shrink-1">
                            <a class="float-end ms-auto createAddressBtn btn common-btn" data-url="<?= asset_url("home/newAddressForm") ?>" href="javascript:void(0)" title="<?=lang("createNewAddress")?>"><i class="bx bx-edit"></i> <?= lang("createNewAddress") ?></a>
                        </div>
                    </div>
                    <div id="addressPull2">
                        <?php $this->load->view("includes/addressChooseable") ?>
                    </div>
                    <div class="text-end justify-content-end d-flex flex-wrap">
                        <a rel="dofollow" href="<?= base_url(lang("routes_products")) ?>" title="<?=lang("continueShopping")?>" class="btn common-btn bg-light text-dark border me-1"><?= lang("continueShopping") ?></a>
                        <a rel="dofollow" href="<?= base_url(lang("routes_cart")) ?>" title="<?=lang("cart")?>" class="btn common-btn bg-dark-green me-1"><?= lang("cart") ?></a>
                        <a rel="dofollow" href="<?= base_url(lang("routes_choose-payment-type")) ?>" title="<?=lang("choosingPayment")?>" class="btn common-btn"><?= lang("choosingPayment") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Address Modal -->
<div id="addressModal"></div>