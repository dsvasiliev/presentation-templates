const button = document.getElementById('button')

const text_elem = document.getElementById('text')
const range_elem = document.getElementById('range')

function check() {
    ajax('review_system.php', {
        id: id,
        text: text_elem.value, 
        range: range_elem.value
    }, function() {
        TransitionPro.close(get_my_elems(), `../template?id=${id}`)
    })
}

button.onclick = check