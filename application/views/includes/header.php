<h1 class="d-none"><?= $settings->company_name ?></h1>
<header id="react-header" class="react-header">
    <div class="topbar-area style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <div class="topbar-contact d-flex">
                        <ul class="social-links d-flex my-auto">
                            <?php if (!empty($settings->facebook)) : ?>
                                <li class="me-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <span aria-hidden="true" class="fa fa-facebook fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <span aria-hidden="true" class="fa fa-twitter fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <span aria-hidden="true" class="fa fa-instagram fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <span aria-hidden="true" class="fa fa-linkedin fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <span aria-hidden="true" class="fa fa-youtube fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <span aria-hidden="true" class="fa fa-medium fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <li class="mx-2">
                                    <a class="my-auto py-auto d-flex" rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <span aria-hidden="true" class="fa fa-pinterest fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <li class="mx-2">
                                <a class="my-auto py-auto d-flex" rel="dofollow" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ","",$settings->phone_3) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." title="Whatsapp" target="_blank">
                                    <i class="fa fa-whatsapp fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="my-auto d-flex ms-4">
                            <li>
                                <a rel="dofollow" href="tel:<?= str_replace(" ","",$settings->phone_1) ?>" title="<?= lang("phone") ?>"><i class="fa fa-phone me-1"></i> <?= $settings->phone_1 ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" href="mailto:<?= $settings->email ?>" title="Email"><i class="fa fa-envelope me-1"></i> <?= $settings->email ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 my-auto text-right">
                    <div class="toolbar-sl-share">
                        <?php if (!empty($settings->appstore) || !empty($settings->playstore)) : ?>
                            <ul class="d-inline-block">
                                <?php if (!empty($settings->appstore)) : ?>
                                    <li class="d-inline-block me-4">
                                        <a class="d-inline-flex" rel="dofollow" href="<?= $settings->appstore ?>" title="<?= lang("downloadFromAppStore") . lang("downloadFromAppStore2") . lang("downloadFromAppStore3") ?>">
                                            <i class="fa fa-apple fa-2x d-inline-block my-auto me-2"></i>
                                            <strong class="text-start">
                                                <span>
                                                    <?= lang("downloadFromAppStore") ?>
                                                    <small><?= lang("downloadFromAppStore2") ?></small><br>
                                                </span>
                                                <?= lang("downloadFromAppStore3") ?>
                                            </strong>
                                        </a>
                                    </li>
                                <?php endif ?>
                                <?php if (!empty($settings->playstore)) : ?>
                                    <li class="d-inline-block me-4">
                                        <a class="d-inline-flex" rel="dofollow" href="<?= $settings->appstore ?>" title="<?= lang("downloadFromPlayStore") . lang("downloadFromPlayStore2") . lang("downloadFromPlayStore3") ?>">
                                            <i class="fa-brands fa-google-play fa-2x d-inline-block my-auto me-2"></i>
                                            <strong class="text-start">
                                                <span>
                                                    <?= lang("downloadFromPlayStore") ?>
                                                    <small><?= lang("downloadFromPlayStore2") ?></small><br>
                                                </span>
                                                <?= lang("downloadFromPlayStore3") ?>
                                            </strong>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-part">
        <div class="container">
            <!--================= Menu Start Here =================-->
            <div class="react-main-menu">
                <nav>
                    <!--================= Menu Toggle btn =================-->
                    <div class="menu-toggle">
                        <div class="logo">
                            <a class="logo-text" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                                <picture>
                                    <img width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                                </picture>
                            </a>
                        </div>
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--================= Menu Structure =================-->
                    <div class="react-inner-menus">
                        <?= $menus ?>
                        <div class="searchbar-part">
                            <div class="react-login">
                                <a rel="dofollow" href="<?= base_url() ?>" title="<?= lang("virtualTour") ?>"><i class="fa-solid fa-vr-cardboard"></i> <?= lang("virtualTour") ?></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--=================  Menu End Here  =================-->
        </div>
    </div>
</header>