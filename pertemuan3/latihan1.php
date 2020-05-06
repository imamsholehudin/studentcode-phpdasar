<?php 
	//pengulangan
	//for
	for ($i=0; $i < 5 ; $i++) { 
		echo "Tampil ".$i."<br>";
	}
	//while
	$a=0;
	while ($a < 10) {
		echo "My IPM".$a."<br>";
		$a++;
	}
	//do .. while
	$ping = 0;
	do {
		echo $ping."Pukul, Sleding<br>";
		$ping++;
	} while ($ping <= 8);
	//foreach : pengulangan khusus array
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 1</title>
 </head>
 <body>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php 
 			for ($i=0; $i <=3 ; $i++) { 
 				echo "<tr>";
 				for ($j=0; $j <6 ; $j++) { 
 					echo "<td>$i, $j</td>";
 				}
 				echo "</tr>";
 			}
 		 ?>
 	</table>
 	<br>
 	<table border="1" cellpadding="10" cellspacing="0">
 		<?php 
 			for ($i=0; $i <=5 ; $i++) {
 			
 		?> 
 				<tr>
 				<?php  for ($j=0; $j <=5 ; $j++) {?> 
 					<td><?php echo $j.",".$i; ?></td>
 				<?php } ?>
 				</tr>
 		<?php 
 			}
 		 ?>
 	</table>
 	
 	<?php 
 	$x = 10 ;
 	if ($x == 10): 
 	?>
 		<p>Benar</p>
 	<?php endif ?>
 </body>
 </html>