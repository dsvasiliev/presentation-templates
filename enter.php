<?php
    $title = 'Вход';
    $over_links = '
        <link rel="stylesheet" href="styles/mini-block.css">
        <link rel="stylesheet" href="styles/inputs.css">
    ';
    include "blocks/db_config.php";
    include "blocks/link.php";
?>
<body>
    <center_content class="faded_elem anim_elem" data-to='faded_elem' data-tc='faded_elem'>
        <h3 class="subtitle center">Войти</h3>
        <p class="simple_text">Ещё нет аккаунта?  <a href="new_profile" class="text_href">Регистрация</a></p>
        <input type="text" name="email" id="email" placeholder="Введите emal">
        <input type="text" name="password" id="password" placeholder="Введите пароль">
        <div href="#" id="button" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H15" stroke="#F4E2D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 17L15 12L10 7" stroke="#F4E2D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 12H3" stroke="#F4E2D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                
            <p>Войти</p>
        </div>
    </center_content>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', 'scripts/simple_ajax.js', 'scripts/user_functions/enter.js', 'scripts/Transition Pro Files/script.js', 'scripts/anim_init.js'];
        include "blocks/header.php";
    ?>
</body>
</html>