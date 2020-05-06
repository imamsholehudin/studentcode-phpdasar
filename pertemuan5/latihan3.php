<?php 
	$mahasiswa = [
		["dika","08883243","Teknik Informatika","eika@Email.ac.id"],
		["dik","089983243","Teknik Informatika","eika@Email.ac.id"]

	];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 3</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<ul>
 		<?php foreach ($mahasiswa as $key) {
 		?>
 		<li> Nama    : <?php echo $key[0]; ?></li>
 		<li> NIP     : <?php echo $key[1]; ?></li>
 		<li> Jurusan :<?php echo $key[2]; ?></li>
 		<li> Email 	 : <?php echo $key[3]; ?></li>
 		<br>
 		<?php
 		} ?>

 	</ul>
 </body>
 </html>