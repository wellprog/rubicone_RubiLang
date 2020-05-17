<?php

session_start();

$login =filter_var(trim ($_POST['login1']), FILTER_SANITIZE_STRING);
$pass =filter_var(trim ($_POST['pass1']), FILTER_SANITIZE_STRING);

$pass = md5($pass."Rubic123");

$mysql = new mysqli('localhost', 'rubilang', 'password','rubilang');
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'"); 
$user = $result-> fetch_assoc();

if($user == NULL){
    die ("Такой пользователь не найден");
}

$_SESSION["user"] = $user;

$mysql->close();

header('Location: index.html');
?>
