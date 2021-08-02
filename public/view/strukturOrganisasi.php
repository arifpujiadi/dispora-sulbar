<!DOCTYPE html>
<html>
    <head>
        <title>Struktur Organisasi</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/download/font-awesome.css">
        <link rel="stylesheet" href="../css/download/build.css">
        <link rel="stylesheet" href="../css/custom/tablePage.css">
        <link rel="stylesheet" href="../css/custom/strukturOrganisasi.css">
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
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-primaryTitleTop font-oswaldBold">
                                            STRUKTUR ORGANISASI
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="container">
                            <div class="row box-offset">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-struktur">
                                    <img class="" src="../img/produk/struktur.jpg">
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
    <script>
        $(document).ready(function () {

            $('.dropdown-user').find('a').click(function (e) {
                var temp1 = $(this).find('img').attr('src');
                var temp2 = $('.dropdown-user').find('.btn').find('img').attr('src');



                $('.dropdown-user').find('btn').find('img').attr(temp1, 'src');
                $(this).find('img').attr(temp2, 'src');

                e.preventDefault();
            });

            if (window.matchMedia('(min-width: 992px)').matches) {

                $(function () {
                    var container = $('.share-float');
                    var minTop = 140;
                    var maxTop = $('footer').offset().top - container.outerHeight();

                    $(document).scroll(function () {
                        var scrollVal = $(document).scrollTop() + 0;

                        container.css('top', scrollVal);

                        if (scrollVal < minTop) {
                            container.css('top', minTop);
                        }

                        if (container.offset().top > maxTop) {
                            container.css('top', maxTop);
                        }
                    });
                });

            }

        });

    </script>

</html>