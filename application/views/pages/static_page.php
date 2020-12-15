<div class="container-fluid bg-white">
    <div class="container">
        <div class="mar-top p-3">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <span class="h4"><?= $titles ?></span>
                </div>
                <div class="col-md-9">
                    <?php if (!empty($gambar)) { ?>
                    <img width="150" align="left" src="<?= URL_IMAGE_BANNER . $gambar ?>" class="mx-3 mt-5"/>
                    <?php } ?>
                    <?php echo $content ?>
                </div>
                <div class="col-md-3">

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
    });
</script>