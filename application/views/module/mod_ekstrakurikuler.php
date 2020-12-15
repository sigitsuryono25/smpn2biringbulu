<?php
$extraLatest = $this->berita->getBeritaWithConditionAndLimit(['id_kategori' => 46], 6, 0)->result();
?>
<div class=" border-0 rounded-0  my-3">
    <div class="card-header-sm p-2 rounded-0">
        <span class="text-white font-weight-bold text-primary h4"><i class="fas fa-wave-square"></i> Kegiatan Ekstrakurikuler</span>
    </div>
    <div class="card-body">
        <div class="row">
            <?php foreach ($extraLatest as $i => $data) { ?>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-4 my-1 p-0" style="background: url('<?= URL_IMAGE_NEWS . $data->gambar ?>');
                                     background-position: center; background-size: cover; background-repeat: no-repeat; width: available; height: 100px ">
                                    <img src="" class="img-fluid"/>
                                </div>
                                <div class="col-md-8 pl-1">
                                    <p class="text-justify"><?= strip_tags($data->judul) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">                            
                            <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                        </div>
                    </div>
                    <div class="border-bottom"></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>