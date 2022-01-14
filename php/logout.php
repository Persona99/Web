<?php
    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Попытка выхода пользователя ".PHP_EOL);
    fclose($file);
    setcookie('user', $user['NAME'], time() - 60*60*24*30, "/");
    $file = fopen('../log.txt', 'a');
    fwrite($file, date('l jS \of F Y h:i:s A')." Успешно".PHP_EOL);
    fclose($file);
    header('Location: /');
?>
