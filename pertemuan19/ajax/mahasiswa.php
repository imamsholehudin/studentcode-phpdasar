<?php 
	require '../function.php';
	$keyword = $_GET["keyword"];
	$query  = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' or nrp LIKE '%$keyword%' or email LIKE '%$keyword%' or jurusan LIKE '%$keyword%'";
	$mahasiswa  = query($query);



 ?>
 <table border='1' cellpadding='10' cellspacing='0'>
  <tr>
    <th>no.</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>nrp</th>
    <th>nama</th>
    <th>email</th>
    <th>jurusan</th>
  </tr>
  <?php $i = 1;?>
  <?php foreach ($mahasiswa as $row) : ?>
  <tr>
    <td><?php echo $i; ?></td> <!-- ini urutan untuk nomer -->
    <td>
      <a href="ubah.php?id=<?php echo $row['id']; ?>">ubah</a> | <!-- ini urutan untuk aksi -->
      <!-- href kita arahkan ke link hapus.php untuk menghapus
      sesuai id-->
      <!-- onclick returt confirm merupakan script java script
      untuk menghasilkan alert komfirmasi-->
      <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin ?');">hapus</a>
    </td>
    <td>
      <img src="<?php echo $row['gambar']; ?>" alt="" width='50px'><!-- ini urutan untuk gambar -->
    </td>
    <td><?php echo $row['nrp']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['jurusan']; ?></td>
    <?php $i++;?>
  </tr>

<?php endforeach; ?>
</table>