<?php
include_once '../db.inc.php';
?>

<?php
$errmsg = '';
$name = '';
$email = '';
$phone = '';
$subject = '';
$message = '';
$msgsent = '';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, trim(htmlentities($_POST['name'])));
    $email = mysqli_real_escape_string($connect, trim(htmlentities($_POST['email'])));
    $phone = mysqli_real_escape_string($connect, trim(htmlentities($_POST['phone'])));
    $subject = mysqli_real_escape_string($connect, trim(htmlentities($_POST['subject'])));
    $message = mysqli_real_escape_string($connect, trim(htmlentities($_POST['message'])));


    if (empty($name)) {
        $errmsg = 'Please type your name';
    } else if (empty($email)) {
        $errmsg = 'Please type your email to contact with you';
    } else if (empty($subject)) {
        $errmsg = 'Please type your subject';
    } else if (empty($message)) {
        $errmsg = 'Please type your message';
    } else {


            $target = '../img/msgimage/' . basename($_FILES['image']['name']);
            $image = $_FILES['image']['name'];
            $sql = 'INSERT INTO `newmsg`(`name`, `email`, `phone`, `subject`, `message`, `file`) VALUES ("' . $name . '","' . $email . '","' . $phone . '","' . $subject . '","' . $message . '","' . $image . '")';
            mysqli_query($connect, $sql);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

            }
            mysqli_close($connect);
            echo "<script type='text/javascript'>window.location.href = 'contact.php'; alert('has been sent');</script>";
            exit;



        


    }
}

?>


<!DOCTYPE html>
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
    <link rel="shortcut icon" type="image/x-icon" href="../img/taplogo1.PNG">

