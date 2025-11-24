@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addSala.css') }}">
@endsection
@section('conteudoC')
<div class="container">
    <div class="caixa">
        <form action="/sala-insert" method="post" id="salaForm">
            @csrf
            <h1>Adicione uma Sala!</h1>
            
            <input class="inputs" type="date" name="date" required 
                   placeholder="Selecione a data">
            
            <input class="inputs" type="time" name="hora" required 
                   placeholder="Selecione o horário">
            
            <select class="inputs" name="select" required>
                <option value="">Selecione um filme</option>
                @foreach($filmes as $filme)
                <option value="{{$filme->idFilme}}">{{$filme->titulo}}</option>
                @endforeach
            </select>
            
            <div style="display: flex; align-items: center; justify-content: center;">
                <button type="submit" id="submitBtn"> 
                    <span>Adicionar Sala</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('salaForm').addEventListener('submit', function(e) {
    const button = document.getElementById('submitBtn');
    button.classList.add('loading');
    button.innerHTML = '<span>Processando...</span>';
});
</script>
@endsection