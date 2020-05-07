<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan1</title>
  </head>
  <body>
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

     ?>
     <h1>Get</h1>
     <?php foreach($mhs as $masiwa): ?>
     <ul>
     
       <li><a href="latihan2.php?nama=<?=$masiwa['nama']; ?>&NIK=<?php echo $masiwa['NIK']; ?>&email=<?php echo $masiwa['email']; ?>&jurusan=<?php echo $masiwa['jurusan']; ?>">Nama: <?php echo "<b>", $masiwa ["nama"], "</b>" ?></a></li>

     </ul>
   <?php endforeach; ?>

  </body>
</html>
