<?php if (!empty($slides)) : ?>
    <!--================= Slider Section Start Here =================-->
    <div class="react-slider-part">
        <div class="home-sliders home2 owl-carousel">
            <?php $i = 0 ?>
            <?php foreach ($slides as $key => $value) : ?>
                <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                    <div class="single-slide">
                        <div class="slider-img">
                            <img width="1920" height="1280" class="lazyload img-fluid w-100 owl-lazy" data-src="<?= get_picture("slides_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                        </div>
                        <div class="container">
                            <div class="slider-content d-none">
                                <div class="content-part">
                                    <span class="slider-pretitle"><?= $value->title ?></span>
                                    <h2 class="slider-title"><?= $value->description ?></h2>
                                    <div class="slider-btn">
                                        <?php if ($value->allowButton) : ?>
                                            <?php $sUrl = null; ?>
                                            <?php if (!empty($value->button_url)) : ?>
                                                <?php $sUrl = $value->button_url ?>
                                            <?php endif ?>
                                            <?php if (!empty($value->category_id) && $value->category_id > 0) : ?>
                                                <?php $sCategory = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->category_id]); ?>
                                                <?php if (!empty($sCategory)) : ?>
                                                    <?php $sUrl = base_url(lang("routes_products") . "/" . $sCategory->seo_url) ?>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <?php if (!empty($value->product_id) && $value->product_id > 0) : ?>
                                                <?php $sProduct = $this->general_model->get("products", null, ["isActive" => 1, "id" => $value->product_id]); ?>
                                                <?php if (!empty($sProduct)) : ?>
                                                    <?php $sUrl = base_url(lang("routes_products") . "/" . lang("routes_product") . "/" . $sProduct->url) ?>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <?php if (!empty($value->page_id) && $value->page_id > 0) : ?>
                                                <?php $sPage = $this->general_model->get("product_categories", null, ["isActive" => 1, "id" => $value->page_id]); ?>
                                                <?php if (!empty($sPage)) : ?>
                                                    <?php $sUrl = base_url(lang("routes_products") . "/" . $sPage->url) ?>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <a class="react-btn-border" rel="dofollow" target="<?= $value->target ?>" title="<?= $value->button_caption ?>" href="<?= $sUrl ?>">
                                                <?= $value->button_caption ?>
                                            </a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($value->video_url)) : ?>
                                <div class="event__video-btn--play">
                                    <a href="<?= $value->video_url ?>" class="event__video-btn--play-btn custom-popup">
                                        <i class="fa fa-play"></i>
                                        <?php if (!empty($value->video_caption)) : ?>
                                            <em><?= $value->video_caption ?></em>
                                        <?php endif ?>
                                    </a>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>

<!--=================  Popular Topics Section Start Here ================= -->
<div class="react_populars_topics react_populars_topics2 pt---100 pb---100">
    <div class="container">

        <div class="row pt---30">
            <div class="col-md-4">
                <div class="item__inner">
                    <div class="icon">
                        <img src="assets/images/topics/icon.svg" alt="Icon image">
                    </div>
                    <div class="react-content">
                        <h3 class="react-title"><a href="coureses-grid.html">Accredited Campus</a></h3>
                        <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur sed, <br>convallis at tellus.</p>
                        <a href="#"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item__inner">
                    <div class="icon">
                        <img src="assets/images/topics/icon2.svg" alt="Icon image">
                    </div>
                    <div class="react-content">
                        <h3 class="react-title"><a href="coureses-grid.html">Best Quality Graduate</a></h3>
                        <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur sed, <br>convallis at tellus.</p>
                        <a href="#"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item__inner">
                    <div class="icon">
                        <img src="assets/images/topics/icon3.svg" alt="Icon image">
                    </div>
                    <div class="react-content">
                        <h3 class="react-title"><a href="coureses-grid.html">Inspiring Student Life</a></h3>
                        <p>Nulla porttitor accumsan tincidunt. vamus <br>magna justo, lacinia eget consectetur sed, <br>convallis at tellus.</p>
                        <a href="#"> Learn More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=================  Popular Topics Section End Here ================= -->

