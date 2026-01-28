const button = document.getElementById('button')
const name_elem = document.getElementById('name')
const email_elem = document.getElementById('email')
const password_elem = document.getElementById('password')
const user_name = document.getElementById('user_name')

function check() {
    ajax('../user_functions/change_system', {name: name_elem.value,email: email_elem.value,password: password_elem.value}, function() {
        return TransitionPro.close(get_my_elems(), '../profile')
    })
}

button.onclick = check