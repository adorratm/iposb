<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="tab-pane fade show active" id="site-informations" role="tabpanel" aria-labelledby="site-informations-tab">
    <div class="row">
        <div class="form-group col-md-12">
            <label>Şirket Adı</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Şirketin ya da Sitenizin adı" name="company_name" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label>Slogan</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Sloganınız" name="slogan" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Telefon 1</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Telefon numaranız" name="phone_1" required>
        </div>
        <div class="form-group col-md-6">
            <label>Telefon 2</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Diğer telefon numaranız (opsiyonel)" name="phone_2">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Telefon 3</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Diğer telefon numaranız (opsiyonel)" name="phone_3">
        </div>
        <div class="form-group col-md-6">
            <label>Fax</label>
            <input class="form-control form-control-sm rounded-0" placeholder="Diğer fax numaranız (opsiyonel)" name="fax_1">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label>Ücretsiz Kargo Minimum Sepet Tutarı</label>
            <input type="number" class="form-control form-control-sm rounded-0" min="0" placeholder="Ücretsiz Kargo Minimum Sepet Tutarı" name="shippingMinPrice">
        </div>
        <div class="form-group col-md-6">
            <label>Kargo Tutarı</label>
            <input type="number" class="form-control form-control-sm rounded-0" min="0" placeholder="Kargo Tutarı" name="shippingPrice">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label>Düğün Paketi İndirim Oranı (%)</label>
            <input type="number" class="form-control form-control-sm rounded-0" min="0" value="0" placeholder="Düğün Paketi İndirim Oranı" name="weddingDiscount">
        </div>
        <div class="form-group col-md-12">
            <label>Düğün Paketi Hediyeleri (',' Virgül ile ayırabilirsiniz.)</label>
            <select name="weddingGifts[]" multiple id="weddingGifts" class="tagsInput form-control">
                
            </select>
        </div>
    </div>
</div>