document.querySelector('.perfil-tex').addEventListener('click', function () {
    document.documentElement.style.setProperty('--display--menu', 'flex')

    var x = document.querySelector('.x');
    x.addEventListener('click', function() {
           document.documentElement.style.setProperty('--display--menu', 'none')
    });
});