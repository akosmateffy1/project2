<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'jelszó megerősítése nem megfelelő!';
      }elseif($image_size > 2000000){
         $message[] = 'a kép mérete túl nagy!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'sikeresen regisztrált!';
            header('location:login.php');
         }else{
            $message[] = 'regisztráció sikertelen!';
         }
      }
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
   <title>Regisztráció</title>
   <link rel="icon" type="img/home.png" href="img/home.png">

</head>
<body>
   <div class="form-container">
      
      <form action="" method="post" enctype="multipart/form-data">
         <a href="fooldal.php"><img src="img/home45px.png"></a>
         <h3>Regisztrálj Most</h3>
         <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         ?>
         <input type="text" name="name" placeholder="Név" class="box" required>
         <input type="email" name="email" placeholder="Email" class="box" required>
         <input type="password" name="password" placeholder="Jelszó" class="box" required>
         <input type="password" name="cpassword" placeholder="Jelszó újra" class="box" required>
         <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
         <label class="form-check-label" for="flexSwitchCheckDefault">Elfogadom az <a href="aszf.php">Általános szerződési feltételeket</a></label>
         <input type="submit" name="submit" value="Regisztráció" class="btn">
   
         <p>van már fiókod? <a href="login.php">Belépés</a></p>
         <p><a href="fooldal.php">vissza a Főoldalra!</a></p>
      </form>
   </div>

</body>
</html>