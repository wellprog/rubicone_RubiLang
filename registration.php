<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php

 require('connection_db.php');

 if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (username , password , email) VALUES ('$username' , '$email' , '$password' )";
  $result = mysqli_query($connection, $query);

    if($result){
     $smsg="Регистрация прошла успешно";
     header('location: index.php');
     }else{
     $fsmsg="Ошибка";
    }
 }
?>
 <div class="container"> 
  <form action="" class="form-signin" method="POST">  
   <h2>Регистрация</h2>
   <?php  if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
   <?php  if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>
   <input type="text" name="username" class="form-control" placeholder="Имя" required>
   <input type="email" name="email" class="form-control" placeholder="Почта" required>
   <input type="password" name="password" class="form-control" placeholder="Пароль" required>
   <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
  </form>
 </div>
</body>
</html>