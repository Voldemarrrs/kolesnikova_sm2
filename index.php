<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $number = $_POST['number'];


    if(empty($name)){
        $error_name = 'Введите имя';
    }
    elseif(strlen($name) < 2){
        $error_name = 'Имя не менее 2х символов';
    }

    // $db = "SELECT * FROM users WHERE email = '$email'";
    // $result = $link -> query($db);
    // $user = $result -> fetch();

    if(empty($email)){
        $error_email = 'Введите почту';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = 'Неверный формат почты';
    }
    if(empty($pass)){
        $error_pass = 'Введите пароль';
    }elseif(strlen($pass) < 6){
        $error_pass = 'Пароль не меньше 6';
    }
    if(empty($number)){
        $error_number = 'Введите номер';V
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="forma">
    <form method="POST" name="signup">

        <label>Имя</label> <br>
        <input type="text" name="name" class="inputik" value="<?php if(isset($name)) echo $name?>"> <br> 
        <i><?php if(isset($error_name)){echo $error_name;}?></i> <br> <br><br>
        <label>Имайл</label> <br>
        <input type="text" name="email" class="inputik" value="<?php if(isset($email)) echo $email?>"> <br> 
        <i><?php if(isset($error_email)){echo $error_email;}?></i> <br> <br>
        <label>pass</label> <br>
        <input type="password" name="pass" class="inputik" value="<?php if(isset($pass)) echo $pass?>"> <br> 
        <i><?php if(isset($error_pass)){echo $error_pass;}?></i> <br> <br>
        <label>number</label> <br>
        <input type="number" name="number" class="inputik" value="<?php if(isset($number)) echo $number?>"> <br> <br>
        <i><?php if(isset($error_number)){echo $error_number;}?></i> <br> <br>
       
        <input type="submit" class="reg" value="Регистрация">
    </form>
</div>

</body>
</html>