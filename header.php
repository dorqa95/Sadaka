<!DOCTYPE html>
<html lang=hu class="no-js">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="assets/images/logo_brand_2.png">
    <title>Golgota Észak-Buda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Template main Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Blueimp gallery -->
    <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">
    <!-- Bootstrap image gallery -->
    <link rel="stylesheet" href="assets/css/bootstrap-image-gallery.min.css">
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.4.min.js"></script>

    <?php
    if (basename($_SERVER['PHP_SELF']) === 'index.php') : ?>
        <!-- Google reCaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    	<?php
    endif;
    // only show if current date is in winter
    if (in_array(date('m'), ['12', '01', '02'])) : ?>
        <script src="assets/js/jquery.snow.js"></script>
        <script>
            $(document).ready( function(){
                fn_snow();
            });
        </script>
        <?php
    endif; ?>
</head>

<body>
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="navbar-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <ul class="list-unstyled list-inline header-contact">
                                <li> <i class="fa fa-home"></i><a href="#cim">1039 Bp., Madzsar József utca 13. </a> </li>
                            </ul>
                            <!-- /.header-contact  -->
                        </div>
                        <div class="col-sm-6 col-xs-12 text-right">
                            <ul class="list-unstyled list-inline header-social">
                                <li>
                                    <a target="blank" href="https://www.facebook.com/groups/bekasigolgota/" data-toggle="tooltip" data-placement="bottom" title="Facebook csoport">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="blank" href="http://bekasifi.blogspot.hu/" data-toggle="tooltip" data-placement="bottom" title="Ifi honlap"> <i class="fa fa-group"></i> </a>
                                </li>
                                <li>
                                    <a target="blank" href="kima.hu" data-toggle="tooltip" data-placement="bottom" title="KIMA Alapítvány"> <i class="fa fa-heart"></i> </a>
                                    <!--a target="blank" href="kima/kima.html" data-toggle="tooltip" data-placement="bottom" title="KIMA Alapítvány"> <i class="fa fa-heart"></i> </a-->
                                </li>
                                <li>
                                    <a target="blank" href="https://barkacsana.kima.hu/" data-toggle="tooltip" data-placement="bottom" title="Bárka családi napközi"> <i class="fa fa-child"></i> </a>
                                </li>
                                <li>
                                    <a target="blank" href="https://vetitomagus.hu" data-toggle="tooltip" data-placement="bottom" title="Vetítőszolgálat">
                                        <i class="fa fa fa-desktop"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.header-social  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html" style="padding-top: 0; margin-top: 0;"><img src="assets/images/new_logo_final_5.png" width="350" alt=""></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav">
                            <!-- <li><a class="is-active" href="#aktualitasok">Aktualitások</a> -->
                            <li><a href="/#hirdetesek">Aktualitások</a>
                                <ul class="submenu">
                                    <li class="submenu-item"><a href="/#hirdetesek">Hirdetések </a></li>
                                    <li class="submenu-item"><a href="/#naptar">Naptár</a></li>
                                </ul>
                            </li>
                            <li><a href="/#media">Média</a>
                                <ul class="submenu">
                                    <li class="submenu-item"><a href="/#media" id="a_kepek">Képtár</a></li>
                                    <li class="submenu-item"><a href="/#media" id="a_hangok">Tanítások</a></li>
                                    <li class="submenu-item"><a href="/#media" id="a_enek">Énekeskönyv</a></li>
                                </ul>
                            </li>
                            <li><a href="/#gyuli">Rólunk</a>
                                <ul class="submenu">
                                    <li class="submenu-item"><a href="/#gyuli" id="a_gyuli">Gyülekezetünk</a></li>
                                    <li class="submenu-item"><a href="/#alkalom">Alkalmaink</a></li>
                                    <li class="submenu-item"><a href="/#golgota" id="a_heading">Hitvallásunk</a></li>
                                    <li class="submenu-item"><a href="/#cim">Címünk</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /#navbar -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.navbar-main -->
        </nav>
    </header>
    <!-- /. main-header -->