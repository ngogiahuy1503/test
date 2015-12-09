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
    <th height="40" colspan="10" scope="col">Danh Sách Sản Phẩm</th>
    </tr>
  <tr>
    <th width="96" scope="row">mã sản phẩm</th>
    <td width="73">mã hãng</td>
    <td width="155">tên sản phẩm</td>
    <td width="50">Ram</td>
    <td width="50">VGA</td>
    <td width="250">thông tin</td>
    <td width="100">hình</td>
    <td width="100">giá</td>
    <td width="108">màu sắc</td>
    <td width="82"><a href="themsp.php">Thêm</a></td>
  </tr>
  <?php 
  $sp = danhsachsanpham();
  while($row_sanpham = mysql_fetch_array($sp))
  {
  ob_start();
  ?>  
  <tr>
    <th scope="row">{masp}</th>
    
    <td>{mahang}</td>
    
    <td>{tensp}</td>
   
    <td>{Ram}</td>
    <td>{VGA}</td>
    <td>{ttsp}</td>
    <td><img src="../images/{hinh}"/></td>
    <td>{gia}</td>
    <td>{mausac}</td>
    <td><a href="suasp.php?masp={masp}">Sửa</a> - <a onclick="return confirm('ban co chak muốn xóa hay không?')" href="xoasp.php?masp={masp}">Xóa</a></td>
  </tr>
  <?php
  $s = ob_get_clean();
  $s=str_replace("{masp}",$row_sanpham["masp"], $s);
  $s=str_replace("{mahang}",$row_sanpham["mahang"], $s);
  $s=str_replace("{tensp}",$row_sanpham["tensp"], $s);
  $s=str_replace("{ttsp}",$row_sanpham["ttsp"], $s);
  $s=str_replace("{Ram}",$row_sanpham["ram"], $s);
  $s=str_replace("{VGA}",$row_sanpham["vga"], $s);
  $s=str_replace("{hinh}",$row_sanpham["hinh"], $s);
  $s=str_replace("{gia}",$row_sanpham["gia"], $s);
  $s=str_replace("{mausac}",$row_sanpham["mausac"], $s);
  echo $s;
  }
  ?>
</table>
 
	</div>
</div>


</body>
</html>