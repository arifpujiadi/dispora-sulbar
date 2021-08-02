<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>
        <link rel="stylesheet" href="../css/custom/resetPassword.css">
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
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-pageTitle font-LatoBold center">
                                        Kesulitan mengakses akun Anda?
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-pageSubTitle font-Lato center">    
                                        Lupa kata sandi? Masukkan email login Anda di bawah ini. 
                                        <br>
                                        Kami akan mengirimkan pesan email beserta tautan untuk reset kata sandi Anda.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 boxOut-pageFieldTitle font-Lato center">    
                                        EMAIL
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control field-username center-block font-LatoBold" placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-login center-block boxOut-captcha">
                                            <form>
                                                <div class="g-recaptcha" data-theme="white" data-sitekey="6LcEMSETAAAAANxJ4IMQxQlUdpW9Zgt3MoIVFiQw"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="box-button-login center-block">
                                            <button type="button" class="btn button-login font-LatoBold">GANTI PASSWORD</button>
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