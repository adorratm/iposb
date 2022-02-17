<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("login")); ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("login")); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", lang("login")); ?>" class="lazyload w-100 img-fluid">
    </div>
</div>


<div class="user-area ptb-100">
    <div class="container">
        <div class="user-item">
            <?php $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            ); ?>
            <form action="<?= base_url(lang("routes_make-login")) ?>" method="POST" enctype="multipart/form-data">
                <h2><?= strto("lower|upper", lang("login")); ?></h2>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" required placeholder="<?= lang("email") ?>*">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" required minlength="6" placeholder="<?= lang("password") ?>*">
                </div>
                <button aria-label="<?=$settings->company_name?>" type="submit" class="btn common-btn">
                    <?= lang("login") ?>
                </button>
                <h5 class="mb-3"><a rel="dofollow" class="btn-two mr-3 ml-auto" title="<?=lang("forgotPassword")?>" href="<?= base_url(lang("routes_forgot-password")) ?>"><?= lang("forgotPassword") ?></a></h5>
                <h5><?= lang("pleaseRegister") ?> <a rel="dofollow" title="<?=lang("register")?>" href="<?= base_url(lang("routes_register")) ?>"><?= lang("register") ?></a></h5>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
            </form>
        </div>
    </div>
</div>