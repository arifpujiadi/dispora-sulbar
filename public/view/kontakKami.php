<!DOCTYPE html>
<html>
    <head>
        <title>Hubungi Kami</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/kontakKami.css">
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
                        <div id="map-canvas" class="col-md-12 col-sm-12 col-xs-12 boxOut-map">

                        </div>
                    </div>
                </div>
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keterangan">
                                            <div class="pageTitle font-oswaldBold">
                                                HUBUNGI KAMI
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgKontak center">
                                                        <a href="#">
                                                            <img src="../img/icon/kontak-location.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textKontak center font-LatoBold">
                                                        Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9 Makassar 90233 - Indonesia
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgKontak center">
                                                        <a href="#">
                                                            <img src="../img/icon/kontak-phone.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textKontak center font-LatoBold">
                                                        0411 - 430580 / 421567
                                                        <br>
                                                        081342333833
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-imgKontak center">
                                                        <a href="#">
                                                            <img src="../img/icon/kontak-mail.png">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-textKontak center font-LatoBold">
                                                        office@ilugroupmultimedia.co.id
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-fieldKontak">
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-fieldKontak-left">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                Nama*
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                <input type="text" class="form-control field-username center-block font-Lato" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                Alamat Email*
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                <input type="text" class="form-control field-username center-block font-Lato" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                Nomor Telepon*
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                <input type="text" class="form-control field-username center-block font-Lato" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-fieldKontak-right">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                Perusahaan/Instansi*
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                <input type="text" class="form-control field-username center-block font-Lato" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-field">
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field font-LatoBold">
                                                                Pesan*
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 box-field">
                                                                <textarea name="descr" id="descr" class="font-LatoBold editTextArea"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-buttonKirim">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="boxOut-buttonKirim-form center-block">
                                                                    <form>
                                                                        <div class="g-recaptcha" data-theme="white" data-sitekey="6LcEMSETAAAAANxJ4IMQxQlUdpW9Zgt3MoIVFiQw"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-button">
                                                                <div class="boxOut-buttonKirim-kontak center-block">
                                                                    <button type="button" class="btn button-berita font-LatoBold">KIRIM <img src="../img/icon/arrowRight-buttonWhite.png"></button>
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


</html>