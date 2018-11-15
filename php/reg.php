<?php 
require_once "config.php";
// Реєстрація на сайті
  $name = mysqli_real_escape_string($link, trim($_POST['name_reg']));
  $email = mysqli_real_escape_string($link, trim($_POST['email']));

  $password = mysqli_real_escape_string($link, trim($_POST['password_reg']));
  $code = mysqli_real_escape_string($link, trim($_POST['code']));
  
  if(!empty($name) && !empty($password) && !empty($email) && !empty($code)){
    $query1 = "SELECT * FROM `user_data` WHERE Name = `$name`";
    $data = mysqli_query($link, $query1);
    if(mysqli_num_rows($data) == 0){
      $query1 = "INSERT INTO `user_data` (Name,Email,Password,Code) VALUES ('$name', '$email', '$password','$code')";
      mysqli_query($link,$query1);
    }
  }
    ?>