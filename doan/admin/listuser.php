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
	  <table width="880" border="1" cellpadding="0">
	    <tr>
	      <th colspan="7" scope="col">Danh Sách Thành Viên</th>
        </tr>
	    <tr>
	      <th width="124" scope="row">mã user</th>
	      <td width="124">Tên user</td>
	      <td width="124">email</td>
	      <td width="124">Số Điện Thoại</td>
	      <td width="124">Địa Chỉ</td>
	      <td width="124">Phân Quyền</td>
	      <td width="104"><a href="themuser">Thêm</a></td>
        </tr>
	    <tr>
        <?php 
		$sp=danhsachuser();
		while($row_user = mysql_fetch_array($sp))
		{
			ob_start();
		?> 
	      <th scope="row">{idkh}</th>
	      <td>{tenkh}</td>
	      <td>{email}</td>
	      <td>{sdtkh}</td>
	      <td>{diachi}</td>
	      <td>{phanquyen}</td>
	      <td><a href="suauser.php?idkh={idkh}">Sửa</a> - <a onclick=" return confirm('bạn có chắc là muốn xóa user này không?')" href="xoauser.php?idkh={idkh}">Xóa</a></td>
        </tr>
        <?php
		$s = ob_get_clean();
  		$s=str_replace("{idkh}",$row_user["id"], $s);
		$s=str_replace("{tenkh}",$row_user["ten"], $s);
		$s=str_replace("{email}",$row_user["email"], $s);
		$s=str_replace("{sdtkh}",$row_user["sdt"], $s);
		$s=str_replace("{diachi}",$row_user["diachi"], $s);
		$s=str_replace("{phanquyen}",$row_user["phanquyen"], $s);
  		echo $s;
		}
		?>
      </table>
	
	</div>
</div>

</body>
</html>