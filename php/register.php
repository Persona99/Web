<?php
    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Регистрация нового пользователя ".$_POST['name'].PHP_EOL);
    fclose($file);

    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $confirmPassword = filter_var(trim($_POST['confirmPassword']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    if(mb_strlen($email) < 4 || mb_strlen($email) > 255) {
        echo "Error.";
        exit();
    }
    if(mb_strlen($password) < 8) {
        echo "Error.";
        exit();
    }

    $password = md5($password);
    $confirmPassword = md5($confirmPassword);

    if($password != $confirmPassword) {
        echo "Error.";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', 'root', 'users_bd');
    $mysql->query("INSERT INTO `user` (`Name`,`Email`, `Password`) VALUES('$name','$email', '$password')");

    $mysql->close();

    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Успешно".PHP_EOL);
    fclose($file);

    header('Location: /');
?>
