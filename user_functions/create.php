<?php
    require '../blocks/client_config.php';
    only_out();
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Основная проверка пользователья
    if(strlen($name) < 2) echo json_encode(array('success' => 0, 'message' => 'Слишком маленькое имя!'));
    elseif(strlen($email) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода email'));
    elseif(strlen($password) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода пароля'));
    else {
        // Соединение с базой данных
        require("../blocks/db_config.php");
        $db = db_connect();
        // Пользователь существует?
        $try_user = $db->query("SELECT `name` FROM `users` WHERE `email` = '$email'");
        if($try_user->fetch_assoc() == '') {
            // Создание
            $db->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', MD5('$password'));");
            // Получение пользователья
            $user = $db->query("SELECT `id` FROM `users` WHERE `email` = '$email'");
            reg_user((integer) $user->fetch_assoc()['id']);
            db_exit($db);
            echo json_encode(array('success' => 1));
        } else {
            // Ошибка
            echo json_encode(array('success' => 0, 'message' => 'Пользователь с таким email уже существует!'));
        }
    }
?>