<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title><?= $title; ?></title>


</head>

<body>
    <!--nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-ungu fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>assets/images/logo/logo-sman4-kecil.gif" width="30" height="30" class="d-inline-block align-top" alt="">SMA Negeri 4 Padang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile Sekolah</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/profile/akreditasi'; ?>">Akreditasi</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/profile/sejarah'; ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/profile/visimisi'; ?>">visi dan Misi</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/profile/tujuan'; ?>">Tujuan</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/website/kategori/1'; ?>">Pengumuman</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/website/kategori/2'; ?>">Berita</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/website/kategori/3'; ?>">Informasi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guru & TU</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Data Guru & TU</a>
                            <a class="dropdown-item" href="#">Prestasi Guru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Siswa</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Data Siswa</a>
                            <a class="dropdown-item" href="#">Prestasi Akademik</a>
                            <a class="dropdown-item" href="#">Prestasi Non Akademik</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fitur </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kedisiplinan</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/kedisiplinan/kehadiran'; ?>">Kehadiran</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/kedisiplinan/atribut'; ?>">Atribut Sekolah</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/kedisiplinan/upacara'; ?>">Upacara Bendera</a>
                            <a class="dropdown-item" href="<?= base_url() . 'index.php/kedisiplinan/berprilaku'; ?>">Disiplin Berperilaku</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aplikasi Mobile</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- end navbar -->
    <!-- jumbotron -->
    <div class="jumbotron">



    </div>
    <!-- end jumbotron -->
    <!-- menu tengah -->
    <div class="menu-tengah">
        <div class="row text-center">
            <div class="col-3">
                <a href="http://" class="float-left"><img src="<?= base_url(); ?>assets/images/thubnail/home2.png" alt="" srcset=""></a>
                <p>WEBSITE</p>
            </div>
            <div class="col-3">
                <a href="http://" class="float-left">
                    <img src="<?= base_url(); ?>assets/images/thubnail/tsr.png" alt="" srcset="">
                </a>
                <p>SISFO</p>
            </div>
            <div class="col-3">
                <a href="https://www.sman4padang.online/" class="float-left">
                    <img src="<?= base_url(); ?>assets/images/thubnail/reading-icon.png" alt="" srcset="">
                </a>
                <p>ELearning</p>
            </div>
            <div class="col-3">
                <a href="http://ppid.sman4padang.sch.id" class="float-left">
                    <img src="<?= base_url(); ?>assets/images/thubnail/multi-user-icon2.png" alt="" srcset="">
                </a>
                <p>
                    PPID
                </p>
            </div>
        </div>
    </div>
    <!-- end menu tengah -->
