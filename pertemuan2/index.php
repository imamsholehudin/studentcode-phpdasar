<?php 
	//pertemuan 2 - PHP dasar

	//standar outpu
	
$nama = "Imam Sholehudin";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Belajar PHP</title>
 </head>
 <body>
 	<h1>Halo selamat datang <?php echo $nama; ?></h1>
 	<?php echo "<h1>Halo Selamat datang  Sholehudin Imam</h1>" ?>
 </body>
 </html>



<?php 
 //aritmatka
	$nilai = 1 + 5;
	$x = 4;
	$y = 7;
	echo $x + $y;


	$nama_depan = "Imam";
	$nama_belakang = "Sholehudin";
	echo $nama_depan." ".$nama_belakang;

	//assigment
	//=,+=, -=, *=, /=, 
	$a = 2;
	echo $a;
	$a -=5;
	echo $a;
	$a += 10;
	echo $a;

	//identitas 
	// ===, !==
	var_dump(1 === "1");

	//logika
	//&& (and), || (or), !(not)
	var_dump(true && true);
	var_dump(true && false);
	var_dump(false && false);
	var_dump(true || true);
	var_dump(true || false);
	var_dump(false || false);

 ?>