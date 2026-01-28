<?php
    // Данные
    $id = $_POST['id'];
    $text = $_POST['text'];
    $range = $_POST['range'];
    // Пользователь
    session_start();
    $this_user = $_COOKIE['id'];
    require '../blocks/db_config.php';
    $db = db_connect();
    $template = get_template($db, $id);
    if($template == '') {
        echo json_encode(array('success' => 0, 'message'=> 'Error'));  
    } elseif($text == '') {
        echo json_encode(array('success' => 0, 'message'=> 'Введите текст отзыва'));
    } else {
        $date = date("Y-m-d");
        $table_name = 'reviews_'.$id;
        $db->query("INSERT INTO `$table_name` (`author`, `text`, `date`, `grade`) VALUES ('$this_user', '$text', '$date', '$range');");
        echo json_encode(array('success' => 1));
    }
    db_exit($db);
?>