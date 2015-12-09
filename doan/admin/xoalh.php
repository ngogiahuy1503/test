<?php 
include"connection.php";
include"qtri.php";
 ?>
 
  <?php 
 ob_start();
 session_start();

 if(!isset($_SESSION['id']))
 {
	 header("location:../index.php");
 }
 else if($_SESSION['phanquyen']==0)
 {
	 header("location:../index.php");
}
 ?>
<?php
$mahang=$_GET['malh'];
$mysql= "DELETE FROM lienhe WHERE malh='$mahang'";
mysql_query($mysql);
header("location:listlienhe.php");
?>
