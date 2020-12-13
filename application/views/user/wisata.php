<!--== Page Title Area Start ==-->
<section id="page-title-area" class="overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Travel Temukus Village</h2>
                    <br>
                    <br>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!-- Choose Area Content Start -->
<div class="col-lg-12">
    <br>
    <div class="choose-content-wrap">
        <!-- Choose Area Tab content -->
        <div class="tab-content" id="myTabContent">
            <!-- Popular Cars Tab Start -->
            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                <!-- Popular Cars Content Wrapper Start -->
                <div class="popular-cars-wrap">
                    <!-- NewestCars Tab Content Start -->
                    <div class="row newest-car-gird">
                        <!-- Single Newest Car Start -->
                        <?php foreach ($jenis_wisata as $val) { ?>
                            <div class="col-lg-4 col-md-6 mpv">
                                <div class="single-popular-car">
                                    <div class="p-car-thumbnails">
                                        <img width='700' height='393' src="<?= base_url('media/images/' . $val['foto']); ?>">
                                    </div>

                                    <div class="p-car-content">
                                        <h3>
                                            <a><?= $val['nama']; ?></a>
                                            <span class="price"><i class="fa fa-tag"></i><?= $val['harga_tiket']; ?></span>
                                        </h3>
                                        <h5>
                                            <a><?= $val['jam_buka']; ?>-<?= $val['jam_tutup']; ?></a>
                                        </h5>
                                        <div class="p-car-feature">
                                            <br>
                                            <a href=""> LIHAT DETAIL</a>
                                            <a href="<?php echo base_url(); ?>index.php/Frontend/keranjang/<?php echo $val['id_wisata']; ?>"> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Single Newest Car Start -->
                    </div>
                    <!-- NewestCars Tab Content End -->
                </div>
                <!-- Newest Cars Content Wrapper End -->
            </div>
            <!-- Newest Cars Tab End -->

            <!-- Office Map Tab -->
            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                <div class="map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                </div>
            </div>
            <!-- Office Map Tab -->
        </div>
        <!-- Choose Area Tab content -->
    </div>
</div>
<!-- Choose Area Content End -->