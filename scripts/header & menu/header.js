// Файл, отвечающий за изменение цвета и размера у шапки сайта
const menu_point = 100; // Высота изменения
bar_closed = true
const site_head = document.getElementById('site_head')

document.addEventListener('scroll', function() {
    const y = window.pageYOffset
    if (y > menu_point && bar_closed) {
        // Положение при скроле
        menu_elem.classList = 'menu menu_show'
        site_head.classList = 'menu_top short_head white_colored'
        bar_closed = false
    } else if(y < menu_point && !bar_closed) {
        // Положение при старте
        menu_elem.classList = 'menu'
        site_head.classList = 'menu_top'
        bar_closed = true
    }
})