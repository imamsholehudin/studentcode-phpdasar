<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>assosiatif array</title>
    <style>
      ul {
        style : none;
      }

    </style>
  </head>
  <body>


    -->
    <?php
      $mhs = [
        [
              "nama"=>"dodi",
              "NIK"=>"jakarta",
              "email"=>"dodi@gmail.com",
              "jurusan"=>"desain",
              "gambar"=>"ipm.png"
        ],
        [
              "nama"=>"imam",
              "NIK"=>"bandung",
              "email"=>"imam@gmail.com",
              "jurusan"=>"web design",
              "gambar"=>"ipm.png"



        ]

          ];

    echo $mhs[1]["nama"];
    echo "<br>";


     ?>

  <h1>DAFTAR MAHASISWA</h1>
     <?php foreach($mhs as $masiwa): ?>
     <ul>
      <li>
          <img src="<?php echo $masiwa["gambar"];   ?>">
      </li>
       <li>Nama: <?php echo "<b>", $masiwa ["nama"], "</b>" ?></li>
       <li>NIK: <?php echo "<b>", $masiwa ["NIK"], "</b>" ?></li>
       <li>Email: <?php echo "<b>", $masiwa ["email"], "</b>" ?></li>
       <li>Jurursan: <?php echo "<b>", $masiwa ["jurusan"], "</b>" ?></li>
     </ul>
   <?php endforeach; ?>





  </body>
</html>
