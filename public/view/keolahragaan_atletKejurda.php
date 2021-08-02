<!DOCTYPE html>
<html>
    <head>
        <title>Atlet Kejurda</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/tablePage.css">
        <link rel="stylesheet" href="../css/custom/searchFilter.css">
        <link rel="stylesheet" href="../css/custom/keolahragaan_atletKejurda.css">
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
                                        <div class="col-md-12 col-sm-12 col-xs-12 boxOut-subTitleTop font-oswaldLight">
                                            Data Keolahragaan
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-primaryTitleTop font-oswaldBold">
                                                ATLET KEJURDA
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 boxOut-searchBox font-oswaldBold">
                                                <div class="boxOut-search ">
                                                    <div class="box-search">
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                            </div>
                                                            <input type="text" class="form-control field-search font-openSans" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="boxOut-buttonSelect">
                                                    <select class="form-control dropdown-option font-LatoBold">
                                                        <option value="" selected disabled hidden>Atlet KEJURNAS</option>
                                                        <option value="">Atlet 1</option>
                                                        <option value="">Atlet 2</option>
                                                        <option value="">Atlet 3</option>
                                                    </select>
                                                </div>
                                                <div class="boxOut-buttonFilter">
                                                    <div class="boxOut-buttonConvert">
                                                        <button class="btn btn-default btn-convert font-LatoBold" type="submit"><img class="img-downloadPdf" src="../img/icon/download-pdf.png"> Unduh PDF</button>
                                                    </div>
                                                    <div class="boxOut-buttonConvert">
                                                        <button class="btn btn-default btn-filter font-LatoBold" type="submit"><img class="img-downloadPdf" src="../img/icon/filter.png"> Filter</button>
                                                        <div class="share-popup">
                                                            <div class="row">
                                                                <div  class="col-md-12 col-sm-12 col-xs-12 boxField">
                                                                    <select class="form-control dropdown-guestCheckout font-LatoLight">
                                                                        <option value="" selected disabled hidden>Nama Lembaga</option>
                                                                        <option value="">Lembaga 1</option>
                                                                        <option value="">Lembaga 2</option>
                                                                        <option value="">Lembaga 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div  class="col-md-12 col-sm-12 col-xs-12 boxField">
                                                                    <select class="form-control dropdown-guestCheckout font-LatoLight">
                                                                        <option value="" selected disabled hidden>Tahun Periode</option>
                                                                        <option value="">Periode 1</option>
                                                                        <option value="">Periode 2</option>
                                                                        <option value="">Periode 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div  class="col-md-12 col-sm-12 col-xs-12 boxField">
                                                                    <select class="form-control dropdown-guestCheckout font-LatoLight">
                                                                        <option value="" selected disabled hidden>Kab/Kota</option>
                                                                        <option value="">Kota 1</option>
                                                                        <option value="">Kota 2</option>
                                                                        <option value="">Kota 3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 box-checkBox font-LatoLight">
                                                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                                                        <input class="checkbox1 checkbox-custom unique" type="checkbox" name="optMetode[]" id="checkbox-1" checked>
                                                                        <label for="checkbox-1" class="checkbox-custom-label font-openSans">Seluruh Data</label>
                                                                    </div>
                                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                                        <input class="checkbox2 checkbox-custom unique" type="checkbox" name="optMetode[]" id="checkbox-2" >
                                                                        <label for="checkbox-2" class="checkbox-custom-label font-openSans">Berdasarkan Kategori</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 font-LatoLight">
                                                                    <button class="btn btn-default btn-cari font-LatoBold" type="submit">CARI</button>
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
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-table">

                                    <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                        <table class="table table-history col-md-12 col-sm-12 col-xs-12 font-RobotoCondensed-Light">
                                            <tr class="grey-tableTr font-LatoLight">
                                                <td class="title-table title-table-1 title-1">No.</td>
                                                <td class="title-table title-table-2 title-2">Foto</td>
                                                <td class="title-table title-table-1 title-3">Nama</td>
                                                <td class="title-table title-table-2 title-4">Tempat, Tanggal Lahir</td>
                                                <td class="title-table title-table-1 title-5">Alamat</td>
                                                <td class="title-table title-table-2 title-6">Cabang Olahraga</td>
                                                <td class="title-table title-table-1 title-7">Prestasi</td>
                                                <td class="title-table title-table-2 title-8">Tahun</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-1-td-1 center">1</td>
                                                <td class="tr-1-td-2 personPhoto"><img src="../img/produk/fotoAtlet.png"></td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-2-td-1 center">2</td>
                                                <td class="tr-2-td-2 personPhoto"><img src="../img/produk/fotoAtlet.png"></td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-1-td-1 center">3</td>
                                                <td class="tr-1-td-2 personPhoto"><img src="../img/produk/fotoAtlet.png"></td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-2-td-1 center">4</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-1-td-1 center">5</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-1-td-2">Lorem ipsum dolor sit amet</td>
                                            </tr>
                                            <tr>
                                                <td class="tr-2-td-1 center">999</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-1">Lorem ipsum dolor sit amet</td>
                                                <td class="tr-2-td-2">Lorem ipsum dolor sit amet</td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './_warningPage.php'; ?>
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


    </script>

</html>