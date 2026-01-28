// Проверка браузера
if (window.FormData === undefined) alert('Функция отправки не поддерживается')

const file_places = document.getElementsByClassName('file_upload')
const button = document.getElementById('send')
const name_input = document.getElementById('name')
const location_list = document.getElementById('location')
const discription_input = document.getElementById('discription')

for(const file_place of file_places) {
    // События для блока
    file_place.getElementsByTagName('p')[1].addEventListener('click', file_place_click)
    file_place.getElementsByTagName('p')[2].addEventListener('click', file_place_clear)
    file_place.ondragenter = ignoreDrag;
    file_place.ondragover = ignoreDrag;
    file_place.ondrop = drop;
    // Событие выбора для input
    file_place.childNodes[0].onchange = select_by_button
}

// Нажатие на блок
function file_place_click() {
    this.parentNode.childNodes[0].click()
}

function file_place_clear() {
    this.parentNode.childNodes[0].value = '';
    this.parentNode.childNodes[1].innerHTML = 'Без изменений (или загрузите файл)';
}

// Вункция игнорирования внешних событий
function ignoreDrag(e) {
    e.stopPropagation();
    e.preventDefault();
}

// Выбор input 
function select_by_button() {
    change_text(this.parentNode, this.files[0])
}

// При наведении файла
function drop(e) {
    console.log('Drod')
    const input = this.childNodes[0]
    // Аннулируем это событие для всех других
    e.stopPropagation();
    e.preventDefault();
    // Получаем перемещенные файлы
    const selected_file = e.dataTransfer.files[0]
    input.files[0] = selected_file
    change_text(this, selected_file.name)
}

// Смена текста блока
function change_text(elem, file) {
    if(!file?.name) return
    elem.childNodes[1].innerHTML = file.name
}

button.addEventListener('click', send_file)

// Отправка формы
function send_file() {
    // Проверка имени
    const name = name_input.value
    if (name.length < 3) return input_error(name_input)
    // Проверка описания
    const discription = discription_input.value
    if(discription.length < 3) return input_error(discription_input)
    // Проверка местоположения
    const location = Number(location_list.getAttribute('data-selected'))
    if(location === 0) return input_error(location_list)
    // Проверка двух файлов 
    const first_file = file_places[0].childNodes[0].files[0]
    const second_file = file_places[1].childNodes[0].files[0]
    console.warn('Ok');
    // Форма для отпраки
    var form_data = new FormData();
    form_data.append('name', name);
    form_data.append('discription', discription);
    form_data.append('first_file', first_file);
    form_data.append('second_file', second_file);
    form_data.append('category', location);
    form_data.append('id', id);
    // Ajax
    $.ajax({
        url: 'template_system.php',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(answer){
            console.log(answer)
            if(answer.success) {
                TransitionPro.close(get_my_elems(), '/template?id='+id)
            }
            else {
                return newWarn.open(answer.message, 4000)
            }
        }
    });
}