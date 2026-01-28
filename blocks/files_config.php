<?php
    function clean_folder($path) {
        foreach (scandir($path, 1) as $value) {
            if($value == '.' || $value == '..') continue;
            unlink($path.'/'.$value);
        }
    }

    function cover_folder_path($id) {
        global $prefix;
        return $prefix.'Images/Covers/'.$id;
    }

    function cover_path($id) {
        return cover_folder_path($id).'/Cover.png';
    }

    function template_folder_path($id) {
        global $prefix;
        return $prefix.'../templates_files/'.$id;
    }

    function template_path($id) {
        $folder_path = template_folder_path($id);
        return $folder_path.'/'.scandir($folder_path, 1)[0];
    }

    function get_template_name($id) {
        return scandir(template_folder_path($id), 1)[0];
    }
?>