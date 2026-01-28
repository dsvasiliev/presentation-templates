<?php
    // Получение id из запроса
    $this_id = $_GET['id'];
    if(!$this_id) return "Error";
    include 'blocks/db_config.php';
    $db = db_connect();
    // Данные из общей таблица
    $category = $db->query("SELECT * FROM `categories` WHERE `id` = '$this_id'")->fetch_assoc();
    // Данные из специальной таблицы
    $templates = get_templates($db, 'category', $this_id);
    db_exit($db);
    if($category == '') return header('Refresh: 0; url=/');
    $title = $category['name'];
    $over_links = '
        <link rel="stylesheet" href="styles/temple_blocks.css">
    ';
    include "blocks/link.php";
?>
<body>
    <content class="user_content anim_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
        <p class="subtitle center"><? echo $category['name'] ?></p>
        <p class="simple_text">Описание: <? echo $category['discription'] ?></p>
        <?php
            if($templates->num_rows > 0) {
                while($template = $templates->fetch_assoc()) {
                    echo '<a href="template?id='.$template['id'].'"><div class="template_block">
                        <img src="Images/Covers/'.$template["id"].'/Cover.png" alt="">
                        <p class="simple_text">'.$template['name'].'</p>
                    </div></a>';
                };
            } else {
                echo '<p style="margin-top: 50px" class="simple_text center">Пустая категория</p>';
            }
        ?>
    </content>
    <?php
        $scripts = ['scripts/Transition Pro Files/script.js', 'scripts/anim_init.js'];
        include "blocks/header.php";
    ?>
</body>
</html>