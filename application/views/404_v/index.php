<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("pageNotFound")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("pageNotFound")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", lang("pageNotFound")) ?>" class="lazyload w-100 img-fluid">
    </div>
</div>

<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-12 text-center">
                <div class="about-img">
                    <picture>
                        <img loading="lazy" data-src="<?= asset_url("public/images/404.webp") ?>" alt="<?= lang("pageNotFound") ?>" class="img-fluid lazyload" width="550" height="515">
                    </picture>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12 text-center">
                <div class="about-content">
                    <div class="top">
                        <h2><?= lang("pageNotFound") ?></h2>
                        <?= lang("404Desc") ?>
                    </div>
                    <div class="middle">
                        <a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("404Home") ?>" class="common-btn"><?= lang("404Home") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>