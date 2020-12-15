<?php
$galeri = $this->galeri->getGaleriWithConditionAndLimit(['id_album' => 17], 4, 0)->result();
?>
<div class="my-3  border-0">
    <div class="card-header p-2 bg-transparent  rounded-0 border-0">
        <span class="text-white font-weight-bold text-primary h4"><i class="fas fa-images"></i> Galeri</span>
    </div>
    <div class="card-body border-0">
        <div class="row p-0">
            <?php foreach ($galeri as $data) { ?>
                <div class="col-md-3">
                    <div class="card gallery rounded-0">
                        <div class="card-header p-0  border-0 rounded-0">
                            <a href="<?= URL_IMAGE_GALLERY . $data->gbr_gallery ?>" class="highslide" onclick="return hs.expand(this)" title="Klik Untuk memperbesar">
                                <div
                                    style="background: url('<?= URL_IMAGE_GALLERY . $data->gbr_gallery ?>');width: 100%;height: 150px;background-size: cover;background-position: center;background-repeat: no-repeat;">
                                </div>
                            </a>
                            <div class="highslide-caption">
                                <span><?= $data->jdl_gallery ?></span>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            <?php
                            if (mb_strlen($data->jdl_gallery) > 40) {
                               $title = $data->jdl_gallery;
                            } else {
                                $title = $data->jdl_gallery . "<br><br>";
                            }
                            ?>
                            <p class="title-news small"><?= $title ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
