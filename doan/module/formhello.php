<?php
if(isset($_POST['btnthoat']))
{
	session_destroy();
}
?>

<form action="" method="post" >
Chào Bạn <?php echo $_SESSION['ten']; ?><input name="btnthoat" type="submit" value="Thoát" />
</form>
