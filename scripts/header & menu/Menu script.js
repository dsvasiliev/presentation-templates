/* 
    28.03.2022 | edited
*/

// New
const fast_hrefs = document.getElementById('fast_hrefs');
const menu_icon = document.getElementById('menu_icon')
const menu_elem = document.getElementById('menu')
// const hrefs = menu_elem.getElementsByTagName('a');
const animated_elem = document.getElementsByClassName('animated_elem')
var was_opened = false;
var timeouts = [];

// Открытие
function open_menu() {
    // Основная анимация
    // New
    fast_hrefs.style.opacity = '0';
    menu_icon.classList = 'opened_menu_icon'
    menu_elem.classList = 'menu menu_opened'
    site_head.classList = bar_closed ? 'menu_top white_colored' : 'menu_top short_head white_colored';
    // Анимация элементов
    for(const elem of animated_elem) {
        timeouts.push(setTimeout(function(elem) {
            elem.classList.remove(elem.getAttribute('data-class-remove'))
        }, Number(elem.getAttribute('data-menu-delay')), elem))
    }
    was_opened = true
}

// Закрытие
function close_menu() {
    // Основная анимация
    fast_hrefs.style.opacity = '1';
    menu_icon.classList = ''
    menu_elem.classList = bar_closed ? 'menu' : 'menu menu_show';
    site_head.classList = bar_closed ? 'menu_top' : 'menu_top short_head white_colored';
    // Анимация элементов (все вместе)
    for(const elem of animated_elem) elem.classList.add(elem.getAttribute('data-class-remove'))
    for(const timeout of timeouts) clearTimeout(timeout)
    was_opened = false
}

// Нажатие на кнопку
menu_icon.addEventListener('click', function() {
    if (was_opened) close_menu();
    else open_menu();
})

// for(const href of hrefs) {
//     href.addEventListener('click', function() {
//         close_menu();
//         console.log(this.href);
//     })
// }