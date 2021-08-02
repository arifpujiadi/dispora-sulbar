<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
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

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">

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
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 50) {
                $(".header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".header").removeClass("active");
            }
        });

    </script>

</html>