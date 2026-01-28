<!-- Меню -->
<div id="menu" class="menu">
    <!-- Центровка блока -->
    <div id='menu_center' class="menu_content">
        <!-- Левый блок -->
        <!-- Animated_elem* - класс элемента с анимацией, где: 
            closed_menu_elem (data-class-remove) - класс, который удалиться при открытии
            data-menu-delay - задержка
            * класс можно приметить к любому элементу, но надо помнить при изменение css (выше)
        -->
        <div class="animated_elem closed_menu_elem" data-class-remove="closed_menu_elem" data-menu-delay="500">
            <p>Навигация</p>
            <a href="/">Главная</a>
            <? echo is_logined() ? '<a href="profile">Мой профиль</a>' : '<a href="new_profile">Регистрация</a>'?>
            </a>
            <a href="categories">Категории</a>
        </div><!-- Правый блок --><div class="animated_elem closed_menu_elem" data-class-remove="closed_menu_elem" data-menu-delay="700">
            <p>Последние категории</p>
            <?php
                $db = db_connect();
                $last_categories = $db->query("SELECT `id`, `name` FROM `categories` ORDER BY ID DESC LIMIT 3");
                // echo $last_categories;
                db_exit($db);
                while($category = $last_categories->fetch_assoc()) {
                   echo '<a href="category?id='.$category['id'].'">'.$category['name'].'</a>';
                };
            ?>
            <!-- <a href="#">Продажа товара</a>
            <a href="#">Викторины</a>
            <a href="#">Реклама</a> -->
        </div>
        <!-- !! Если правый блок не используеться, то стоит удалить стили с правым локом (в Файлы меню/Menu style.css) -->
        <!-- Далее правый и левый чередуються... -->
    </div>
</div>
<!-- Шапка сайта -->
  <div id='site_head' class="faded_elem menu_top" data-to="faded_elem" data-tc="faded_elem">
        <a href="/"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.28 21.1867C27.4318 23.1927 26.1051 24.9603 24.4158 26.3351C22.7266 27.7099 20.7264 28.6499 18.5899 29.0731C16.4535 29.4962 14.2459 29.3895 12.1602 28.7624C10.0745 28.1353 8.17418 27.0068 6.62537 25.4756C5.07656 23.9443 3.92643 22.057 3.27552 19.9786C2.62462 17.9002 2.49276 15.694 2.89147 13.5529C3.29019 11.4117 4.20734 9.40085 5.56274 7.69605C6.91814 5.99125 8.67052 4.64444 10.6667 3.77335" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29.3333 16C29.3333 14.249 28.9885 12.5152 28.3184 10.8975C27.6483 9.27987 26.6662 7.81001 25.4281 6.5719C24.19 5.33378 22.7201 4.35166 21.1024 3.6816C19.4848 3.01153 17.751 2.66666 16 2.66666V16H29.3333Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg></a>
        <div id="fast_hrefs">
            <a href="/categories">Категории</a>
            <? echo is_logined() ? '<a href="profile">Профиль</a><a href="/upload/template">+ Выгрузить</a>' : '<a href="new_profile">Регистрация</a>'?>
        </div>            
        <svg id='menu_icon' width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 11L30 11" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M2 22L30 22" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>        
    </div>
<!-- New warn - предупреждение -->
<div class='NewWarn'><p>Предупреждение</p></div>
<script src="<? echo $prefix ?>scripts/header & menu/Menu script.js"></script>
<script src="<? echo $prefix ?>scripts/header & menu/height.js"></script>
<script src="<? echo $prefix ?>scripts/header & menu/header.js"></script>
<script src="<? echo $prefix ?>scripts/New warn/script.js"></script>
<?php
    foreach($scripts as $script) {
      echo '<script src="'.$script.'"></script>';
    }
?>