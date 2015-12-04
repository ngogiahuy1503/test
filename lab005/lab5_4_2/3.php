<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lab5_4_2</title>
<style>
fieldset{width:50%; margin:100px auto;}
</style>
</head>

<body>
<?php
echo "<hr>GET<br>";
print_r($_GET);
?>
<fieldset>
<legend>Nhập thông tin</legend>
<form action="3.php" method="get" enctype="multipart/form-data">
<table  align="center">
    <tr><td>Tên sản phẩm:</td><td><input type="text" name="ten"></td></tr>
    <tr><td>Lựa chọn :</td><td><input type="radio" name="lc" value="1" checked="checked">Gần đúng
              <input type="radio" name="lc" value="0">Chính xác</td></tr>
    <tr><td>Loai:</td><td><select name="combobox">
    <optgroup label="Chọn">
    <option value="1">Loại 1</option>
    <option value="2">Loại 2</option>
    <option value="3">Loại 3</option>
    <option value="0">Tất cả</option>
    </optgroup>
    </select>
		</td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Gửi" name="submit"></td></tr>
</table>
</form>
</fieldset>

</body>
</html>