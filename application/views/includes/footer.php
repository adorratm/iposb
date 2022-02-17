<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="support-area bg-dark-green pt-100 pb-70">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php foreach ($pages as $pageKey => $pageValue) : ?>
                <?php if ($pageValue->id == 4) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 col-xxl-2 mb-3">
                        <div class="support-item text-center mx-auto h-100 p-4 mb-0">
                            <a class="text-green" rel="dofollow" href="<?= base_url(lang("routes_page") . "/" . $pageValue->url) ?>" title="<?= lang("secureShopping") ?>">
                                <i class="bx bxs-shopping-bags"></i>
                                <h3><?= lang("secureShopping") ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($pageValue->id == 5) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 col-xxl-2 mb-3">
                        <div class="support-item text-center mx-auto h-100 p-4 mb-0">
                            <a class="text-green" rel="dofollow" href="<?= base_url(lang("routes_page") . "/" . $pageValue->url) ?>" title="<?= lang("InstallmentToCreditCard") ?>">
                                <i class="bx bx-credit-card"></i>
                                <h3><?= lang("InstallmentToCreditCard") ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($pageValue->id == 3) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 col-xxl-2 mb-3">
                        <div class="support-item text-center mx-auto h-100 p-4 mb-0">
                            <a class="text-green" rel="dofollow" href="<?= base_url(lang("routes_page") . "/" . $pageValue->url) ?>" title="<?= lang("fastCargo") ?>">
                                <i class="bx bxs-truck"></i>
                                <h3><?= lang("fastCargo") ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($pageValue->id == 3) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 col-xxl-2 mb-3">
                        <div class="support-item text-center mx-auto h-100 p-4 mb-0">
                            <a class="text-green" rel="dofollow" href="<?= base_url(lang("routes_page") . "/" . $pageValue->url) ?>" title="<?= lang("moneyBackGuarantee") ?>">
                                <i class="bx bx-undo"></i>
                                <h3><?= lang("moneyBackGuarantee") ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($pageValue->id == 6) : ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 col-xxl-2 mb-3">
                        <div class="support-item text-center mx-auto h-100 p-4 mb-0">
                            <a class="text-green" rel="dofollow" href="<?= base_url(lang("routes_page") . "/" . $pageValue->url) ?>" title="<?= lang("customerHappiness") ?>">
                                <i class="bx bx-happy"></i>
                                <h3><?= lang("customerHappiness") ?></h3>
                            </a>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>

