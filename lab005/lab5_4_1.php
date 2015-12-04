<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>lap5_4_1</title>
</head>

<body>
<?php
echo "REQUEST:";

$arr = array();
$r = array("id"=>1, "name"=>"Product1");
$arr[] = $r;
$r = array("id"=>2, "name"=>"Product2");
$arr[] = $r;
$r = array("id"=>3, "name"=>"Product3");
$arr[] = $r;
$r = array("id"=>4, "name"=>"Product4");
$arr[] = $r;
print_r($arr);

?>
</body>
</html>