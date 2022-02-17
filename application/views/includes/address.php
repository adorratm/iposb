<?php if (!empty($address_informations)) : ?>
    <?php foreach ($address_informations as $key => $value) : ?>
        <address class="p-3" style="border:2px solid #24b4a5;">
            <p class="mb-3">
                <strong class="font-weight-bolder text-dark-green">
                    <?= $value->title ?>
                </strong>
            </p>
            <address class="mb-3"><?= $value->address ?> <?= $value->quarter ?> <?= $value->neighborhood ?> <?= $value->district ?> <?= $value->city ?>, <?= $value->country ?> <?= $value->postalCode ?> </address>
            <p class="mb-3"> <?= lang("addressPhone") ?> : <?= $value->phone ?> </p>
            <a rel="dofollow" data-url="<?= asset_url("home/editAddressForm/{$value->id}") ?>" href="javascript:void(0)" class="btn common-btn d-inline-block text-white p-3 me-1 editAddressBtn" title="<?= lang("addressEdit") ?>"><i class="bx bx-edit"></i> <?= lang("addressEdit") ?></a>
            <button aria-label="<?=$settings->company_name?>" data-url="<?= asset_url("home/delete_address/{$value->id}") ?>" class="btn common-btn d-inline-block text-white p-3 deleteAddress"><i class="bx bx-trash"></i> <?= lang("addressDelete") ?></button>
        </address>
    <?php endforeach ?>
<?php endif ?>