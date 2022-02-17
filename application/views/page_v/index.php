<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", $item->title) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", $item->title) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", $item->title) ?>" class="lazyload w-100 img-fluid">
    </div>
</div>

<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <?php if (!empty($item->img_url)) : ?>
                <div class="col-lg-12">
                    <div class="about-img">
                        <picture>
                            <img width="1920" height="1280" loading="lazy" data-src="<?= get_picture("pages_v", $item->img_url) ?>" alt="<?= $item->title ?>" class="img-fluid lazyload" height="1080" width="1920">
                        </picture>
                    </div>
                </div>
            <?php endif ?>
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="top">
                        <h2><?= $item->title ?></h2>
                        <?= $item->content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($testimonials)) : ?>
    <div class="testimonials-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2 class="text-dark-green text-center"><?= lang("testimonials") ?></h2>
            </div>
            <div class="testimonials-slider owl-theme owl-carousel">
                <?php foreach ($testimonials as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="testimonials-item">
                            <i class="flaticon-quote"></i>
                            <h3><?= $value->title ?></h3>
                            <p><?= stripslashes($value->content) ?></p>
                            <span><?= $value->full_name ?> - <?= $value->company ?></span>
                            <picture>
                                <img width="1920" height="1280" data-src="<?= get_picture("testimonials_v", $value->img_url) ?>" alt="<?= $value->title ?>" class="img-fluid lazyload">
                            </picture>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- /.testimonial-area -->
<?php endif ?>