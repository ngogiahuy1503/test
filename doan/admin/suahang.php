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
	$mahang=$_GET["mahang"];
	$tenhang=chitiethang($mahang);
 ?>
 <?php
 if(isset($_POST['btnsua']))
 {
	 $mahang=$_POST["mahang"];
$tenhang=$_POST["tenhang"];

$sql="UPDATE hang SET tenhang='$tenhang' WHERE mahang='$mahang' ";
mysql_query($sql);
header("location:listhang.php");
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
	    <table width="100%" border="1" cellpadding="0">
	      <tr>
	        <th height="52" colspan="4" scope="col">Sửa Hãng</th>
          </tr>
	      
	      <tr>
	        <th scope="row">Tên Hàng :</th>
	        <td colspan="3"><label for="tenhang"></label>
            <input type="text" name="tenhang" id="tenhang" value="<?php echo $tenhang['tenhang'] ?>" /></td>
          </tr>
	      <tr>
	        <th colspan="4" scope="row"><input type="submit" name="btnsua" id="btnsua" value="Sửa" /></th>
          </tr>
        </table>
      </form>
	</div>
</div>

</body>
</html>