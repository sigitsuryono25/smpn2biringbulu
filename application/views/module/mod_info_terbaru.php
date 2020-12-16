<?php
$latestList = $this->berita->getBeritaWithLimit(4)->result();
if ($this->agent->is_mobile()) {
    $maksHeightCard = "";
    $maksHeightCardTitle = "";
} else {
    $maksHeightCard = "max-card-height";
    $maksHeightCardTitle = "max-title-card-height";
}
?>

<div class="card border-0 rounded-0 ">
    <div class="card-header-sm p-2 bg-white  rounded-0">
        <span class="text-white font-weight-bold text-primary h4"> <i class="fas fa-bullhorn"></i> Info Terbaru</span>
    </div>
    <div class="card-body">
        <div class="row">
            <?php foreach ($latestList as $i => $data) { ?>
                <div class="col-md-3 my-3 jari" onclick="location.assign('<?= site_url("berita-$data->id_berita-$data->judul_seo.html") ?>')">
                    <div class="card <?= $maksHeightCard?> gallery">
                        <div class="div-center-crop" style="--url: url('<?= URL_IMAGE_NEWS . "small_" . $data->gambar ?>')">
                        </div>
                        <div class="card-header bg-white border-0  <?= $maksHeightCardTitle?>">
                            <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                            <a href="javascript:void(0)" class="h6 font-weight-bold text-dark text-decoration-none link-title"><?= strip_tags($data->judul) ?></a>
                        </div>
                        <div class="card-body">
                            <p class="text-justify small"><?= character_limiter(strip_tags($data->isi_berita), 300, " [...]") ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-12 text-center pt-3">
                <a class="btn btn-sm btn-primary" href="<?= site_url('info-sekolah') ?>">Informasi Lainnya</a>
            </div>
        </div>
    </div>
</div>