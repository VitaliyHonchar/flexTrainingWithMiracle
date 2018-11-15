<?php
require_once "config.php";
unset($_COOKIE['Your_Name']);
setcookie('Your_Name', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
header('Location: ' . $home_url);
?>