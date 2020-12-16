<a href="javascript:void(0)" class="scrollup d-none">Scroll</a>
<div class="clearfix bg-white"></div>
<div class="footer_graph"></div>
<div class="clearfix  bg-white"></div>
<div class="footer footer-bg">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <div class="card rounded-0 border-0  bg-transparent">
                    <div class="card-header-sm p-2 ">
                        <span class="text-white">Tentang Kami</span>
                    </div>
                    <div class="card-body bg-transparent py-2 px-0">
                        <div class="alamat pb-2">
                            <img class="w-75" src="<?= base_url('assets/img/logo smp negeri 2 biringbulu.png') ?>" /><br><br>
                            <small class="text-primary mt-4 jari" title="Klik Untuk membuka peta" onclick="window.open('https://goo.gl/maps/pt5F532DJ45VtFnn7')"><i class="fas fa-map-marker-alt"></i> 
                                Alamat: Ciniayo Kelurahan Lauwa Kecamatan Biringbulu</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded-0 border-0  bg-transparent">
                    <div class="card-header-sm p-2">
                        <span class="text-white">Link Terkait</span>
                    </div>
                    <div class="card-body bg-transparent py-2 px-0">
                        <span><a href="http://www.kemdikbud.go.id/" target="_blank" class="text-primary text-decoration-none small" >Kementerian Pendidikan</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded-0 border-0  bg-transparent">
                    <div class="card-header-sm p-2">
                        <span class="text-white">Hubungi Kami</span>
                    </div>
                    <div class="card-body bg-transparent py-2 px-0">
                        <a class="text-decoration-none small" href="tel:+6282192748141"><i class="fa fa-phone" aria-hidden="true"></i> +62 8219-2748-141 </a><br>
                        <a class="text-decoration-none small" href="mailto:smpnegeri2biringbulu@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> smpnegeri2biringbulu@gmail.com</a><br><br>
                        <i class="fab fa-facebook facebook-color mx-2"></i>
                        <i class="fab fa-twitter twitter-color mx-2"></i>
                        <i class="fab fa-instagram mx-2 ig-color"></i>
                        <i class="fab fa-youtube-square mx-2 text-danger" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer bg-primary text-center p-2 text-white">
        <small>&copy; <?= date('Y') ?> SMP Negeri 2 Biringbulu. All Rights Reserved</small>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
                                var position = 0;
                                $(window).scroll(function () {
                                    position = $(this).scrollTop();
                                    if (position > 200) {
                                        $(".scrollup").addClass('d-block').removeClass("d-none").fadeIn();
                                    } else if (position < 10) {
                                        $(".scrollup").removeClass('d-block').addClass("d-none").fadeIn();
                                    }
                                });
                                $(".scrollup").on("click", function () {
                                    $(window).scrollTop(0);
                                });
</script>
</body>

</html>
