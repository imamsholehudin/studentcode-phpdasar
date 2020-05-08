<?php
// kita cek apakah user sudah login
//mulai dulu sessionnya
session_start();

//jika user belum ke halaman login,
if (!isset($_SESSION['login'])) {
  header("Location:login.php");
}


$data =null;
require "function.php";

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");


if (isset($_POST["cari"])){

  $mahasiswa = cari($_POST['keyword']);
   var_dump($_POST['keyword']);
   echo "<br>";
 
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>daftar mahasiswa</h1>
    <a href="tambah.php">Tambah daftar Mahasiswa</a>
    <br><br>
    <a href="logout.php">logout</a>
  </body>
</html>
<form class="" action="" method="post">
  <input type="text" name="keyword" size="30" autofocus
  placeholder="masukan keyword pencarian" autocomplete="off">
  <button type="submit" name="cari">cari data</button><br><br>

</form>
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
