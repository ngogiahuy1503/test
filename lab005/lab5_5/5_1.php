<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo "REQUEST:";
print_r($_REQUEST);
echo "<hr>POST<br>";
print_r($_POST);

?><hr>
<fieldset>
<legend>Form 3</legend>
<form action="5_1.php" method="post">
Nhập tên:<input type="text" name="ten" ><br>
giới tính:<input type="radio" name="gt" value="1">Nam
		  <input type="radio" name="gt" value="0">Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt">Thể Thao
		<input type="checkbox" name="st[]" value="dl">Du Lịch
		<input type="checkbox" name="st[]" value="game">Game<br>
<input type="submit" >
</form>
</fieldset>
</body>
</html>