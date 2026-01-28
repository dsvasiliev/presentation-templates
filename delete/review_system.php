<?php
    // Данные
    $id = $_GET['id'];
    $review_id = $_GET['review'];
    $db_name = 'reviews_'.$id;
    // Пользователь
    session_start();
    require '../blocks/db_config.php';
    $db = db_connect();
    $old_review = $db->query("SELECT * FROM `$db_name` WHERE `id` = '$review_id'");
    if($old_review == '') {
        // Отзыва не существует
        header('Refresh: 0; url=../');
    } elseif ($old_review->fetch_assoc()['author'] != $_COOKIE['id']) {
        // Это отзыв другого пользывателя
        header('Refresh: 0; url=../');  
    } else {
        $db->query("DELETE FROM `$db_name` WHERE `id` = $review_id");
        header('Refresh: 0; url=../template.php?id='.$id);
    }
    db_exit($db);
?>