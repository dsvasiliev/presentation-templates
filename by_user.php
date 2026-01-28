<?php
    // Получение id из запроса
    $user_id = $_GET['user'];
    include 'blocks/db_config.php';
    $db = db_connect();
    $user = $db->query("SELECT * FROM `users` WHERE `id` = '$user_id'")->fetch_assoc();
    if($user == '') {
        echo 'Пользователь удалён';
        return;
    } 
    // Данные шаблонов из базы данных
    $templates = get_templates($db, 'creator_id', $user_id);
    db_exit($db);
    $title = 'Шаблоны пользователя '.$user['name'];
    $over_links = '
        <link rel="stylesheet" href="styles/temple_blocks.css">
    ';
    include "blocks/link.php";
?>
<body>
    <content class="user_content anim_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
        <p class="subtitle center">Шаблоны пользователя <? echo $user['name'] ?></p>
        <?php
            if($templates->num_rows > 0) {
                while($template = $templates->fetch_assoc()) {
                    echo '<a href="template?id='.$template['id'].'"><div class="template_block">
                        <img src="Images/Covers/'.$template["id"].'/Cover.png" alt="">
                        <p class="simple_text">'.$template['name'].'</p>
                    </div></a>';
                };
            } else {
                echo '<p style="margin-top: 50px" class="simple_text center">Здесь пока ничего нет</p>';
            }
        ?>
    </content>
    <?php
        $scripts = ['scripts/Transition Pro Files/script.js', 'scripts/anim_init.js'];
        include "blocks/header.php";
    ?>
</body>
</html>