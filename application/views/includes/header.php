<h1 class="d-none"><?= $settings->company_name ?></h1>
<header id="react-header" class="react-header">
    <div class="topbar-area style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <div class="topbar-contact">
                        <ul class="my-auto d-flex">
                            <li>
                                <i class="fa fa-phone me-1"></i>
                                <a rel="dofollow" href="tel:<?= $settings->phone_1 ?>" title="<?= lang("phone") ?>"><?= $settings->phone_1 ?></a>
                            </li>
                            <li>
                                <i class="fa fa-envelope me-1"></i>
                                <a rel="dofollow" href="mailto:<?= $settings->email ?>" title="Email"><?= $settings->email ?></a>
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
                        <ul class="social-links d-inline-block my-auto">
                            <?php if (!empty($settings->facebook)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                        <span aria-hidden="true" class="fa fa-facebook fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->twitter)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                        <span aria-hidden="true" class="fa fa-twitter fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->instagram)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                        <span aria-hidden="true" class="fa fa-instagram fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->linkedin)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                        <span aria-hidden="true" class="fa fa-linkedin fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->youtube)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                        <span aria-hidden="true" class="fa fa-youtube fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->medium)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                        <span aria-hidden="true" class="fa fa-medium fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (!empty($settings->pinterest)) : ?>
                                <li>
                                    <a rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                        <span aria-hidden="true" class="fa fa-pinterest fa-2x"></span>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
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
                                    <img width="200" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
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
                        <ul id="backmenu" class="react-menus home react-sub-shadow">
                            <li> <a href="#">Home</a>
                                <ul>
                                    <li> <a href="index-2.html">Home One</a></li>
                                    <li> <a href="index-two.html">Home Two</a></li>
                                    <li> <a href="index-three.html">Home Three</a></li>
                                </ul>
                            </li>
                            <li> <a href="#">Pages</a>
                                <ul>
                                    <li> <a href="about.html">About</a></li>
                                    <li> <a href="instructors.html">Instructor</a></li>
                                    <li> <a href="profile.html">Profile</a></li>
                                    <li> <a href="events.html">Events</a>
                                        <ul>
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-right-sidebar.html">Events Sidebar</a></li>
                                            <li><a href="events-single.html">Events Single</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="login.html">Login</a></li>
                                    <li> <a href="signup.html">Sign Up</a></li>
                                </ul>
                            </li>
                            <li> <a href="coureses-grid.html">Courses</a>
                                <ul>
                                    <li><a href="coureses-grid.html">Courses</a></li>
                                    <li><a href="coureses-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="coureses-list.html">Courses List</a></li>
                                    <li><a href="coureses-single.html">Courses Single</a></li>
                                </ul>
                            </li>
                            <li> <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li> <a href="contact.html">Contact</a></li>
                        </ul>
                        <div class="searchbar-part">
                            <div class="react-login">
                                <a href="login.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>Log In</a>
                            </div>
                            <form class="search-form">
                                <input type="text" class="form-input" placeholder="Search Course">
                                <button type="submit" class="form-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!--=================  Menu End Here  =================-->
        </div>
    </div>
</header>




