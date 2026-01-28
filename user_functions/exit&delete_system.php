<?php
    // Удаление
    require ('../blocks/db_config.php');
    $db = db_connect('daniilzf_templ');
    $user_id = $_COOKIE['id'];
    $db->query("DELETE FROM `users` WHERE `users`.`id` = $user_id");
    db_exit($db);
    // Выход
    setcookie('id', $id, time() + 60000000, '/');
    header('Refresh: 0; url=../');
?>