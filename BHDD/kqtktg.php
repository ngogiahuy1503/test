<?php
	$q=$_GET['q'];
	$p=$_GET['p'];
	if($p==0) $sql="select * from sanpham where giasp<'$q'";
	else $sql="select * from sanpham where giasp>='$q'";
	$a=mysql_query($sql);
	
	while($row=mysql_fetch_assoc($a))
{
	ob_start();
?>
<div id="{masp}" class="sp"><a href="?b=ctsp&masp={masp}">

<div class="hinh"><img src="images/{hinh}"  width="200px" height="220px"/></div>
<hr />
<div class="ten" size: 10px>  {ten}<?php if($row['new']==1) echo"<img src='images/new.gif' />" ?></div>
<div class="gia">Gia : {gia} vnd</div>
<div class="chitiet">

</div> 


</a>
</div>
<?php
$s=ob_get_clean();
	$s=str_replace("{masp}",$row["masp"], $s);
	
	$s=str_replace("{hinh}",$row["hinh"], $s);
	$s=str_replace("{ten}",$row["tensp"], $s);
	$s=str_replace("{gia}",$row["giasp"], $s);
	
	echo $s;
}
?>
