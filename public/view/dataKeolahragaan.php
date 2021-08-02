<!DOCTYPE html>
<html>
    <head>
        <title>Data Keolahragaan</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/tablePage.css">
        <link rel="stylesheet" href="../css/custom/searchFilter.css">
        <link rel="stylesheet" href="../css/custom/dataKeolahragaan.css">
        <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>
    </head>
    <body class="body-offcanvas">


        <!-- Header -->
        <!--==================================================-->
        <header>
            <?php include '_header.php'; ?>
        </header>


        <!-- Container -->
        <!--==================================================-->
        <section id="content">
            <div class="row backgroundContent">
                <div class="row backgroundTop">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleTop">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryTitleTop font-oswaldBold">
                                                PEKAN OLAHRAGA
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentPopda">
                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentWhite">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav boxOut-tabPopda">
                                                        <ul class="nav nav-tabs ">
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#tab-event-1">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgEvent-1">

                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 font-LatoBlack text-event text-event-1">
                                                                        POPDA
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a data-toggle="tab" href="#tab-event-2">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgEvent-2">

                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 font-LatoBlack text-event text-event-2">
                                                                        POPNAS
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a data-toggle="tab" href="#tab-event-3">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgEvent-3">

                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 font-LatoBlack text-event text-event-3">
                                                                        KEJURDA
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a data-toggle="tab" href="#tab-event-4">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgEvent-4">

                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 font-LatoBlack text-event text-event-4">
                                                                        KEJURNAS
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <!-- Tambahan -->
                                                            <li class="">
                                                                <a data-toggle="tab" href="#tab-event-5">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgEvent-5">

                                                                    </div>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 font-LatoBlack text-event text-event-5">
                                                                        LOREM IPSUM
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <!-- /Tambahan -->


                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="tab-content">
                                                            <div id="tab-event-1" class="tab-pane fade in active">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav navbarMenu-fotoVideoBerita">
                                                                            <ul class="nav nav-tabs nav-tabs-fotoVideoBerita font-LatoBold">
                                                                                <li class="tab-menu-1 active"><a data-toggle="tab" href="#tab-menu1-1">TENTANG</a></li>
                                                                                <li class="tab-menu-2"><a data-toggle="tab" href="#tab-menu1-2">BERITA</a></li>
                                                                                <li class="tab-menu-3"><a data-toggle="tab" href="#tab-menu1-3">JADWAL PERTANDINGAN</a></li>
                                                                                <li class="tab-menu-4"><a data-toggle="tab" href="#tab-menu1-4">INFO VENUES</a></li>
                                                                                <li class="tab-menu-5"><a data-toggle="tab" href="#tab-menu1-5">HASIL PERTANDINGAN</a></li>
                                                                            </ul>
                                                                            <div class="boxOut-selectYears">
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-LatoBold" dir="rtl">
                                                                                    <option value="" selected>2017</option>
                                                                                    <option value="">2016</option>
                                                                                    <option value="">2015</option>
                                                                                    <option value="">2014</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentTab">
                                                                        <div class="tab-content">
                                                                            <div id="tab-menu1-1" class="tab-pane fade in active">

                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-1 font-LatoHairline">

                                                                                    <font class="content-titleText font-LatoBold">
                                                                                    A. Selayang Pandang POPDA VIII
                                                                                    </font>

                                                                                    <p>
                                                                                        Pekan Olahraga Pelajar Daerah (POPDA) merupakan titik kulminasi pembinaan olahraga pelajar di tingkat Daerah/Provinsi. Yang secara rutin dilaksanakan setiap 2 (dua) tahun sekali pada tahun genap. Pada tahun ini pelaksanaan POPDA merupakan pelaksanaan yang ke 8 (delapan) kalinya Kabupaten Pandeglang ditunjuk menjadi tuan rumah penyelenggaraan event bergengsi ini.
                                                                                    </p>

                                                                                    <p>
                                                                                        Proses pembinaan olahraga pelajar yang dilakukan secara terus menerus dalam bentuk latihan yang rutin harus diukur sejauh mana pencapaiannya. Salah satu cara yang dapat dilakukaan adalah melalui kompetisi antara lain kejuaraan olahraga daerah tingkat pelajar dan pekan olahraga pelajar daerah (POPDA).
                                                                                    </p>

                                                                                    <p>
                                                                                        Suatu penghargaan terhadap Kabupaten Pandeglang atas dipercayakannya sebagai tuan rumah Pekan Olahraga Pelajar Daerah (POPDA) VIII Tahun 2016. Kabupaten Pandeglang akan menjawab kepercayaan tersebut dengan melaksanakan event olahraga daerah tingkat pelajar ini secara baik, semarak dan lancar, dengan motto catur sukses: “Sukses Penyelenggaraan, Sukses Prestasi, Sukses Perekonomian Rakyat dan Sukses Administrasi”.
                                                                                    </p>

                                                                                    <p>
                                                                                        Pelaksanaan Pekan Olahraga Pelajar Daerah (POPDA) VIII Tahun 2016 ini merupakan cerminan kesiapan dan kemampuan atlet-atlet pelajar banten untuk menghadapi Pekan Olahraga Pelajar Wilayah (POPWIL) III Tahun 2016 dan Pekan Olahraga Pelajar Nasional (POPNAS) XIV Tahun 2017.
                                                                                    </p>

                                                                                    <p>
                                                                                        Penyelenggaraan Pekan Olahraga Pelajar Daerah (POPDA) VIII Tahun 2016 di Kabupaten Pandeglang sebagai ajang evaluasi hasil pembinaan prestasi olahraga pelajar daerah dan menghasilkan calon-calon atlet pelajar potensial banten yang akan dipersiapkan menuju Pekan Olahraga Pelajar Wilayah (POPWIL) dan Pekan Olahraga Pelajar Nasional (POPNAS).
                                                                                    </p>

                                                                                    <p>
                                                                                        Tujuan dari pelaksanaan  POPDA VIII Tahun 2016  di kabupaten Pandeglang adalah sebagai berikut
                                                                                    </p>

                                                                                    <p>
                                                                                        Mengukur pencapaian pembinaan prestasi olahraga atlet daerah.
                                                                                        Ajang seleksi pembentukan tim pelajar Banten pada POPWIL III 2016 dan POPNAS XIV Tahun 2017.
                                                                                        Mencetak dan melahirkan calon-calon atlet terbaik di kalangan pelajar yang di masa depan akan menjadi atlet andalan Banten.
                                                                                        Momentum peningkatan gairah dan motivasi pelajar untuk berlatih dan berprestasi di ajang olahraga.
                                                                                        Memelihara dan meningkatkan persatuan dan kesatuan bangsa.
                                                                                        Ajang Silaturahmi dan menjunjung tinggi sportifitas pelajar banten.
                                                                                    </p>

                                                                                    <font class="content-titleText font-LatoBold">
                                                                                    B. Tema POPDA VIII Tahun 2016 
                                                                                    </font>

                                                                                    <p>
                                                                                        " Wadah Mencetak Atlet Pelajar Berprestasi di tingkat Daerah, Nasional dan Internasional”
                                                                                    </p>

                                                                                    <font class="content-titleText font-LatoBold">
                                                                                    C. VISI POPDA VIII Tahun 2016
                                                                                    </font>

                                                                                    <p>
                                                                                        "SPIRIT OF ACHIEVEMENT”
                                                                                    </p>

                                                                                    <p>
                                                                                        “SEMANGAT UNTUK BERPRESTASI”
                                                                                    </p>
                                                                                </div>

                                                                            </div>
                                                                            <div id="tab-menu1-2" class="tab-pane fade">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-3">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-2.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/sport-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                    Sabtu, 14 / 01 / 2017
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                    <a href="#">
                                                                                                                                        Lorem ipsum dolor sit amet consectetur 
                                                                                                                                        adipisicing elit
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-2.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/sport-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                    Sabtu, 14 / 01 / 2017
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                    <a href="#">
                                                                                                                                        Lorem ipsum dolor sit amet consectetur 
                                                                                                                                        adipisicing elit
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/sport-2.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                Sabtu, 14 / 01 / 2017
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                <a href="#">
                                                                                                                                    Lorem ipsum dolor sit amet consectetur 
                                                                                                                                    adipisicing elit
                                                                                                                                </a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/sport-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-titleBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tanggalBerita font-LatoLight">
                                                                                                                                    Sabtu, 14 / 01 / 2017
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-titleBerita font-LatoBold">
                                                                                                                                    <a href="#">
                                                                                                                                        Lorem ipsum dolor sit amet consectetur 
                                                                                                                                        adipisicing elit
                                                                                                                                    </a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textBerita">
                                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 box-textBerita">
                                                                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>



                                                                                </div>
                                                                            </div>
                                                                            <div id="tab-menu1-3" class="tab-pane fade">

                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-2">

                                                                                    <div class="row backgroundBottom">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="container">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content">

                                                                                                        <div class="boxOut-listMedali">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table-title font-LatoBold">
                                                                                                                    PEKAN OLAHRAGA KABUPATEN MAMUJU
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tabPane">

                                                                                                                    <div class="tab-content">

                                                                                                                        <div id="tab1" class="tab-pane fade in active">
                                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 ">

                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                                                                    <table class="table table-medal col-md-12 col-sm-12 col-xs-12 font-LatoBold">
                                                                                                                                        <tr class="grey-tableTr font-LatoBold">
                                                                                                                                            <td class="title-table title-table-1">CABANG OLAHRAGA</td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                24
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                25
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                26
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                27
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                28
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                29
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                30
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1 title-tanggal">
                                                                                                                                                31
                                                                                                                                            </td>
                                                                                                                                            <td class="title-table title-table-1">LOKASI PERTANDINGAN</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="tr-1-td-1 td-daerah">
                                                                                                                                                <img class="icon-tableSport" src="../img/icon/icon-basket.png">
                                                                                                                                                BOLA BASKET
                                                                                                                                            </td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill "></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center font-LatoLight">
                                                                                                                                                Stadion 
                                                                                                                                                <font class="font-LatoBold">Lorem Ipsum</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="tr-2-td-2 td-daerah">
                                                                                                                                                <img class="icon-tableSport" src="../img/icon/icon-volly.png">
                                                                                                                                                BOLA VOLLY
                                                                                                                                            </td>
                                                                                                                                            <td class="tr-2-td-2 center"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center"></td>
                                                                                                                                            <td class="tr-2-td-2 center"></td>
                                                                                                                                            <td class="tr-2-td-2 center font-LatoLight">
                                                                                                                                                Stadion 
                                                                                                                                                <font class="font-LatoBold">Lorem Ipsum</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="tr-1-td-1 td-daerah">
                                                                                                                                                <img class="icon-tableSport" src="../img/icon/icon-dayung.png">
                                                                                                                                                DAYUNG
                                                                                                                                            </td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center font-LatoLight">
                                                                                                                                                Stadion 
                                                                                                                                                <font class="font-LatoBold">Lorem Ipsum</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="tr-2-td-2 td-daerah">
                                                                                                                                                <img class="icon-tableSport" src="../img/icon/icon-renang.png">
                                                                                                                                                RENANG
                                                                                                                                            </td>
                                                                                                                                            <td class="tr-2-td-2 center"></td>
                                                                                                                                            <td class="tr-2-td-2 center"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center background-fill-2"></td>
                                                                                                                                            <td class="tr-2-td-2 center font-LatoLight">
                                                                                                                                                Stadion 
                                                                                                                                                <font class="font-LatoBold">Lorem Ipsum</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td class="tr-1-td-1 td-daerah">
                                                                                                                                                <img class="icon-tableSport" src="../img/icon/icon-bola.png">
                                                                                                                                                SEPAK BOLA
                                                                                                                                            </td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center background-fill"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center"></td>
                                                                                                                                            <td class="tr-1-td-1 center font-LatoLight">
                                                                                                                                                Stadion 
                                                                                                                                                <font class="font-LatoBold">Lorem Ipsum</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                    </table>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div id="tab2" class="tab-pane fade">
                                                                                                                            2 
                                                                                                                        </div>
                                                                                                                        <div id="tab3" class="tab-pane fade">
                                                                                                                            3
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <div id="tab-menu1-4" class="tab-pane fade">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-4">

                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                            <div id="map-canvas" class="col-md-12 col-sm-12 col-xs-12 boxOut-map">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-venues">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/stadion-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                    <a href="#">
                                                                                                                        Cabang Olahraga Sepak Bola
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                    Stadion Lorem Ipsum
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                    Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-2.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Atletik
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Renang
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/stadion-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                    <a href="#">
                                                                                                                        Cabang Olahraga Sepak Bola
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                    Stadion Lorem Ipsum
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                    Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-2.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Atletik
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Renang
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-left">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                    <img class="" src="../img/produk/stadion-1.png">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                    <a href="#">
                                                                                                                        Cabang Olahraga Sepak Bola
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                    Stadion Lorem Ipsum
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                    Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-middle">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-2.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Atletik
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 boxOut-stadion-right">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-img-stadion">
                                                                                                                        <img class="" src="../img/produk/stadion-3.png">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-title-stadion font-LatoBold text-center">
                                                                                                                        <a href="#">
                                                                                                                            Cabang Olahraga Renang
                                                                                                                        </a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-Lato text-center">
                                                                                                                        Stadion Lorem Ipsum
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitle-stadion font-LatoLightItalic text-center">
                                                                                                                        Jalan Toddopuli Raya Timur 123 Makassar
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div id="tab-menu1-5" class="tab-pane fade">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-5">

                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content-2">

                                                                                        <div class="row backgroundBottom">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="container">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content">

                                                                                                            <div class="boxOut-listMedali">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table-title font-LatoBold">
                                                                                                                        PEKAN OLAHRAGA PROVINSI SULAWESI BARAT
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-tabPane">

                                                                                                                        <div class="tab-content">

                                                                                                                            <div id="tab1" class="tab-pane fade in active">
                                                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                                                                                                        <table class="table table-medal col-md-12 col-sm-12 col-xs-12 font-LatoBold">
                                                                                                                                            <tr class="grey-tableTr font-LatoBold">
                                                                                                                                                <td class="title-table title-table-1 title-2">
                                                                                                                                                    Ranking
                                                                                                                                                </td>
                                                                                                                                                <td class="title-table title-table-1 title-1">Daerah</td>
                                                                                                                                                <td class="title-table title-table-1 title-2">
                                                                                                                                                    <img class="img-tableMedal" src="../img/icon/table-gold.png">
                                                                                                                                                    Emas
                                                                                                                                                </td>
                                                                                                                                                <td class="title-table title-table-1 title-3">
                                                                                                                                                    <img class="img-tableMedal" src="../img/icon/table-perak.png">
                                                                                                                                                    Perak
                                                                                                                                                </td>
                                                                                                                                                <td class="title-table title-table-1 title-4">
                                                                                                                                                    <img class="img-tableMedal" src="../img/icon/table-perunggu.png">
                                                                                                                                                    Perunggu
                                                                                                                                                </td>
                                                                                                                                                <td class="title-table title-table-2 title-5">Jumlah</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-1-td-2 center">1</td>
                                                                                                                                                <td class="tr-1-td-1 td-daerah">Kab. Majene</td>
                                                                                                                                                <td class="tr-1-td-2 center">6</td>
                                                                                                                                                <td class="tr-1-td-1 center">4</td>
                                                                                                                                                <td class="tr-1-td-2 center">1</td>
                                                                                                                                                <td class="tr-1-td-1 center">11</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-2-td-2 center">2</td>
                                                                                                                                                <td class="tr-2-td-1 td-daerah">Kab. Mamasa</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-1-td-2 center">3</td>
                                                                                                                                                <td class="tr-1-td-1 td-daerah">Kab. Mamuju</td>
                                                                                                                                                <td class="tr-1-td-2 center">999</td>
                                                                                                                                                <td class="tr-1-td-1 center">999</td>
                                                                                                                                                <td class="tr-1-td-2 center">999</td>
                                                                                                                                                <td class="tr-1-td-1 center">999</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-2-td-2 center">4</td>
                                                                                                                                                <td class="tr-2-td-1 td-daerah">Kab. Mamuju Tengah</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-1-td-2 center">5</td>
                                                                                                                                                <td class="tr-1-td-1 td-daerah">Kab. Mamuju Utara</td>
                                                                                                                                                <td class="tr-1-td-2 center">999</td>
                                                                                                                                                <td class="tr-1-td-1 center">999</td>
                                                                                                                                                <td class="tr-1-td-2 center">999</td>
                                                                                                                                                <td class="tr-1-td-1 center">999</td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td class="tr-2-td-2 center">6</td>
                                                                                                                                                <td class="tr-2-td-1 td-daerah">Kab. Polewali Mandar</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                                <td class="tr-2-td-2 center">999</td>
                                                                                                                                                <td class="tr-2-td-1 center">999</td>
                                                                                                                                            </tr>
                                                                                                                                        </table>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="tab-event-2" class="tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav navbarMenu-fotoVideoBerita">
                                                                            <ul class="nav nav-tabs nav-tabs-fotoVideoBerita font-LatoBold">
                                                                                <li class="tab-menu-1 active"><a data-toggle="tab" href="#tab-menu2-1">TENTANG</a></li>
                                                                                <li class="tab-menu-2"><a data-toggle="tab" href="#tab-menu2-2">BERITA</a></li>
                                                                                <li class="tab-menu-3"><a data-toggle="tab" href="#tab-menu2-3">JADWAL PERTANDINGAN</a></li>
                                                                                <li class="tab-menu-4"><a data-toggle="tab" href="#tab-menu2-4">INFO VENUES</a></li>
                                                                                <li class="tab-menu-5"><a data-toggle="tab" href="#tab-menu2-5">HASIL PERTANDINGAN</a></li>
                                                                            </ul>
                                                                            <div class="boxOut-selectYears">
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-LatoBold" dir="rtl">
                                                                                    <option value="" selected>2017</option>
                                                                                    <option value="">2016</option>
                                                                                    <option value="">2015</option>
                                                                                    <option value="">2014</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentTab">
                                                                        <div class="tab-content">
                                                                            <div id="tab-menu2-1" class="tab-pane fade in active">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu2-2" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu2-3" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu2-4" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu2-5" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="tab-event-3" class="tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav navbarMenu-fotoVideoBerita">
                                                                            <ul class="nav nav-tabs nav-tabs-fotoVideoBerita font-LatoBold">
                                                                                <li class="tab-menu-1 active"><a data-toggle="tab" href="#tab-menu3-1">TENTANG</a></li>
                                                                                <li class="tab-menu-2"><a data-toggle="tab" href="#tab-menu3-2">BERITA</a></li>
                                                                                <li class="tab-menu-3"><a data-toggle="tab" href="#tab-menu3-3">JADWAL PERTANDINGAN</a></li>
                                                                                <li class="tab-menu-4"><a data-toggle="tab" href="#tab-menu3-4">INFO VENUES</a></li>
                                                                                <li class="tab-menu-5"><a data-toggle="tab" href="#tab-menu3-5">HASIL PERTANDINGAN</a></li>
                                                                            </ul>
                                                                            <div class="boxOut-selectYears">
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-LatoBold" dir="rtl">
                                                                                    <option value="" selected>2017</option>
                                                                                    <option value="">2016</option>
                                                                                    <option value="">2015</option>
                                                                                    <option value="">2014</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentTab">
                                                                        <div class="tab-content">
                                                                            <div id="tab-menu3-1" class="tab-pane fade in active">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu3-2" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu3-3" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu3-4" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu3-5" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="tab-event-4" class="tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav navbarMenu-fotoVideoBerita">
                                                                            <ul class="nav nav-tabs nav-tabs-fotoVideoBerita font-LatoBold">
                                                                                <li class="tab-menu-1 active"><a data-toggle="tab" href="#tab-menu4-1">TENTANG</a></li>
                                                                                <li class="tab-menu-2"><a data-toggle="tab" href="#tab-menu4-2">BERITA</a></li>
                                                                                <li class="tab-menu-3"><a data-toggle="tab" href="#tab-menu4-3">JADWAL PERTANDINGAN</a></li>
                                                                                <li class="tab-menu-4"><a data-toggle="tab" href="#tab-menu4-4">INFO VENUES</a></li>
                                                                                <li class="tab-menu-5"><a data-toggle="tab" href="#tab-menu4-5">HASIL PERTANDINGAN</a></li>
                                                                            </ul>
                                                                            <div class="boxOut-selectYears">
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-LatoBold" dir="rtl">
                                                                                    <option value="" selected>2017</option>
                                                                                    <option value="">2016</option>
                                                                                    <option value="">2015</option>
                                                                                    <option value="">2014</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentTab">
                                                                        <div class="tab-content">
                                                                            <div id="tab-menu4-1" class="tab-pane fade in active">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu4-2" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu4-3" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu4-4" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu4-5" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <!-- Tambahan -->
                                                            <div id="tab-event-5" class="tab-pane fade">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 content-link content-nav navbarMenu-fotoVideoBerita">
                                                                            <ul class="nav nav-tabs nav-tabs-fotoVideoBerita font-LatoBold">
                                                                                <li class="tab-menu-1 active"><a data-toggle="tab" href="#tab-menu5-1">TENTANG</a></li>
                                                                                <li class="tab-menu-2"><a data-toggle="tab" href="#tab-menu5-2">BERITA</a></li>
                                                                                <li class="tab-menu-3"><a data-toggle="tab" href="#tab-menu5-3">JADWAL PERTANDINGAN</a></li>
                                                                                <li class="tab-menu-4"><a data-toggle="tab" href="#tab-menu5-4">INFO VENUES</a></li>
                                                                                <li class="tab-menu-5"><a data-toggle="tab" href="#tab-menu5-5">HASIL PERTANDINGAN</a></li>
                                                                            </ul>
                                                                            <div class="boxOut-selectYears">
                                                                                <select class="form-control dropdown-konfirmasiPembayaran font-LatoBold" dir="rtl">
                                                                                    <option value="" selected>2017</option>
                                                                                    <option value="">2016</option>
                                                                                    <option value="">2015</option>
                                                                                    <option value="">2014</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-contentTab">
                                                                        <div class="tab-content">
                                                                            <div id="tab-menu5-1" class="tab-pane fade in active">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu5-2" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu5-3" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu5-4" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                            <div id="tab-menu5-5" class="tab-pane fade">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Tambahan -->


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Footer-->
        <!--==================================================-->
        <footer>
            <?php include '_footer.php'; ?>
        </footer>


    </body>
    <!--js-->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNI9DqfA0Hdaycx7k7yzbXwnqju1rYut0&type=geocode&libraries=places"></script>
    <script src="../js/download/gmaps.js"></script>
    <script>


    </script>

</html>