<?php
    $prefix = '../';
    $title = 'Информация об использовании сайта';
    $over_links = '
        <link rel="stylesheet" href="../styles/info.css">
    ';
    include "../blocks/link.php";
    include "../blocks/db_config.php";
    echo '<body><content class="anim_elem faded_elem" data-tc="faded_elem" data-to="faded_elem">';
    echo $info_text;
    echo '</content>';
    $scripts = ['../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
    include "../blocks/header.php";
    echo '</body></html>';
?>