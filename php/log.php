<?php
require_once "config.php";
// Обробка авторизації на сайті.
if(!isset($_COOKIE["Your_Name"])){  
  $user_name = mysqli_real_escape_string($link, trim($_POST['name']));  
  $user_password = mysqli_real_escape_string($link, trim($_POST['password']));  

  if(!empty($user_name) && !empty($user_password)){  
    $query2 = "SELECT `Name` FROM `user_data` WHERE Name = '$user_name' AND `Password` = '$user_password'";  
      $data = mysqli_query($link, $query2);  
      if(mysqli_num_rows($data) == 0) {  
        $row = mysqli_fetch_assoc($data);
        ob_start();
         
  setcookie("Your_Name", $row['Name'], time()+3600*7); //$row["Name"]
      }
      //else {
        //echo 'Вибачте але ви маєте ввести правильний логін та пароль';
      //}
    } 
    }
    ?>