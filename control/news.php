<?php
include_once '../db.inc.php';
?><?php
session_start();
if (isset($_SESSION['log'])) {

    $result1 = mysqli_query( $connect, "SELECT * FROM newmsg"); $num_rows1 = mysqli_num_rows($result1);

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
    <style>textarea {
            margin-top: 10px;
            margin-left: 50px;
            width: 500px;
            height: 100px;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
            border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
            border-image: none;
            border-radius: 6px 6px 6px 6px;
            border-style: none solid solid none;
            border-width: medium 1px 1px medium;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
            color: #555555;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 1em;
            line-height: 1.4em;
            padding: 5px 8px;
            transition: background-color 0.2s ease 0s;
        }


        textarea:focus {
            background: none repeat scroll 0 0 #FFFFFF;
            outline-width: 0;
        }</style>
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
                <a class="navbar-brand" href="../index.php">Binary admin</a>
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
                        <a href="messages.php"><i></i> Messages <?php echo "<span style='font-size: 15px; font-weight: bold;'> &nbsp &nbsp &nbsp &nbsp".$num_rows1."</span>"; ?></a>
                    </li>
                    <li>
                        <a class="active-menu" href="news.php"><i></i> News</a>
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


                <form method="post" action="news.php">
                    <div class="row">
                        <input type="text" placeholder="Type the title" name="title" required><br><br><br>
                        <textarea placeholder="This is an awesome comment box" rows="20" name="content" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br><br><br>
                        <input type="submit" name="submit" value="Post">
                        <input type="submit" name="delete" value="Delete">
                    </div>
                </form>

                <?php
                $msg = "";
                if (isset($_POST['submit'])) {
                    $title = mysqli_real_escape_string($connect, trim(htmlentities($_POST['title']) ));
                    $content = mysqli_real_escape_string($connect, trim(htmlentities($_POST['content']) ));
                    $sql = 'INSERT INTO `postnews`(`title`, `content`) VALUES ("' . $title . '","' . $content . '")';
                    $result = mysqli_query($connect, $sql);
                    $msg = 'News added';

                }



                ?>

                <!-- /. ROW  -->

                <div class="col-md-3 col-sm-6">
                    <div class="recent-news list-group">
                        <h4>Latest News</h4>

                        <?php echo '<table style="width: 90%;"><tr>
                        <th id="tr1">Title</th>
                        <th id="tr1">Delete</th></tr>';
                            $sql='SELECT * FROM `postnews` ORDER BY  id DESC';
                            $result= mysqli_query($connect, $sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo '<tr>
                                                        <td ><a href="../pages/news.php?id='.$row['id'].'" title="">'.$row["title"].'</a></td >
                                                     <td ><a href="deletenews.php?id='.$row['id'].'" onclick="return  confirm(\'Are you sure you want to delete?\')"><img src="../img/delete.png" height="20px" width="20px"> </a> </td > ';
                            }
                            mysqli_close($connect);
                            ?>
                        </table>
                    </div>
                </div>
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

