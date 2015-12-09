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
$mahang=$_GET['mahang'];
$mysql= "DELETE FROM hang WHERE mahang='$mahang'";
mysql_query($mysql);
header("location:listhang.php");
?>
