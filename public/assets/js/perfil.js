document.querySelector('.editar').addEventListener('click', function () {

    var condicao = document.querySelector('.editar').value;
    const botoes = document.querySelectorAll('.botao');
    if (condicao == 1) {


        botoes.forEach(function (botoes) {
            botoes.disabled = false;
        });

        var btnButton = document.createElement('button');
        btnButton.id = 'salva';
        btnButton.textContent = 'salva';

    
        document.querySelector('.editar').innerHTML = 'volta';
        document.querySelector('.editar').value = '';

        document.querySelector('.add').appendChild(btnButton);

        btnButton.addEventListener('click', function() {
                document.querySelector('.from-update').submit();
        });


    } else {

        var salva = document.getElementById('salva');

        botoes.forEach(function (botoes) {
            botoes.disabled = true;
        });


        document.querySelector('.editar').innerHTML = 'editar';
        document.querySelector('.editar').value = '1';

         salva.remove();
    }


});