<?php
    // Данные
    $id = $_POST['id'];
    $review_id = $_POST['review'];
    $text = $_POST['text'];
    $range = $_POST['range'];
    $db_name = 'reviews_'.$id;
    // Пользователь
    session_start();
    require '../blocks/db_config.php';
    $db = db_connect();
    $old_review = $db->query("SELECT * FROM `$db_name` WHERE `id` = '$review_id'");
    if($old_review == '') {
        // Отзыва не существует
        echo json_encode(array('success' => 0, 'message'=> 'Error'));  
    } elseif ($old_review->fetch_assoc()['author'] != $_COOKIE['id']) {
        // Это отзыв другого пользывателя
        echo json_encode(array('success' => 0, 'message'=> 'Error'));  
    } elseif($text == '') {
        // Не введён текст
        echo json_encode(array('success' => 0, 'message'=> 'Введите текст отзыва'));
    } else {
        $date = date("Y-m-d");
        $db->query("UPDATE `$db_name` SET `text` = '$text', `date` = '$date', `grade` = '$range' WHERE `id` = $review_id;");
        echo json_encode(array('success' => 1));
    }
    db_exit($db);
?>