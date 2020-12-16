<div class="container-fluid bg-white">
    <div class="container <?= $full_height?>">
        <div class="mar-top p-3">
            <div class="row">
                <div class="col-md-7 mx-3">
                    <h4 class="h4"><?= $titles ?></h4>
                    <small><?php
                    if ($from == 'berita') {
                        echo $this->etc->tanggalIndonesiaFormat($tanggal);
                    }
                    ?></small><br><br>
                    <?php if (!empty($gambar)) { ?>
                    <img width="<?= $width ?>" align="<?= $align?>" src="<?= $gambar ?>" class="mr-4 <?= $bottom?> mt-2 img-fluid"/>
                    <?php } ?>
                    <?php echo $content ?>
                </div>
                <div class="col-md-4">
                    <?php
                    if ($from == 'berita') {
                        $this->load->view('module/mod_sidebar_news');
                    } else {
                        
                    }
                    ?>
                </div>
            </div>
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
        $("p").addClass("text-justify ")
    });
</script>