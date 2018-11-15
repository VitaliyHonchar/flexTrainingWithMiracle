<?php
 error_reporting( E_ERROR );
//Конструкція підключення сайту до бази даних
$link = mysqli_connect("localhost", "root", "", "users"
);
if(mysqli_connect_errno()) 
{
  echo'Помилка в підключені до бд('.mysqli_connect_errno().'): '. mysqli_connect_error();
  die();
  // Якщо не вдалося підключитися до БД виводимо номер помилки та зупиняємо роботу скріпта.
}
else{
}
?>