<?php 
session_start();
session_destroy();

?>
<?php include('navi.php');
echo"<hr>";
header('location:login.php');
?>


<?php include('foot.php');