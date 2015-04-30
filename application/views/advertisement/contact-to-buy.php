
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content col-xs-8">
            <div class="row">
                <div class="col-xs-7">
                    <img id="ad-img-view" class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" />

                    <div class="thumb">
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image_url']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image1']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image2']; ?>" alt="" />
                        <img class="img-responsive" src="<?= base_url() . UPLOAD_PATH . $ad['image3']; ?>" alt="" />
                    </div>
                </div>
                <div class="col-xs-5">
                    <div class="product-info text-left">
                        <div class="row">
                            <h3><?= ucfirst($ad['title']); ?></h3>
                            <h4> <span class="location-view"><?= ucfirst($ad['location']); ?></span></h4>
                            <div class="row price-view">
                                Rs. <?= $ad['price']; ?>
                            </div>
                            <div  class="contact-details">
                                <h4> Contact Details:</h4>
                                <h5><?= $user->name; ?></h5>
                                <h5><?= $user->email; ?></h5>
                                <h5><?= $user->phone; ?></h5>
                                <h5><?= $user->city; ?> , <?= $user->country; ?></h5>
                                <h5><?= $user->address; ?></h5>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <a class="buy-view align-center text-center" href="<?= base_url() ?>advertisement/buy/<?= $ad['id']; ?>">Request to Buy</a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="holder">
                    <div class="block-single">

                        <div class="text-wrap">

                            <span class="description-view">
                                <h3>Description:</h3>
                                <?= $ad['description']; ?>
                            </span>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>