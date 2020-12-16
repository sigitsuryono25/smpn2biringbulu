<?php
$extraLatest = $this->berita->getBeritaWithConditionAndLimit(['id_kategori' => 46], 8, 0)->result();
?>
<div class=" border-0 rounded-0  my-3">
    <div class="card-header-sm p-2 rounded-0">
        <span class="text-white font-weight-bold text-primary h4"><i class="fas fa-wave-square"></i> Kegiatan Ekstrakurikuler</span>
    </div>
    <div class="card-body">
        <div class="row">
            <?php foreach ($extraLatest as $i => $data) { ?>
                <div class="col-md-3 my-3 jari" onclick="location.assign('<?= site_url("berita-$data->id_berita-$data->judul_seo.html") ?>')">
                    <div class="card gallery">
                        <div class="div-center-crop" style="--url: url('<?= URL_IMAGE_NEWS . "small_".$data->gambar ?>')">
                        </div>
                        <div class="card-header bg-white border-0 max-title-card-height">
                            <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                            <a href="<?= site_url() ?>" class="h6 font-weight-bold text-dark text-decoration-none link-title"><?= strip_tags($data->judul) ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-md-12 text-center pt-3">
                <a class="btn btn-sm btn-primary" href="<?= site_url('ekstrakurikuler') ?>">Informasi Lainnya</a>
            </div>
        </div>
    </div>
</div>