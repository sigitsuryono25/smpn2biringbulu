<?php $this->load->view('headfoot/header') ?>
<div class="bg-white border-0 rounded-0">
    <div class="container mar-top">
        <div class="row  p-4">
            <?php foreach ($guru as $data) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card gallery rounded-0">
                        <div class="card-header p-0  border-0 rounded-0">
                            <a href="<?= URL_IMAGE_GALLERY . $data->gbr_gallery ?>" class="spotlight" title="<?= $data->jdl_gallery ?>">
                                <div
                                    style="background: url('<?= URL_IMAGE_GALLERY . "kecil_".$data->gbr_gallery ?>');width: 100%;height: 150px;background-size: cover;background-position: center;background-repeat: no-repeat;">
                                </div>
                            </a>
                        </div>
                        <div class="card-body text-center ">
                            <?php
                            if (mb_strlen($data->jdl_gallery) > 40) {
                                $title = $data->jdl_gallery;
                            } else {
                                $title = $data->jdl_gallery . "<br><br>";
                            }
                            ?>
                            <span class="title-news small"><?= $title ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
//        $("ul>li>ol>li").addClass("h6 text-justify");
//        $("ul>li").addClass("h6 text-justify");
//        $(".top-header").removeClass("fixed-top").addClass("bg-white");
        $(".navbar").addClass("bg-white shadow-sm");
        $(".top-menu").removeClass("opacity-menu");
    });
</script>
<?php $this->load->view('headfoot/footer') ?>
