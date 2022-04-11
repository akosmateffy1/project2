<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style1.css">
   <title>Belépés</title>
   <link rel="icon" type="img/home.png" href="img/home.png">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <a href="fooldal.php"><img src="img/home45px.png"></a>
      <h3>Belépés</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Email" class="box" required>
      <input type="password" name="password" placeholder="Jelszó" class="box" required>
      <input type="submit" name="submit" value="Belépés" class="btn">
      <p>Még nincs fiókod? <a href="register.php"> Regisztrálj</a></p>
      <p><a href="fooldal.php">vissza a Főoldalra!</a></p>
   </form>

</div>

</body>
</html>