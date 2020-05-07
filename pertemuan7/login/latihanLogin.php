<?php
if (isset($_POST["submit"])) {


  if  ($_POST["username"] == "admin" &&
  $_POST["password"] == "myipm"){


    header("Location:admin.php");


  exit;
 
} else {
  $error = true;
}

}

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>latihan login</title>
  </head>
  <body>



    <h3>selamat datang, silakan login</h3>
    <ul>
      <form action="" method="post">
        <li>
          <label for="username">silakan masukan username</label>
          <input type="text" name="username" id="username">
        </li>
        <li>
          <label for="password">silakan masukan password</label>
          <input type="password" name="password" id="password">
          <?php if(isset($error)) : ?>
    
          <p style="color:red; font-style: italic;">user dan password salah</p>
        <?php endif; ?>

        </li>
        <li>
          <button type="submit" name="submit">Login</button>
        </li>

      </form>
    </ul>


  </body>
</html>
