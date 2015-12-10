<?php 
include"connection.php";
include"qtri.php";
 ?>
 
 <?php
	$malh=$_GET["malh"];
	$stt=chitiethang($malh);
	
 ?>
 <?php
 if(isset($_POST['btnsua']))
 {
$malh=$_GET["malh"];
$tt=$_POST["stt"];

$sql="UPDATE lienhe SET stt='$tt' WHERE malh='$malh' ";
mysql_query($sql);
header("location:listlienhe.php");
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
	  <form id="form1" name="form1" method="post" action="">
	    <table width="500" border="1" cellpadding="0">
	      <tr>
	        <th colspan="2" scope="col">Thay Đổi Trạng Thái</th>
          </tr>
	      <tr>
	        <th width="202" scope="row">Trạng Thái :</th>
	        <td width="286"><select name="stt" id="stt">
            
            <option value="0"> Chưa Xử Lý</option>
            <option   value="1"> Đã Xử Lý</option>
            </select></td>
          </tr>
	      <tr>
	        <th colspan="2" scope="row"><input type="submit" name="btnsua" id="btnsua" value="Sửa" /></th>
          </tr>
        </table>
      </form>
	
	</div>
</div>

</body>
</html>