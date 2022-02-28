<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", $item->title) ?>" class="lazyload w-100 img-fluid">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", $item->title) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><?= strto("lower|upper", $item->title) ?></li>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__image">
                    <?php if (!empty($item->img_url)) : ?>
                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("pages_v", $item->img_url) ?>" alt="<?= $item->title ?>" class="img-fluid lazyload">
                    <?php endif ?>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="about__content">
                    <h2 class="about__title text-center"><?= $item->title ?></h2>
                    <?= $item->content ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= About Section End Here ================= -->