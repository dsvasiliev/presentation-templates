class newWarn {
    static opened = undefined
    static obj = document.getElementsByClassName('NewWarn')[0]
    static p = document.getElementsByClassName('NewWarn')[0].childNodes[0]
    static open(text, time) {
        clearTimeout(this.opened)
        this.p.textContent = text
        const obj = this.obj
        obj.style.display = 'block';
        setTimeout(function() {
            obj.classList = 'NewWarn NewWarnOpened'
        }, 10)
        this.opened = setTimeout(() => this.close(), time + 410)
    }
    static close() {
        const obj = this.obj
        obj.classList = 'NewWarn';
        setTimeout(() => obj.style.display = 'none', 200)
    }
}