<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("choosePayment")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("choosePayment")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("choosePayment")) ?>">
    </div>
</div>


<!-- ...:::: Start Cart Section:::... -->
<section class="blog-area four ptb-100">
    <div class="container">
        <div class="about-content">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <ul class="nav nav-pills d-flex flex-wrap w-100 justify-content-center align-items-center align-middle text-center" id="myTab" role="tablist">
                        <?php if (!empty($banks)) : ?>
                            <li class="nav-item rounded-0 border-bottom flex-grow-1" role="presentation">
                                <a class="nav-link rounded-0 active" id="<?= seo(lang("payWithBankTransfer")) ?>-tab" data-bs-toggle="tab" href="#<?= seo(lang("payWithBankTransfer")) ?>" role="tab" aria-controls="<?= seo(lang("payWithBankTransfer")) ?>" aria-selected="true" title="<?=lang("payWithBankTransfer")?>"><?= lang("payWithBankTransfer") ?></a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item rounded-0 border-bottom flex-grow-1" role="presentation">
                            <a class="nav-link rounded-0 <?= (empty($banks) ? "active" : null) ?>" title="<?=lang("payWithCreditCart")?>" id="<?= seo(lang("payWithCreditCart")) ?>-tab" data-bs-toggle="tab" href="#<?= seo(lang("payWithCreditCart")) ?>" role="tab" aria-controls="<?= seo(lang("payWithCreditCart")) ?>" aria-selected="false"><?= lang("payWithCreditCart") ?></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3 border" id="myTabContent">
                        <?php if (!empty($banks)) : ?>
                            <div class="tab-pane fade show active" id="<?= seo(lang("payWithBankTransfer")) ?>" role="tabpanel" aria-labelledby="<?= seo(lang("payWithBankTransfer")) ?>-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php foreach ($banks as $key => $value) : ?>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6">
                                                        <img loading="lazy" data-src="<?= get_picture("banks_v", $value->img_url) ?>" class="img-fluid lazyload mb-3" style="object-fit:scale-down" alt="<?= $value->title ?>" width="500" height="500">
                                                    </div>
                                                    <div class="col-lg-6 py-auto my-auto">
                                                        <h5 class="mt-0"><?= $value->title ?></h5>
                                                        <p><?= $value->content ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="javascript:void(0)" class="btn common-btn text-center w-100 justify-content-center rounded-0 mx-auto payWithBankTransfer" data-merchant-oid="<?= $merchant_oid ?>" title="<?=lang("payWithBankTransfer")?>"><?= lang("payWithBankTransfer") ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                        <div class="tab-pane p-3 border fade <?= (empty($banks) ? "show active" : null) ?>" id="<?= seo(lang("payWithCreditCart")) ?>" role="tabpanel" aria-labelledby="<?= seo(lang("payWithCreditCart")) ?>-tab">
                            <iframe loading="lazy" class="lazyload" data-src="https://www.paytr.com/odeme/guvenli/<?= $token; ?>" frameborder="0" style="min-height: 700px; width: 100%;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 text-center text-lg-end">
                    <div class="checkout_btn d-flex flex-wrap justify-content-end mt-2">
                        <a rel="dofollow" title="<?=lang("continueShopping")?>" href="<?= base_url(lang("routes_products")) ?>" class="btn common-btn bg-light text-dark me-1"><?= lang("continueShopping") ?></a>
                        <a rel="dofollow" title="<?=lang("cart")?>" href="<?= base_url(lang("routes_cart")) ?>" class="btn common-btn bg-dark-green me-1"><?= lang("cart") ?></a>
                        <a rel="dofollow" title="<?=lang("chooseAddress")?>" href="<?= base_url(lang("routes_choose-address")) ?>" class="btn common-btn "><?= lang("chooseAddress") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ...:::: End Cart Section:::... -->