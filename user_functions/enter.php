<?php
    // return "hgh";
    // echo json_encode(array('success' => 0, 'message' => 'Пользователь с таким email уже существует!'));
    session_start();
    $password = $_POST['password'];
    $email = $_POST['email'];
    // Основная проверка пользователья
    if(strlen($email) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода email'));
    elseif(strlen($password) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода пароля'));
    else {
        // Соединение с базой данных
        require("../blocks/db_config.php");
        $db = db_connect("daniilzf_templ");
        // Пользователь существует?
        $try_user = $db->query("SELECT * FROM `users` WHERE `email` = '$email'")->fetch_assoc();
        db_exit($db);
        if($try_user == '') {
            // Создание
            echo json_encode(array('success' => 0, 'message' => 'Пользователя с таким email не существует'));
        } else {
            if(md5($password) == $try_user['password']) {
                $id = (integer) $try_user['id'];
                setcookie('id', $id, time() + 60000000, '/');
                echo json_encode(array('success' => 1));
            } else {
                echo json_encode(array('success' => 0, 'message' => 'Неверный пароль!'));
            }
        }
    }
?>