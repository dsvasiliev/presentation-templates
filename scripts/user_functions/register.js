const button = document.getElementById('button')

const name_elem = document.getElementById('name')
const email_elem = document.getElementById('email')
const password_elem = document.getElementById('password')

function check() {
    ajax('user_functions/create.php', {name: name_elem.value,email: email_elem.value, password: password_elem.value}, function() {
        TransitionPro.close(get_my_elems(), 'profile')
    })
}

button.onclick = check