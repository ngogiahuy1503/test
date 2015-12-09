
<?php
if(isset($_POST['btndk']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$ten=$_POST['ten'];
	$sdt=$_POST['sdt'];
	$email=$_POST['email'];
	$diachi=$_POST['diachi'];
	$cmnd=$_POST['cmnd'];
	$sql="insert into thanhvien values('$id','$pass','$ten','$sdt','$email','$diachi','$cmnd', '0') ";
	mysql_query($sql);
	header("location:index.php");	
}
?>
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
 <script type="text/javascript" src="../js/messages_vi.js"></script>  	  
 <form id="form1" name="form1" method="post" action="">
   	    <table width="500" border="1" cellpadding="0">
   	      <tr>
   	        <th colspan="2" scope="col">Đăng Ký Thành Viên</th>
          </tr>
   	      <tr>
   	        <th width="170" scope="row">ID :</th>
   	        <td width="318"><label for="id"></label>
            <input type="text" name="id" id="id" placeholder="Vui lòng nhập id" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">PASS :</th>
   	        <td><label for="pass"></label>
            <input type="password" name="pass" id="pass" placeholder="Vui lòng nhập tên" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">nhập lại pass:</th>
   	        <td><label for="conpass"></label>
            <input type="password" name="conpass" id="conpass" placeholder="Vui lòng nhập tên" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">Tên :</th>
   	        <td><label for="ten"></label>
            <input type="text" name="ten" id="ten" placeholder="Vui lòng nhập tên" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">Số Điện Thoại :</th>
   	        <td><label for="sdt"></label>
            <input type="text" name="sdt" id="sdt" placeholder="Vui lòng nhập tên" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">Email :</th>
   	        <td><label for="email"></label>
            <input type="text" name="email" id="email" placeholder="Vui lòng nhập tên" required /></td>
          </tr>
   	      <tr>
   	        <th scope="row">Địa Chỉ :</th>
   	        <td><label for="diachi"></label>
            <input type="text" name="diachi" id="diachi" placeholder="Vui lòng nhập tên" required/></td>
          </tr>
   	      <tr>
   	        <th scope="row">CMND :</th>
   	        <td><label for="cmnd"></label>
            <input type="text" name="cmnd" id="cmnd" placeholder="Vui lòng nhập tên" required /></td>
          </tr>
   	      <tr>
   	        <th colspan="2" scope="row" style="text-align:center"><input type="submit" name="btndk" id="btndk" value="Đăng Ký" /></th>
          </tr>
        </table>
      </form>
     	<script type="text/javascript">

	$(document).ready(function() {

		//Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
		$("#form1").validate({
					rules: {
						id: "required",
						ten: "required",
						diachi: {
							required: true,
							minlength: 5
						},
						sdt: {
							required: true,
							minlength: 9
						},
						pass: {
							required: true,
							minlength: 5
						},
						conpass: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						email: {
							required: true,
							email: true
						},
						cmnd: {
							required: true,
							minlength: 9,
							maxlength: 9
						},
					},
					messages: {
						id: "Vui lòng nhập id",
						ten: "Vui lòng nhập tên",
						diachi: {
							required: "Vui lòng nhập địa chỉ",
							minlength: "địa chỉ ngắn quá"
						},
						sdt: {
							required: "Vui lòng nhập số điện thoại",
							minlength: "Số máy quý khách vừa nhập là số không có thực"
						},
						pass: {
							required: 'Vui lòng nhập mật khẩu',
							minlength: 'Vui lòng nhập ít nhất 5 kí tự'
						},
						conpass: {
							required: 'Vui lòng nhập mật khẩu',
							minlength: 'Vui lòng nhập ít nhất 5 kí tự',
							equalTo: 'Mật khẩu không trùng'
						},
						email: {
							required: "Please provide a password",
							minlength: "Your password must be at least 5 characters long",
							equalTo: "Please enter the same password as above"
						},
						email: "Vui lòng nhập Email",
						cmnd: {
							required: "vui lòng nhập cmnd",
							minlength: "CMND quá ngắn",
							maxlength: "CMND dài quá"
						}
					}
				});
	});
	</script>