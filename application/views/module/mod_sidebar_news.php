<?php
//berita terbaru
$latest = $this->berita->getBeritaWithLimit()->result();
?>
<div class="container-fluid">    
    <span class="h5 gallery text-primary p-0"><i class="fas fa-rss-square"></i> Berita Terbaru</span><br><br>
    <div class="row">
        <?php foreach ($latest as $i => $data) { ?>

            <div class="col-md-12 jari" onclick="location.assign('<?= site_url("berita-$data->id_berita-$data->judul_seo.html") ?>')">
                <?php if ($i > 0) { ?>
                    <hr>
                <?php } ?>
                <div class="row p-0">
                    <div class="col-md-4 my-1 p-0">
                        <div class="div-center-crop" style="--url: url('<?= URL_IMAGE_NEWS . "small_".$data->gambar ?>')"></div>
                    </div>
                    <div class="col-md-8 pl-1">
                        <span class="text-justify"><?= strip_tags($data->judul) ?></span><br>
                        <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                    </div>
                </div>
            </div>
            <div class="col-md-12 p-0">
            </div>
        <?php } ?>
    </div>
</div>