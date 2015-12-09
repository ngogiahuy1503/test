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
$masp=$_GET['masp'];
$mysql= "DELETE FROM sanpham WHERE masp='$masp'";
mysql_query($mysql);
header("location:listsanpham.php");
?>