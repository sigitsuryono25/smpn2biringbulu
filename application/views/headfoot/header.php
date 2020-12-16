<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
        <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= base_url() ?>assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">


        <meta name="description" content="<?= (!empty($desk)) ? character_limiter($desk, 200) : "Website resmi SMP Negeri 2 Biringbulu Kabupaten Gowa Sulawesi Selatan" ?>">
        <meta name="keywords" content="Website Resmi SMP Negeri 2 Biringbulu">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= current_url() ?>">
        <meta property="og:title" content="<?= (!empty($judul)) ? $judul : "SMP Negeri 2 Biringbulu" ?>">
        <meta property="og:description" content="<?= (!empty($desk)) ? character_limiter($desk, 200, "") : "Website resmi SMP Negeri 2 Biringbulu Kabupaten Gowa Sulawesi Selatan" ?>">
        <meta property="og:image" content="<?= (!empty($img)) ? $img : base_url('assets/img/logo-spendu-biringbulu.png') ?>">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="<?= current_url() ?>">
        <meta property="twitter:title" content="<?= (!empty($judul)) ? $judul : "SMP Negeri 2 Biringbulu" ?>">
        <meta property="twitter:description" content="<?= (!empty($desk)) ? character_limiter($desk, 200, "") : "Website resmi SMP Negeri 2 Biringbulu Kabupaten Gowa Sulawesi Selatan" ?>">
        <meta property="twitter:image" content="<?= (!empty($img)) ? $img : base_url('assets/img/logo-spendu-biringbulu.png') ?>">
        <title><?= (!empty($judul)) ? $judul : "SMP Negeri 2 Biring Bulu" ?></title>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!--SPOTLIGHT-->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/spotlight.css" />
        <script type="text/javascript" src="<?= base_url('assets/') ?>spotlight.bundle.js"></script>

    </head>

    <body>
        <div class="container-fluid bg-light px-0">
            <div class="top-header fixed-top">
                <div class="top-menu opacity-menu">
                    <nav class="navbar navbar-sm navbar-expand-lg">

                        <a class="navbar-brand" href="<?= site_url() ?>">
                            <img src="<?= base_url('assets/img/logo smp negeri 2 biringbulu.png') ?>" alt="" class="w-50 d-none d-md-block">
                        </a>
                        <div class="d-flex justify-content-between">
                            <a class="navbar-brand" href="<?= site_url() ?>">
                                <img src="<?= base_url('assets/img/logo smp negeri 2 biringbulu.png') ?>" alt="" class="logo-mobile d-md-none d-block">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item active">
                                    <a class="nav-link text-uppercase menu-title text-primary menu-size" href="<?= site_url() ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle disabled jari menu-size" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-13.html') ?>">Visi & Misi</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-39.html') ?>">Sejarah Singkat</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-36.html') ?>">Saran dan Prasarana</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-40.html') ?>">Struktur Organisasi</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-41.html') ?>">Kemitraan</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-42.html') ?>">Program Kerja</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-43.html') ?>">Kondisi Siswa</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-44.html') ?>">Kondisi Komite Sekolah</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('profile-38.html') ?>">Prestasi Sekolah</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle disabled jari menu-size" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guru</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item menu-size" href="<?= site_url('guru-dan-staf-smp-negeri-2-biringbulu.php') ?>">Direktori Guru</a>
                                        <a class="dropdown-item menu-size" href="#">Silabus</a>
                                        <a class="dropdown-item menu-size" href="#">Materi Ajar</a>
                                        <a class="dropdown-item menu-size" href="#">Materi Uji</a>
                                        <a class="dropdown-item menu-size" href="#">Rencana Pelaksaan Pembelajaran</a>
                                        <a class="dropdown-item menu-size" href="#">Prestasi Guru</a>
                                        <a class="dropdown-item menu-size" href="#">Kalender Akademik</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle disabled jari menu-size" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Siswa</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item menu-size" href="#">Direktori Siswa</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('ekstrakurikuler') ?>">Ekstrakurikuler</a>
                                        <a class="dropdown-item menu-size" href="#">OSIS</a>
                                        <a class="dropdown-item menu-size" href="#">Beasiswa</a>
                                        <a class="dropdown-item menu-size" href="#">Agenda</a>
                                        <a class="dropdown-item menu-size" href="#">Link Web</a>
                                        <a class="dropdown-item menu-size" href="#">Cek Rapor</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-uppercase menu-title text-primary dropdown-toggle disabled jari menu-size" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item menu-size" href="<?= site_url('galeri-foto') ?>">Galeri Foto</a>
                                        <a class="dropdown-item menu-size" href="<?= site_url('video') ?>">Video</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary menu-size" href="<?= site_url('info-sekolah') ?>">Info Sekolah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary menu-size" href="http://ujian-online.smpnegeri2biringbulu.sch.id/">Ujian Online</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase menu-title text-primary menu-size" href="<?= site_url('profile-47.html') ?>"">PPDB Online</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>