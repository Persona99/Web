<?php

    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Отправка сообщения пользователя ".PHP_EOL);
    fclose($file);

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    $file = fopen('../massages.txt', 'a');
    fwrite($file, $name." ".$email." ".$phone." ".$message.PHP_EOL);
    fclose($file);

    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Успешно".PHP_EOL);
    fclose($file);

    header('Location: /');
?>
