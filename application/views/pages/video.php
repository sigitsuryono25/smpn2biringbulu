<?php $this->load->view('headfoot/header') ?>
<div class="bg-white border-0 rounded-0">
    <div class="container mar-top">
        <div class="row  p-4">
            <?php foreach ($video as $data) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card  rounded-0  gallery">
                        <div class="card-body p-0 border-0">
                            <iframe width="100%" height="150" src="https://www.youtube.com/embed/<?= $data->link ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <?php
                        if (mb_strlen($data->jdl_video) > 20) {
                            $title = $data->jdl_video;
                        } else {
                            $title = $data->jdl_video . "<br><br>";
                        }
                        ?>
                        <div class="card-footer bg-white border-0">
                            <small><?= $title ?></small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php $this->load->view('headfoot/footer') ?>
