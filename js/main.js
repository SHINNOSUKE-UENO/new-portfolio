window.addEventListener('DOMContentLoaded', function() {

    // ヘッダー　トグル開閉
    let toggle = document.body.querySelector('.toggle');
    let nav = document.body.querySelector('nav');

    toggle.addEventListener('click', function() {
        toggle.classList.toggle('active');
        nav.classList.toggle('open');
    });

});