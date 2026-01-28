/*
    24.06.2021
    (v. 1.1) - 11.08.2021
*/

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
                    // console.log(elems_in_a_row);
                    for(var elem_in_arow of elems_in_a_row) {
                        // console.log(String(elem_in_arow));
                        elem_in_arow.classList.remove(elem_in_arow.getAttribute('data-to'))
                    }
                }, i*time_duration, active[i])
                // console.log( i*time_duration);
                var time = performance.now();
            }
            // Остальные элементы (new: data-to = data-TransitionPro-open)
            for(let over of sort_elems.overs) over.classList.remove(over.getAttribute('data-to'))
        })     
    }

    static close(all_elems, address) {
        const active_elems = this.isOnView(all_elems).active, time_duration = this.time_duration
        // Перебор активных элементов через интервал
        for(var i = 0; i < active_elems.length; i++) {
            setTimeout(elems_in_a_row => {
                // (new: data-tc = data-TransitionPro-close)
                for(var elem_in_arow of elems_in_a_row) elem_in_arow.classList.add(elem_in_arow.getAttribute('data-tc'))
            }, i*time_duration, active_elems[i])
        }
        // Преадресация
        setTimeout(() => {
            window.location = address
            setTimeout(()=> TransitionPro.open(active_elems), 1000)
        }, i*time_duration + this.exit_delay)
    }

    static isOnView(array) {
        // Массивы
        var active = [], overs = []
        // Скролл окна
        const scroll_top = window.pageYOffset, scroll_bottom = window.innerHeight + scroll_top;
        // Перебор элементов
        for(const elem of array) {
            // Стабилизация анимации (new)
            const animate_elem_top = elem[0], animate_elem_bottom = elem[elem.length - 1]
            // Есть нестабильная работа. См. IconsFormats
            // При некоторых способах позиционирования элементов могут возникнуть проблемы!
            if ((scroll_top - animate_elem_bottom.offsetHeight < animate_elem_bottom.getBoundingClientRect().top + scrollY) && (animate_elem_top.getBoundingClientRect().top + scrollY < scroll_bottom)) active.push(elem)
            else overs = overs.concat(elem)
        } 
        return {
            'active': active,
            'overs': overs
        };
    }
}