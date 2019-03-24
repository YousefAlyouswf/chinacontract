<?php
include_once '../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {


    ?>

    <html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Admin Dashboard</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../css/bootstrap1.css" rel="stylesheet"/>
        <!-- FONTAWESOME STYLES-->
        <link href="../css/font-awesome.css" rel="stylesheet"/>
        <!-- MORRIS CHART STYLES-->
        <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
        <link href="../css/custom.css" rel="stylesheet"/>
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="../login.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="../img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="controlpanel.php"><i></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="adduser.php"><i></i> Users add / delete</a>
                    </li>
                    <li>
                        <a href="uploadimage.php"><i></i> Images / Videos</a>
                    </li>
                    <li>
                        <a class="active-menu" href="messages.php"><i></i> Messages</a>
                    </li>
                    <li>
                        <a href="news.php"><i></i> News</a>
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
                $sql="INSERT INTO msg SELECT * FROM newmsg WHERE id=" . $_GET['id'];
                $result = mysqli_query($connect, $sql);

                ?>
                <?php
                $query="DELETE FROM newmsg WHERE id=". $_GET['id'];
                $result= mysqli_query($connect, $query);

                ?>
                <?php
                $sql = "SELECT * FROM `msg` WHERE id=" . $_GET['id'];
                $result = mysqli_query($connect, $sql);

                echo '<h2>Message Table</h2>';
                echo '<table >';

                while ($row = mysqli_fetch_array($result)) {
                    echo '<tr> <th id="tr1">Sent from: ' . $row['name'] . '<br>Date: ' . $row['date'] . '</th></tr>';
                    echo '<tr><td><div ><pre><p style="font-size: 15px; font-family: Arial, sans-serif;  margin-top: 15px">' . $row["message"] . '</p></pre></div></td></tr>
                    ';
                    if ($row['file'] != null) {
                       echo '<tr><td><br><br><br><i class="material-icons">attachment</i> <br><a target="_blank" href="../img/msgimage/' . $row['file'] . '"> <img src="../img/msgimage/' . $row['file'] . '"width="150" height="150" style="margin: 10px;"></a></td></tr>';
                    }
                }
                echo '</table>';
                mysqli_close($connect);
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
    <script src="../js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../js/bootstrap1.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="../js/morris/raphael-2.1.0.min.js"></script>
    <script src="../js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../js/custom.js"></script>


    </body>
    </html>

    <?php
} else {
    echo '<h2 style="text-align:center; margin-top:50px;">You cannot access this page before you log in</h2>';
    header("refresh:2;url=../login.php");
}




