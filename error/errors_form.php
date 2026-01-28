<?php
    $prefix = '../';
    $title = 'Произошла ошибка';
    $over_links = '
        <link rel="stylesheet" href="../styles/errors_style.css">
    ';
    include "../blocks/link.php";
    include "../blocks/db_config.php";
?>
<body>
    <error_block class="anim_elem faded_elem" data-tc="faded_elem" data-to="faded_elem">
        <p class="error_code"><?php echo $error_code ?></p>
        <p class="big_title">Упс, что-то пошло не так!</p>
        <p class="simple_text">Приносим свои извинения за предоставленные неудобства! <?php echo $description?></p>
        <a href="https://presentationtemplates.ru/" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.00055 9L12.0005 2L21.0005 9V20C21.0005 20.5304 20.7898 21.0391 20.4148 21.4142C20.0397 21.7893 19.531 22 19.0005 22H5.00055C4.47012 22 3.96141 21.7893 3.58634 21.4142C3.21126 21.0391 3.00055 20.5304 3.00055 20V9Z" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.00055 22V12H15.0005V22" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>На главную</p>
        </a>
    </error_block>
    <?php
        $scripts = ['../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>