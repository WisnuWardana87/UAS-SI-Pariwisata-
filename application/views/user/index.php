<!--== Header Area End ==-->

<!--== Slider Area Start ==-->
<section id="slider-area">
    <!--== slide Item One ==-->
    <img src="<?= base_url(); ?>assets2/img/image.JPG">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                </div>
                <div class="col-lg-7 text-right">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="slider-right-text">

                                <h1>Temukus Village Tours</h1>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== slide Item One ==-->
</section>
<!--== Slider Area End ==-->

<!--== About Us Area End ==-->

<!--== Partner Area End ==-->

<!--== Services Area End ==-->

<!--== Fun Fact Area Start ==-->
<!--== Fun Fact Area End ==-->

<!--== Choose Car Area Start ==-->
<section id="choose-car" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Temukus Village Tours</h2>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="row">
            <!-- Choose Area Content Start -->
            <div class="col-lg-12 ">
                <div class="choose-content-wrap">
                    <!-- Choose Area Tab Menu -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active " id="home-tab" data-toggle="tab" role="tab" aria-selected="true">Populer Travel</a>
                        </li>

                    </ul>
                    <!-- Choose Area Tab Menu -->

                    <!-- Choose Area Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Popular Cars Tab Start -->
                        <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Popular Cars Content Wrapper Start -->
                            <div class="popular-cars-wrap">
                                <!-- Filtering Menu -->
                                <div class="popucar-menu text-center">
                                </div>

                                <!-- Filtering Menu -->

                                <!-- PopularCars Tab Content Start -->
                                <div class="row popular-car-gird">
                                    <!-- Single Popular Car Start -->
                                    <?php foreach ($wisata as $val) { ?>
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
                                                    <br>
                                                    <div class="p-car-feature">
                                                        <a href="<?php echo base_url(); ?>index.php/Frontend/detail/<?php echo $val['id_wisata']; ?>"> DETAIL</a>
                                                        <a href="<?php echo base_url(); ?>index.php/Frontend/keranjang/<?php echo $val['id_wisata']; ?>"> Add to cart</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <!-- Single Popular Car End -->

                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

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
        </div>
    </div>
</section>
<!--== Choose Car Area End ==-->

<!--== Pricing Area Start ==-->
<!--== Pricing Area End ==-->

<!--== Articles Area End ==-->