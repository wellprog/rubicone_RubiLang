<?php
$login =filter_var(trim ($_POST['login']), FILTER_SANITIZE_STRING);
$email =filter_var(trim ($_POST['email']), FILTER_SANITIZE_STRING);
$pass =filter_var(trim ($_POST['pass']), FILTER_SANITIZE_STRING);

if (mb_strlen($login)< 5 || mb_strlen($login) > 255){
    die ("Недопустимая длина логина");
}
if (mb_strlen($email)<5 || mb_strlen($email) >50){
    die("Недопустимая длина email");
}

$re = '/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/m';
preg_match_all($re, $email, $matches);

if (count($matches[0]) == 0) {
    die("Недопустимый email");
}

if (mb_strlen($pass)<5 || mb_strlen($pass) >30){
    die ("Недопустимая длина пароля. Длина пароля должна состаять от 5 до 30 символов");
}

$pass = md5($pass."Rubic123");

$mysql = new mysqli('localhost','rubilang','password','rubilang');

if ($mysql->connect_error != "") {
    die($mysql->connect_error);
}

$mysql -> query("INSERT INTO `users`(`login`, `email`, `pass`) VALUES ('$login','$email','$pass')");

if ($mysql->error != "") {
    die($mysql->error);
}

$mysql -> close();

header('Location: /');

?>

