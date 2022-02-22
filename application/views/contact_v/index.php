<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("contact")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("contact")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->contact_logo) ?>" class="img-fluid w-100 lazyload" alt="<?= strto("lower|upper", lang("contact")) ?>">
    </div>
</div>

<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2 class="text-dark-green"><?= lang("contactForm") ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <?php $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                ); ?>
                <form onsubmit="return false" enctype="multipart/form-data" method="POST" id="contact-form">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="<?= lang("namesurname") ?>" required minlength="2" maxlength="70">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="<?= lang("emailaddress") ?>" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" placeholder="<?= lang("phonenumber") ?>" required minlength="11" maxlength="19" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="<?= lang("subject") ?>" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="comment" class="form-control" id="comment" cols="30" rows="8" placeholder="<?= lang("message") ?>" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button aria-label="<?=$settings->company_name?>" type="submit" class="btn common-btn btnSubmitForm" data-url="<?= base_url(lang("routes_contact-form")) ?>">
                                    <?= lang("submit") ?>
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 mb-3">
                <div class="map-area">
                    <?= htmlspecialchars_decode($settings->map) ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 mb-3">
                <div class="contact-info">
                    <h3><?= lang("departmentOne") ?> <?= lang("contactInformation") ?>:</h3>
                    <ul class="info">
                        <li>
                            <i class="fa fa-map"></i>
                            <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address) ?></a>
                            <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("map") ?>"><?= lang("map") ?></a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><?= $settings->phone_1 ?></a>
                            <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_2 ?>"><?= $settings->phone_2 ?></a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-open"></i>
                            <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a>
                        </li>
                    </ul>
                    <div class="social-links text-center text-start-md">
                        <ul class="justify-content-center justify-content-md-start">
                            <?php if (!empty($settings->facebook)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <i class='fa fa-facebook color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <i class='fa fa-twitter color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <i class='fa fa-instagram color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <i class='fa fa-linkedin color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <i class='fa fa-youtube color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <i class='fa fa-medium color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <i class='fa fa-pinterest color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 mb-3">
                <div class="contact-info">
                    <h3><?= lang("departmentTwo") ?> <?= lang("contactInformation") ?>:</h3>
                    <ul class="info">
                        <li>
                            <i class="fa fa-map"></i>
                            <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address_2) ?></a>
                            <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("map") ?>"><?= lang("map") ?></a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><?= $settings->phone_1 ?></a>
                            <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_3 ?>"><?= $settings->phone_3 ?></a>
                        </li>
                        <li>
                            <i class="fa fa-envelope-open"></i>
                            <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a>
                        </li>
                    </ul>
                    <div class="social-links text-center text-start-md">
                        <ul class="justify-content-center justify-content-md-start">
                            <?php if (!empty($settings->facebook)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <i class='fa fa-facebook color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <i class='fa fa-twitter color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <i class='fa fa-instagram color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <i class='fa fa-linkedin color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <i class='fa fa-youtube color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <i class='fa fa-medium color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <li>
                                    <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <i class='fa fa-pinterest color fa-2x'></i>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3">
                <div class="map-area">
                    <?= htmlspecialchars_decode($settings->map_2) ?>
                </div>
            </div>
            
        </div>

    </div>
</div>