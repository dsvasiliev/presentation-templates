// Установка здинамического значения для 100vh
document.documentElement.style.setProperty('--vh', `${window.innerHeight * 0.01}px`);

window.addEventListener('resize', function () {
    document.documentElement.style.setProperty('--vh', `${window.innerHeight * 0.01}px`);
});