
 <?php
if( isset($_POST["btnlienhe"]) )
{
	$ten=$_POST['ten'];
	$email=$_POST['email'];
	$sdt=$_POST['sdt'];
	$diachi=$_POST['diachi'];
	$nd=$_POST['noidung'];
	$now=date('d/m/Y H:i:s');
	//$day=$now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] . " - " . $now["mday"] . "/" . $now["mon"] . "/" . $now["year"] ;
	$stt=0;
	$sql="INSERT INTO lienhe(ten, email, sdt, diachi, noidung, ngaylh, stt ) VALUES('$ten','$email','$sdt','$diachi','$nd','$now', '0')";
	mysql_query($sql);
}

?>
      <form id="form1" name="form1" method="post" action="">
        <table width="500" border="1" cellpadding="0">
          <tr>
            <th colspan="2" scope="col" height="30px">Liên Hệ </th>
          </tr>
          <tr>
            <th scope="row" width="200px" height="30px">Tên :</th>
            <td><label for="ten"></label>
            <input type="text" name="ten" id="ten" /></td>
          </tr>
          <tr>
            <th scope="row" height="30px">Email :</th>
            <td><label for="email"></label>
            <input type="text" name="email" id="email" /></td>
          </tr>
          <tr>
            <th scope="row" height="30px">Số Điện Thoại :</th>
            <td><label for="sdt"></label>
            <input type="text" name="sdt" id="sdt" /></td>
          </tr>
          <tr>
            <th scope="row" height="30px">Địa Chỉ :</th>
            <td><label for="diachi"></label>
            <input type="text" name="diachi" id="diachi" /></td>
          </tr>
          <tr>
            <th scope="row" height="30px">Nội Dung :</th>
            <td><label for="noidung"></label>
            <textarea name="noidung" id="noidung" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <th colspan="2" scope="row"><input type="submit" name="btnlienhe" id="btnlienhe" value="Gửi" /></th>
          </tr>
        </table>
      </form>