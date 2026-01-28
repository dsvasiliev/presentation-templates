<?php
    $prefix = '../';
    $this_id = $_GET['id'];
    include '../blocks/db_config.php';
    include '../blocks/client_config.php';
    $db = db_connect();
    $this_template = get_template($db, $this_id);
    $categories = $db->query("SELECT `id`, `name` FROM `categories`");
    db_exit($db);
    if(!the_same_user($this_template['creator_id'])) header('Refresh: 0; url=index.php');
    $category_id = $this_template['category'];
    $title = 'Изменить шаблон';
    $over_links = '
        <link rel="stylesheet" href="../styles/inputs.css">
    ';
    include "../blocks/link.php";
?>
<body>
    <content class="user_content">
        <p class="subtitle center anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Редактировать макет</p>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>1. Название и описание проекта</p>
        <input class="anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem' type="text" name='pemplate_project_name' id="name" placeholder="Название проекта" value='<? echo $this_template['name'] ?>'>
        <textarea class="anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem' id='discription' placeholder="Описание проекта" ><? echo $this_template['discription'] ?></textarea>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>2. Расположение и вид. Выберите расположение проекта</p>
        <!-- Выбор расположения из списка -->
        <div id="location" data-selected="<?php echo $category_id?>" class='list anim_elem faded_elem' data-to='faded_elem' data-tc='faded_elem'><p class="simple_text" data-value="">Выбрать местоположение</p><?php 
            while($category = $categories->fetch_assoc()) {
                if($category['id'] == $category_id) {
                    echo '<p class="simple_text list_selected" data-value="'.$category['id'].'">'.$category['name'].'</p>';
                } else {
                    echo '<p class="simple_text" data-value="'.$category['id'].'">'.$category['name'].'</p>';
                }
            };
        ?></div>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Нет нужного расположения? <a href="new_category.php" class="text_href">Создать</a></p>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>Загрузине обложку дизайна. Желательно, чтобы она была в HD качестве (1080 x 1920, PNG)</p>
        <!-- Место загрузки файла 1 -->
        <div class="file_upload anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'><input type="file" name="templates_cover_update" accept=".jpg, .jpeg, .png"><p class="simple_text">Без изменений (или загрузите файл)</p><p class="simple_text text_href">Выбрать файл</p><p class="simple_text text_href">Очистить</p>
        </div>
        <p class="simple_text anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>3. Проект (.PPTX)</p>
        <!-- Место загрузки файла 2 -->
        <div class="file_upload anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'><input type="file" name="templates_mainfile_update" accept=".pptx"><p class="simple_text">Без изменений (или загрузите файл)</p><p class="simple_text text_href">Выбрать файл</p><p class="simple_text text_href">Очистить</p>
        </div>
        <div id="send" class="button anim_elem faded_elem" data-to='faded_elem' data-tc='faded_elem'>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 11L12 6L7 11" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 18L12 13L7 18" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Изменить</p>
        </div>
    </content>
    <script>
        var id = <? echo $this_id ?>;
    </script>
    <?php
        $scripts = ['https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', '../scripts/simple_ajax.js', '../scripts/upload_template/change.js', '../scripts/inputs.js', '../scripts/Transition Pro Files/script.js', '../scripts/anim_init.js'];
        include "../blocks/header.php";
    ?>
</body>
</html>