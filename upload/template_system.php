<?php
    $prefix = '../';
    // Основные форматы
    $COVER_FORMATS = ['png', 'jpg', 'jpeg'];
    $TEMPLATE_FORMATS = ['pptx'];
    include '../blocks/client_config.php';
    session_start();
    $name = $_POST['name'];
    $category_id = $_POST['category'];
    $discription = $_POST['discription'];
    // Получение файлов и их форматов
    $cover = $_FILES['first_file'];
    $cover_format = pathinfo($cover['name'])['extension'];
    $cover_sizes = getimagesize($cover['tmp_name']);
    $template_file = $_FILES['second_file'];
    $template_format = pathinfo($template_file['name'])['extension'];
    include '../blocks/db_config.php';
    $db = db_connect('templates');
    $category = $db->query("SELECT `number` FROM `categories` WHERE `id` = '$category_id'")->fetch_assoc();
    if (0 < $cover['error'] & 0 < $template_file['error']) {
        echo json_encode(array('success' => 0, 'message' => 'Ошибка сервера'));   
    }
    else if(!was_logined() || strlen($name) < 3 || strlen($discription) < 3 || $category == '') echo json_encode(array('success' => 0, 'message' => 'Error'));
    else if(!in_array($cover_format, $COVER_FORMATS)) echo json_encode(array('success' => 0, 'message' => 'Некорректный формат фотографии'));
    else if(!in_array($template_format, $TEMPLATE_FORMATS)) echo json_encode(array('success' => 0, 'message' => 'Некорректный формат шаблона'));
    else if($cover_sizes[0] < 720 || $cover_sizes[0] > 1920 || $cover_sizes[1] < 576 || $cover_sizes[1] > 1080) echo json_encode(array('success' => 0, 'message' => 'Измените размеры обложки'));
    else {
        include '../blocks/files_config.php';
        // Вставка данных в таблицу со всеми шаблонами и получение id нового шаблона
        $new_id = create_template($db, $category_id, $name, $discription, $user_id);
        // Создание таблицы с отзывами
        $db->query("CREATE TABLE `reviews_{$new_id}` LIKE `reviews_example`;");
        // Обновление обложки категории
        $new_number = ++$category['number'];
        $db->query("UPDATE `categories` SET `cover` = '$new_id', `number` = '$new_number' WHERE `categories`.`id` = $category_id");
        // Создание папок и загрузка фотографии
        mkdir(cover_folder_path($new_id), 0777);
        mkdir(template_folder_path($new_id), 0777);
        move_uploaded_file($cover['tmp_name'], cover_path($new_id));
        move_uploaded_file($template_file['tmp_name'], template_folder_path($new_id).'/'.$template_file['name']);
        echo json_encode(array('success' => 1, 'id' => $new_id));     
    }
    db_exit($db);
?>