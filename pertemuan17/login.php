<?php

  session_start();

  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn,"SELECT username FROM user WHERE
              id = $id");

    
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
      $_SESSION["login"] = true;
    }
  }

 
  if (isset($_SESSION['login'])) {
    header("Location:index.php");
    exit;
  }

  require "function.php";


  if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      
      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


      if (mysqli_num_rows($result) === 1) {

          $row = mysqli_fetch_assoc($result);

    
        if(password_verify($password, $row['password'])){

          //sebelum nya kita pakai sessionnya dulu
          $_SESSION['login'] = true;
          if (isset($_POST["remember"])) {
          
            setcookie('id',$row['id'],time() + 60);
            
            setcookie('key',hash('sha256', $row['username']),time() + 60);
          }
          header("Location:index.php");
          //agar berhenti pada header, gunakan exit
          exit;
        }
      }
      $error = true;
  
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



     <?php if (isset($error)) : ?>
       <p style="color : red; font-style:italic">username / password salah</p>
     <?php endif;  ?>
  

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
           <input type="checkbox" name="remember" name="remember">
           <label for="remember">remember me..</label>
         </li>
         <li>
           <button type="submit" name="login">login</button>
         </li>
       </ul>
     </form>
   </center>




   </body>
 </html>
