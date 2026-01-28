<?php
    // Получение данных
    $template_id = $_GET['id'];
    // Информация
    $prefix = '../';
    $title = 'Оставить отзыв';
    $over_links = '
        <link rel="stylesheet" href="../styles/mini-block.css">
        <link rel="stylesheet" href="../styles/inputs.css">
        <link rel="stylesheet" href="../styles/mini-image.css">
    ';
    include "../blocks/link.php";
    include '../blocks/db_config.php';
    if(!is_logined()) return header('Refresh: 0; url=../');
?>
<body>
    <center_content class="faded_elem anim_elem" data-to='faded_elem' data-tc='faded_elem'>
    <div class="mini_image" id="mini_image_1"></div>
        <style>
            #mini_image_1 {
                background-image: url('../Images/Covers/<? echo $template_id ?>/Cover.png');
            }
        </style>
        <h2 class="subtitle center">Оставить отзыв</h2>
        <textarea name="review_text" id='text' placeholder="Введите текст отзыва"></textarea>
        <p class="simple_text">Дайте оценку дизайну по шкале от 1 до 5</p>
        <div class="range">
            <input type="range" min='1' max="5" name="range" id="range" value="5"><p class="simple_text">Ваша оценка: 5</p>
        </div>
        <div id="button" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6L9 17L4 12" stroke="#DBE6E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>              
            <p>Готово</p>
        </div>
    </center_content>
    <script>
        var id = <? echo $template_id ?>;
    </script>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', '../scripts/range.js', '../scripts/simple_ajax.js', '../scripts/reviews_functions/upload.js', '../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>