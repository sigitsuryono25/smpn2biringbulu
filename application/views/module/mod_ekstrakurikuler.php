<div class="card  border-0 rounded-0  my-3">
    <div class="card-header-sm p-2 bg-primary  rounded-0">
        <span class="text-white font-weight-bold">Kegiatan Ekstrakurikuler</span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <img src="http://localhost/CodeIgniter/smpN2Birbul/assets/img/cover-dummy.jpg" class="img-fluid"/>
                <h4 class="py-1 h5">Kegiatan Membersihkan Lapangan Batara Sunggu Kelurahan Lauwa Kecamatan Biringbulu</h4>
                <small class="text-secondary">08 Desember 2020</small><br>
                <p class="text-justify small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsam, iure unde, maxime quibusdam inventore ullam dignissimos corporis obcaecati aut rem doloribus praesentium atque perspiciatis doloremque architecto quos quaerat sed?
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php for ($i = 0; $i < 4; $i++) { ?>

                        <div class="col-md-12">
                            <?php if ($i > 0) { ?>
                                <hr>
                            <?php } ?>
                            <div class="row p-0">
                                <div class="col-md-3 my-1 p-0">
                                    <img src="http://localhost/CodeIgniter/smpN2Birbul/assets/img/cover-dummy.jpg" class="img-fluid"/>
                                </div>
                                <div class="col-md-8 pl-1">
                                    <span>Title News</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <small class="text-secondary small">08 Desember 2020</small>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>