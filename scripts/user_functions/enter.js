const button = document.getElementById('button')
const email_elem = document.getElementById('email')
const password_elem = document.getElementById('password')

function check() {
    ajax('user_functions/enter.php', {email: email_elem.value, password: password_elem.value}, function() {
        return TransitionPro.close(get_my_elems(), 'profile')
    })
}

button.onclick = check