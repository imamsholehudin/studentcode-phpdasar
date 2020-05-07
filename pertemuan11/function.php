<?php

 $server = "localhost"; //nama server di local hostnya
  $user = "root"; // nama usernya
  $password = ""; // pasword servernya defaultnya kosong
  $db = "database_latihan"; // nama databsenya

  
  $conn = mysqli_connect($server, $user, $password, $db);

function query($query){
  global $conn;
  $query="select * from mahasiswa";

  $result = mysqli_query($conn, $query);


  $rows = [];


  while($row = mysqli_fetch_assoc($result)){
   
    $rows [] = $row;

  }

  return $rows;


}

function tambah($data){
  global $conn;
  //htmlspecialchars di gunakan untuk menangkis
  //hacker yang mencoba memasukan script HTML kedalam form
  //lihat contoh pada tabel mahasiswa 014
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);
  

  $query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn,$query);
  var_dump(mysqli_query($conn,$query));
  

  return mysqli_affected_rows($conn);
}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
  return mysqli_affected_rows($conn);

}

function ubah($data){
  global $conn;
  //htmlspecialchars di gunakan untuk menangkis
  //hacker yang mencoba memasukan script HTML kedalam form
  //lihat contoh pada tabel mahasiswa 014
  $id = $data["id"]; //$id tidak perlu di htmlspecialchars karena
  //dia bersifat HIDDEN ( cek pada ubah php input id)
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET
            nrp = '$nrp',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id;";

  mysqli_query($conn,$query);


  return mysqli_affected_rows($conn);
}


 ?>
