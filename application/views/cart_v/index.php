<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container text-center">
                <div class="title-content">
                    <h2><?= strto("lower|upper", lang("cart")) ?></h2>
                    <ul>
                        <li>
                            <a rel="dofollow" href="<?= base_url(); ?>" title="<?= strto("lower|upper", lang("home")) ?>"><?= strto("lower|upper", lang("home")) ?></a>
                        </li>
                        <li>
                            <span><?= strto("lower|upper", lang("cart")) ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img width="1920" height="500" data-src="<?= get_picture("settings_v", $settings->product_logo) ?>" class="img-fluid lazyload w-100" alt="<?= strto("lower|upper", lang("cart")) ?>">
    </div>
</div>


<section class="blog-area four ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content">
                    <div class="top myCart">
                        <?php $this->load->view("includes/cart") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>