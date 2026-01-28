<?php
    $prefix = '';
    include 'blocks/client_config.php';
    include 'blocks/files_config.php';
    $this_id = $_GET['id'];
    // Обновляем колличество скачиваний
    include 'blocks/db_config.php';
    $db = db_connect('templates');
    $template = get_template($db, $this_id);
    if($template == '') return '<p>Нет такого шаблона</p>';
    // Обновление колличества просмотров (от лица автора не учитываються)
    if(!the_same_user($template['creator_id'])) update_template($db, $this_id, array('download', $template['download'] + 1));
    db_exit($db);
    function file_force_download($file, $name) {
        if (file_exists($file)) {
            // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
            // если этого не сделать файл будет читаться в память полностью!
            if (ob_get_level()) {
                ob_end_clean();
            }
            // заставляем браузер показать окно сохранения файла
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $name);
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            // читаем файл и отправляем его пользователю
            readfile($file);
            exit;
        } else {
            echo "Файла не существует!";
        }
    }
    file_force_download(template_path($this_id), get_template_name($this_id));
?>