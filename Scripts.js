// Ждем, пока документ загрузится полностью
window.onload = function() {
    // Получаем высоту хедера
    var headerHeight = document.querySelector('header').offsetHeight;

    // Устанавливаем высоту контейнера с учетом высоты хедера
    var container = document.querySelector('.container');
    container.style.height = 'calc(100vh - ' + headerHeight + 'px)';
}
