<?php
include_once '../db.inc.php';
?>	<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    <!-- =========================================
    Basic
    ========================================== -->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>china contract machining</title>
    <meta name="keywords" content="HTML5, CSS3, responsive, Template"/>
    <meta name="author" content="Cloud Software"/>
    <meta name="description" content="Metal- Responsive HTML5/CSS3 Template"/>
    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>


    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- //Fonts -->


    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css"/>

    <!-- Owl Carousel CSS -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- =========================================
    CSS
    ========================================== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/off-canvas.css"/>
    <link rel="stylesheet" href="../css/style.css"/>


    <!-- =========================================
    Head Libs
    ========================================== -->
    <script src="../js/modernizr-2.6.2.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style3.css" />
    <link rel="stylesheet" type="text/css" href="../css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
    <noscript>
        <style>
            .es-carousel ul{
                display:block;
            }
        </style>
    </noscript>
    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/taplogo1.PNG">
</head>
<!-- /head -->


<body>
<div class="wrapper" id="wrapper">
    <div class="offcanvas-pusher">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <section class="header">
                        <header class="header-wrapper">
                            <div class="header-top">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 col-sm-3">
                                        <div class="logo">
                                            <a title="Steellex" href="index.php">
                                                <img src="../img/logo1.png" alt="Steellex">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 visible-lg visible-md">
                                        <div class="location">

                                            <p><span style="font-weight:bold">Hongkong Office:</span> Precision Machinery Technology (HK) Co., Limited.</p>
                                            <p><span style="font-weight:bold">US Sales:</span> 5008 Sweetser Ave, Evansville, IN 47715, USA.</p>
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-lg-2 visible-lg visible-md">
                                        <div class="phone">
                                            <p>Call us!</p>
                                            <strong>+1(812)604-9778</strong>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="main-nav-bar">
                                <div class="navbar">
                                    <div class="navbar-header navbar-right pull-left">
                                        <!-- offcanvas-trigger-effects -->
                                        <div id="offcanvas-trigger-effects" class="offcanvas">
                                            <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas"
                                                    data-target=".navbar-collapse" data-placement="left" data-effect="offcanvas-effect">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                        <!-- offcanvas-trigger-effects -->
                                    </div>

                                    <!-- navbar-collapse -->
                                    <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                                        <ul class="nav navbar-nav navbar-left">
                                            <li><a href="../index.php">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="Equipment.html">Equipments</a></li>
                                            <li class="dropdown"><a href="service.html">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="Aluminum.php">Aluminum Parts</a></li>
                                                    <li><a href="Automobile.php">Automobile Parts</a></li>
                                                    <li><a href="hydraulic.php">Hydraulic Pump Parts</a></li>
                                                    <li><a href="machinery.php">Machinery Equipment</a></li>
                                                    <li><a href="powertool.php">Power Tool Parts</a></li>
                                                    <li><a href="stainless.php">Stainless Parts</a></li>
                                                    <li><a href="testequipment.php">Test Equipment</a></li>
                                                    <li><a href="valvebody.php">Valve Body</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="quality.html">Quality Control</a></li>
                                            <li><a href="contact.php">Contact Us</a></li>
                                        </ul>

                                        <!-- /navbar-nav -->


                                    </nav>
                                    <!-- /navbar-collapse -->
                                </div>
                                <!-- /navbar -->
                            </div>
                            <!-- .main-nav-bar -->
                            <div class="breadcrumb-area">
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <ul class="breadcrumb">
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li class="active">Valve Body</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6">
                                    <div class="header-social">
                                        <ul>
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- .breadcrumb-area -->
                        </header>
                    </section>
                    <!--End .header -->
                </div>

                <div class="row">
                    <div class="container">
                        <div class="content">
                            <div id="rg-gallery" class="rg-gallery">
                                <h1 style="text-align: center">Valve Body</h1>

                                <div class="rg-thumbs">
                                    <div class="es-carousel-wrapper">
                                        <div class="es-nav">
                                            <span class="es-nav-prev">Previous</span>
                                            <span class="es-nav-next">Next</span>
                                        </div>
                                        <div class="es-carousel">
                                            <ul>
                                                <?php

                                                $sql = "SELECT * FROM valvebody";
                                                $result = mysqli_query($connect, $sql);

                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<li>
                                                        <a  href="../img/valvebody/' . $row["image"] . '"><img  src="../img/valvebody/' . $row['image'] . '" data-large= "../img/valvebody/' . $row['image'] . '" ></a>
        
                                                      </li>';
                                                }


                                                mysqli_close($connect);
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--section row -->


                    <!-- section row -->


                    <div class="row" style="margin-top: 50px">
                        <section class="footer-section">
                            <div class="footer-top">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="about" >
                                            <h4 style="margin-bottom: -20px">About Us</h4>
                                            <img src="img/footer-about.jpg" alt="">
                                            <p>Dongguan Precision Manufacture.,Ltd, located in China’s Manufacture Center - Dongguan, Guangdong, is a professional precision metal parts manufacturer.</p>
                                            <a href="about.html">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="recent-news list-group">
                                            <h4>Latest News</h4>
                                            <ul>
                                                <li>
                                                    <a href="#" title="">Consectetuer adipiscing aenean commodo ligula eget dolor.</a>
                                                    <span class="date">February 9, 2016</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 visible-lg visible-md">
                                        <div class="services">
                                            <h4>Services</h4>
                                            <ul>
                                                <li><a href="Aluminum.php">Aluminum Parts</a></li>
                                                <li><a href="Automobile.php">Automobile Parts</a></li>
                                                <li><a href="hydraulic.php">Hydraulic Pump Parts</a></li>
                                                <li><a href="machinery.php">Machinery Equipment</a></li>
                                                <li><a href="powertool.php">Power Tool Parts</a></li>
                                                <li><a href="stainless.php">Stainless Parts</a></li>
                                                <li><a href="testequipment.php">Test Equipment</a></li>
                                                <li><a href="valvebody.php">Valve Body</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="get-in-Touch">
                                            <h4>Get in Touch</h4>
                                            <address>
                                                <h4 style="color: white">Hongkong Office</h4>
                                                <i class="fa fa-map-marker"></i>
                                                Precision Machinery Technology (HK) Co., Limited.<br><br><br>
                                                <h4 style="color: white">US Sales</h4>
                                                <i class="fa fa-map-marker"></i>
                                                5008 Sweetser Ave, Evansville,<br> IN 47715, USA.
                                            </address>
                                            <address>
                                                <i class="fa fa-phone"></i>
                                                +1 (812) 604 9778 (US Sales)<br>
                                                <i class="fa fa-phone"></i>
                                                +86 0769-22992385 (China Factory)
                                            </address>
                                            <address>
                                                <i class="fa fa-envelope-o"></i>
                                                <a href="chinacontractmachining@gmail.com">chinacontractmachining@gmail.com</a>
                                                <br>
                                                We reply within 24 hours
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End .footer-top-->
                            <footer class="footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="copyright">
                                            <p>
                                                &copy; China Contract Machining 2019. All Rights Reserved. | Design by: <a href="uicookies.com" title="_blank">uiCookies</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="footer-social">
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i>Linkedin</a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i>Google+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </section>
                    </div>
                    <!-- .footer-section -->
                </div>
                <!-- .container-->
            </div>
            <!--content-wrapper-->
        </div>
        <!-- offcanvas-pusher -->


        <!-- offcanvas-menu end -->
    </div>
    <!-- #wrapper -->
    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="Aluminum.php">Aluminum Parts</a></li>
                    <li><a href="Automobile.php">Automobile Parts</a></li>
                    <li><a href="hydraulic.php">Hydraulic Pump Parts</a></li>
                    <li><a href="machinery.php">Machinery Equipment</a></li>
                    <li><a href="powertool.php">Power Tool Parts</a></li>
                    <li><a href="stainless.php">Stainless Parts</a></li>
                    <li><a href="testequipment.php">Test Equipment</a></li>
                    <li><a style="color: yellow; font-weight: bold" href="valvebody.php">Valve Body</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- =========================================
    JAVASCRIPT
    ========================================== -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/hippo-off-canvas.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/imageslider.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="../js/gallery.js"></script>


</body>
</html>