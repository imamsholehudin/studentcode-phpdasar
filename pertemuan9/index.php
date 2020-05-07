<!DOCTYPE html>
<?php 
	$kon =mysqli_connect("localhost","root","","database_latihan");

	$result = mysqli_query($kon,"SELECT * FROM mahasiswa");

	 //mysqli_fetch_row($result);  //ini akan menggembalikan array numeric (angka)
	 //mysqli_fetch_assoc(); // ini akan mengembalikan array associative
	 //mysqli_fetch_array(); // ini akan menggembalikan numeric dan assosiative
	 //mysqli_fetch_object();
	
	

 ?>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1> Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>gambar</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1;?>
  	<?php while($mhs = mysqli_fetch_array($result)) { ?>
  	<tr>
	    <td><?php echo $i; ?></td>
	    <td>
	      <a href="#">ubah</a> |
	      <a href="#">hapus</a>
	    </td>
	    <td>
	      <img src="<?php echo $mhs['gambar']; ?>" alt="" width='50px'>
	    </td>
	    <td><?php echo $mhs['nrp']; ?></td>
	    <td><?php echo $mhs['nama']; ?></td>
	    <td><?php echo $mhs['email']; ?></td>
	    <td><?php echo $mhs['jurusan']; ?></td>
	    <?php $i++;?>
  	</tr>

	<?php } ?>

	</table>
</body>
</html>