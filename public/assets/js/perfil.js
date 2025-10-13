document.querySelector('.editar').addEventListener('click', function() {

    var condicao = document.querySelector('.editar').value;
    if(condicao == 1){
        const botoes = document.querySelectorAll('.botao');

        botoes.forEach(function(botoes) {
            botoes.disabled = false;
        });

        document.querySelector('.editar').innerHTML = 'volta';
        document.querySelector('.editar').value = '';

        document.querySelector('.add').innerHTML += `<button id='salva'> salva </button>`;

         
    } else {
        const botoes = document.querySelectorAll('.botao');

        botoes.forEach(function(botoes) {
            botoes.disabled = true;
        });

        document.querySelector('.editar').innerHTML = 'editar';
        document.querySelector('.editar').value = '1';

        document.querySelector('.add').innerHTML -= `<button id='salva'> salva </button>`;
    }

   
});