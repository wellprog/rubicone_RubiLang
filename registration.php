<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” type=”text/css” href=”style.css”>
    <title>RubiLang Регестрация</title>
</head>

<body>
    <div class="container">
        <h1>Форма Регестрации</h1>
        <form action="check.php" method="POST">
            <input type="text" class="formcontrol" name="login" id="login" placeholder="Введите логин"><br>
            <input type="text" class="formcontrol" name="email" id="email" placeholder="Введите email"><br>
            <input type="password" class="formcontrol" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn" type="submit">Зарегистрироваться</button>
        </form>
        <h1>Форма Авторизации</h1>
        <form action="auto.php" method="POST">
            <input type="text" class="formcontrol" name="login1" id="login1" placeholder="Введите логин"><br>
            <input type="password" class="formcontrol" name="pass1" id="pass1" placeholder="Введите пароль"><br>
            <button class="btn" type="submit">Войти</button>
        </form>
    </div>

</body>

</html>