<footer class="footer-area border-top pt-100 pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-6">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                            <picture>
                                <img loading="lazy" width="250" height="162" data-src="<?= get_picture("settings_v", $settings->logo) ?>" alt="<?= $settings->company_name ?>" class="lazyload img-fluid">
                            </picture>
                        </a>
                        <ul>
                            <li>
                                <i class="bx bxs-map"></i>
                                <a rel="nofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address) ?></a>
                                <a rel="nofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address)) ?>" target="_blank" title="<?= lang("map") ?>"><?= lang("map") ?></a>
                            </li>
                            <li>
                                <i class="bx bx-phone"></i>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><?= $settings->phone_1 ?></a>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_2 ?>"><?= $settings->phone_2 ?></a>
                            </li>
                            <li>
                                <i class="bx bxs-map"></i>
                                <a rel="nofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("address") ?>"><?= clean($settings->address_2) ?></a>
                                <a rel="nofollow" href="http://maps.google.com/maps?q=<?= urlencode(clean($settings->address_2)) ?>" target="_blank" title="<?= lang("map") ?>"><?= lang("map") ?></a>
                            </li>
                            <li>
                                <i class="bx bx-phone"></i>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_1 ?>"><?= $settings->phone_1 ?></a>
                                <a rel="dofollow" title="<?= lang("phone") ?>" href="tel:<?= $settings->phone_3 ?>"><?= $settings->phone_3 ?></a>
                            </li>
                            <li>
                                <i class="bx bx-mail-send"></i>
                                <a rel="dofollow" title="Email" href="mailto:<?= $settings->email ?>"><?= $settings->email ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3">
                <div class="footer-item">
                    <div class="footer-services">
                        <h3><?= lang("menus") ?></h3>
                        <?= $footer_menus ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3><?= lang("productCategories") ?></h3>
                        <ul>
                            <?php if (!empty($menuCategories)) : ?>
                                <?php foreach ($menuCategories as $key => $value) : ?>
                                    <?php if ($value->top_id == 0) : ?>
                                        <li><a rel="dofollow" href="<?= base_url(lang("routes_products") . "/" . $value->seo_url) ?>" title="<?= $value->title ?>"><?= $value->title ?></a></li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-lg-6">
                <div class="payment-cards">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>" title="<?= $settings->company_name ?>" rel="dofollow">
                                <img loading="lazy" width="1200" height="133" class="lazyload img-fluid" data-src="<?= asset_url("public/images/test.webp") ?>" alt="<?= $settings->company_name ?>">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
                <div class="social-links">
                    <ul class="justify-content-center justify-content-lg-end">
                        <?php if (!empty($settings->facebook)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->facebook ?>" title="Facebook" target="_blank">
                                    <i class='bx bxl-facebook color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->twitter)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->twitter ?>" title="Twitter" target="_blank">
                                    <i class='bx bxl-twitter color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->instagram)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->instagram ?>" title="Instagram" target="_blank">
                                    <i class='bx bxl-instagram color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->linkedin)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->linkedin ?>" title="Linkedin" target="_blank">
                                    <i class='bx bxl-linkedin color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->youtube)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->youtube ?>" title="Youtube" target="_blank">
                                    <i class='bx bxl-youtube color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->medium)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->medium ?>" title="Medium" target="_blank">
                                    <i class='bx bxl-medium color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <?php if (!empty($settings->pinterest)) : ?>
                            <li>
                                <a rel="nofollow" href="<?= $settings->pinterest ?>" title="Pinterest" target="_blank">
                                    <i class='bx bxl-pinterest color bx-2x'></i>
                                </a>
                            </li>
                        <?php endif ?>
                        <li>
                            <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>">
                                <img loading="lazy" data-src="<?= asset_url("public/images/sosyal.webp") ?>" alt="<?= $settings->company_name ?>" class="lazyload" width="150" height="45">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="copyright-area">
    <div class="container">
        <div class="copyright-item">
            <p>
                © <?= date("Y") ?> <a rel="dofollow" href="<?= base_url() ?>" title="<?= $settings->company_name ?>"><?= $settings->company_name ?></a>. <?= lang("allRightsReserved") ?>
            </p>
        </div>
    </div>
</div>

<!--====== Footer Ends ======-->



<!-- Back to top -->

<div class="go-top">
    <i class='bx bxs-up-arrow-circle'></i>
    <i class='bx bxs-up-arrow-circle'></i>
</div>
<!-- Jquery -->
<script src="<?= asset_url("public/js/jquery.min.js") ?>"></script>
<!-- #Jquery -->
<!--FOOTER END-->
<a class="fixed-maps bg-primary" href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#directionsModal" title="<?= lang("getDirections") ?>" data-toggle="tooltip" data-title="<?= lang("getDirections") ?>" data-placement="left"><i class="bx bx-map"></i></a>

<a rel="dofollow" class="fixed-phone bg-danger" href="<?= base_url() ?>" data-bs-toggle="modal" data-bs-target="#phoneModal" data-toggle="tooltip" data-title="<?= lang("phone_1") ?>" data-placement="left" title="<?= lang("phone_1") ?>"><i class="bx bx-phone"></i></a>

<a rel="nofollow" class="fixed-whatsapp bg-success" data-bs-toggle="modal" data-bs-target="#whatsappModal" href="<?= base_url() ?>" title="WhatsApp" data-toggle="tooltip" data-title="WhatsApp" data-placement="left"><i class="bx bxl-whatsapp"></i></a>

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

<?php if (empty($this->uri->segment(2)) && !empty($stories) && !empty($story_items)) : ?>
    <!-- Zuck -->
    <script defer src="<?= asset_url("public/js/zuck.css.min.js") ?>"></script>
    <script defer src="<?= asset_url("public/js/zuck.min.js") ?>"></script>
    <!-- #Zuck -->
<?php endif ?>

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
        <?php if (empty($this->uri->segment(2)) && !empty($stories) && !empty($story_items)) : ?>
            if ($("#stories").length > 0) {
                let currentSkin = getCurrentSkin();
                $(".stories").each(function(index) {
                    let elem = $(this).attr("id");
                    let stories = new Zuck(elem, {
                        backNative: true,
                        previousTap: true,
                        skin: currentSkin['name'],
                        autoFullScreen: currentSkin['params']['autoFullScreen'],
                        avatars: currentSkin['params']['avatars'],
                        paginationArrows: currentSkin['params']['paginationArrows'],
                        list: currentSkin['params']['list'],
                        cubeEffect: currentSkin['params']['cubeEffect'],
                        localStorage: true,
                        stories: [
                            <?php foreach ($stories as $story_key => $story_value) :
                            ?>
                                <?php if ($story_value->isActive) : ?>(Zuck.buildTimelineItem(
                                        "<?= $story_value->title ?>",
                                        "<?= get_picture("stories_v/" . ($story_value->folder_name), $story_value->img_url) ?>",
                                        "<?= $story_value->title ?>",
                                        "<?= (empty($story_value->url) ? base_url() : $story_value->url) ?>",
                                        <?= (empty($story_value->url) ? strtotime($story_value->createdAt) : strtotime($story_value->updatedAt)) ?>,
                                        [
                                            <?php if (!empty($story_items)) : ?>
                                                <?php foreach ($story_items as $story_item_key => $story_item_value) : ?>
                                                    <?php if ($story_item_value->isActive && $story_item_value->story_id == $story_value->id) : ?>["<?= $story_item_value->id ?>",
                                                            "<?= $story_item_value->type ?>",
                                                            <?= $story_item_value->length ?>,
                                                            "<?= ($story_item_value->type == "photo" ? asset_url("panel/uploads/stories_v/{$story_value->folder_name}/{$story_item_value->src}") : asset_url("panel/uploads/stories_v/{$story_value->folder_name}/{$story_item_value->src}"))  ?>",
                                                            "<?= ($story_item_value->type == "photo" ? asset_url("panel/uploads/stories_v/{$story_value->folder_name}/{$story_item_value->src}") : asset_url("panel/uploads/stories_v/{$story_value->folder_name}/{$story_item_value->src}"))  ?>",
                                                            '<?= $story_item_value->url_text ?>',
                                                            '<?= $story_item_value->url ?>',
                                                            false,
                                                            timestamp()
                                                        ],
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        ]
                                    )),
                                <?php endif; ?>
                            <?php endforeach; ?>
                        ],
                        language: {
                            unmute: '<?= lang("unmute") ?>',
                            keyboardTip: '<?= lang("keyboardTip") ?>',
                            visitLink: '<?= lang("visitLink") ?>',
                            time: {
                                ago: '<?= lang("ago") ?>',
                                hour: '<?= lang("hour") ?>',
                                hours: '<?= lang("hours") ?>',
                                minute: '<?= lang("minute") ?>',
                                minutes: '<?= lang("minutes") ?>',
                                fromnow: '<?= lang("fromnow") ?>',
                                seconds: '<?= lang("seconds") ?>',
                                yesterday: '<?= lang("yesterday") ?>',
                                tomorrow: '<?= lang("tomorrow") ?>',
                                days: '<?= lang("days") ?>'
                            }
                        }
                    });
                });

            }
        <?php endif; ?>
        <?php if ($this->uri->segment(2) === lang("routes_products")) : ?>
            $(window).on("load", function() {
                /************************************************
                 * Price Slider
                 ***********************************************/
                <?php $amount = !empty($_GET["amount"]) ? explode("-", filter_var($_GET["amount"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) : null; ?>
                let minPrice = parseFloat($("#amount").data("minprice")).toFixed(2);
                <?php if (!empty($amount[0])) : ?>
                    minPrice = <?= $amount[0] ?>;
                <?php endif ?>
                let maxPrice = parseFloat($("#amount").data("maxprice")).toFixed(2);
                <?php if (!empty($amount[1]) && $amount[1] > 0) : ?>
                    maxPrice = <?= $amount[1] ?>;
                <?php endif ?>
                $("#amount").val(parseFloat(minPrice).toFixed(2) + "<?= $symbol ?>" +
                    " - " + parseFloat(maxPrice).toFixed(2) + "<?= $symbol ?>");
            });
        <?php endif ?>
        $(document).ready(function(data) {
            data.mask.definitions['~'] = '[+-]';
            $('input[type="tel"]').mask('0999 999 99 99');
        });
        let element = $(".offcanvas-add-cart>div.item-count,.offcanvas-add-cart>span.item-count");
        element.load('<?= asset_url("home/headerCart/count") ?>');
        let element2 = $(".offcanvas-wishlish>div.item-count,.offcanvas-wishlish>span.item-count");
        element2.load('<?= asset_url("home/headerWishlist/count") ?>');
        /**
         * Add To Cart
         */
        $(document).on("click", ".addToCart", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            let productId = $this.data("product-id");
            let quantity = $this.data("quantity");
            let pvgId = $this.data("pvgId");
            let partArray = $this.data("part-array");
            $.post('<?= base_url(lang("routes_add-to-cart")) ?>', {
                "id": productId,
                "quantity": quantity,
                "pvgId": pvgId,
                "partArray": partArray,
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-add-cart-wrapper").load('<?= asset_url("home/headerCart") ?>');
                    $(".myCart").load('<?= asset_url("home/cart") ?>');
                    element.load('<?= asset_url("home/headerCart/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });
        /**
         * Update Cart
         */
        $(document).on("change", ".updateItem", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            let rowId = $this.data("rowid");
            let qty = $this.val();
            $.post('<?= base_url(lang("routes_update-cart")) ?>', {
                "rowid": rowId,
                "qty": qty,
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-add-cart-wrapper").load('<?= asset_url("home/headerCart") ?>');
                    $(".myCart").load('<?= asset_url("home/cart") ?>');
                    element.load('<?= asset_url("home/headerCart/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });
        /**
         * Remove From Cart
         */
        $(document).on("click", ".removeItem", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            let rowId = $this.data("rowid");
            $.post('<?= base_url(lang("routes_remove-from-cart")) ?>', {
                "rowid": rowId,
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-add-cart-wrapper").load('<?= asset_url("home/headerCart") ?>');
                    $(".myCart").load('<?= asset_url("home/cart") ?>');
                    element.load('<?= asset_url("home/headerCart/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });
        /**
         * Empty Cart
         */
        $(document).on("click", ".emptyCart", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            $.post('<?= base_url(lang("routes_empty-cart")) ?>', {
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-add-cart-wrapper").load('<?= asset_url("home/headerCart") ?>');
                    $(".myCart").load('<?= asset_url("home/cart") ?>');
                    element.load('<?= asset_url("home/headerCart/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });
        /**
         * Add To Wishlist
         */
        $(document).on("click", ".addToWishlist", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            let productId = $this.data("product-id");
            if ($this.find("i").hasClass("text-danger")) {
                $.post('<?= base_url(lang("routes_remove-from-wishlist")) ?>', {
                    "id": productId,
                    "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                }, function(response) {
                    if (response.success) {
                        iziToast.success({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                        $(".offcanvas-wishlist-wrapper").load('<?= asset_url("home/headerWishlist") ?>');
                        element2.load('<?= asset_url("home/headerWishlist/count") ?>');
                        $this.find("i").removeClass("text-danger");
                    } else {
                        iziToast.error({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                    }
                    $this.removeAttr("disabled");
                }, 'JSON');
            } else {
                $.post('<?= base_url(lang("routes_add-to-wishlist")) ?>', {
                    "id": productId,
                    "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                }, function(response) {
                    if (response.success) {
                        iziToast.success({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                        $(".offcanvas-wishlist-wrapper").load('<?= asset_url("home/headerWishlist") ?>');
                        element2.load('<?= asset_url("home/headerWishlist/count") ?>');
                        $this.find("i").addClass("text-danger");
                    } else {
                        iziToast.error({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                    }
                    $this.removeAttr("disabled");
                }, 'JSON');
            }

        });
        /**
         * Remove From Wishlist
         */
        $(document).on("click", ".removeWishlistItem", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            let id = $this.data("id");
            $.post('<?= base_url(lang("routes_remove-from-wishlist")) ?>', {
                "id": id,
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-wishlist-wrapper").load('<?= asset_url("home/headerWishlist") ?>');
                    $(".myWishlist").load('<?= asset_url("home/wishlist/render") ?>');
                    element2.load('<?= asset_url("home/headerWishlist/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });
        /**
         * Empty Wishlist
         */
        $(document).on("click", ".emptyWishlist", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let $this = $(this);
            $this.attr("disabled", "disabled");
            $.post('<?= base_url(lang("routes_empty-wishlist")) ?>', {
                "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
            }, function(response) {
                if (response.success) {
                    iziToast.success({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                    $(".offcanvas-wishlist-wrapper").load('<?= asset_url("home/headerWishlist") ?>');
                    $(".myWishlist").load('<?= asset_url("home/wishlist/render") ?>');
                    element2.load('<?= asset_url("home/headerWishlist/count") ?>');
                } else {
                    iziToast.error({
                        title: response.title,
                        message: response.msg,
                        position: "topCenter",
                    });
                }
                $this.removeAttr("disabled");
            }, 'JSON');
        });

    });
</script>
<?php if ($this->uri->segment(2) === lang("routes_choose-address")) : ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $("input[name='address']").each(function() {
                if ($(this).is(":checked")) {
                    $(this).change();
                }
            })
        });

        function changeSelectedAddress($this) {
            let selected = $this.val();
            let url = "<?= asset_url("home/changeSelectedAddress/") ?>" + selected;
            let formData = new FormData();
            formData.append("<?= $this->security->get_csrf_token_name() ?>", "<?= $this->security->get_csrf_hash() ?>");
            createAjax(url, formData, function() {});
        }
    </script>
<?php endif ?>
<?php if ($this->uri->segment(2) === lang("routes_cart")) : ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $(document).on("click", ".applyCoupon", function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                let $this = $(this);
                $this.attr("disabled", "disabled");
                $.post('<?= asset_url("home/applycoupon") ?>', {
                    'coupon': $("input[name='coupon']").val(),
                    "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                }, function(response) {
                    if (response.success) {
                        iziToast.success({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                        setTimeout(function() {
                            window.location.href = "<?= base_url(lang("routes_cart")) ?>"
                        }, 2000);
                    } else {
                        iziToast.error({
                            title: response.title,
                            message: response.msg,
                            position: "topCenter",
                        });
                    }
                    $this.removeAttr("disabled");
                }, 'JSON');
            });
        });
    </script>
<?php endif ?>
<?php if ($this->uri->segment(2) === lang("routes_account") || $this->uri->segment(2) === lang("routes_choose-address")) : ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $(document).on("click", ".createAddressBtn", function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                let url = $(this).data("url");
                $('#addressModal').iziModal('destroy');
                createModal("#addressModal", "<?= lang("createNewAddress") ?>", "<?= lang("createNewAddress") ?>", 600, true, "20px", 0, "#24b4a5", "#fff", 1040, function() {
                    $.post(url, {
                        "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                    }, function(response) {
                        $("#addressModal .iziModal-content").html(response);
                    });
                });
                openModal("#addressModal");
            });

            $(document).on("click", ".editAddressBtn", function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                let url = $(this).data("url");
                $('#addressModal').iziModal('destroy');
                createModal("#addressModal", "<?= lang("editAddress") ?>", "<?= lang("editAddress") ?>", 600, true, "20px", 0, "#24b4a5", "#fff", 1040, function() {
                    $.post(url, {
                        "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                    }, function(response) {
                        $("#addressModal .iziModal-content").html(response);

                    });
                });
                openModal("#addressModal");
            });

            $(document).on('click', '.deleteAddress', function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                let url = $(this).data("url");
                swal.fire({
                    title: '<?= lang("areYouSure") ?>',
                    text: "<?= lang("cannotGetBack") ?>",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '<?= lang("yedDeleteIt") ?>',
                    cancelButtonText: "<?= lang("noCancelIt") ?>"
                }).then(function(result) {
                    if (result.value) {
                        let formData = new FormData();
                        formData.append("<?= $this->security->get_csrf_token_name() ?>", "<?= $this->security->get_csrf_hash() ?>");
                        createAjax(url, formData, function() {
                            $("#addressPull2").load("<?= asset_url("home/get_address/chooseable") ?>");
                        });
                    }
                })
            });
        })
    </script>
<?php endif ?>
<?php if ($this->uri->segment(2) === lang("routes_choose-payment-type")) : ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $(document).on("click", ".payWithBankTransfer", function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                let merchant_oid = $(this).data("merchant-oid");
                let formData = new FormData();
                formData.append("merchant_oid", merchant_oid);
                formData.append("payWithBankTransfer", true);
                formData.append("<?= $this->security->get_csrf_token_name() ?>", "<?= $this->security->get_csrf_hash() ?>");
                createAjax("<?= base_url(lang("routes_payment")) ?>", formData, function(response) {
                    window.location.href = response.url
                });
            });
        });
    </script>
<?php endif ?>
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
                            <i class="bx bx-map bg-primary p-3 text-white"></i> <?= lang("departmentOne") ?>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url() ?>" class="map-address text-dark-green" data-toggle="tooltip" data-placement="bottom" data-destination="<?= $settings->address_2 ?>" rel="dofollow" title="<?= lang("getDirections") ?>" data-title="<?= lang("getDirections") ?>">
                            <i class="bx bx-map bg-primary p-3 text-white"></i> <?= lang("departmentTwo") ?>
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
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $settings->phone_3 ?>&amp;text=<?= urlencode(lang("hello") . " " . $settings->company_name) ?>." class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="Whatsapp" data-title="Whatsapp">
                            <i class="bx bxl-whatsapp bg-success p-3 text-white"></i> Whatsapp
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
                        <a target="_blank" href="tel:<?= $settings->phone_2 ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                            <i class="bx bx-phone bg-danger p-3 text-white"></i> <?= lang("departmentOne") ?>
                        </a>
                    </div>
                    <div class="col">
                        <a target="_blank" href="tel:<?= $settings->phone_3 ?>" class="text-dark-green" data-toggle="tooltip" data-placement="bottom" rel="dofollow" title="<?= lang("phone") ?>" data-title="<?= lang("phone") ?>">
                            <i class="bx bx-phone bg-danger p-3 text-white"></i> <?= lang("departmentTwo") ?>
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