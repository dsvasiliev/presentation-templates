// Файл простой инициализации анимации (для основных страниц)
// Пользовательская функция получения массива элеменов
function get_my_elems() {
    // Все элементы с классом
    const all_elems = document.getElementsByClassName('anim_elem')
    let active_elems = [];
    // Добавление шапки
    active_elems.unshift([document.getElementById('site_head')])
    for(var i = 0; i < all_elems.length; i++) {
        // Формирование ряда
        active_elems.push([all_elems[i]])
    }
    return active_elems
}

//При загрузке
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(function () {
    TransitionPro.open(get_my_elems())
    }, 80)
})

// Переход по прямым ссылкам
const hrefs = document.getElementsByTagName('a')
for(const href of hrefs) {
    href.onclick = function() {
        return false;
    }
    href.addEventListener('click', function() {
        close_menu()
        TransitionPro.time_duration = 0;
        TransitionPro.close(get_my_elems(), this.href)
        return false
    })
}