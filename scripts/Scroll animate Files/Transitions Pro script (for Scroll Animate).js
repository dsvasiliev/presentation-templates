/*
    24.06.2021
    (v. 1.1) - 11.08.2021
*/

//Изм.
scroll_animate_elems = []

class TransitionPro {
    static time_duration = 30;
    static exit_delay = 600;
    static open(all_elems) {
        // Задержка для стабилизации (для подгрузки текущего скролла окна)
        setTimeout(function() {
            const sort_elems = TransitionPro.isOnView(all_elems), active = sort_elems.active, time_duration = TransitionPro.time_duration;
            // Перебор активных элементов через интервал
            for(var i = 0; i < active.length; i++) {
                setTimeout(elems_in_a_row => {
                    for(var elem_in_arow of elems_in_a_row) elem_in_arow.classList.remove(elem_in_arow.getAttribute('data-to'))
                }, i*time_duration, active[i])
            }
            // Остальные элементы
            for(const over of sort_elems.overs) over.classList.remove(over.getAttribute('data-to'))
        })     
    }

    static close(all_elems, address) {
        const active_elems = this.isOnView(all_elems).active, time_duration = this.time_duration
        // Перебор активных элементов через интервал
        for(var i = 0; i < active_elems.length; i++) {
            setTimeout(elems_in_a_row => {
                for(var elem_in_arow of elems_in_a_row) elem_in_arow.classList.add(elem_in_arow.getAttribute('data-tc'))
            }, i*time_duration, active_elems[i])
        }
         // Преадресация
        const redirect_time = i*30 + 200
        setTimeout(() => window.location = address, redirect_time)
        // На случай возвращения Назад (при кэшировании)
        setTimeout(active_elems => {
            for(const elems_in_a_row of active_elems) {
                for(var elem_in_arow of elems_in_a_row) elem_in_arow.classList.remove(elem_in_arow.getAttribute('data-tc'))
            }
        }, redirect_time+1000, active_elems)
    }

    static isOnView(array) {
        // Массивы
        var active = [], overs = [], bottoms = []
        // Скролл окна
        const scroll_top = window.pageYOffset, scroll_bottom = window.innerHeight + scroll_top;
        // Перебор элементов
        // const top_and_win_height = pageYOffset + window.innerHeight
        for(let elem of array) {
            // Стабилизация анимации (new)
            const animate_elem_top = elem[0], animate_elem_bottom = elem[elem.length - 1]
            // Есть нестабильная работа. См. IconsFormats
            // При некоторых способах позиционирования элементов могут возникнуть проблемы!
            const in_buttom = animate_elem_top.getBoundingClientRect().top + scrollY < scroll_bottom
            if ((scroll_top - animate_elem_bottom.getBoundingClientRect().height < animate_elem_bottom.getBoundingClientRect().top + scrollY) && in_buttom) active.push(elem)
            else if(!in_buttom) bottoms.push(elem)
            else overs = overs.concat(...elem)
        } 
        // Изм.
        scroll_animate_elems = bottoms
        return {
            'active': active,
            'overs': overs
        };
    }
}