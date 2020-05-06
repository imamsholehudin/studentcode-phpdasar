<?php 
	function salam($waktu="Datang",$nama="admin"){
		return "Selamat $waktu, $nama";
	}
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?php echo salam("Pagi","Imam S"); ?></h1>
 
 </body>
 </html>