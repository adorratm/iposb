<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", lang("pageNotFound")) ?>" class="lazyload w-100 img-fluid">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", lang("pageNotFound")) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><?= strto("lower|upper", lang("pageNotFound")) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->


<!--=================  About Section Start Here ================= -->
<div class="about__area about__area_one p-relative pt---100 pb---120">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__image">
                    <img loading="lazy" data-src="<?= asset_url("public/images/404.webp") ?>" alt="<?= lang("pageNotFound") ?>" class="img-fluid lazyload" width="550" height="515">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="about__content">
                    <h2 class="about__title text-center"><?= lang("pageNotFound") ?></h2>
                    <?= lang("404Desc") ?>
                    <div class="text-center">
                        <a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("404Home") ?>" class="common-btn"><?= lang("404Home") ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= About Section End Here ================= -->