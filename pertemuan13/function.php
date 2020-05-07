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

function upload(){

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];


  $error = $_FILES['gambar']['error'];
  $tmpFile = $_FILES['gambar']['tmp_name'];

  if($error === 4){
    echo "<script>alert('Silakan masukan gambar..!!');</script>";
    echo "<script>document.location.href='tambah.php';</script>";

    return false;
  }

  $extGambarValid = ['jpg', 'jpeg', 'png'];

  $extGambar = explode('.', $namaFile); 

 
  $extGambar = strtolower(end($extGambar)); 

  if(!in_array($extGambar, $extGambarValid)){
    echo "<script>alert('Silakan masukan gambar berextensi jpg, jpeg atau png..!!');</script>";
    echo "<script>document.location.href='tambah.php';</script>";

    return false;
  }

  //kita cek ukuran gambar..
  if($ukuranFile > 1000000){
    echo "<script>alert('gambar yang anda masukan terlalu besar..!!');</script>";
    return false;
  }
 
  $namaFileBaru = uniqid();

  $namaFileBaru .= '.'; //<< hasilnya blablabla.random  (random bla bla)
  $namaFileBaru .= $extGambar; //<< hasilnya blablabla.random.jpg (jpg dari variable $extFile)

  //pindahkan file yang ada di temporary
  //kedalam folder img/
  move_uploaded_file($tmpFile, $namaFileBaru); 

  //kembalikan $namafile
  return $namaFileBaru;

}

function tambah($data){
  global $conn;

  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  $gambar = upload();


  if(!$gambar){
  
    return false;
  }
  

  $query = "INSERT INTO mahasiswa VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($conn,$query);
  
  

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
   $gambar = upload();

  //jika gambar tidak terupload
  if(!$gambar){
    //hentikan semua fungsi upload datanya
    return false;
  }

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
function cari($keyword){
 global $conn;
  $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'";
  $result = mysqli_query($conn,$query);
  
  return $result;
}


 ?>
