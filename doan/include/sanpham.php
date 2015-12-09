<?php
$mahang=$_GET['mahang'];
$q=danhmucsanpham($mahang);
$w=chitiethang($mahang);
?>
<div class="cont_hang">
<img src="images/new-icon.png"/><?php echo $w['tenhang']; ?>
</div>
<?php
while($row = mysql_fetch_array($q))
{
ob_start();
?>
<div class="sp" id="{masp}"><a href="?q=tt&masp={masp}">
<table width=175 height=220 border=0 cellspacing=0 cellpadding=0 background="images/box.gif" style="border:1px dotted #999\">
		  <tr>
			<td height=170><img src="images/{hinh}" width=150px height=150 border=0></td>
		  </tr>
		  <tr>
			<td height=25 style="font-size:14px; color:#F00;">{ten}</td>
		  </tr>
		  <tr>
			<td height=25>Giá: {gia} vnd</td>
		  </tr>
		</table>



</div></a>

<?php
$s=ob_get_clean();
$gia=number_format($row['gia'],0,'','.');
$s=str_replace("{masp}",$row["masp"], $s);
$s=str_replace("{hinh}",$row["hinh"], $s);
$s=str_replace("{ten}",$row["tensp"], $s);
$s=str_replace("{gia}",$gia, $s);
echo $s;

}
?> 
