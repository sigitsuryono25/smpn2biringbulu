<?php $latestVideo = $this->video->getVideoWithLimit()->result() ?>
<div class="card  my-3 border-0 rounded-0 ">
    <div class="card-header-sm p-2 bg-white  rounded-0 ">
        <span class="text-white font-weight-bold h4 text-primary"><i class="fab fa-youtube"></i> Video</span>
    </div>
    <div class="card-body">
        <div class="row">
            <?php foreach ($latestVideo as $i => $data) { ?>
                <div class="col-md-3">
                    <div class="card  rounded-0  gallery">
                        <div class="card-body p-0 border-0">
                            <iframe width="100%" height="150" src="https://www.youtube.com/embed/<?= $data->link ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <?php
                        if (mb_strlen($data->jdl_video) > 40) {
                            $title = $data->jdl_video;
                        } else {
                            $title = $data->jdl_video . "<br>";
                        }
                        ?>
                        <div class="card-footer bg-white border-0">
                            <small><?= $title ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <div class="col-md-12 text-center pt-3">
                <a class="btn btn-sm btn-primary" href="<?= site_url('video') ?>">Video Lainnya</a>
            </div>
        </div>
    </div>
</div>