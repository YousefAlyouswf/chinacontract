<?php
include_once '../db.inc.php';
?>
<?php
//$message = "wrong answer";
//echo "<script type='text/javascript'>alert('$message');</script>";
$query="DELETE FROM msg WHERE id=". $_GET['id'];
$result= mysqli_query($connect, $query);

?>
<?php
$query="DELETE FROM newmsg WHERE id=". $_GET['id'];
$result= mysqli_query($connect, $query);

?>
<?php 
mysqli_close($connect);
echo '<h2 style="text-align:center; margin-top: 20vw;">Successful deleting</h2>';
header("refresh:0.5;url=messages.php");
?>