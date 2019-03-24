<?php
include_once '../../db.inc.php';
?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from automobilephoto where id='$id'";
    $result= mysqli_query($connect, $sql);
    echo "<meta http-equiv='refresh' content='0;url=automobile.php'>";
}

?>
