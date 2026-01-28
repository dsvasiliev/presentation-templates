/*
    16.08.2021
*/

const coefficient = 50

function ScrollCheck() {
    top_and_win_height = scrollY + window.innerHeight - coefficient
    for(var i in scroll_animate_elems) {
        const elem = scroll_animate_elems[i]
        if(elem[0].getBoundingClientRect().top + scrollY < top_and_win_height) {
            for(var elem_in_arow of elem) elem_in_arow.classList.remove(elem_in_arow.getAttribute('data-to'))
            delete scroll_animate_elems[i]
        }
    }
}

setTimeout (() => {window.addEventListener('scroll', () => {ScrollCheck()})})