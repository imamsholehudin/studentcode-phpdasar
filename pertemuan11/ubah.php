<?php
  require "function.php";

  $id = $_GET["id"];
  //query data mahasiswa berdasarkan id
  // [0] disini merupakan index dari hasil function query()
  $res= mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id = $id");

  //cek apakah tombol submit sudah di tekan
  if (isset($_POST['submit'])) {

    //cek apakah data di ubah atau tidak..
    //buat functions ubah()
    if (ubah($_POST) >= 0) {
      // code...
      echo "<script>
        alert('data berhasil diubah..');
        document.location.href='index.php';
      </script>";
    }
    else {
      echo "<script>
        alert('data gagal diubah..!!!')
        document.location.href='index.php';
      </script>";

    }
  }


 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>ubah Data Mahasiswa</title>
   </head>
   <body>
     <h1>Ubah data mahasiswa</h1>

     <form class="" action="" method="post">
     <?php while ($mhs = mysqli_fetch_array($res)) {
       
     ?>
       <ul>

           <input type="hidden" name="id" value="<?= $mhs['id']?>">


         <li>
           <label for="nrp">masukan nrp mahasiswa</label>
           <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp'] ?>">
         </li>
         <li>
           <label for="nama">masukan nama mahasiswa</label>
           <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>">
         </li>
         <li>
           <label for="email">masukan email mahasiswa</label>
           <input type="text" name="email" id="email" value="<?= $mhs['email'] ?>">
         </li>
         <li>
           <label for="jurusan">masukan jurusan mahasiswa</label>
           <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>">
         </li>
         <li>
           <label for="gambar">masukan gambar mahasiswa</label>
           <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar'] ?>">
         </li>
         <li>
           <button type="submit" name="submit">U B A H</button>
         </li>

       </ul>
       <?php } ?>

     </form>






   </body>
 </html>
