<?php
function danhsachhang()
{
	$sql="SELECT * FROM hang ORDER BY mahang DESC ";
	return mysql_query($sql);
}
function chitiethang($mahang)
{
	$sql="SELECT * FROM hang WHERE mahang='$mahang'";
	$row= mysql_query($sql);
	return mysql_fetch_array($row);
}
function danhmucsanpham($mahang)
{
	$sql="SELECT * FROM sanpham WHERE mahang='$mahang'";
	return mysql_query($sql);
}
function danhsachsanpham()
{
	$sql="SELECT * FROM sanpham, hang
			WHERE sanpham.mahang = hang.mahang ";
	return mysql_query($sql);
}
function chitietsanpham($masp)
{
	$sql="SELECT * FROM sanpham WHERE masp = '$masp' ";
	$row= mysql_query($sql);
	return mysql_fetch_array($row);
	}
function danhsachuser()
{
	$sql="SELECT * FROM thanhvien";
	return mysql_query($sql);
}
function danhsachadmin()
{
	$sql="SELECT * FROM admin";
	return mysql_query($sql);
	
}
function chitietlienhe($malh)
{
	$sql="SELECT * FROM lienhe WHERE malh = '$malh' ";
	$row= mysql_query($sql);
	return mysql_fetch_array($row);
}
function danhsachlh()
{
	$sql="SELECT * FROM lienhe ORDER BY stt DESC";
	return mysql_query($sql);
}
function timkiem($tukhoa)
{
	$sql="Select * from sanpham where tensp REGEXP '$tukhoa' ORDER BY masp DESC";
	return mysql_query($sql);
}
function stripUnicode($str){ 
  if(!$str) return false; 
   $unicode = array( 
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ', 
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
     'd'=>'đ', 
     'D'=>'Đ', 
      'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 
      'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
      'i'=>'í|ì|ỉ|ĩ|ị',       
      'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
      'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 
      'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ', 
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ' 
   ); 
foreach($unicode as $khongdau=>$codau) { 
    $arr=explode("|",$codau); 
    $str = str_replace($arr,$khongdau,$str); 
} 
return $str; 
} 
function changeTitle($str){ 
    $str=trim($str); 
    if ($str=="") return ""; 
    $str =str_replace('"','',$str); 
    $str =str_replace("'",'',$str); 
    $str = stripUnicode($str); 
    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8'); 
     
    // MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER 
    $str = str_replace(' ','-',$str); 
    return $str; 
} 

?>