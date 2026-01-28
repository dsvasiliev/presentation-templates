<?php
    // Показать за раз
    $ATATIME = 5;
    // Номер страницы (начания с 1)
    $start = (int)$_GET['page'] + 1;
    // Номер первой записи для вывода
    $start_db = (int)$_GET['page'] * $ATATIME;
    include 'blocks/db_config.php';
    $db = db_connect('templates');
    $categories = $db->query("SELECT * FROM `categories` ORDER BY `number` DESC LIMIT $start_db, $ATATIME");
    // Всего страниц
    $pages = ceil($db->query("SELECT COUNT(*) FROM `categories`")->fetch_assoc()["COUNT(*)"]/$ATATIME);
    db_exit($db);
    // Информация о странице
    $title = 'Категории';
    $over_links = '
        <link rel="stylesheet" href="styles/category_blocks.css">
        <link rel="stylesheet" href="styles/categories.css">
        <link rel="stylesheet" href="styles/navigation_bar.css">
    ';
    include "blocks/link.php";
?>
<body>
    <content class="user_content anim_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
    <h2 class="simple_title center">Все категории</h2>
        <p class="simple_text">На нашем сайте все зарегистрированные пользоватли могут создаватть свои категории. Для этого надо перейти в раздел “<a class="text_href" href="upload/template">Выгрузить</a>” и найти функцию “создать категорию”</p>
        <?php
            // Вывод категорий
            if($categories->num_rows > 0) {
                while($category = $categories->fetch_assoc()) {
                    $cover_link = $category['cover'];    
                    echo '<a class="category" href="category?id='.$category['id'].'"><div>';
                    if($cover_link) echo '<div><img src="Images/Covers/'.$cover_link.'/Cover.png" alt="Обложка категории"></div>';
                    else echo '<div><div></div></div>';
                    echo '</div><div>
                            <h4 class="category_title">'.$category['name'].'</h4>
                            <p class="simple_text">'.$category['discription'].'</p>
                        </div>
                    </a>';
                };
            } else {
                echo '<p class="simple_text center">Категорий пока нет</p>';
            }
        ?>
        <!-- Блок навигации -->
          <navigation>
            <?
                if($start != 1) {
                    // Кнопка "Домой"
                    echo '<a href="categories" id="home" class="button light left">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 22V12H15V22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>';
                    // Расчёт адреса
                    $back = ($start - 2) == 0 ? '': "?page=".($start - 2);
                    // Кнопка "Назад"
                    echo ' </a><a href="categories.php'.$back.'" class="button light left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>';
                }
            ?>
            <p class="simple_text"><?php echo $start?> из <?php echo $pages?></p>
            <?
                if($start != $pages) {
                    // Кнопка "Вперёд"
                    echo ' <a href="categories.php?page='.($start).'" class="button light left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </a>';
                }
            ?>
        </navigation>
    </content>
    <?php
        $scripts = ['scripts/Transition Pro Files/script.js', 'scripts/anim_init.js'];
        include "blocks/header.php";
    ?>
</body>
</html>