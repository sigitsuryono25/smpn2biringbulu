<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
        <title><?= (!empty($judul)) ? $judul : "SMP Negeri 2 Biring Bulu"?></title>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--HIGHSLIDE-->
        <script type="text/javascript" src="<?= base_url('assets/') ?>highslide/highslide.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>highslide/highslide.css" />
        <script type="text/javascript">
            hs.graphicsDir = '<?= base_url('assets/') ?>highslide/graphics/';
            hs.outlineType = 'rounded-white';
            hs.align = 'center';
        </script>
    </head>

    <body>
        <div class="container-fluid bg-light px-0">
            <div class="top-header fixed-top">
                <div class="container-fluid  bg-light">
                    <div class="row py-1">
                        <div class="col-md-8">
                            <small><i class="fa fa-phone" aria-hidden="true"></i> +62 8219-2748-141 |
                                <a class="text-decoration-none" href="mailto:smpnegeri2biringbulu@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> smpnegeri2biringbulu@gmail.com</a></small>
                        </div>
                        <div class="col-md-4 text-right">
                            <i class="fab fa-facebook facebook-color mx-2"></i>
                            <i class="fab fa-twitter twitter-color mx-2"></i>
                            <i class="fab fa-instagram mx-2 ig-color"></i>
                            <i class="fab fa-youtube-square mx-2 text-danger" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="top-menu opacity-menu">
                    <nav class="navbar navbar-sm navbar-expand-lg">

                        <a class="navbar-brand" href="<?= site_url() ?>">
                            <img src="<?= base_url('assets/img/logo smp negeri 2 biringbulu.png') ?>" alt="" class="w-50 d-none d-md-block">
                        </a>
                        <div class="d-flex justify-content-between">
                            <img src="<?= base_url('assets/img/logo smp negeri 2 biringbulu.png') ?>" alt="" class="logo-mobile d-md-none d-block">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link text-uppercase menu-title text-primary" href="<?= site_url() ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= site_url('profile-13.html') ?>">Visi & Misi</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-39.html') ?>">Sejarah Singkat</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-36.html') ?>">Saran dan Prasarana</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-40.html') ?>">Struktur Organisasi</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-41.html') ?>">Kemitraan</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-42.html') ?>">Program Kerja</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-43.html') ?>">Kondisi Siswa</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-44.html') ?>">Kondisi Komite Sekolah</a>
                                        <a class="dropdown-item" href="<?= site_url('profile-38.html') ?>">Prestasi Sekolah</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guru</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= site_url('guru-dan-staf-smp-negeri-2-biringbulu.php') ?>">Direktori Guru</a>
                                        <a class="dropdown-item" href="#">Silabus</a>
                                        <a class="dropdown-item" href="#">Materi Ajar</a>
                                        <a class="dropdown-item" href="#">Materi Uji</a>
                                        <a class="dropdown-item" href="#">Rencana Pelaksaan Pembelajaran</a>
                                        <a class="dropdown-item" href="#">Prestasi Guru</a>
                                        <a class="dropdown-item" href="#">Kalender Akademik</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Siswa</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Direktori Siswa</a>
                                        <a class="dropdown-item" href="<?= site_url('ekstrakurikuler')?>">Ekstrakurikuler</a>
                                        <a class="dropdown-item" href="#">OSIS</a>
                                        <a class="dropdown-item" href="#">Beasiswa</a>
                                        <a class="dropdown-item" href="#">Agenda</a>
                                        <a class="dropdown-item" href="#">Link Web</a>
                                        <a class="dropdown-item" href="#">Cek Rapor</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?= site_url('galeri-foto')?>">Galeri Foto</a>
                                        <a class="dropdown-item" href="<?= site_url('video')?>">Video</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary" href="<?= site_url('info-sekolah')?>">Info Sekolah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary" href="http://ujian-online.smpnegeri2biringbulu.sch.id/">Ujian Online</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary" href="<?= site_url('profile-47.html') ?>"">PPDB Online</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>