<?php if (!empty($services)) : ?>
    <!--================= Blog Section Start Here =================-->
    <div class="react-blog__area blog__area pt---120 pb---120 graybg-home">
        <div class="container blog__width">
            <div class="react__title__section text-center">
                <h2 class="react__tittle"><?= lang("academicDepartments") ?></h2>
                <img loading="lazy" class="lazyload" data-src="<?= asset_url("public/images/line.webp") ?>" alt="<?= $settings->company_name ?>">
            </div>
            <div class="row">
                <?php foreach ($services as $key => $value) : ?>
                    <?php if (strtotime($value->sharedAt) <= strtotime("now")) : ?>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="blog__card mb-50">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>">
                                        <img loading="lazy" class="lazyload" data-src="<?= get_picture("services_v", $value->img_url) ?>" alt="<?= $value->title ?>">
                                    </a>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <h3 class="blog__card--title"><a rel="dofollow" href="<?= base_url(lang("routes_services") . "/" . lang("routes_service_detail") . "/{$value->seo_url}") ?>" title="<?= $value->title ?>"><?= $value->title ?></a></h3>
                                        <p><?= mb_word_wrap(clean($value->content), 250, "...") ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!--================= Blog Section End Here =================-->
<?php endif ?>

<!--=================  About Section Start Here ================= -->
<div class="about__area about__area_one p-relative pt---10 pb---120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__image">
                    <img src="<?= asset_url("public/images/about/ab.webp") ?>" alt="About">
                    <img class="react__shape__ab" src="<?= asset_url("public/images/about/badge.webp") ?>" alt="Shape Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <h2 class="about__title">Welcome to <br> <em>Echooling LMS Platform</em></h2>
                    <p class="about__paragraph">Education is both the act of teaching knowledge to others and<br> the act of receiving knowledge from someone else.</p>
                    <p class="about__paragraph2"> Have questions? <a href="#"> Get Free Guide </a></p>
                    <p>Education also refers to the knowledge received through schooling instruction <br>and to the institution of teaching as a whole. The main purpose of education <br>is the integral development of a person.</p>
                    <ul>
                        <li><a href="about.html" class="more-about"> Read More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg></a></li>
                        <li class="last-li">
                            <em>Get Support</em>
                            <a href="mailto:support@react.com">support@react.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= About Section End Here ================= -->


<!--================= Popular Course Section Start Here =================-->
<div class="popular__course__area pt---100 pb---100">
    <div class="container">
        <div class="react__title__section text-center">
            <h2 class="react__tittle">Popular Courses</h2>
            <img src="<?= asset_url("public/images/line.webp") ?>" alt="image">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="course__item mb-30">
                    <div class="course__thumb">
                        <a href="coureses-single.html"><img src="<?= asset_url("public/images/course/1.webp") ?>" alt="image"></a>
                    </div>
                    <div class="course__inner">
                        <ul>
                            <li>UX Design</li>
                            <li>24 Lessons</li>
                        </ul>
                        <h3 class="react-course-title"><a href="coureses-single.html">Dave conservatoire is the<br> Entirely free online.</a></h3>
                        <div class="course__card-icon d-flex align-items-center">
                            <div class="course__card-icon--1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>77 Students</span>
                            </div>
                            <div class="react__user">
                                $68.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course__item mb-30">
                    <div class="course__thumb">
                        <a href="coureses-single.html"><img src="<?= asset_url("public/images/course/2.webp") ?>" alt="image"></a>
                    </div>
                    <div class="course__inner">
                        <ul>
                            <li>UX Design</li>
                            <li>39 Lessons</li>
                        </ul>
                        <h3 class="react-course-title"><a href="coureses-single.html">Strategy law and <br> Organization foundation.</a></h3>
                        <div class="course__card-icon d-flex align-items-center">
                            <div class="course__card-icon--1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>99 Students</span>
                            </div>
                            <div class="react__user">
                                $99.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course__item mb-30">
                    <div class="course__thumb">
                        <a href="coureses-single.html"><img src="<?= asset_url("public/images/course/3.webp") ?>" alt="image"></a>
                    </div>
                    <div class="course__inner">
                        <ul>
                            <li>UX Design</li>
                            <li>20 Lessons</li>
                        </ul>
                        <h3 class="react-course-title"><a href="coureses-single.html">Python for Data Science & <br> Machine Learning</a></h3>
                        <div class="course__card-icon d-flex align-items-center">
                            <div class="course__card-icon--1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>68 Students</span>
                            </div>
                            <div class="react__user">
                                $79.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="course__item mb-30">
                    <div class="course__thumb">
                        <a href="coureses-single.html"><img src="<?= asset_url("public/images/course/4.webp") ?>" alt="image"></a>
                    </div>
                    <div class="course__inner">
                        <ul>
                            <li>UX Design</li>
                            <li>26 Lessons</li>
                        </ul>
                        <h3 class="react-course-title"><a href="coureses-single.html">The complete web develop <br>Ment bootcamp.</a></h3>
                        <div class="course__card-icon d-flex align-items-center">
                            <div class="course__card-icon--1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>84 Students</span>
                            </div>
                            <div class="react__user">
                                $120.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="view-courses"> View All Courses <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg></a>
        </div>
    </div>
