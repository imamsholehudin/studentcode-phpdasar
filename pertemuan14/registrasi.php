<?php
require "function.php";

if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>alert('user baru berhasil ditambahkan');</script>";
  }else{
    echo mysqli_error($conn);
  }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>registrasi mahasiswa</title>
     <style>
       label{
         display: block;
       }
     </style>
   </head>
   <body>
     <h3>Registrasi mahasiswa</h3>
     <form action="" method="post">
       <ul>
         <li>
           <label for="username">masukan username</label>
           <input type="text" name="username" autocomplete="off" required>
         </li>
         <li>
           <label for="password">masukan password</label>
           <input type="password" name="password" autocomplete="off" required>
         </li>
         <li>
           <label for="password2">konfirmasi password</label>
           <input type="password" name="password2" autocomplete="off" required>
         </li>
         <li>
           <button type="submit" name="register">register</button>
         </li>
       </ul>

     </form>
   </body>
 </html>
