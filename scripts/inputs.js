// Выделение ошибочных выриантов ответа
function input_error(elem) {
    elem.classList.add('false_selected')
    setTimeout(() => elem.classList.remove('false_selected'), 2000)
}

// Работа со списками

const lists = document.getElementsByClassName('list')

for(const list of lists) {
    for(const list_item of list.childNodes) list_item.addEventListener('click', item_click)
}

function item_click() {
    const list = this.parentNode
    for(const list_item of list.childNodes) list_item.classList = 'simple_text'
    this.classList = 'simple_text list_selected'
    list.setAttribute('data-selected', this.getAttribute('data-value'))
}