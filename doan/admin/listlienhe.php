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
	      <th colspan="8" scope="col">DANH SÁCH LIÊN HỆ </th>
        </tr>
	    <tr>
	      <th width="139" scope="row">Mã liên hệ</th>
	      <td width="128">Tên lien hệ</td>
	      <td width="105">email</td>
	      <td width="78">SĐT</td>
	      <td width="100">Địa chỉ</td>
	      <td width="126">Nội dung</td>
	      <td width="121">ngày liên hệ</td>
          <td width="121">Trạng Thái(0 là chưa xử lý/ 1 là đã sử lý)</td>
	      <td width="67">&nbsp;</td>
        </tr>
        <?php
		$lh=danhsachlh();while($row_lh=mysql_fetch_array($lh))
		{ ob_start();
		
		?>
	    <tr>
	      <th scope="row">{malh}</th>
	      <td>{ten}</td>
	      <td>{email}</td>
	      <td>{sdt}</td>
	      <td>{diachi}</td>
	      <td>{noidung}</td>
	      <td>{ngaylh}</td>
          <td>{stt}</td>
	      <td><a href="sualienhe.php?malh={malh}">sửa</a>-<a onclick="return confirm('ngoài cứt ra bạn có ăn gì khác không?')" href="xoalh.php?malh={malh}">xóa</a></td>
        </tr>
        <?php
		$s=ob_get_clean();
		$s=str_replace("{malh}",$row_lh['malh'],$s);
		$s=str_replace("{ten}",$row_lh['ten'],$s);
		$s=str_replace("{email}",$row_lh['email'],$s);
		$s=str_replace("{sdt}",$row_lh['sdt'],$s);
		$s=str_replace("{diachi}",$row_lh['diachi'],$s);
		$s=str_replace("{noidung}",$row_lh['noidung'],$s);
		$s=str_replace("{ngaylh}",$row_lh['ngaylh'],$s);
		$s=str_replace("{stt}",$row_lh['stt'],$s);
		echo $s;
		}
		?>
      </table>
	
	</div>
</div>

</body>
</html>