<?php
    session_start();
    $user_id = $_COOKIE['id'];

    // Проверка на регистрацию
    function was_logined():bool {
        global $user_id;
        return $user_id != '';
    }

    // Только зарегистрированные пользователи
    function only_logined() {
        global $user_id;
        if($user_id == '') return header('Refresh: 0; url=new_profile');
    }

    // Только незарегистрированные пользователи
    function only_out() {
        global $user_id;
        if($user_id != '') return header('Refresh: 0; url=new_profile');
    }

    // Новый пользователь (установка id)
    function reg_user($new_id) {
        setcookie('id', $new_id, time() + 60000000, '/');
    }

    function the_same_user($other_id) {
        global $user_id;
        return $other_id == $user_id;
    }
?>