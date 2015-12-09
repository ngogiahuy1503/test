<?php
$masp=$_GET['masp'];

?>
<table width="100%" border="1" cellpadding="0">
  <?php
  $ct=chitietsanpham($masp);
  
  ?>
  <tr>
    <th width="26%" scope="col"><img src="images/<?php echo $ct['hinh']; ?>" /></th>
    <th width="74%" scope="col"><?php echo $ct['ttsp'] ?></br><?php echo $ct['mausac'] ?></th>
  </tr>
  <tr>
    <th scope="row"><?php echo $ct['tensp'] ?></th>
    <td>RAM : <?php echo $ct['ram'] ?></td>
  </tr>
  <tr>
    <th scope="row">Giá :<?php $gia=number_format($ct['gia'],0,'','.'); echo $gia; ?>vnd</th>
    <td>VGA :<?php echo $ct['vga'] ?></td>
  </tr>
    <tr>
    <th colspan="2" scope="row"><form id="form1" name="form1" method="get" action="">
      <input type="submit" name="btnmua" id="btnmua" value="Đưa vào giỏ hàng " />
      <input name="masp" type="hidden" value="<?php echo $ct['masp']; ?>" />
      <input name="q" type="hidden" value="gh" />
    </form></th>
  </tr>
</table>