<div class="header-area">
    <div class="container-fluid">
        <div class="row align-middle align-items-center align-self-center">
            <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-7 col-xxl-6 my-auto">
                <div class="left my-auto">
                    <marquee class="my-auto align-middle align-items-center align-self-center" behavior="" direction="">
                        <ul class="my-auto">
                            <li>
                                <i class="bx bx-package"></i>
                                <span class="fw-bold fs-5"><?= strto("lower|upper", lang("marquee")) ?></span>
                            </li>
                            <li>
                                <i class="bx bxs-truck"></i>
                                <span class="fw-bold fs-5"><?= strto("lower|upper", lang("marquee_3")) ?></span>
                            </li>
                        </ul>
                    </marquee>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 col-xxl-6">
                <div class="right">
                    <div class="inner d-none">
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form action="<?= base_url(lang("routes_change-language")) ?>" method="POST" enctype="multipart/form-data" id="langform" class="off-canvas-search-btn">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <select name="lang" onchange="$('#langform').submit()" required>
                                <?php if (!empty($languages)) : ?>
                                    <?php foreach ($languages as $key => $value) : ?>
                                        <option value="<?= $value ?>" <?= ($value === $lang ? "selected" : null) ?>><?= strto("lower|upper", $value) ?></option>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <option value="">TR</option>
                                <?php endif ?>

                            </select>
                        </form>
                    </div>
                    <div class="inner">
                        <div class="call">
                            <i class="bx bx-mail-send"></i>
                            <a rel="dofollow" href="mailto:<?= $settings->email ?>" title="Email"><?= $settings->email ?></a>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="call">
                            <i class="bx bx-phone"></i>
                            <a rel="dofollow" href="tel:<?= $settings->phone_1 ?>" title="<?= lang("phone") ?>"><?= $settings->phone_1 ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="nav-top-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-xl-2 col-xxl-2">
                <div class="left">
                    <a class="logo" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                        <picture>
                            <img width="262" height="169" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                        </picture>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-10 col-xl-7 col-xxl-5">
                <div class="middle">
                    <?php $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    ); ?>
                    <form id="searchForm" action="<?= !empty($this->uri->segment(2) && !is_numeric($this->uri->segment(2))) ? base_url(lang("routes_products") . "/" . $this->uri->segment(3)) : base_url(lang("routes_products")) ?>" method="GET" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <div class="form-group d-flex flex-wrap flex-column-reverse flex-md-row flex-lg-nowrap">
                            <div class="inner flex-shrink-1">
                                <select onchange="$('#searchForm').attr('action',$(this).val())">
                                    <option value="<?= base_url(lang("routes_products")) ?>"><?= lang("searchAllCategories") ?></option>
                                    <?php if (!empty($menuCategories)) : ?>
                                        <?php foreach ($menuCategories as $key => $value) : ?>
                                            <?php if ($value->top_id == 0) : ?>
                                                <option <?= ($this->uri->segment(3) == $value->seo_url ? "selected" : null) ?> value="<?= base_url(lang("routes_products") . "/" . $value->seo_url) ?>"><?= $value->title ?></option>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </select>
                            </div>
                            <input type="hidden" name="orderBy" value="<?= (!empty($_GET["orderBy"]) ? clean($_GET["orderBy"]) : null) ?>">
                            <input type="hidden" name="amount" value="<?= (!empty($_GET["amount"]) ? clean($_GET["amount"]) : null) ?>">
                            <input type="hidden" name="key" value="<?= (!empty($_GET["key"]) ? clean($_GET["key"]) : null) ?>">
                            <div class="flex-grow-1">
                                <input name="search" class="form-control" type="text" placeholder="<?= lang("searchProduct") ?>..." required>
                                <button type="submit" class="btn" aria-label="<?= $settings->company_name ?>"><i class="bx bx-search"></i></button>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-12 order-xl-2 order-xxl-1 col-xxl-3">
                <div class="right right2 d-flex flex-wrap align-self-center align-items-center">
                    <?= $menus ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-7 col-xl-3 order-xl-1 order-xxl-2 col-xxl-2 my-1">
                <div class="right d-flex flex-wrap align-self-center align-items-center">
                    <ul class="flex-shrink-1 mx-auto ms-lg-auto me-lg-0 d-block align-items-center align-self-center my-auto">
                        <li class="d-block me-lg-0 my-2">
                            <a class="join w-100 px-3 bg-dark-green border text-white" rel="dofollow" href="<?= base_url(lang("routes_create-wedding-package")) ?>" title="<?= lang("createWeddingPackage") ?>"><i class='bx bx-male-female'></i> <?= lang("createWeddingPackage") ?></a>
                        </li>
                        <li>
                            <button type="button" aria-label="<?= $settings->company_name ?>" class="btn wishlist cart-popup-btn offcanvas-add-cart" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                <i class='bx bxs-cart'></i>
                                <span class="item-count">0</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" aria-label="<?= $settings->company_name ?>" class="btn wishlist offcanvas-wishlish" data-bs-toggle="modal" data-bs-target="#exampleModalWishlist" data-bs-whatever="@mdo">
                                <i class='bx bx-heart'></i>
                                <span class="item-count">0</span>
                            </button>
                        </li>
                        <li>
                            <?php if (get_active_user()) : ?>
                                <div class="dropdown">
                                    <a class="join dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-user-circle"></i> <?= lang("account") ?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                        <li class="w-100"><a rel="dofollow" title="<?= lang("account") ?>" class="dropdown-item" href="<?= base_url(lang("routes_account")); ?>"><i class="bx bx-user-circle"></i> <?= lang("account") ?></a></li>
                                        <li class="w-100"><a rel="dofollow" title="<?= lang("logout") ?>" class="dropdown-item" href="<?= base_url(lang("routes_logout")); ?>"><i class="bx bx-power-off"></i> <?= lang("logout") ?></a></li>
                                    </ul>
                                </div>
                            <?php else : ?>
                                <a class="join px-3" rel="dofollow" href="<?= base_url(lang("routes_login")); ?>" title="<?= lang("login") ?>">
                                    <i class="bx bx-log-in bx"></i> <?= lang("login") ?>
                                </a>
                            <?php endif ?>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a class="logo" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
            <picture>
                <img width="200" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
            </picture>
        </a>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?php if (!empty($menuCategories)) : ?>
                        <?= show_header_categories($lang) ?>

                    <?php endif ?>
                </div>
            </nav>
        </div>
    </div>
</div>