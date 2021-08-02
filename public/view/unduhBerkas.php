<!DOCTYPE html>
<html>
    <head>
        <title>Unduh Berkas</title>
        <!--css-->
        <!--==================================================-->
        <?php include '_css.php'; ?>
        <link rel="stylesheet" href="../css/custom/unduhBerkas.css">
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
                                            <div class="col-md-3 col-sm-12 col-xs-12 boxOut-primaryTitleTop font-oswaldBold text-uppercase">
                                                UNDUH BERKAS
                                            </div>
                                            <div class="col-md-9 col-sm-12 col-xs-12 boxOut-searchBox font-LatoLight">
                                                <div class="box-search">
                                                    <div class="input-group">
                                                        <div class="input-group-btn btn-group1 edit-1">
                                                            <button class="btn btn-default btn-searchSK all-btnSearch button-width" type="submit" data-toggle="tab" href="#tab1">KESEKRETARIATAN</button>
                                                            <br class="hidden-md hidden-sm hidden-lg">
                                                            <button class="btn btn-default btn-searchOR all-btnSearch button-width" type="submit" data-toggle="tab" href="#tab2">KEOLAHRAGAAN</button>
                                                            <br class="hidden-md hidden-sm hidden-lg">
                                                            <button class="btn btn-default btn-searchPM all-btnSearch button-width" type="submit" data-toggle="tab" href="#tab3">KEPEMUDAAN</button>
                                                        </div>

                                                        <div class="form-group has-feedback search-form edit-2">
                                                            <input type="text" class="form-control edit-input-search edit-input-search" placeholder="SEARCH" />
                                                            <i class="form-control-feedback glyphicon glyphicon-search icon-left"></i>
                                                        </div>
                                                                                                            <!--<input type="text" class="form-control field-search font-openSans" placeholder=""><span class="glyphicon glyphicon-search"></span>-->
                                                        <div class="input-group-btn btn-group2 edit-3">
                                                            <button class="btn btn-default btn-filter all-btnSearch" type="submit"><img src="../img/icon/filter.png">FILTER</button>
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
                </div>
                <div class="row backgroundBottom">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 boxOut-main">

                                    <div class="tab-content">
                                        <div id="tab1" class="tab-pane fade in active">
                                            <div class="col-md-12 col-sm-12 col-xs-12 main-content">
                                                <div id="tab1-page1" class="page-content active">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab1-page2" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab1-page3" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-pagination font-LatoBlack">
                                                <span><a href="#tab1-page1" class="active">1</a></span>
                                                .
                                                <span><a href="#tab1-page2">2</a></span>
                                                .
                                                <span><a href="#tab1-page3">3</a></span>
                                                .
                                                <span><a href="#tab1-page4">4</a></span>
                                                .
                                                <span><a href="#tab1-page5">5</a></span>
                                                .
                                            </div>
                                        </div>
                                        <div id="tab2" class="tab-pane fade">
                                            <div class="col-md-12 col-sm-12 col-xs-12 main-content">
                                                <div id="tab2-page1" class="page-content active">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab2-page2" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab2-page3" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-pagination font-LatoBlack">
                                                <span><a href="#tab2-page1" class="active">1</a></span>
                                                .
                                                <span><a href="#tab2-page2">2</a></span>
                                                .
                                                <span><a href="#tab2-page3">3</a></span>
                                                .
                                                <span><a href="#tab2-page4">4</a></span>
                                                .
                                                <span><a href="#tab2-page5">5</a></span>
                                                .
                                            </div>
                                        </div>
                                        <div id="tab3" class="tab-pane fade">
                                            <div class="col-md-12 col-sm-12 col-xs-12 main-content">
                                                <div id="tab3-page1" class="page-content active">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab3-page2" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tab3-page3" class="page-content">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-sm-6 col-xs-6 outer-boxBerkas">
                                                                <div class="box-berkas">
                                                                    <img src="../img/icon/download-big.png">
                                                                    <div class="berkas-name font-LatoLight">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                                    </div>
                                                                    <div class="download-link font-Lato">
                                                                        <a href="#">DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 box-pagination font-LatoBlack">
                                                <span><a href="#tab3-page1" class="active">1</a></span>
                                                .
                                                <span><a href="#tab3-page2">2</a></span>
                                                .
                                                <span><a href="#tab3-page3">3</a></span>
                                                .
                                                <span><a href="#tab3-page4">4</a></span>
                                                .
                                                <span><a href="#tab3-page5">5</a></span>
                                                .
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
    <script>
        $(document).ready(function (e) {
            $('.box-pagination').find('a').on('click', function (e) {
                var pageID = $(this).attr('href');

                $(pageID).fadeIn().siblings().hide();
                $(this).addClass('active').parents('span').siblings().find('a').removeClass('active');
                e.preventDefault;
            });
        });
    </script>

</html>