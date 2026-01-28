<?php
    $prefix = '../';
    // Данные
    $this_id = $_GET['id'];
    include '../blocks/db_config.php';
    include '../blocks/client_config.php';
    include '../blocks/files_config.php';
    $db = db_connect();
    $template = get_template($db, $this_id, '`creator_id`, `category`');
    $category_id = $template['category'];
    if(!the_same_user($template['creator_id'])) {
        db_exit($db);
        return header('Refresh: 0; url=../');
    } 
    // Удаление старого файла
    clean_folder(cover_folder_path($this_id));
    rmdir(cover_folder_path($this_id));
    clean_folder(template_folder_path($this_id));
    rmdir(template_folder_path($this_id));
    // Удаление отзывов
    $db->query("DROP TABLE `reviews_".$this_id."`");
    // Удаление шаблона
    delete_template($db, $this_id);
    // Колличество шаблонов в категории
    $category = $db->query("SELECT `number` FROM `categories` WHERE `id` = '$category_id'")->fetch_assoc();
    $new_number = --$category['number'];
    $new_cover = (int)(get_templates($db, 'category', $category_id, '`id`', 1, 0, true)->fetch_assoc()['id']);
    $db->query("UPDATE `categories` SET `cover` = '$new_cover', `number` = '$new_number' WHERE `categories`.`id` = $category_id");
    db_exit($db);
    return header('Refresh: 0; url=../by_user?user='.$template['creator_id']);
?>