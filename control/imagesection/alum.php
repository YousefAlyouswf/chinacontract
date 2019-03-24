<?php
include_once '../../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {


    $result1 = mysqli_query($connect, "SELECT * FROM newmsg");
    $num_rows1 = mysqli_num_rows($result1);
    ?>

    <html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin Dashboard</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <link rel='stylesheet'
              href='https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.css'>
        <link href="../../css/filedrag3.css" rel="stylesheet"/>
        <!-- BOOTSTRAP STYLES-->
        <link href="../../css/bootstrap1.css" rel="stylesheet"/>
        <!-- FONTAWESOME STYLES-->
        <link href="../../css/font-awesome.css" rel="stylesheet"/>
        <!-- MORRIS CHART STYLES-->
        <link href="../../js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
        <link href="../../css/custom.css" rel="stylesheet"/>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

    </head>
    <body>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../controlpanel.php">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../../login.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="../../img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="../controlpanel.php"><i></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="../adduser.php"><i></i> Users add / delete</a>
                    </li>
                    <li>
                        <a class="active-menu" href="../uploadimage.php"><i></i> Images / Videos</a>
                    </li>
                    <li>
                        <a href="../messages.php"><i></i>
                            Messages <?php echo "<span style='font-size: 15px; font-weight: bold;'> &nbsp &nbsp &nbsp &nbsp" . $num_rows1 . "</span>"; ?>
                        </a>
                    </li>
                    <li>
                        <a href="../news.php"><i></i> News</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                echo '<div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                        <h5>Welcome ' . $_SESSION['username'] . ' , Love to see you back. </h5>
                    </div>
                </div>';

                ?>

                <!-- /. ROW  -->
                <hr/>

                <?php


                $msg = '';
                if (isset($_POST['upload'])) {

                    if (empty($_FILES['fileselect']['tmp_name'])) {
                        echo '<script>alert("Choose image before press button");</script>';
                    } else {
                       for ($i = 0; $i < count($_FILES['fileselect']['name']); $i++) {
                            $filetemp = $_FILES['fileselect']['tmp_name'][$i];
                            $image = $_FILES['fileselect']['name'][$i];
                            $target = '../../img/aluminum/' . $image;

                            move_uploaded_file($filetemp, $target);
                            $sql = "INSERT INTO aluminumphoto(image) value ('$image')";
                            mysqli_query($connect, $sql);

                        }
                    }

                }
                ?>
                <form action="alum.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="upload" value="Upload"/>
                    <div class="container">
                        <div class="well" data-bind="fileDrag: multiFileData">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <!-- ko foreach: {data: multiFileData().dataURLArray, as: 'dataURL'} -->
                                    <img style="height: 100px; margin: 5px;" class="img-rounded  thumb"
                                         data-bind="attr: { src: dataURL }, visible: dataURL">
                                    <!-- /ko -->
                                    <div data-bind="ifnot: fileData().dataURL">
                                        <label class="drag-label">Drag files here</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="file" name="fileselect[]" multiple data-bind="fileInput: multiFileData, customFileInput: {
                                      buttonClass: 'btn btn-success',
                                      fileNameClass: 'disabled form-control',
                                      onClear: onClear,
                                    }" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <?php

                $sql = "SELECT * FROM aluminumphoto";
                $result = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<a target="_blank" href="../../img/aluminum/' . $row['image'] . '">';
                    echo '<div class=" col-md-4 col-sm-6"><img src="../../img/aluminum/' . $row['image'] . '"width="150" height="150" style="margin: 10px;"></a><a href="deletealum.php?id=' . $row['id'] . '">Delete</a>';


                    echo '</div>';


                }

                ?>


                <!-- /. ROW  -->


            </div>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../../../js/bootstrap1.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="../../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../../js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../js/custom.js"></script>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'></script>
    <script src='https://rawgit.com/adrotec/knockout-file-bindings/master/knockout-file-bindings.js'></script>
    <script src="../../js/filedrag3.js"></script>
    </body>
    </html>

    <?php
} else {
    echo '<h2 style="text-align:center; margin-top:50px;">You cannot access this page before you log in</h2>';
    header("refresh:2;url=../../login.php");
}

