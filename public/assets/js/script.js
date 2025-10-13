document.querySelector('.botao').addEventListener('click', function() {

    var senha = document.querySelector('#senha').value;
    var senha2 = document.querySelector('#senha2').value;


    if(senha !== senha2){
        alert('senhas diferentes')
        return false
    } 
        return document.querySelector('.login').submit()
    
});

