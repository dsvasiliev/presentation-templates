<?php
    // Получение данных
    $this_id = $_GET['id'];
    // ИНФОРМАЦИЯ
    $prefix = '../';
    $title = 'Удалить шаблон';
    $over_links = '
        <link rel="stylesheet" href="../styles/mini-block.css">
        <link rel="stylesheet" href="../styles/inputs.css">
        <link rel="stylesheet" href="../styles/mini-image.css">
    ';
    include '../blocks/db_config.php';
    include "../blocks/link.php";
?>
<body>
    <center_content class="anim_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
        <div class="fast_buttons">
            <!-- Назад -->
            <a href="../template?id=<? echo $this_id ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 12H5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 19L5 12L12 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a> 
        </div>
        <div class="mini_image" id="mini_image_1"></div>
        <style>
            #mini_image_1 {
                background-image: url('../Images/Covers/<? echo $this_id ?>/Cover.png');
            }
        </style>
        <h3 class="subtitle center">Удалить шаблон?</h3>
        <p class="simple_text">Вы действительно хотите удалить шаблон? Вместе с ним удалятся и все отзывы к нему, информацию <span class="important">нельзя будет восстановить</span></p>
        <p class="simple_text">Для подтверждения нажмите "<span class="important">Удалить</span>"</p>
        <a href="template_system.php?id=<? echo $this_id ?>" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 6H5H21" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 11V17" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14 11V17" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
            <p>Удалить</p>
        </a>
    </center_content>
    <?php
        $scripts = ['../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>