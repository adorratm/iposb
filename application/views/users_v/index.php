<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("account")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("account")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->about_logo) ?>" alt="<?= strto("lower|upper", lang("account")) ?>" class="lazyload w-100 img-fluid">
    </div>
</div>



<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-top">
            <div class="col-xl-3 col-md-4 mb-3">
                <div class="widget-area">
                    <div class="categories widget-item">
                        <ul class="nav account-menu-list flex-column">
                            <li>
                                <a data-bs-toggle="pill" class="active" id="v-orders-tab" href="#pills-order" role="tab" aria-controls="v-orders" aria-selected="false" rel="dofollow" title="<?= lang("orders") ?>"><i class="bx bx-cart"></i> <?= lang("orders") ?></a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" id="v-wishlist-tab" href="#pills-wishlist" rel="dofollow" title="<?= lang("wishlist") ?>"><i class="bx bx-heart"></i> <?= lang("wishlist") ?></a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" id="v-address-tab" role="tab" aria-controls="v-address" aria-selected="false" href="#pills-address" rel="dofollow" title="<?= lang("addresses") ?>"><i class="bx bx-map"></i> <?= lang("addresses") ?></a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" id="v-account-details-tab" href="#pills-account" role="tab" aria-controls="v-account-details" aria-selected="true" rel="dofollow" title="<?= lang("accountDetails") ?>"><i class="bx bx-user"></i> <?= lang("accountDetails") ?></a>
                            </li>
                            <li>
                                <a rel="dofollow" title="<?= lang("logout") ?>" href="<?= base_url(lang("routes_logout")) ?>"><i class="bx bx-power-off"></i> <?= lang("logout") ?></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-md-8 mb-3">
                <div class="tab-content my-account-tab" id="v-orders pills-tabContent" role="tabpanel" aria-labelledby="v-orders-tab">

                    <div class="tab-pane fade show active" id="pills-order">
                        <div class="my-account-order account-wrapper">
                            <h2 class="account-title text-center"><?= lang("orders") ?></h2>
                            <div class="account-table text-center mt-30 table-responsive">
                                <table class="table table-hover table-light table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="no"><?= lang("phone") ?></th>
                                            <th class="date"><?= lang("orderTotal") ?></th>
                                            <th class="status"><?= lang("orderStatus") ?></th>
                                            <th class="total"><?= lang("paymentType") ?></th>
                                            <th class="date"><?= lang("orderShippingStatus") ?></th>
                                            <th class="date"><?= lang("orderDate") ?></th>
                                            <th class="date"><?= lang("actions") ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($orders)) : ?>
                                            <?php foreach ($orders as $key => $value) : ?>
                                                <tr>
                                                    <td><?= $value->phone ?></td>
                                                    <td><?= number_format($value->total, 2) ?> <?= $value->symbol ?></td>
                                                    <td><?= $value->status ?></td>
                                                    <td><?= $value->paymentType ?></td>
                                                    <td><?= $value->shippingStatus ?></td>
                                                    <td><?= $value->createdAt ?></td>
                                                    <td><a rel="dofollow" href="javascript:void(0)" class="btn common-btn rounded-0 text-white getOrderBtn" data-url="<?= asset_url("home/order_detail/" . $value->order_code) ?>" data-toggle="tooltip" data-placement="top" data-title="<?= lang("orderDetail") ?>" title="<?= lang("orderDetail") ?>"><i class="bx bx-file"></i></a></td>
                                                </tr>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade myWishlist" role="tabpanel" aria-labelledby="v-wishlist-tab" id="pills-wishlist">
                        <div class="my-account-payment account-wrapper">
                            <?php $this->load->view("includes/wishlist") ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-address">

                        <div class="my-account-address account-wrapper">
                            <div class="d-flex flex-wrap">
                                <div class="flex-grow-1 my-auto text-center">
                                    <h5 class="billing-address my-auto"><?= lang("deliveryAndInvoiceAddress") ?></h5>
                                </div>
                                <div class="flex-shrink-1 my-auto">
                                    <a rel="dofollow" class="common-btn btn-sm rounded-0 my-auto d-block createAddressBtn" data-url="<?= asset_url("home/newAddressForm") ?>" href="javascript:void(0)" title="<?= lang("createNewAddress") ?>"><i class="bx bx-edit"></i> <?= lang("createNewAddress") ?></a>
                                </div>
                            </div>
                            <div id="addressPull">
                                <?php $this->load->view("includes/address") ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-account">
                        <div class="my-account-details account-wrapper tab-pane fade show active" id="v-account-details" role="tabpanel" aria-labelledby="v-account-details-tab">
                            <h2 class="account-title text-center"><?= lang("accountDetails") ?></h2>

                            <div class="contact-area">
                                <?php $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                ); ?>
                                <form action="<?= asset_url("home/accountUpdate") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?= lang("fullName") ?></label>
                                                <input type="text" class="form-control" name="full_name" placeholder="<?= lang("fullName") ?>" maxlength="70" minlength="4" value="<?= !empty(set_value('full_name')) ? set_value('full_name') : $user->full_name ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?= lang("email") ?></label>
                                                <input type="email" class="form-control" name="email" placeholder="<?= lang("email") ?>" minlength="3" value="<?= !empty(set_value('email')) ? set_value('email') : $user->email ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?= lang("phone") ?></label>
                                                <input type="tel" class="form-control" name="phone" placeholder="<?= lang("phone") ?>" minlength="11" maxlength="20" value="<?= !empty(set_value('phone')) ? set_value('phone') : $user->phone ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?= lang("password") ?></label>
                                                <input type="password" class="form-control" name="password" placeholder="<?= lang("password") ?>" minlength="6" value="<?= !empty(set_value('password')) ? set_value('password') : null ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?= lang("passwordRepeat") ?></label>
                                                <input type="password" class="form-control" name="passwordRepeat" placeholder="<?= lang("passwordRepeat") ?>" minlength="6" <?= !empty(set_value('passwordRepeat')) ? set_value('passwordRepeat') : null ?>>
                                            </div>
                                        </div>
                                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                        <div class="col-md-12">
                                            <button aria-label="<?=$settings->company_name?>" class="common-btn" type="submit"><?= lang("updateDetails") ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.cart-area -->

