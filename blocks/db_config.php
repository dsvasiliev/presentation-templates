<?php
    function db_connect() {
        $sever = new mysqli("localhost", "daniilzf_templ", "&SdL*%K4", 'daniilzf_templ');
        $sever->query("SET NAMES 'utf8'");
        return $sever;
    }

    function db_exit($server) {
        $server->close();
    }
    
    function is_logined():bool {
        if ($_COOKIE['id']) return true;
        return false;
    }

    function get_user_by_id() {
        $id = $_COOKIE['id'];
        $db = db_connect('templates');
        $user = $db->query("SELECT * FROM `users` WHERE `id` = '$id'")->fetch_assoc();
        db_exit($db);
        return $user;
    }

    function check_logined() {
        if(!is_logined()) return header('Refresh: 0; url=new_profile.php');
    }

    // Выбрать шаблон из базы данных
    function get_template($db, $id, $to_select='*') {
        return $db->query("SELECT $to_select FROM `all_templates` WHERE `id` = '$id'")->fetch_assoc();
    }

    // Добавление нового шаблона
    function create_template($db, $category, $name, $discription, $creator_id) {
        $db->query("INSERT INTO `all_templates` (`category`, `id`, `name`, `discription`, `creator_id`, `view`, `download`) VALUES ($category, NULL, '$name', '$discription', $creator_id, 0, 0)");
        return $db->insert_id;
    }

    // Обновить шаблон в базе данных
    function update_template($db, $id, $to_update) {   
        $str = '';   
        foreach ($to_update as $name => $val) {
            if ($str != '') $str.=", ";
            $str.="`$name` = '$val'";
        }
        $db->query("UPDATE `all_templates` SET $str WHERE `id` = $id");
        return "UPDATE `all_templates` SET $str WHERE `id` = $id";
    }

    // Получить ряд шаблонов из базы
    function get_templates($db, $key, $value, $to_select='*', $at_a_time=0, $start_from=0, $desc=false) {
        $limits = ($desc ? "ORDER BY ID DESC " : '').($at_a_time ? "LIMIT $start_from, $at_a_time" : '');
        return $db->query("SELECT $to_select FROM `all_templates` WHERE `$key` = '$value' $limits");
    }

    // Удаление шаблона
    function delete_template($db, $id) {
        return $db->query("DELETE FROM `all_templates` WHERE `all_templates`.`id` = $id");
    }
?>