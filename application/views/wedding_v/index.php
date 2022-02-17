<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("createWeddingPackage")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("createWeddingPackage")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_detail_logo) ?>" alt="<?= strto("lower|upper", lang("createWeddingPackage")) ?>" class="lazyload w-100 img-fluid">
    </div>
</div>

<section class="about-area py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12">
                <div class="about-content">
                    <div class="top">
                        <h2 class="text-center mb-5"><?= strto("lower|upper", lang("createWeddingPackage")) ?></h2>
                        <?php $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        ); ?>
                        <form id="create-wedding-package" method="POST" enctype="multipart/form-data" onsubmit="return false">
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                            <div class="row">
                                <div class="col-12 col-lg-9 mb-3">
                                    <input class="form-control form-control-lg" type="text" name="package_name" placeholder="<?= lang("givePackageName") ?>" required>
                                </div>
                                <div class="col-12 col-lg-3 mb-3">
                                    <button aria-label="<?= $settings->company_name ?>" type="submit" class="btn common-btn w-100 createWeddingPackage" data-url="<?= base_url(lang("routes_create-wedding-package")) ?>">
                                        <?= lang("createWeddingPackage") ?>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="form-load">
                            <?php $this->load->view("includes/package-form", $this->viewData) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    /**
     * IsEmpty Function
     */
    function isEmpty(obj) {
        if (typeof obj == "number") return false;
        else if (typeof obj == "string") return obj.length === 0;
        else if (Array.isArray(obj)) return obj.length === 0;
        else if (typeof obj == "object")
            return obj == null || Object.keys(obj).length === 0;
        else if (typeof obj == "boolean") return false;
        else return !obj;
    }
    window.addEventListener('DOMContentLoaded', function() {
        $(document).on("click", ".createWeddingPackage", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let url = $(this).data("url");
            let formData = new FormData(document.getElementById("create-wedding-package"));
            createAjax(url, formData, function() {
                $("#form-load").load("<?= asset_url("home/loadForm") ?>");
            });
        });
        $(document).on("click", ".add-basket-package", function(e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            let url = $(this).data("url");
            let formData = new FormData();
            let id = $(this).data("id");
            let gift = $("#" + id + "-gift").val();
            if (isEmpty(gift)) {
                iziToast.error({
                    title: "<?= lang("error") ?>",
                    message: "<?= lang("pleaseChooseYourWeddingGift") ?>",
                    position: "topCenter"
                });
            } else {
                formData.append("id", id);
                formData.append("gift", gift);
                formData.append("<?= $csrf["name"] ?>", "<?= $csrf["hash"] ?>");
                createAjax(url, formData, function(response) {
                    Swal.fire({
                        title: '<?= lang("weddingSwalTitle") ?>',
                        text: "<?= lang("weddingSwalDesc") ?>",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '<?= lang("weddingSwalOk") ?>',
                        cancelButtonText: '<?= lang("weddingSwalCancel") ?>',
                        width: 834,
                        imageUrl: response.imageUrl,
                        imageWidth: '100%',
                        imageAlt: '<?= lang("weddingPackage") ?>',
                    }).then((result) => {
                        if (result.value) {
                            createAjax("<?= asset_url("home/createWeddingProduct") ?>", formData, function(responseSecond) {
                                $.post('<?= base_url(lang("routes_add-to-cart")) ?>', {
                                    "id": responseSecond.product_id,
                                    "quantity": responseSecond.quantity,
                                    "pvgId": null,
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
                                        $(".offcanvas-add-cart>div.item-count,.offcanvas-add-cart>span.item-count").load('<?= asset_url("home/headerCart/count") ?>');
                                        setTimeout(function() {
                                            window.location.assign("<?= base_url(lang("routes_cart")) ?>");
                                        }, 2000);
                                    } else {
                                        iziToast.error({
                                            title: response.title,
                                            message: response.msg,
                                            position: "topCenter",
                                        });
                                    }
                                }, 'JSON');
                            });
                        }
                    })
                });
            }
        });
        $(document).on("click",".package-delete",function(e){
            e.preventDefault();
            e.stopImmediatePropagation();
            let url = "<?=asset_url("home/deleteWeddingPackage")?>";
            let id = $(this).data("id");
            let formData = new FormData();
            formData.append("id",id);
            formData.append("<?= $csrf["name"] ?>", "<?= $csrf["hash"] ?>");
            createAjax(url,formData,function(){
                $("#form-load").load("<?= asset_url("home/loadForm") ?>");
            });
        });
    });
</script>