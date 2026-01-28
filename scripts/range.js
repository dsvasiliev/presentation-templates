for(const range of document.getElementsByClassName('range')) {
    range.querySelector('input').addEventListener('input', function () {
        this.parentNode.querySelector('p').innerHTML = 'Ваша оценка: ' + this.value
    })
}