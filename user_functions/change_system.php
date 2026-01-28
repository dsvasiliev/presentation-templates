<?php
    // Файл изменения параметров пользователья
    session_start();
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Основная проверка пользователья
    if(strlen($name) < 2) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода имени'));
    elseif(strlen($email) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода email'));
    elseif(strlen($password) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода пароля'));
    else {
        // Соединение с базой данных
        require("../blocks/db_config.php");
        $db = db_connect("daniilzf_templ");
        // Email ранее использувался у других пользователей?
        $user_id = $_COOKIE['id'];
        $try_user = $db->query("SELECT `id` FROM `users` WHERE `email` = '$email'")->fetch_assoc();
        if($try_user == '' || $try_user['id'] == $user_id) {
            // Получение и изменение пользователя
            $db->query("UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = MD5('$password') WHERE `id` = $user_id;");
            echo json_encode(array('success' => 1));
        } else {
            echo json_encode(array('success' => 0, 'message' => 'Пользователь с таким email уже ранее был добавлен на наш сайт'));
        }
        db_exit($db);
    }
?>