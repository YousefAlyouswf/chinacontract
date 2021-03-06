<?php
include_once '../../db.inc.php';
?>

<?php
session_start();
if(isset($_SESSION['log'])){

    echo '<h1 style="text-align: center; color: white;">Welcome to Control Panel '. $_SESSION['username'].'</h1>';
    ?>

    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>

            /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
            @import url(https://fonts.googleapis.com/css?family=Open+Sans);
            .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
            .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
            .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
            .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
            .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
            .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
            .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
            .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
            .btn-block { width: 100%; display:block; }

            * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }



            body {
                width: 100%;
                height:100%;
                font-family: 'Open Sans', sans-serif;
                background: #092756;
                background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
                background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
                background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
                background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
                background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
            }
            a{
                color: red;
                text-decoration: none;
            }
            ul {
                list-style-type: none;
                margin-top: 0px;
                padding: 0;
                width: 20%;
                background-color: #f1f1f1;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a.active {
                background-color: #4CAF50;
                color: white;
            }

            li a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            img:hover{
                border: 1px;
                border-style:groove;
            }

            .items{
                text-align: center;
                color:#999999;
                font-size: 20px;
                font-weight: bold;
            }
            .myimg{
                border-radius: 30px;
                width: 300px;
                height: 300px;
                margin: 0 auto;
                display: block;
                padding-bottom: 10px;
                margin-top: 10px;
            }
        </style>
        <?php

        $msg='';

        if(isset($_POST['upload'])){


            for ($i=0; $i<count($_FILES['image']['name']);$i++){
                $filetemp=$_FILES['image']['tmp_name'][$i];
                $image=$_FILES['image']['name'][$i];
                $target='../../img/machinery/'.$image;

                move_uploaded_file($filetemp, $target);
                $sql="INSERT INTO machinery(image) value ('$image')";
                mysqli_query($connect,$sql);

            }
        }
        if(isset($_POST['upload1'])){


            for ($i=0; $i<count($_FILES['image']['name']);$i++){
                $filetemp=$_FILES['image']['tmp_name'][$i];
                $image=$_FILES['image']['name'][$i];
                $target='../../img/machinery/'.$image;

                move_uploaded_file($filetemp, $target);
                $sql="INSERT INTO videomach(image) value ('$image')";
                mysqli_query($connect,$sql);

            }
        }

        ?>
    </head>
    <body style="background-color: #6666ff;">


    <ul>
        <li><a class="active" href="../controlpanel.php">Settings</a></li>
        <li><a href="../uploadimage.php">Photos</a></li>
        <li><a href="../adduser.php">Users</a></li>
        <li><a href="../messages.php">Messages</a></li>
        <li><a href="../../login.php">Log out</a></li>

    </ul>
    <div class="container items">

        <form method="POST" action="machinery.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div style="margin-left: 40%; margin-bottom: 20px; ">
                <input type="file" name="image[]" multiple="">
            </div>
            <div>
                <textarea name="text" cols="40" rows="4" placeholder="Image title" style="border:1px; border-style: double; border-radius: 20px;"></textarea>
            </div>
            <div>
                <input type="submit" name="upload" value="Upload Image" style="margin-top:20px;">
                <input type="submit" name="upload1" value="Upload Video" style="margin-top:20px;">
                <?php
                echo '<p style=color:red;>'.$msg.'</p>';
                ?>
            </div>
        </form>
    </div>

    <div class="container items">

        <?php

        $sql="SELECT * FROM machinery";
        $result= mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)){
            echo '<a target="_blank" href="../../img/machinery/'.$row['image'].'">';
            echo '<div class=" col-md-4 col-sm-6"><img src="../../img/machinery/'.$row['image'].'"width="150" height="150" style="margin: 10px;"></a><a href="delmachinery.php?id='.$row['id'].'">Delete</a>';

            echo '</div>';
        }
        $sql="SELECT * FROM videomach";
        $result= mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)){
            echo '<a target="_blank" href="../../img/machinery/'.$row['image'].'">';
            echo '<div class=" col-md-4 col-sm-6"><video width="150" height="150" controls> <source src="../../img/machinery/'.$row['image'].'" style="margin: 10px;" type="video/mp4" </video></a><a href="delvideomash.php?id='.$row['id'].'">Delete</a>';
            echo '</div>';
        }
        ?>
    </div>
    </body>
    </html>

    <?php
}
else{
    echo'<h2 style="text-align:center; margin-top:50px;">You cannot access this page before you log in</h2>';
    header("refresh:2;url=../login.php");

}
mysqli_close($connect);
?>