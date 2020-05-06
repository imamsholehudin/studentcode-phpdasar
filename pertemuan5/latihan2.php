<?php 
	$angka = [3,2,5,23,6,3,12,56,22,32];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 	<style>
 		.kotak{
 			width:50px;
 			height : 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin:3px;
 			float: left;


 		}
 		.clear{
 			clear:both;
 		}
 	</style>
 </head>
 <body>
 <?php for($i=0;$i<count($angka);$i++){ ?>
 <div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>

<br>
 <?php foreach ($angka as $key => $value) {
 	?>
 	<div class="clear"><?php echo $value; ?></div>
 	<?php
 } ?>
 </body>
 </html>