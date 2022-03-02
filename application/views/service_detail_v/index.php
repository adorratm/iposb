<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->service_logo) ?>" alt="<?= strto("lower|upper", $service->title) ?>" class="lazyload w-100 img-fluid">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", $service->title) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><a rel="dofollow" href="<?= base_url("routes_services") ?>"><?= strto("lower|upper", lang("academicDepartments")) ?></a></li>
                            <li><?= strto("lower|upper", $service->title) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->

<!--================= Course Filter Section Start Here =================-->
<div class="back__course__page_grid react-courses__single-page pb---40 pt---110">
    <div class="container pb---70">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-inner">
                    <div class="blog-content">
                        <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("services_v", $service->img_url) ?>" alt="<?= $service->title ?>" class="img-fluid w-100 lazyload mb-4" style="min-height:200px;object-fit:cover">
                        <h2><?= $service->title ?></h2>
                        <ul class="list-inline mb-3">
                            <li class="list-inline-item"><?= lang("serviceCategories") ?> :</li>
                            <?php foreach ($categories as $k => $v) : ?>
                                <?php if ($v->id == $service->category_id) : ?>
                                    <li class="list-inline-item"><a style="font-size: 13px;color: black;font-weight: 700;" rel="dofollow" href="<?= base_url(lang("routes_services") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"> <span> <?= $v->title ?></span></a></li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                        <hr>
                        <?= $service->content ?>


                        <?php if (!empty($latestServices)) : ?>
                            <div class="react-course-filter related__course">
                                <h3><?= lang("latestServices") ?></h3>
                                <div class="row">
                                    <?php $i = 0 ?>
                                    <?php foreach ($latestServices as $key => $value) : ?>
                                        <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                                            <?php if ($i <= 2) : ?>
                                                <div class="single-studies col-md-4 grid-item">
                                                    <div class="inner-course">
                                                        <div class="case-img">
                                                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("services_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload img-fluid" width="150" height="150">
                                                        </div>
                                                        <div class="case-content">
                                                            <h4 class="case-title"> <a rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++ ?>
                                            <?php endif ?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 md-mt-60">
                <div class="react-sidebar ml----30">
                    <div class="widget back-search">
                        <h3 class="widget-title"><?= lang("searchServices") ?></h3>
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form action="<?= base_url(lang("routes_services")) ?>" method="GET" enctype="multipart/form-data">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <input name="search" type="search" placeholder="<?= lang("searchServices") ?>..." required>
                            <button aria-label="<?= $settings->company_name ?>" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget back-post">
                        <h3 class="widget-title"><?= lang("latestServices") ?></h3>
                        <ul class="related-courses">
                            <?php foreach ($latestServices as $key => $value) : ?>
                                <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                                    <li>
                                        <a href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>"><span class="post-images"><img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("services_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="lazyload img-fluid" width="150" height="150"></span></a>
                                        <div class="titles">
                                            <h4><a rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h4>
                                        </div>
                                    </li>
                                <?php endif ?>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="widget react-categories-course">
                        <h3 class="widget-title"><?= lang("serviceCategories") ?></h3>
                        <ul class="recent-category">
                            <?php foreach ($categories as $k => $v) : ?>
                                <li><a rel="dofollow" href="<?= base_url(lang("routes_services") . "/{$v->seo_url}") ?>" title="<?= $v->title ?>"><?= $v->title ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Course Filter Section End Here =================-->