<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

</div>
</div>
<!--================= Wrapper End Here =================-->

<!--================= Footer Section Start Here =================-->
<footer id="react-footer" class="react-footer home-main">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-1">
                        <div class="footer-logo white">
                            <a class="logo-text" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                                <picture>
                                    <img style="filter: drop-shadow(1px 1px 1px black);" width="250" height="130" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                                </picture>
                            </a>
                        </div>
                        <h5 class="footer-subtitle"><?= $settings->company_name ?></h5>
                        <h6 class="text-white">
                            <?= $settings->slogan ?>
                        </h6>
                        <ul class="footer-address">
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address) ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("map") ?>"><i class="fa fa-map"></i> <?= lang("map") ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_3 ?></a>
                            </li>
                            <?php if (!empty(clean($settings->address_2))) : ?>
                                <li>
                                    <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address_2) ?></a>
                                </li>
                                <li>
                                    <a rel="dofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("map") ?>"> <?= lang("map") ?></a>
                                </li>
                                <li>
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_1) ?>"><i class="fa fa-phone"></i> <?= $settings->phone_1 ?></a>
                                </li>
                                <li>
                                    <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>"><i class="fa fa-mobile"></i> <?= $settings->phone_3 ?></a>
                                </li>
                            <?php endif ?>
                            <li>
                                <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><i class="fa fa-envelope-open"></i> <?= $settings->email ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-3">
                        <h3 class="footer-title"><?= lang("corporate") ?></h3>
                        <div class="footer-menu">
                            <?= $footer_menus ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="coureses-grid.html">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="profile.html">Become a Teacher</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-widget footer-widget-4">
                        <h3 class="footer-title">Newsletter</h3>
                        <div class="footer3__form">
                            <p>Get the latest Echooling news <br>delivered to you inbox</p>
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button class="footer3__form-1">
                                    <i class="arrow_right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="react-copy-left">© 2022 <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->slogan ?>"><?= $settings->slogan ?></a> <?= lang("allRightsReserved") ?></div>
            <div class="react-copy-right">
                <ul class="social-links">
                    <li class="follow"><?= lang("social") ?></li>
                    <?php if (!empty($settings->facebook)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                <i class='fa fa-facebook color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->twitter)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                <i class='fa fa-twitter color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->instagram)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                <i class='fa fa-instagram color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->linkedin)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                <i class='fa fa-linkedin color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->youtube)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                <i class='fa fa-youtube color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->medium)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                <i class='fa fa-medium color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                    <?php if (!empty($settings->pinterest)) : ?>
                        <li>
                            <a rel="dofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                <i class='fa fa-pinterest color'></i>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================= Footer Section End Here =================-->

<!--================= Scroll to Top Start =================-->
<div id="backscrollUp" class="home">
    <span aria-hidden="true" class="arrow_carrot-up"></span>
</div>
<!--================= Scroll to Top End =================-->
<!-- Jquery -->
<script src="<?= asset_url("public/js/jquery.min.js") ?>"></script>
<!-- #Jquery -->
<!--FOOTER END-->
<a class="fixed-maps bg-primary" href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#directionsModal" title="<?= lang("getDirections") ?>" data-toggle="tooltip" data-title="<?= lang("getDirections") ?>" data-placement="left"><i class="fa fa-map"></i></a>

<a rel="dofollow" class="fixed-phone bg-danger" href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#phoneModal" data-toggle="tooltip" data-title="<?= lang("phone_1") ?>" data-placement="left" title="<?= lang("phone_1") ?>"><i class="fa fa-phone"></i></a>

<a rel="dofollow" class="fixed-whatsapp bg-success" data-bs-toggle="modal" data-bs-target="#whatsappModal" href="<?= base_url() ?>" title="WhatsApp" data-toggle="tooltip" data-title="WhatsApp" data-placement="left"><i class="fa fa-whatsapp"></i></a>

<!--layout end-->
<!-- SCRIPTS -->
<!-- Lazysizes -->
<script async defer src="<?= asset_url("public/js/lazysizes.min.js") ?>"></script>
<!-- #Lazysizes -->

