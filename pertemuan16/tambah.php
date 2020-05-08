<?php

session_start();

//jika user belum ke halaman login,
if (!isset($_SESSION['login'])) {
  header("Location:login.php");
}

  require "function.php";

  if (isset($_POST['submit'])) {



    if (tambah($_POST) >= 0) {
      // code...
      echo "<script>
        alert('data berhasil ditambahnkan..');
        document.location.href='index.php';
      </script>";
      
    }
    else {
      echo "<script>
        alert('data gagal ditambahkan..!!!')
        document.location.href='index.php';
      </script>";

    }
  }


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tambah Data Mahasiswa</title>
   </head>
   <body>
     <h1>Tambah data mahasiswa</h1>

     <form class="" action="" method="post" enctype="multipart/form-data">
       <ul>

         <li>
           <label for="nrp">nrp mahasiswa</label>
           <input type="text" name="nrp" id="nrp">
         </li>
         <li>
           <label for="nama">nama mahasiswa</label>
           <input type="text" name="nama" id="nama">
         </li>
         <li>
           <label for="email">email mahasiswa</label>
           <input type="text" name="email" id="email">
         </li>
         <li>
           <label for="jurusan">jurusan mahasiswa</label>
           <input type="text" name="jurusan" id="jurusan">
         </li>
         <li>
           <label for="gambar">gambar mahasiswa</label>
           <input type="file" name="gambar" id="gambar"><br />
           <small>Type file hanya : jpg, jpeg atau png</small>    
         <li>
           <button type="submit" name="submit">T A M B A H</button>
         </li>

       </ul>

     </form>






   </body>
 </html>
