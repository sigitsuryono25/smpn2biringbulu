<?php $this->load->view('headfoot/header') ?>
<?php
//data slider
$slider = $this->slider->getSliderImage()->result();
?>
<div class="bg-white border-0 rounded-0">
    <div class="card-body p-0">
        <div class="slider bg-light mx-0">
            <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <?php
                    foreach ($slider as $i => $key) {
                        $active = ($i == 0) ? "active" : "";
                        ?>
                        <li data-target="#carousel-slider" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                    <?php } ?>
                </ol>
                <div class="carousel-inner">
                    <?php
                    foreach ($slider as $i => $key) {
                        $active = ($i == 0) ? "active" : "";
                        ?>
                        <div class="carousel-item <?= $active ?>" style="">
                            <div class="cover-slider"  style=" --url: url('<?= URL_IMAGE_SLIDER . $key->gbr_slider ?>');">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="content-wrapper py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <?php $this->load->view('module/mod_info_terbaru') ?>
                        </div>
                    </div>
                    <div class="col-md-12 bg-light">
                        <div class="container">
                            <?php $this->load->view('module/mod_ekstrakurikuler') ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="container">
                            <?php $this->load->view('module/mod_video') ?>
                        </div>
                    </div>
                    <div class="col-md-12 bg-light">
                        <div class="container">
                            <?php $this->load->view('module/mod_galeri') ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="container">
                            <?php $this->load->view('module/mod_sidebar') ?>
                        </div>
                    </div>
                    <!--                                <div class="col-md-3">
                                                    </div>-->

                </div>
                <div class="container pt-4">
                    <div class="row border shadow-sm p-3">
                        <div class="col-md-2 d-flex justify-content-center">
                            <i class="fa fa-4x fa-info-circle text-primary opcacity-4 align-self-center" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 d-flex">
                            <div class="info px-3  align-self-center">
                                <h4 class="h5">Pembelajaran yang berorientasi pada perkembangan dan kebutuhan anak</h4>
                                <ul type="none" class="p-0">
                                    <li class="small">- Anak belajar dengan baik jika kebutuhan fisiknya terpenuhi serta merasa aman dan tentram secara psikologis</li>
                                    <li class="small">- Siklus belajar anak selalu berulang</li>
                                    <li class="small">- Anak belajar melalui interaksi dengan orang dewasa dan anak-anak lainnya.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 d-md-flex justify-content-end">
                            <div class="contacts py-5  align-self-center text-center">
                                <a href="#" class="btn btn-sm btn-primary"> <i class="fa fa-phone" aria-hidden="true"></i> Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var scroll = 0;
    $(window).scroll(function () {
        scroll = $(this).scrollTop();
        if (scroll > 500) {
            $(".top-menu").addClass('bg-white shadow-sm').removeClass("opacity-menu").fadeIn();
        } else if (scroll < 10) {
            $(".top-menu").removeClass('bg-white shadow-sm').addClass("opacity-menu").fadeIn();
        } else if (scroll < 500) {
            $(".top-menu").removeClass('bg-white shadow-sm').addClass("opacity-menu").fadeOut();
        }
    });
</script>
<?php $this->load->view('headfoot/footer') ?>
