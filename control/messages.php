<?php
include_once '../db.inc.php';
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

    </head>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
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
                        <a href="uploadimage.php"><i></i> Images</a>
                    </li>
                    <li>
                        <a class="active-menu" href="messages.php"><i></i>
                            Messages <?php echo "<span style='font-size: 15px; font-weight: bold;'> &nbsp &nbsp &nbsp &nbsp" . $num_rows1 . "</span>"; ?>
                        </a>
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

                    $sql = "select * from newmsg";
                    $result = mysqli_query($connect, $sql);
                    echo '<h2>Messages</h2><br>';
                    $result1 = mysqli_query($connect, "SELECT * FROM newmsg");
                    $num_rows1 = mysqli_num_rows($result1);
                    echo " $num_rows1 Unread messages";
                    echo '<table id="customers">
                            <tr>
            
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th></th>
                        
                      </tr>';
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo '
                                <tr style="font-weight: bold; ">
                                    <td >' . $row['name'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['subject'] . '</td>
                                    <td><a class="button" href="readmessage.php?id=' . $row['id'] . '" </a><img  src="../img/read.png" height="20px" width="20px"> <a href="deletemsg.php?id=' . $row['id'] . '"  onclick="return  confirm(\'Are you sure you want to delete?\')"><img src="../img/delete.png" height="20px" width="20px"> </a></td>
                                </tr>
                             ';
                    }


                    $sql = "select * from msg";
                    $result = mysqli_query($connect, $sql);

                    $result1 = mysqli_query($connect, "SELECT * FROM msg");
                    $num_rows = mysqli_num_rows($result1);
                    echo "<br> " . floatval($num_rows + $num_rows1) . " All messages";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                                <tr >   
                                    <td >' . $row['name'] . '</td>
                                    <td>' . $row['email'] . '</td>
                                    <td>' . $row['subject'] . '</td>
                                    <td><a href="readmessage.php?id=' . $row['id'] . '" </a><img src="../img/read.png" height="20px" width="20px"> <a href="deletemsg.php?id=' . $row['id'] . '" onclick="return  confirm(\'Are you sure you want to delete?\')"><img src="../img/delete.png" height="20px" width="20px"> </a></td>
                                </tr>
                              ';
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



