<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("register")); ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("register")); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", lang("register")); ?>" class="lazyload w-100 img-fluid">
    </div>
</div>

<div class="user-area ptb-100">
    <div class="container">
        <div class="user-item">
            <?php $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            ); ?>
            <form action="<?= base_url(lang("routes_make-register")) ?>" method="POST" enctype="multipart/form-data">
                <h2><?= strto("lower|upper", lang("register")); ?></h2>
                <div class="form-group">
                    <input type="text" name="full_name" class="form-control" required placeholder="<?= lang("fullname") ?>">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" required placeholder="<?= lang("email") ?>*">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" required placeholder="<?= lang("phone") ?>*" minlength="11" maxlength="20">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" required placeholder="<?= lang("password") ?>" minlength="6">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordRepeat" class="form-control" required placeholder="<?= lang("passwordRepeat") ?>" minlength="6">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="termsPolicy" name="termsPolicy" required>
                        <label class="form-check-label" for="termsPolicy">
                            <a rel="dofollow" title="<?= lang("termsPolicy") ?>" target="_blank" onclick="$('#termsPolicy').prop('checked',true)" href="<?= lang("termsPolicyLink") ?>"><?= lang("termsPolicy") ?></a>
                        </label>
                    </div>
                </div>
                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                <button aria-label="<?=$settings->company_name?>" type="submit" class="btn common-btn">
                    <?= lang("register") ?>
                </button>
                <h5 class="mb-3"><a rel="dofollow" class="btn-two mr-3 ml-auto" href="<?= base_url(lang("routes_forgot-password")) ?>" title="<?= lang("forgotPassword") ?>"><?= lang("forgotPassword") ?></a></h5>
                <h5><?= lang("pleaseLogin") ?> <a rel="dofollow" href="<?= base_url(lang("routes_login")) ?>" title="<?= lang("login") ?>"><?= lang("login") ?></a></h5>
            </form>
        </div>
    </div>
</div>