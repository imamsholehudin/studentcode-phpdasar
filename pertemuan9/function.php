<?php

function query($query){
  $server = "localhost"; //nama server di local hostnya
  $user = "root"; // nama usernya
  $password = ""; // pasword servernya defaultnya kosong
  $db = "database_latihan"; // nama databsenya

  
  $conn = mysqli_connect($server, $user, $password, $db);

  $result = mysqli_query($conn, $query);


  $rows = [];


  while($row = mysqli_fetch_assoc($result)){
   
    $rows [] = $row;

  }

  return $rows;


}
 ?>
