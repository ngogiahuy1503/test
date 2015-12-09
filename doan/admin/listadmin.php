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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/stylead.css"/>
<style type="text/css">
#container_ad #content_ad table tr td {
	font-weight: bold;
}
</style>
</head>

<body>
<div id="container_ad">
	<div id="banner_ad"><?php include"banner_ad.php" ?></div>
    <div style="width:960px; height:30px; ">
	<div id="menu_ad">
	  <?php include"menu_ad.php" ?>
  </div></div>
	<div id="content_ad">
	<table width="900" border="1" cellpadding="0">
  <tr>
    <th height="23" colspan="5" scope="col">Danh Sách Admin</th>
    </tr>
  <tr>
    <th scope="row">id admin</th>
    <td>số điện thoại</td>
    <td>email</td>
     <td>tên</td>
    <td><a href="themad.php">thêm</a></td>
  </tr>
  <?php
  $ad = danhsachadmin();
  while($row_ad = mysql_fetch_array($ad))
  {
	  ob_start();
  ?>
  <tr>
    <th scope="row">{idad}</th>
    <td>{sdt}</td>
    <td>{email}</td>
     <td>{ten}</td>
    <td><a href="suaad.php?idad={idad}">sửa</a> - <a href="xoaad.php?idad={idad}">xóa</a></td>
  </tr>
  <?php
  
$s= ob_get_clean();
$s=str_replace("{idad}",$row_ad["idad"], $s);
$s=str_replace("{sdt}",$row_ad["sdt"], $s);
$s=str_replace("{email}",$row_ad["email"], $s);
$s=str_replace("{ten}",$row_ad["ten"], $s);
echo $s;
  }
  ?>
</table>

	</div>
</div>

</body>
</html>