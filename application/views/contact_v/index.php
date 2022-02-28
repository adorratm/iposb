<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!--================= Breadcrumbs Section Start Here =================-->
<div class="react-breadcrumbs">
    <div class="breadcrumbs-wrap">
        <img width="1920" height="400" data-src="<?= get_picture("settings_v", $settings->contact_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("contact")) ?>">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title"><?= strto("lower|upper", lang("contact")) ?></h1>
                    <div class="back-nav">
                        <ul>
                            <li><a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a></li>
                            <li><?= strto("lower|upper", lang("contact")) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs Section End Here =================-->
<div id="react-contact" class="react-contact-page pt---100">
    <div class="container">
        <div class="row pb---110">
            <div class="col-lg-12">
                <!--=================  Map Section Start Here =================-->
                <div class="react-contacts pt-106">
                    <div class="react-image-maping">
                        <?= htmlspecialchars_decode($settings->map) ?>
                    </div>
                </div>
                <!--================= Map Section End Here =================-->
            </div>
        </div>
        <div class="row pb---96">
            <div class="col-lg-4 pt---10">
                <ul class="address-sec">
                    <li>
                        <em class="icon"><img data-src="<?= asset_url("public/images/contact/2.webp") ?>" class="lazyload" alt="<?= lang("address") ?>"></em>
                        <span class="text">
                            <em><?= lang("address") ?></em>
                            <a class="my-3" rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><i class="fa fa-map-marker"></i> <?= clean($settings->address) ?></a>
                            <a class="my-3" rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("map") ?>"><i class="fa fa-map-marked"></i> <?= lang("map") ?></a>
                            <a class="my-3" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->slogan ?>"><?= $settings->slogan ?></a>
                        </span>
                    </li>
                    <li>
                        <em class="icon"><img data-src="<?= asset_url("public/images/contact/3.webp") ?>" class="lazyload" alt="<?= lang("address") ?>"></em>
                        <span class="text">
                            <em><?= strto("lower|ucfirst", lang("contact")) ?></em>
                            <a class="my-3" rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a>
                            <a class="my-3" rel="dofollow" title="Whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_2) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>."><i class="fa fa-whatsapp"></i> <?= $settings->phone_2 ?></a>
                            <a class="my-3" rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_3 ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_3 ?></a>
                            <a class="my-3" rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa fa-envelope-open"></i> <?= $settings->email ?></a>
                        </span>
                    </li>
                    <li>
                        <em class="icon"><img data-src="<?= asset_url("public/images/contact/4.webp") ?>" class="lazyload" alt="<?= lang("address") ?>"></em>
                        <span class="text">
                            <em><?= lang("social") ?></em>
                            <ul class="d-flex align-items-center my-3 py-auto align-self-center justify-content-center justify-content-md-start">
                                <?php if (!empty($settings->facebook)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                            <i class='fa fa-facebook color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->twitter)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                            <i class='fa fa-twitter color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->instagram)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                            <i class='fa fa-instagram color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->linkedin)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                            <i class='fa fa-linkedin color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->youtube)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                            <i class='fa fa-youtube color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->medium)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                            <i class='fa fa-medium color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->pinterest)) : ?>
                                    <li class="mx-2 align-items-center my-auto py-auto align-self-center">
                                        <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                            <i class='fa fa-pinterest color fa-2x'></i>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <!--================= Form Section Start Here =================-->
                <div class="react-blog-form">
                    <h2 class="contact-title"><?= lang("contactForm") ?></h2>
                    <h6><?= lang("contactFormDesc") ?></h6>
                    <div id="blog-form" class="blog-form">
                        <div id="form-messages"></div>
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form onsubmit="return false" enctype="multipart/form-data" method="POST" id="contact-form">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="back-input">
                                        <input type="text" name="full_name" id="full_name" placeholder="<?= lang("namesurname") ?>" required minlength="2" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="back-input">
                                        <input type="email" name="email" id="email" placeholder="<?= lang("emailaddress") ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="back-input">
                                        <input type="text" name="phone" id="phone" placeholder="<?= lang("phonenumber") ?>" required minlength="11" maxlength="19">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="back-input">
                                        <input type="text" name="subject" id="subject" placeholder="<?= lang("subject") ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="back-input">
                                        <textarea name="comment" id="comment" cols="30" rows="8" placeholder="<?= lang("message") ?>" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <button aria-label="<?= $settings->company_name ?>" type="submit" class="btn common-btn btnSubmitForm" data-url="<?= base_url(lang("routes_contact-form")) ?>">
                                            <?= lang("submit") ?>
                                            <i class="fa fa-arrow-right"></i>
                                        </button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        </form>
                    </div>
                </div>
                <!--================= Form Section End Here =================-->
            </div>
        </div>
    </div>
</div>