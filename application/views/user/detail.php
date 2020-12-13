<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2><?= $title ?></h2>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg">
                <?php foreach ($detail_wisata as $val) { ?>
                    <div class="car-details-content">
                        <h2><?= $val['nama']; ?></h2>
                        <div class="single-car-preview">
                            <img src="<?= base_url('media/images/' . $val['foto']); ?>" alt="JSOFT">
                        </div>
                        <div class="car-details-info blog-content">
                            <p><?= $val['keterangan']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>