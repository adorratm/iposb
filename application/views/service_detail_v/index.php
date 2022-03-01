<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- ...:::: Start Breadcrumb Section:::... -->

<section class="page-banner bg_cover" style="background-image: url(<?= get_picture("settings_v",$settings->service_logo) ?>);">
    <div class="container">
        <div class="page-banner-content text-center">
            <h2 class="title"><?= strto("lower|upper", $service->title) ?></h2>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                <li class="breadcrumb-item active"><?= strto("lower|upper", lang("service")); ?></li>
                <li class="breadcrumb-item active"><?= strto("lower|upper", $service->title) ?></li>
            </ol>
        </div>
    </div>
</section>


<!-- ...:::: End Breadcrumb Section:::... -->


<!--=========================-->
<!--=        Product Filter          =-->
<!--=========================-->

<!--====== Blog Details Start ======-->

<section class="blog-details-page pt-80 pb-80">
    <div class="container">
        <div class="blog-details-content text-center">
            <h3><?= strto("lower|upper", lang("service")); ?></h3>
            <div class="blog-details-image">
                <div class="row">
                    <div class="col-md-12 image-col">
                        <div class="image">
                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("services_v", $service->img_url) ?>" alt="<?= $service->title ?>" class="img-fluid w-100 lazyload" style="min-height:200px;object-fit:cover" height="1080" width="1920">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="blog-meta">
                        <?php foreach ($categories as $k => $v) : ?>
                            <?php if ($v->id == $service->category_id) : ?>
                                <li><a style="font-size: 13px;color: black;font-weight: 700;" rel="dofollow" href="<?= base_url(lang("routes_services") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"> <?= lang("serviceCategories") ?> <span> <?= $v->title ?></span></a></li>
                            <?php endif ?>
                        <?php endforeach ?>
                        <li><a href="javascript:void(0)"><i class="bx bx-time"></i> <?= iconv("ISO-8859-9", "UTF-8", strftime("%d %B %Y, %A %X", strtotime($service->updatedAt))); ?></a></li>
                    </ul>
                    <p><?= $service->content ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Details Ends ======-->