</div>
<!--================= Popular Course Section End Here =================-->

<!--================= Counter Section Start Here =================-->
<div class="count__area pb---110">
    <div class="container count__width">
        <div class="row">
            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="count__content">
                            <p class="count__content--paragraph">Successfully <br>Trained</p>
                            <h3 class="count__content--title-1 counter">1478</h3>
                            <p class="count__content--paragraph2">Enrolled Learners</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="count__content">
                            <p class="count__content--paragraph">Available <br>Courses</p>
                            <h3 class="count__content--title-1 counter">1731</h3>
                            <p class="count__content--paragraph2">Countrywide Awards</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="count__content">
                            <p class="count__content--paragraph">Scheduled <br>Events</p>
                            <h3 class="count__content--title-1 counter">280</h3>
                            <p class="count__content--paragraph2">Success Events</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="count__content">
                            <p class="count__content--paragraph">Getting <br>Featured on</p>
                            <h3 class="count__content--title-1 counter">1045</h3>
                            <p class="count__content--paragraph2">Online Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Counter Section End Here =================-->
<!--================= Clients Section Start Here =================-->
<div class="react-clients react-clientso home-testimonial pt---90 pb---120">
    <div class="container">
        <div class="react__title__section text-center">
            <h2>What our student saying</h2>
            <img src="<?= asset_url("public/images/line.webp") ?>" alt="image">
        </div>
        <div class="container">
            <div class="client-slider owl-carousel">
                <div class="single-client">
                    <div class="client-bottom">
                        <span class="client-author"><img src="<?= asset_url("public/images/testimonial/testimonial.webp") ?>" alt="Testimonials"> </span>
                    </div>
                    <div class="client-content">
                        <span class="client-title">Justin Case <em> Student</em></span>
                        <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                        <div class="testimonial__ratings">
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star_alt"></em>
                            <span><em>4.9</em> (14 Reviews)</span>
                        </div>
                        <img class="comma" src="<?= asset_url("public/images/testimonial/coma.webp") ?>" alt="image">
                    </div>
                </div>
                <div class="single-client">
                    <div class="client-bottom">
                        <span class="client-author"><img src="<?= asset_url("public/images/testimonial/testimonial.webp") ?>" alt="Testimonials"> </span>
                    </div>
                    <div class="client-content">
                        <span class="client-title">Justin Case <em> Student</em></span>
                        <p>Nulla porttitor accumsan tincidunt. vamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in.</p>
                        <div class="testimonial__ratings">
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star"></em>
                            <em class="icon_star_alt"></em>
                            <span><em>4.9</em> (14 Reviews)</span>
                        </div>
                        <img class="comma" src="<?= asset_url("public/images/testimonial/coma.webp") ?>" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Clients Section End Here =================-->