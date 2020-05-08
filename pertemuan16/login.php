<?php
//kita start sessionnya dulu
  session_start();

  //kita cek apakah user sudah login,
  //kalau sudah login tidak perlu login lagi
  if (isset($_SESSION['login'])) {
    header("Location:index.php");
    exit;
  }

  require "function.php";

  //login system dimulai disini
  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      //cek apakah benar ada username yang diinput di didalam database..
      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
      //bila ingin tau fungsi num_rows silakan var_dump($result)
      // var_dump($result); die;
      //apabila ada username yang sama maka num_rows akan menghasilkan 1

      if (mysqli_num_rows($result) === 1) {

        //sekarang kita cek apakah password ada..?
        //buat variable penampung semua data dari $username
        //$row disini akan mengatur isi dari $result sebagai assosiasi / assoc
          $row = mysqli_fetch_assoc($result);

        //selanjutnya kita decrypt password mengunakan password_verify()
        //password_verify memiliki 2 parameter,
        //1. input password yang akan di cek 2. password yang sudah di encrypsi
        if(password_verify($password, $row['password'])){

          //sebelum nya kita pakai sessionnya dulu
          $_SESSION['login'] = true;
          //jika pasword sudah terverifikasi arahkan user ke halaman yang diinginkan
          // biasanya menggunakan >>> echo "<script>document.location.href='index.php'</script>";;
          //kita belajar menggunakan header()
          //Location L nya huruf besar..
          header("Location:index.php");
          //agar berhenti pada header, gunakan exit
          exit;
        }
      }

      //jika proses sampai disini, berarti username dan password salah,
      //karena tidak nyangkut di function atas..
      //kita buat variable baru agar bisa mengatur
      //pesan di halaman htmlnya
      $error = true;
      //fungsi eror akan menyalah..
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>login</title>
   </head>
   <body>
     <center>
     <h3 style="text-align:center">login mahasiswa</h3>

     <!-- PESAN ERROR KITA BERIKAN DISINI
      apabila ada $error masuk ke halaman ini...
   -->
     <?php if (isset($error)) : ?>
       <p style="color : red; font-style:italic">username / password salah</p>
     <?php endif;  ?>
     <!-- PESAN ERROR KITA BERIKAN DISINI-->

     <form  action="" method="post">
       <ul style="list-style-type:none">
         <li>
           <input type="text" name="username" placeholder="masukan username"
           autofocus autocomplete="off">
         </li>
         <li>
           <input type="password" name="password" placeholder="masukan password"
           autocomplete="off">
         </li>
         <li>
           <button type="submit" name="login">login</button>
         </li>
       </ul>
     </form>
   </center>




   </body>
 </html>
