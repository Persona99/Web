<?php
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password = md5($password);

    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Попытка захода пользователя ".PHP_EOL);
    fclose($file);

    $mysql = new mysqli('localhost', 'root', 'root', 'users_bd');

    $result = $mysql->query("SELECT * FROM `user` WHERE `Email` = '$email' AND `Password` = '$password'");

    $user = $result->fetch_assoc();


    if(count($user) == 0) {
        echo "Error.";
        exit();
    }

    setcookie('user', $user['Name'], time()+ 60*60*24*30, "/");

    $mysql->close();

    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Успешно".PHP_EOL);
    fclose($file);

    header('Location: /');
?>
