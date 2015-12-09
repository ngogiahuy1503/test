<?php
session_start();
include "admin/connection.php";
include "admin/qtri.php";
 ?>
 <?php
 if(isset($_POST['btnlogin']))
 {
	 $un=$_POST['mnuser'];
	 $pa=$_POST['mnpass'];
	 $sql="Select * FROM thanhvien
	 		Where id='$un' AND pass='$pa'";
	$thanhvien=mysql_query($sql);
	if(mysql_num_rows($thanhvien)==1)
	{
		$r=mysql_fetch_array($thanhvien);
		$_SESSION['id']=$r['id'];
		$_SESSION['phanquyen']=$r['phanquyen'];
		$_SESSION['ten']=$r['ten'];
		$_SESSION['pass']=$r['pass'];
		
	}
}
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Chủ</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<div class="container">
    <div class="header"><?php include"include/header.php"?></div>
     <div id="menu">
       <div style="font-size:16px"><a href="index.php">Trang chủ</a></div>
			<div style="font-size:16px"><a href="?q=tintuc">Tin Tức</a></div>
			<div style="font-size:16px"><a href="?q=lh">Liên Hệ</a></div>
			<div style="">
            <?php
			if(!isset($_SESSION['id']) )
				echo "<a href='?q=dn'>Đăng Nhập</a>" ;
			else include "module/formhello.php";			
			?>
            </div>
       <div style="line-height:10px;;width:20%;height:50px">
           <?php include"include/timkiem.php"; ?>
         
            </div>
			
	</div>
    
    	<div style="clear:both;"></div>
   	 <div class="menu_left">
     	<div class="a"style="background:#C30;color:#FFF" >DANH MỤC SẢN PHẨM</div>
                <div class="danhsachdiv"><?php include"include/danhmuchang.php" ?>
                </div>
      <div>
     		 <div class="d">Thông Tin Giỏ Hàng</div>
         	<div>&#187Sản Phẩm:0</div>
            <div>&#187Xem Giỏ Hàng</div>
       </div>
       <div class="box">
		   <div class="title">Sản Phẩm Khuyến Mãi</div>
            <div class="box_content">
            <marquee direction="up" height="190">
            <div class="pro_title">LENOVO Yoga 500 </div>
           	<div><img src="images/LENOVOS400.jpg"/></div>
            <div class="oldprice">13.990.000</div><div class="pro_price">11.169.000</div>
            <div style="clear:both"></div>
            <hr color="#6da6b1" />
            <div class="pro_title">DELL </div>
            <div><img src="images/dell-0967-421842-1-zoom.jpg"/></div>
            <div align="center"></div>
            <div class="oldprice">8.790.000</div><div class="pro_price">6.690.000</div>
            <div style="clear:both"></div>
            </marquee>
            </div>
  		 </div>
       	</div>
     	
     
  
   	<div class="content">
   	 	<?php
		$b="include/content.php";
		if(isset($_REQUEST["q"]))
		{
			$a=$_REQUEST["q"];
			if($a=="lh")
				$b="include/lienhe.php";
			if($a=="hang")
				$b="include/sanpham.php";
			if($a=="dn")
				$b="module/dangnhap.php";
			if($a=="tt")
				$b="include/ttsp.php";
			if($a=="tk")
				$b="include/ketquatim.php";
			if($a=="dk")
				$b="include/dangky.php";
		}
		include"$b";
		?>
   	</div>
	
   <div style="clear:both"></div>
    <div id="footer">
    Copyright&copy;LAPTOP ONLINE STORE<br />
    Địa chỉ: 180 Cao Lỗ Phường 4 Quận 8 Tp.HCM<br />
    Điện thoại: 0962946063
    </div>	
</div>
</body>
</html>