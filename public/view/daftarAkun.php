<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Akun</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/download/font-awesome.css">
        <link rel="stylesheet" href="../css/download/build.css">
        <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>
        <link rel="stylesheet" href="../css/custom/daftarAkun.css">
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
                            <div class="col-md-12 col-sm-12 col-xs-12 boxOut-content">
                                <div class="boxOut-daftarPageTitle">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-pageTitle font-LatoBold">
                                            DAFTAR
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-pageSubTitle font-Lato">
                                            Daftar akun disporasulbar.com untuk memulai. 
                                            <br>
                                            Sudah memiliki akun? <a href="#" class="font-LatoBold">Login sekarang</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control field-username center-block font-Lato" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <!-- DEV NOTE : -->
                                    <!-- Notif warning -->
                                    <div class="boxOut-notifField font-Arial">
                                        <div class="triangle-notif hidden-xs"></div>
                                        <img class="img-warning-2" src="../img/icon/warning-2.png">
                                        Username telah digunakan
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control field-username center-block font-Lato" placeholder="User Name">
                                        
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control field-username center-block font-Lato" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" class="form-control field-username center-block font-Lato" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="password" class="form-control field-username center-block font-Lato" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="box-button-check boxCheckBox center-block font-Roboboto">
                                        <div class="checkbox edit-checbox">
                                            <input id="promo" type="checkbox">
                                            <label for="promo">
                                                Lihat password
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- DEV NOTE : -->
                                <!-- Capcha -->
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-capcha center-block boxOut-captcha">
                                            <form>
                                                <div class="g-recaptcha" data-theme="white" data-sitekey="6LcEMSETAAAAANxJ4IMQxQlUdpW9Zgt3MoIVFiQw"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-keteranganSyarat font-Lato center">
                                        Dengan mendaftar, Anda telah setuju dengan
                                        <br>
                                        syarat dan ketentuan yang berlaku
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-login center-block">
                                            <button type="button" class="btn button-login font-LatoBold">DAFTAR</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-lupaPassword">
                                        <div class="circle-atau font-LatoBold center-block">
                                            Atau
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-login center-block">
                                            <button type="button" class="btn button-loginSocial font-LatoBold">
                                                <img class="img-loginFB" src="../img/icon/login-facebook.png">
                                                Masuk dengan  Facebook
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-login center-block">
                                            <button type="button" class="btn button-loginSocial font-LatoBold">
                                                <img class="img-loginGoogle" src="../img/icon/login-google.png">
                                                Masuk dengan  Google+
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--                            -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-footerLogin">
                            <div class="box-footerLogin center-block font-Lato">
                                Copyright © 2016       <font class="footer-batas">|</font>       Dinas Pemuda dan Olahraga Provinsi Sulawesi Barat      <font class="footer-batas">|</font>      Develope and Maintenance by PT. ILUGROUP MULTIMEDIA INDONESIA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </body>
    <!--js-->
    <!--==================================================-->
    <?php include '_js.php'; ?>
    <script>


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNI9DqfA0Hdaycx7k7yzbXwnqju1rYut0&type=geocode&libraries=places"></script>
</html>