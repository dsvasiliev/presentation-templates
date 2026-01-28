<?php
    // Файл создания новой категории
    session_start();
    $name = $_POST['name'];
    $description = $_POST['description'];
    // Основная проверка
    if(strlen($name) < 2) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода названия'));
    elseif(strlen($description) < 5) echo json_encode(array('success' => 0, 'message' => 'Проверьте корректность ввода описания'));
    else {
        // Соединение с базой данных
        require("../blocks/db_config.php");
        $db = db_connect("daniilzf_templ");
        // Вставка категории в общий список
        $db->query("INSERT INTO `categories`(`id`, `name`, `discription`, `number`) VALUES (NULL, '$name', '$description', 0)");
        // Получение id только что созданной записи
        $this_table_id = $db->insert_id;
        // Создание индивидуальной базы данных для категории
        $db->query("CREATE TABLE `category_$this_table_id` LIKE `category_example`;");
        db_exit($db);
        echo json_encode(array('success' => 1, 'message' => $this_table_id));
    }
?>