<!-- Address Modal -->
<div id="addressModal"></div>
<div id="ordersModal"></div>

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
            let url = $(this).data("url");
            swal.fire({
                title: '<?= lang("areYouSure") ?>',
                text: "<?= lang("cannotGetBack") ?>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<?= lang("yesDeleteIt") ?>',
                cancelButtonText: "<?= lang("noCancelIt") ?>"
            }).then(function(result) {
                if (result.value) {
                    let formData = new FormData();
                    formData.append("<?= $this->security->get_csrf_token_name() ?>", "<?= $this->security->get_csrf_hash() ?>");
                    createAjax(url, formData, function() {
                        $("#addressPull").load("<?= asset_url("home/get_address") ?>");
                        $("#addressPull2").load("<?= asset_url("home/get_address/chooseable") ?>");
                    });
                }
            })
        });
        $(document).on("click", ".getOrderBtn", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $('#ordersModal').iziModal('destroy');
            let url = $(this).data("url");
            createModal("#ordersModal", "<?= lang("orderDetail") ?>", "<?= lang("orderDetail") ?>", 600, true, "20px", 0, "#24b4a5", "#fff", 1040, function() {
                $.post(url, {
                    "<?= $this->security->get_csrf_token_name() ?>": "<?= $this->security->get_csrf_hash() ?>"
                }, function(response) {
                    $("#ordersModal .iziModal-content").html(response);
                });
            });
            openModal("#ordersModal");
            $("#ordersModal").iziModal("setFullscreen", false);
        });
    });
</script>