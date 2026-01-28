<?php
    $prefix = '../';
    $title = 'Изменить параметры пользователя';
    $over_links = '
        <link rel="stylesheet" href="../styles/mini-block.css">
        <link rel="stylesheet" href="../styles/inputs.css">
    ';
    include '../blocks/db_config.php';
    include "../blocks/link.php";
    check_logined();
    $user = get_user_by_id()
?>
<body>
    <center_content class="faded_elem anim_elem" data-to='faded_elem' data-tc='faded_elem'>
        <div class="fast_buttons">
            <!-- Назад -->
            <a href="../profile"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 12H5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 19L5 12L12 5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a> 
        </div>
        <h3 class="subtitle center">Изменить аккаунт</h3>
        <p class="simple_text">Вы можете сменить имя, email и пароль</p>
        <input type="text" name="email" id="email" value="<? echo $user['email'] ?>"  placeholder="Введите emal">
        <input type="text" name="name" id="name" value="<? echo $user['name'] ?>" placeholder="Введите своё имя">
        <input type="text" name="password" id="password" placeholder="Новый пароль">
        <div id="button" class="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 6L9 17L4 12" stroke="#DBE6E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
            <p>Изменить</p>
        </div>
    </center_content>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', '../scripts/simple_ajax.js', '../scripts/user_functions/change_user.js', '../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>