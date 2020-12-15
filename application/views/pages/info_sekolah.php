<?php $this->load->view('headfoot/header') ?>
<div class="bg-white border-0 rounded-0">
    <div class="container mar-top">
        <div class="row">
            <div class="col-md-8">
                <div class="row  p-4">
                    <?php foreach ($info as $data) { ?>
                        <div class="col-md-12 border-bottom py-3">
                            <div class="row ">
                                <div class="col-md-4 my-1 p-0" style="background: url('<?= URL_IMAGE_NEWS . $data->gambar ?>');
                                     background-position: center; background-size: cover; background-repeat: no-repeat; width: available; height: 200px ">
                                    <img src="" class="img-fluid"/>
                                </div>
                                <div class="col-md-8 pl-2">
                                    <p class="text-justify font-weight-bold"><?= strip_tags($data->judul) ?></p>
                                    <small class="text-secondary"><?= $this->etc->tanggalIndonesiaFormat($data->tanggal) ?></small><br>
                                    <p class="text-justify small"><?= character_limiter(strip_tags($data->isi_berita), 300, " [...]") ?>
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-sm btn-primary">Selengkapnya >></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">                            

                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function () {
        $(".navbar").addClass("bg-white shadow-sm");
        $(".top-menu").removeClass("opacity-menu");
    });
</script>
<?php $this->load->view('headfoot/footer') ?>
