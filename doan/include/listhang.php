
	  <table width="75%" border="2px" cellpadding="0">
	    <tr>
	      <th colspan="3" scope="col" height="50px" style="text-height:40px;"><strong>Danh Sách Hãng</strong></th>
        </tr>
	    <tr>
	      <th width="17%" scope="row">Mã Hàng</th>
	      <td width="38%">Tên Hãng</td>
	      <td width="45%"><a href="../admin/themhang.php">Thêm</a></td>
       
	    <?php
		$hang= danhsachhang();
		while($row_hang= mysql_fetch_array($hang)){
			ob_start();
		?>
        <tr>
	      <th scope="row">{mahang}</th>
	      <td>{tenhang}</td>
	      <td><a href="../admin/suahang.php?mahang={mahang}">Sửa</a> - 
          <a onclick="return confirm('ban co chak muốn xóa hay không?')" href="../admin/xoahang.php?mahang={mahang}">Xóa</a></td>
        </tr>
        <?php
		$s=ob_get_clean();
		$s=str_replace("{mahang}",$row_hang["mahang"], $s);
		$s=str_replace("{tenhang}",$row_hang["tenhang"], $s);
		echo $s;
		
		};
		?>
      </table>
     