<!-- iziToast -->
<script defer src="<?= asset_url("public/js/iziToast.min.js") ?>"></script>
<!-- #iziToast -->

<!-- iziModal -->
<script async defer src="<?= asset_url("public/js/iziModal.min.js") ?>"></script>
<!-- #iziModal -->

<script defer src="<?= asset_url("public/js/maskedinput.min.js") ?>"></script>

<!-- Site Scripts -->

<script defer src="<?= asset_url("public/js/modernizr-2.8.3.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/bootstrap.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/owl.carousel.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/jquery.magnific-popup.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/jquery.counterup.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/waypoints.min.js") ?>"></script>


<script async defer src="<?= asset_url("public/js/sweetalert.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/wow.min.js") ?>"></script>
<script defer src="<?= asset_url("public/js/menus.js") ?>"></script>
<script defer src="<?= asset_url("public/js/main.js") ?>"></script>
<script defer src="<?= asset_url("public/js/app.js") ?>"></script>
<!-- #Site Scripts -->

<!-- SCRIPTS -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        $(document).on("click", ".map-address", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let dest = $(this).data("destination");
            if (navigator.geolocation) {
                if ((navigator.platform.indexOf("iPhone") != -1) ||
                    (navigator.platform.indexOf("iPad") != -1) ||
                    (navigator.platform.indexOf("iPod") != -1))
                    window.open("comgooglemapsurl://maps.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                else {
                    window.open("https://www.google.com/maps/dir/?api=1&destination=" + dest + "&travelmode=driving");
                }
            } else {
                iziToast.show({
                    type: "error",
                    title: "<?= lang("error") ?>",
                    message: "<?= lang("allowGeoLocation") ?>",
                    position: "topCenter"
                });
            }
        });
        $(document).ready(function(data) {
            data.mask.definitions['~'] = '[+-]';
            $('input[type="tel"]').mask('0999 999 99 99');
        });
    });
</script>
<?php $this->load->view("includes/alert") ?>
<div class="modal fade" id="directionsModal" tabindex="-1" aria-labelledby="directionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="directionsModalLabel"><?= lang("getDirections") ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang("close") ?>"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center justify-content-center">
                    <div class="col">
                        <a href="<?= base_url() ?>" class="map-address text-dark-green" data-toggle="tooltip" data-placement="bottom" data-destination="<?= $settings->address ?>" rel="dofollow" title="<?= lang("getDirections") ?>" data-title="<?= lang("getDirections") ?>">
                            <i class="fa fa-map bg-primary p-3 text-white"></i> <?= lang("departmentOne") ?>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>" class="map-address text-dark-green" data-toggle="tooltip" data-placement="bottom" data-destination="<?= $settings->address_2 ?>" rel="dofollow" title="<?= lang("getDirections") ?>" data-title="<?= lang("getDirections") ?>">
                            <i class="fa fa-map bg-primary p-3 text-white"></i> <?= lang("departmentTwo") ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="common-btn" data-bs-dismiss="modal"><?= lang("close") ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="whatsappModalLabel">Whatsapp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang("close") ?>"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center justify-content-center">
                    <div class="col">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= str_replace(" ", "", $settings->phone_3) ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="Whatsapp" data-title="Whatsapp">
                            <i class="fa fa-whatsapp bg-success p-3 text-white"></i> Whatsapp
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="common-btn" data-bs-dismiss="modal"><?= lang("close") ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="phoneModalLabel"><?= lang("phone") ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang("close") ?>"></button>
            </div>
            <div class="modal-body">
                <div class="row text-center justify-content-center">
                    <div class="col">
                        <a target="_blank" href="tel:<?= str_replace(" ", "", $settings->phone_2) ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                            <i class="fa fa-phone bg-danger p-3 text-white"></i> <?= lang("departmentOne") ?>
                        </a>
                    </div>
                    <div class="col">
                        <a target="_blank" href="tel:<?= str_replace(" ", "", $settings->phone_3) ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                            <i class="fa fa-phone bg-danger p-3 text-white"></i> <?= lang("departmentTwo") ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="common-btn" data-bs-dismiss="modal"><?= lang("close") ?></button>
            </div>
        </div>
    </div>
</div>
</body>

</html>