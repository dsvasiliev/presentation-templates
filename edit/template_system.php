<?php
    $prefix = '../';
    $COVER_FORMATS = ['png', 'jpg', 'jpeg'];
    $TEMPLATE_FORMATS = ['pptx'];
    // Получение данных из POST
    $this_id = $_POST['id'];
    $name = $_POST['name'];
    $new_category = $_POST['category'];
    $discription = $_POST['discription'];
    $cover = $_FILES['first_file'];
    $template_file = $_FILES['second_file'];
    // Подключение вспомогатеьных файлов
    include '../blocks/client_config.php';
    include '../blocks/db_config.php';
    include '../blocks/files_config.php';
    $db = db_connect();
    // Получение шаблона
    $template = get_template($db, $this_id);
    $creator_id = $template['creator_id'];
    $category = $db->query("SELECT `id`, `name` FROM `categories` WHERE `id` = $new_category");
    // Сторонний пользователь | длина названия и описания | несуществующая категория
    if(!the_same_user($creator_id) || strlen($name) < 3 || strlen($discription) < 3 || $category == '') return;    
    // Изменена обобложка
    if(Null != $cover['tmp_name']) {
        $cover_format = pathinfo($cover['name'])['extension'];
        $cover_sizes = getimagesize($cover['tmp_name']);
        // Проверка формата
        if(!in_array($cover_format, $COVER_FORMATS)) {
            echo json_encode(array('success' => 0, 'message' => 'Некорректный формат фотографии')); 
            return;
        }
        // Проверка размеров изображения
        else if($cover_sizes[0] < 720 || $cover_sizes[0] > 1920 || $cover_sizes[1] < 576 || $cover_sizes[1] > 1080) {
            echo json_encode(array('success' => 0, 'message' => 'Измените размеры обложки'));
            return;
        }
        // Удаление старого файла
        clean_folder(cover_folder_path($this_id));
        // Добавление нового файла
        move_uploaded_file($cover['tmp_name'], cover_path($this_id));
    } 
    if (Null != $template_file['tmp_name']) {
        // Проверка форматов шаблона
        $template_format = pathinfo($template_file['name'])['extension'];
        if(!in_array($template_format, $TEMPLATE_FORMATS)) {
            echo json_encode(array('success' => 0, 'message' => 'Некорректный формат шаблона')); 
            return;
        }
        // Удаление старого файла
        clean_folder(template_folder_path($this_id));
        // Добавление нового файла
        move_uploaded_file($template_file['tmp_name'], template_folder_path($this_id).'/'.$template_file['name']);
    }
    // Обновление данных в таблице
    update_template($db, $this_id, array("name" => $name, "discription" => $discription, "category" => $new_category));
    // Данные из специальной таблицы
    db_exit($db);
    echo json_encode(array('success' => 1));  
?>