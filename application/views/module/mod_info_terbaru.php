<?php
$latestList = $this->berita->getBeritaWithLimit(1)->row();
$latestOther = $this->berita->getBeritaWithLimit(4, 1)->result();
?>

<div class="card border-0 rounded-0  my-3">
    <div class="card-header-sm p-2 bg-white  rounded-0">
        <span class="text-white font-weight-bold text-primary h4"> <i class="fas fa-bullhorn"></i> Info Terbaru</span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= URL_IMAGE_NEWS . $latestList->gambar ?>" class="img-fluid"/>
                <h4 class=" pt-1 h5 text-justify"><?= $latestList->judul ?></h4>
                <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($latestList->tanggal) ?></small><br>
                <p class="text-justify small"><?= character_limiter(strip_tags($latestList->isi_berita), 650, " [...]") ?>
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php foreach ($latestOther as $i => $data) { ?>

                        <div class="col-md-12">
                            <?php if ($i > 0) { ?>
                                <hr>
                            <?php } ?>
                            <div class="row p-0">
                                <div class="col-md-3 my-1 p-0">
                                    <img src="<?= URL_IMAGE_NEWS . $data->gambar ?>" class="img-fluid"/>
                                </div>
                                <div class="col-md-9 pl-1">
                                    <p class="text-justify title-news "><?= character_limiter(strip_tags($data->judul), 150, " [...]") ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>