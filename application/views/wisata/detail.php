<div class="content">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?= $title ?></h5>
            <div class="heading-elements">
            </div>
        </div>
        <?php foreach ($detail_wisata as $val) { ?>
            <div class="panel-body">
                <img src="<?= base_url('media/images/' . $val['foto']); ?>" align="center">
                <h5><?= $val['nama']; ?></h5>
                <p class="content-group"><?= $val['keterangan']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>