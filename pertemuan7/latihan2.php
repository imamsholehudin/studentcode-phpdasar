<?php 
	if (!isset($_GET["nama"])|| !isset($_GET["NIK"])|| ! isset($_GET["email"])|| !isset($_GET["jurusan"])) {
		header("Location: latihan1.php");
		exit;
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><img src="ipm.png"></li>
		<li><?php echo $_GET['nama']; ?></li>
		<li><?php echo $_GET['NIK']; ?></li>
		<li><?php echo $_GET['email']; ?></li>
		<li><?php echo $_GET['jurusan']; ?></li>

	</ul>
	<a href="latihan1.php">Kembali k data mahasiswa</a>
</body>
</html>