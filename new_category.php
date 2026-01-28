<?php
    $title = 'Регистрация';
    $over_links = '
        <link rel="stylesheet" href="styles/mini-block.css">
        <link rel="stylesheet" href="styles/inputs.css">
    ';
    include 'blocks/db_config.php';
    include "blocks/link.php";
    if(!is_logined()) header('Refresh: 0; url=new_profile.php');
?>
<body>
    <center_content class="faded_elem anim_elem" data-to='faded_elem' data-tc='faded_elem'>
        <p class="subtitle">Новая категория</p>
        <input type="text" id="name" placeholder="Название">
        <p class="simple_text">Добавьте описание категории. Так пользователям будет проще понять её содержание.</p>
        <textarea id="description" placeholder="Описание"></textarea>
        <div id="button" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5V19" stroke="#F4E2D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 12H19" stroke="#F4E2D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>               
            <p>Добавить</p>
        </div>
    </center_content>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', 'scripts/simple_ajax.js', 'scripts/category_functions/create.js', 'scripts/Transition Pro Files/script.js', 'scripts/anim_init.js'];
        include "blocks/header.php";
    ?>
</body>
</html>