</head>
<!-- /head -->
<style>
    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>

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
                                            <a title="Steellex" href="../index.php">
                                                <img src="../img/logo1.png" alt="Steellex">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-5 visible-lg visible-md">
                                        <div class="location">

                                            <p><span style="font-weight:bold">Hongkong Office:</span> Precision
                                                Machinery Technology (HK) Co., Limited.</p>
                                            <p><span style="font-weight:bold">US Sales:</span> 5008 Sweetser Ave,
                                                Evansville, IN 47715, USA.</p>
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
                                            <button type="button" class="navbar-toggle visible-xs"
                                                    data-toggle="offcanvas"
                                                    data-target=".navbar-collapse" data-placement="left"
                                                    data-effect="offcanvas-effect">
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
                                                    <li><a href="Aluminum.php">Aluminum</a></li>
                                                    <li><a href="Automobile.php">Automobile</a></li>
                                                    <li><a href="hydraulic.php">Hydraulic</a></li>
                                                    <li><a href="machinery.php">Machinery Equipment</a></li>
                                                    <li><a href="Certificates.php">Certificates</a></li>
                                                    <li><a href="fastener.php">Fastener</a></li>
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
                                        <li class="active">Contact Us</li>
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
                    <div class="inner-content" style="background: #E1DADA">
                        <div class="contact">


                            <div class="contact-us">
                                <div class="row">
                                    <div class="col-md-8 col-xs-12">
                                        <div class="main-contact-form">
                                            <h4>Drop us a
                                                Line </h4><?php echo '<p style="color: red;">' . $errmsg . '</p>' ?>
                                            <form action="contact.php" method="post" enctype="multipart/form-data">
                                                <input type="text" id="full-name" name="name" placeholder="Name"
                                                       value="<?php echo $name; ?>">
                                                <input type="email" id="email" name="email" placeholder="Email Address"
                                                       value="<?php echo $email; ?>">
                                                <input type="tel" id="phone" name="phone" placeholder="Phone"
                                                       value="<?php echo $phone; ?>">
                                                <input type="text" id="subject" name="subject" placeholder="Subject"
                                                       value="<?php echo $subject; ?>">
                                                <textarea name="message" id="message" cols="30" rows="4"
                                                          value="<?php echo $message; ?>"
                                                          placeholder="Type your message"></textarea><br><br>
                                                <input type="file" name="image"><br>

                                                <input type="submit" class="btn btn-primary" value="submit"
                                                       name="submit">


                                                <?php echo '<p style="color:green;">' . $msgsent . '</p>'; ?>
                                            </form>

                                            <script src="https://www.google.com/recaptcha/api.js"></script>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12">
                                        <div class="get-in-Touch">
                                            <h4>Contact Address</h4>
                                            <address>

                                                <H4>Hongkong Office</H4>
                                                Precision Machinery Technology (HK) Co., Limited.
                                                <div><H4>US Sales</H4> 5008 Sweetser Ave, Evansville, IN 47715, USA
                                                </div>
                                                </p>
                                            </address>
                                            <address>
                                                <i class="fa fa-phone"></i>
                                                <DIV><span style="font-weight: bold;">+1 (812) 604 9778 (US Sales)<br/>
												+86 0769-22992385 (China Factory)</span></DIV>
                                            </address>
                                            <address>
                                                <i class="fa fa-envelope-o"></i>
                                                <DIV><A
                                                            href="mailto:chinacontractmachining@gmail.com">chinacontractmachining@gmail.com</a>
                                                </div>
                                                <br>

                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.contact-us-->

                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.761856968178!2d113.72378381529853!3d22.99578302309861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403a05ae790ee2f%3A0x3c2140e1b827888b!2sPrecision+Manufacturing+Co.%2CLtd.!5e0!3m2!1sen!2sus!4v1551036891648"
                                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>
                    <!--.inner-content-->
                </div>
                <!--inner-row-->


                <!-- section row -->


                <div class="row">
                    <section class="footer-section">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="about">
                                        <h4>About Us</h4>
                                        <img src="img/footer-about.jpg" alt="">
                                        <p>Consectetuer adipiscing aenean commodo ligula eget dolor. Aenean massa sociis
                                            natoque penatibus magnis parturient montes.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="recent-news list-group">
                                        <h4>Latest News</h4>
                                        <ul>
                                            <li>
                                                <a href="#" title="">Consectetuer adipiscing aenean commodo ligula eget
                                                    dolor.</a>
                                                <span class="date">February 9, 2016
													</span>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="services">
                                        <h4>Services</h4>
                                        <ul>
                                            <li><a href="Aluminum.php">Aluminum</a></li>
                                            <li><a href="Automobile.php">Automobile</a></li>
                                            <li><a href="hydraulic.php">Hydraulic</a></li>
                                            <li><a href="machinery.php">Machinery Equipment</a></li>
                                            <li><a href="Certificates.php">Certificates</a></li>
                                            <li><a href="fastener.php">Fastener</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="get-in-Touch">
                                        <h4>Get in Touch</h4>
                                        <address>

                                            <H4>Hongkong Office</H4>
                                            Precision Machinery Technology (HK) Co., Limited.
                                            <div><H4>US Sales</H4> 5008 Sweetser Ave, Evansville, IN 47715, USA</div>
                                            </p>
                                        </address>
                                        <address>
                                            <i class="fa fa-phone"></i>
                                            <DIV><span style="font-weight: bold;">+1 (812) 604 9778 (US Sales)<br/>
												+86 0769-22992385 (China Factory)</span></DIV>
                                        </address>
                                        <address>
                                            <i class="fa fa-envelope-o"></i>
                                            <DIV><A
                                                        href="mailto:chinacontractmachining@gmail.com">chinacontractmachining@gmail.com</a>
                                            </div>
                                            <br>

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
                                            © China Contract Machining 2019. | Design by: <a href="uicookies.com"
                                                                                             title="_blank">uiCookies</a>
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

    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button aria-hidden="true" class="close" data-toggle="offcanvas" id="off-canvas-close-btn" type="button">
            &times;
        </button>
        <div>
            <div>
                <ul id="menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="Equipment.html">Equipment</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="quality.html">Quality Control</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- offcanvas-menu end -->
</div>
<!-- #wrapper -->


<!-- =========================================
JAVASCRIPT
========================================== -->

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/hippo-off-canvas.js"></script>
<script src="../js/script.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


</body>
</html>
