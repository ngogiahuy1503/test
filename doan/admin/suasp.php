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
 	$masp=$_GET['masp'];
	$row_sp=chitietsanpham($masp);
 ?>
 <?php
 if(isset($_POST['btnsua']))
 {
	$masp=$_GET['masp'];
	 $mahang=$_POST["mahang"];
	$tensp=$_POST['tensp'];
	$ttsp=$_POST['ttsp'];
	$hinh=$_POST['hinh'];
	$gia=$_POST['gia'];settype($gia,'float');
	$mausac=$_POST['mausac'];

$sql="UPDATE sanpham SET mahang='$mahang', tensp='$tensp', ttsp='$ttsp', hinh='$hinh', gia='$gia', mausac='$mausac' WHERE masp='$masp' ";
mysql_query($sql);
header("location:listsanpham.php");
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>


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
	    <table width="900" border="1" cellpadding="0">
	      <tr>
	        <th height="60" colspan="2" scope="col">
            SỬA SẢN PHẨM</th>
          </tr>
	      <tr>
	        <th scope="row">mã hãng:</th>
	        <td><label for="mahang"></label>
	          <select name="mahang" id="mahang">
              <?php 
			  $hang= danhsachhang();
			  while($row_hang=mysql_fetch_array($hang))
			  {
			  ?>
              <option <?php if($row_hang["mahang"]==$row_sp["mahang"]) echo "selected='selected'"; ?> value="<?php echo $row_hang['mahang'] ?>"><?php echo $row_hang['tenhang'] ?></option>
              <?php
			  };
			  ?>
            </select></td>
          </tr>
	      <tr>
	        <th scope="row">Tên sản phẩm:</th>
	        <td><label for="tensp"></label>
            <input value="<?php echo $row_sp['tensp'] ?>" type="text" name="tensp" id="tensp" /></td>
          </tr>
	      <tr>
	        <th scope="row">thông tin sản phẩm:</th>
	        <td><label for="ttsp"></label>
             <textarea name="ttsp" id="ttsp" value="<?php echo $row_sp['ttsp'] ?>" cols="45" rows="5"></textarea>
            <script type="text/javascript">
var editor = CKEDITOR.replace( 'ttsp',{
	uiColor : '#9AB8F3',	language:'vi',
	skin:'v2',
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
	filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
	filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextColor','BGColor'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
</td>
          </tr>
	      <tr>
	        <th scope="row">urlHinh:</th>
	        <td><label for="hinh"></label>
            <input value="<?php echo $row_sp['hinh'] ?>" type="file" name="hinh" id="hinh" />
           </td>
          </tr>
          <tr>
	        <th scope="row">Ram:</th>
	        <td><label for="ram"></label>
            <input value="<?php echo $row_sp['ram'] ?>" type="text" name="ram" id="ram" /></td>
          </tr>
          <tr>
	        <th scope="row">VGA:</th>
	        <td><label for="vga"></label>
            <input value="<?php echo $row_sp['vga'] ?>" type="text" name="vga" id="vga" /></td>
          </tr>
	      <tr>
	        <th scope="row">giá :</th>
	        <td><label for="hinh"></label>
            <input value="<?php echo $row_sp['gia'] ?>" type="text" name="gia" id="gia" /></td>
          </tr>
	      <tr>
	        <th scope="row">màu sắc:</th>
	        <td><label for="mausac"></label>
            <input value="<?php echo $row_sp['mausac'] ?>" type="text" name="mausac" id="mausac" /></td>
          </tr>
          
	      <tr>
	        <th colspan="2" scope="row"><input type="submit" name="btnsua" id="btnsua" value="sửa" /></th>
          </tr>
        </table>
      </form>
	
	</div>
</div>

</body>
</html>