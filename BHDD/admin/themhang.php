<?php
	include"../module/connection.php";
	include"../module/qr.php";
?>
<?php
if(isset($_POST['btnthem']))
{
	$mahang=$_POST['mahang'];
	$tenhang=$_POST['tenhang'];
	$sql="INSERT INTO mahang VALUES('$mahang','$tenhang')";
	mysql_query($sql);
	header("location:listhang.php");
	

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="ad.css"/>
<body>
<div id="contant">
	<div id="iheader">
  	</div>
  	<div id="imenu">
    <?php include "header.php"; ?>
  </div>
	<div id="icontent"><form action="" method="post" name="themhang">
      <table width="500" border="1">
        <tr>
          <td colspan="2">Thêm Hãng</td>
        </tr>
        <tr>
          <td width="95">Mã Hãng :</td>
          <td width="389"><label for="mahang"></label>
          <input type="text" name="mahang" id="mahang" /></td>
        </tr>
        <tr>
          <td>Tên Hãng</td>
          <td><label for="tenhang"></label>
          <input type="text" name="tenhang" id="tenhang" /></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="btnthem" id="btnthem" value="thêm" /></td>
        </tr>
      </table>
	</form></div>
    
 </div>
</body>
</html>
