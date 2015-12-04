
<?php
function postIndex($index, $value="")
{
	if (!isset($_GET[$index]))	return $value;
	return $_GET[$index];
}

$sm 	= postIndex("submit");
$ten 	= postIndex("ten");
$gt 	= postIndex("gt");
$pass   = postIndex("pass");
$pass1  = postIndex("pass1");
$st     = postIndex("st");
$tinh   = postIndex("tinh");      

$arrImg = array("image/png", "image/jpeg", "image/bmp");

if ($sm=="") {
				header("location:4.php"); exit;//quay ve 1.php
			}

$err = "";
if ($ten=="") $err .="Phải nhập tên <br>";
if ($gt=="") $err .="Phải chọn giới tính <br>";
if ($pass=="") $err .="Phải nhập pass <br>";
if ($pass1=="") $err .="Phải nhập pass <br>";
if ($st=="") $err .="Phải chọn sở thich <br>";
if ($tinh=="") $err .="Phải chọn tỉnh thành <br>";



$errFile = $_FILES["hinh"]["error"];
if ($errFile>0)
	$err .="Lỗi file hình <br>";
else
{
	$type = $_FILES["hinh"]["type"];
	if (!in_array($type, $arrImg))
		$err .="Không phải file hình <br>";
	else
	{	$temp = $_FILES["hinh"]["tmp_name"];
		$name = $_FILES["hinh"]["name"];
		if (!move_uploaded_file($temp, "image/".$name))
			$err .="Không thể lưu file<br>";
		
	}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

<fieldset>
<legend>Nhập thông tin</legend>
<form action="4.php" method="get" enctype="multipart/form-data">
Tên đăng nhập:<input type="text" name="ten" /><br>
Mật khẩu:<input type="password" name="pass" /><br>
Nhập lại mật khẩu:<input type="password" name="pass1" /><br>
Giới tình:<input type="radio" name="gt" value="1" checked="checked">Nam
              <input type="radio" name="gt" value="0">Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt">Thể Thao
		<input type="checkbox" name="st[]" value="dl">Du Lịch
		<input type="checkbox" name="st[]" value="game">Game<br>
Hình ảnh:<input type="file" name="hinh" /><br>
Tỉnh:<select name="tinh">
    <optgroup label="Tỉnh thành">
    <option value="1">HCM</option>
    <option value="2">HN</option>
    <option value="3">HP</option>
    <option value="0">VT</option>
    </optgroup>
    </select><br>
<input type="submit" value="Gửi" name="submit">                          
</form>
</fieldset>

</body>
</html>