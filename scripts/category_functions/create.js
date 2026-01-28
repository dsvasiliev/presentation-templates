const button = document.getElementById('button')
const name_elem = document.getElementById('name')
const description_elem = document.getElementById('description')

function check() {
    ajax('category_functions/create.php', {name: name_elem.value, description: description_elem.value}, function(message) {
        TransitionPro.close(get_my_elems(), 'category?id='+message)
        // return location.href = 'user.php'
    })
}

button.onclick = check