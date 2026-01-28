<?php
    $title = 'Скачивайте и загружайте свои шаблоны для презентаций';
    $over_links = '
        <link rel="stylesheet" href="styles/index_style.css">
    ';
    include "blocks/link.php";
    include "blocks/db_config.php"
?>
<body>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       var z = null;m[i].l=1*new Date();
       for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
       k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(90105524, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90105524" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <!-- Блок верхнего заголовка -->
    <div id="main_page_top" class="green_background background_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
        <!-- Изображения -->
       <div id="background_imagine">
           <img src="Images/System/User Icon.webp" alt="" class="background_imagine faded_elem" data-to="faded_elem" data-tc="faded_elem">
           <img src="Images/System/Plus Icon.webp" alt="" class="background_imagine faded_elem" data-to="faded_elem" data-tc="faded_elem">
           <img src="Images/System/Upload Icon.webp" alt="" class="background_imagine faded_elem" data-to="faded_elem" data-tc="faded_elem">   
           <img src="Images/System/Download Icon.webp" alt="" class="background_imagine faded_elem" data-to="faded_elem" data-tc="faded_elem">          
       </div>
        <!-- Главный заголовок -->
        <div id="main_content">
            <p class="anim_elem transformed_elem big_title center" data-to="transformed_elem" data-tc="faded_elem">Скачивай&shy;те и заг&shy;ру&shy;жай&shy;те свои <strong>шаб&shy;ло&shy;ны для пре&shy;зен&shy;та&shy;ций</strong></p> 
            <p class="anim_elem transformed_elem simple_text center" data-to="transformed_elem" data-tc="faded_elem">Мы предлагаем вам, нашим пользователям, создавать <a href="categories" class="text_href">категории</a> и добавлять туда свои работы</p>
            <a href="categories" class="anim_elem green transformed_elem button" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#DBE6E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7 10L12 15L17 10" stroke="#DBE6E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 15V3" stroke="#DBE6E0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>Скачать</p>
            </a>
        </div>
        <svg class='anim_elem transformed_elem' data-to="transformed_elem" data-tc="faded_elem" id="down_scroll" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 2L14.5 16L2 2" stroke="black" stroke-width="3" stroke-linecap="round"/>
            <path d="M27 13L14.5 26L2 13" stroke="black" stroke-width="3" stroke-linecap="round"/>
        </svg>
    </div>
    <!-- Основные преймущества -->
    <div class="white_block">
        <h2 class="center simple_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Почему именно мы?</h2>
        <p class="center under_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Вот наши основные преимущества: &#128512;</p>
        <div class="three_blocks">
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.375 10.875H68.875C70.7978 10.875 72.6419 11.6388 74.0015 12.9985C75.3612 14.3581 76.125 16.2022 76.125 18.125V68.875C76.125 70.7978 75.3612 72.6419 74.0015 74.0015C72.6419 75.3612 70.7978 76.125 68.875 76.125H54.375" stroke="black" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M36.25 61.75L54.375 43.625L36.25 25.5" stroke="black" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M54.375 43.5H10.875" stroke="black" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p class="simple_text center">Удобная регистрация и инструменты пользователя</p>
            </div>
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M63.75 41.25L45 22.5L26.25 41.25" stroke="#0A0A0A" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M63.75 67.5L45 48.75L26.25 67.5" stroke="#0A0A0A" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                <p class="simple_text center">Возможность выкладывать свои шаблоны и попробовать себя</p>
            </div>
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="87" height="87" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.75 47.375L43.875 65.5L62 47.375" stroke="black" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M44 65.5V22" stroke="black" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                <p class="simple_text center">Возможность скачивать шаблоны других пользователей</p>
            </div>
        </div>
    </div>
    <!-- О проекте -->
    <div class="colored_block pink background_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
        <!-- Стрелка 1 -->
       <svg class='arrow anim_elem faded_elem' data-to='faded_elem' data-tc='faded_elem' id="arrow_1" width="134" height="163" viewBox="0 0 134 163" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M112.062 159.188L130.188 141.062L112.062 122.938" stroke="#E8A788" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
           <path d="M4.35652 4C4.35652 4 -0.55275 146.514 129 141.5" stroke="#E8A788" stroke-width="7" stroke-linecap="round"/>
       </svg>
        <div>
            <h2 class="center simple_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Наш проект</h2>
            <p class="center under_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Как же объединить пользователей? &#129300;</p>
            <div class="two_blocks">
                <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                   <img src="Images/System/Main-Icon.webp" alt="">
                </div>
                <div>
                   <h4 class="simple_text anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">О сайте</h4>
                   <p class="simple_text anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Приветствуем вас на нашей платформе! Здесь можно размещать и скачивать <strong>шаблоны для презентаций</strong>. Для Вашего удобства все шаблоны делятся на категории, можно отслеживать их популярность. Для начинающих дизайнеров презентаций это отличная возможность попробовать свои силы, а для остальных пользователей <strong>скачать шаблоны для презентаций</strong>. </p>
                   <h4 class="simple_text anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Перспективы</h4>
                   <p class="simple_text anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Сейчас на нашем сайте есть только <strong>бесплатные шаблоны</strong>, однако в будущем будет возможность устанавливать плату за скачивание шаблона. Так же можно внедрить отзывы, связь автора шаблона со своими клиентами. Всё это мы постараемся сделать в ближайшее время. (Сайт начал работать в 2022-ом году)</p>
                </div>
            </div>
        </div>
        <!-- Стрелка 2 -->
       <svg class='arrow anim_elem faded_elem' data-to='faded_elem' data-tc='faded_elem' id="arrow_2" width="163" height="134" viewBox="0 0 163 134" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M159.044 111.397L140.918 129.522L122.793 111.397" stroke="#E8A788" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
           <path d="M3.85364 3.69047C3.85364 3.69047 146.369 -1.2188 141.356 128.334" stroke="#E8A788" stroke-width="7" stroke-linecap="round"/>
       </svg>
    </div>
    <!-- Шаги для авторизации -->
    <div class="white_block">
        <h2 class="center simple_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Хотите выложить свой шаблон?</h2>
        <p class="center under_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Для этого достаточно сделать три простых шага &#128562;</p>
        <div class="three_blocks">
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="44" cy="44" r="41.5" stroke="black" stroke-width="5"/>
                    <path d="M34.8063 58.8H42.4063V35.55L43.0063 32.5L40.8063 35L34.8563 39L32.7563 36.05L44.8063 27.4H47.0063V58.8H54.5063V63H34.8063V58.8Z" fill="black"/>
                </svg>
                <h4 class="simple_text center">Создайте аккаунт на нашем сайте</h4>
            </div>
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="44" cy="44" r="41.5" stroke="black" stroke-width="5"/>
                    <path d="M53.6063 36.2C53.6063 37.9 53.2563 39.65 52.5563 41.45C51.8563 43.2167 50.9396 44.9833 49.8063 46.75C48.7063 48.5167 47.4563 50.2667 46.0563 52C44.6896 53.7333 43.3063 55.4 41.9063 57L39.2063 59.15V59.35L42.8063 58.8H54.4563V63H32.4063V61.2C33.2063 60.4333 34.1563 59.5 35.2563 58.4C36.3896 57.2667 37.5563 56.0333 38.7563 54.7C39.9896 53.3333 41.1896 51.9 42.3562 50.4C43.5563 48.9 44.6229 47.3833 45.5563 45.85C46.4896 44.2833 47.2396 42.75 47.8063 41.25C48.4063 39.75 48.7063 38.3333 48.7063 37C48.7063 35.4333 48.2229 34.1333 47.2563 33.1C46.2896 32.0667 44.8063 31.55 42.8063 31.55C41.4063 31.55 40.0563 31.8167 38.7563 32.35C37.4563 32.8833 36.3396 33.5333 35.4062 34.3L33.3563 30.95C34.7229 29.85 36.2729 28.9833 38.0063 28.35C39.7396 27.6833 41.6563 27.35 43.7563 27.35C46.8563 27.35 49.2729 28.1667 51.0063 29.8C52.7396 31.4 53.6063 33.5333 53.6063 36.2Z" fill="black"/>
                </svg>  
                <h4 class="simple_text center">Перейдите в свой профиль и выберите пункт «Добавить»</h4>
            </div>
            <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="44" cy="44" r="41.5" stroke="black" stroke-width="5"/>
                    <path d="M41.9063 59.55C43.1396 59.55 44.2729 59.3833 45.3063 59.05C46.3396 58.7167 47.2229 58.25 47.9563 57.65C48.6896 57.05 49.2563 56.3333 49.6563 55.5C50.0896 54.6667 50.3063 53.75 50.3063 52.75C50.3063 50.55 49.5729 48.9167 48.1063 47.85C46.6396 46.7833 44.5563 46.25 41.8563 46.25H37.8063V44.35L45.4563 33.95L48.0563 31.75L44.3563 32.2H33.8563V28H53.6063V29.95L45.1563 41.3L43.1563 42.75V42.9L45.0563 42.55C46.4896 42.5833 47.8063 42.8333 49.0063 43.3C50.2396 43.7667 51.3063 44.4333 52.2063 45.3C53.1063 46.1333 53.8063 47.15 54.3063 48.35C54.8063 49.5167 55.0563 50.8333 55.0563 52.3C55.0563 54.1667 54.7063 55.8 54.0063 57.2C53.3063 58.6 52.3563 59.7833 51.1563 60.75C49.9563 61.7167 48.5563 62.45 46.9563 62.95C45.3563 63.4167 43.6396 63.65 41.8063 63.65C40.1729 63.65 38.6729 63.5167 37.3063 63.25C35.9396 63.0167 34.7563 62.6833 33.7563 62.25L35.0063 58.15C35.8729 58.55 36.8729 58.8833 38.0063 59.15C39.1729 59.4167 40.4729 59.55 41.9063 59.55Z" fill="black"/>
                </svg>   
                <h4 class="simple_text center">Загрузите все необходимые файлы</h4>
            </div>
        </div>
        <a href="upload_template" class="button anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5V19" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 12H19" stroke="#F2F4F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <p>Поехали!</p>
        </a>
    </div>
    <!-- Новости проекта -->
    <div class="colored_block green background_elem faded_elem" data-to="faded_elem" data-tc="faded_elem" id="project_news">
        <!-- Стрелка 3 -->
      <svg class='arrow anim_elem faded_elem' data-to='faded_elem' data-tc='faded_elem' id='arrow_3' width="134" height="163" viewBox="0 0 134 163" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.2657 159.188L4.14008 141.062L22.2657 122.938" stroke="#3D8D77" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M129.976 4C129.976 4 134.885 146.514 5.32756 141.5" stroke="#3D8D77" stroke-width="7" stroke-linecap="round"/>
      </svg>
        <div>
            <h2 class="center simple_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Обновления</h2>
            <p class="center under_title anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">Мы постоянно выпускаем обновления для наших пользователей &#128521;</p>
            <div class="two_blocks">
                <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                   <img src="Images/System/Time Icon.webp" alt="">
                </div>
                <div class="anim_elem transformed_elem" data-to="transformed_elem" data-tc="faded_elem">
                   <h4 class="simple_text">Главная страница</h4>
                   <p class="simple_text">Мы обновили дизайн главной страницы, чтобы вам было удобнее пользоваться сайтом. Теперь всё находиться в более понятной системе блоков, а также добавлены интерактивные элементы, такие как большие иконки и стрелочки, чтобы сделать ваше пользование сайтом более приятным</p>
                    <h4 class="simple_text">Мой профиль</h4>
                   <p class="simple_text">Мы также обновили дизайн страницы вашего профиля. Теперь ориентироваться во всех функциях стало гораздо удобнее</p>
                </div>
            </div>
        </div>
        <!-- Футер -->
        <footer class="anim_elem faded_elem" data-to="faded_elem" data-tc="faded_elem">
            <div>
                <div id="footer_name">
                    <p class="small_text">Templates, 2022</p>
                </div>
                <div id="footer_follow">
                    <a href='categories' class="small_text">Категории</a>
                </div>
            </div>
        </footer>
    </div>
    <!-- Header + подключение скриптов -->
    <?php
        $scripts = ['scripts/Scroll animate Files/Transitions Pro script (for Scroll Animate).js', 'scripts/Scroll animate Files/script.js'];
        require 'blocks/header.php';
    ?>
    <!-- Инициализация анимации -->
    <script>
   // Временной промежуток между анимациями (по умолчаню - 30ms)
        TransitionPro.time_duration = 100;
        // Пользовательская функция получения массива элеменов
        function get_active_elems() {
            const all_elems = document.getElementsByClassName('anim_elem')
            let active_elems = []
            for(const active of all_elems) active_elems.push([active])
            return active_elems
        }

        function get_my_elems_in() {
            var active_elems = get_active_elems()
            active_elems.unshift([document.getElementById('site_head'), ...document.getElementsByClassName('background_elem')])
           active_elems.splice(4, 0, document.getElementsByClassName('background_imagine'));
            return active_elems
        }

        function get_my_elems_out() {
            var active_elems = get_active_elems()
           active_elems.splice(4, 0, document.getElementsByClassName('background_imagine'));
            active_elems.push([document.getElementById('site_head'), ...document.getElementsByClassName('background_elem')])
            return active_elems
        }

        //При загрузке
        document.addEventListener('DOMContentLoaded', () => {
            TransitionPro.open(get_my_elems_in())
        })

        // Переход по прямым ссылкам
        hrefs = document.getElementsByTagName('a')
        for(const href of hrefs) {
            href.onclick = function() {
                return false;
            }
            href.addEventListener('click', function() {
                close_menu()
                TransitionPro.time_duration = 0;
                TransitionPro.close(get_my_elems_out(), this.href)
                return false
            })
        }
    </script>
     <?php
         
    ?>
</body>
</html>