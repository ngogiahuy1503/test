
                    <?php
					$hang=danhsachhang();
					while($row_hang=mysql_fetch_array($hang))
					{
						ob_start();
					?>
                    <div id="{mahang}"><a href="?q=hang&mahang={mahang}">{tenhang}</a></div>
                    <?php
					$s=ob_get_clean();
			$s=str_replace("{mahang}",$row_hang["mahang"], $s);
			$s=str_replace("{tenhang}",$row_hang["tenhang"], $s);
			echo $s;
					}
					?>
            	 