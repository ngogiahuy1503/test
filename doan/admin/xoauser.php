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
	$mauser=$_GET['idkh'];
	$mysql="DELETE FROM khachhang WHERE idkh='$mauser' ";
	mysql_query($mysql);
	header("location:listuser.php");
	
?>