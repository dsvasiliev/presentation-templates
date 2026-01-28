<?php
    $prefix = '../';
    $title = 'Загрузить шаблон';
    $over_links = '
        <link rel="stylesheet" href="../styles/inputs.css">
    ';
    include '../blocks/db_config.php';
    include "../blocks/link.php";
    check_logined();
    $db = db_connect('templates');
    $categories = $db->query("SELECT `id`, `name` FROM `categories`");
    db_exit($db);
?>
<body>
    <content class="user_content">
        <p class="subtitle center anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Новый макет</p>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>1 Этап. Название проекта (от 3-х до 70-ти символов) и описание</p>
        <input class="anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem' type="text" name="pemplate_project_name" id="name" placeholder="Название проекта">
        <textarea class="anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem' id='discription' placeholder="Описание проекта" ></textarea>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>2 Этап. Расположение и вид. Выберите расположение будующего проекта</p>
        <!-- Выбор расположения из списка -->
        <div id="location" data-selected="" class='list anim_elem faded_elem' data-to='faded_elem' data-tc='faded_elem'><p class="simple_text list_selected" data-value="">Выбрать местоположение</p><?php 
            while($category = $categories->fetch_assoc()) {
                echo '<p class="simple_text" data-value="'.$category['id'].'">'.$category['name'].'</p>';
            };
        ?></div>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Нет нужного расположения? <a href="new_category.php" class="text_href">Создать</a></p>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Загрузине обложку дизайна. Она должна иметь размеры от (720 x 576)px до (1920 х 1080)px, формат .png, .jpg или .jpeg</p>
        <!-- Место загрузки файла 1 -->
        <div class="file_upload anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'><input type="file" name="file" accept=".jpg, .jpeg, .png"><p class="simple_text">Перетащите сюда изображение</p><p class="simple_text text_href">Выбрать файл</p>
        </div>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>3. Загрузка проекта. Файл должен иметь формат .pptx</p>
        <!-- Место загрузки файла 2 -->
        <div class="file_upload anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'><input type="file" name="file" accept='.pptx'><p class="simple_text">Перетащите макет сюда</p><p class="simple_text text_href">Выбрать файл</p>
        </div>
        <div id="send" class="button anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 11L12 6L7 11" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 18L12 13L7 18" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Опубликовать</p>
        </div>
    </content>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', '../scripts/simple_ajax.js', '../scripts/upload_template/upload.js', '../scripts/inputs.js', '../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>