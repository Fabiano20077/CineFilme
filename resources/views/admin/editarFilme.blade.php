@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/editar.css') }}">
@endsection
@section('conteudoC')
<div class="container2">
    <div class="card2">
        <form action="{{route('updateFilme', ['id' => $filme->idFilme] )}}" method="post" id="filmeForm">
            @csrf
            <h2 style="text-align: center; margin-bottom: 30px; color: #333; 
                       background: linear-gradient(135deg, #667eea, #764ba2);
                       -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                       background-clip: text;">
                Editar Filme
            </h2>
            
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" value="{{$filme->titulo}}" required 
                   placeholder="Digite o título do filme">
            
            <label class="labelText" for="genero">Gênero do Filme:</label>
            <select class="input" name="genero" id="genero" required>
                <option value="{{$filme->genero}}" selected>{{$filme->genero}}</option>
                @foreach($generos as $genero)
                    @if($filme->genero !== $genero->nomeGenero)
                    <option value="{{$genero->nomeGenero}}">{{$genero->nomeGenero}}</option>
                    @endif
                @endforeach
            </select>
            
            <label for="lancamento">Data de Lançamento:</label>
            <input type="date" name="lancamento" value="{{$filme->lancamento}}" required>
            
            <label for="classificacao">Classificação Indicativa:</label>
            <select name="classificacao" id="classificacao" required>
                <option value="10" {{$filme->classificacao == '10' ? 'selected' : ''}}>Livre</option>
                <option value="12" {{$filme->classificacao == '12' ? 'selected' : ''}}>12 anos</option>
                <option value="14" {{$filme->classificacao == '14' ? 'selected' : ''}}>14 anos</option>
                <option value="16" {{$filme->classificacao == '16' ? 'selected' : ''}}>16 anos</option>
                <option value="18" {{$filme->classificacao == '18' ? 'selected' : ''}}>18 anos</option>
            </select>
            
            <label for="sinopse">Sinopse:</label>
            <textarea name="sinopse" id="sinopse" placeholder="Digite a sinopse do filme..." 
                      required>{{$filme->sinopse}}</textarea>
            
            <button type="submit" id="submitBtn"> 
                <span>Salvar Alterações</span>
            </button>
        </form>
    </div>
</div>

<script>
document.getElementById('filmeForm').addEventListener('submit', function(e) {
    const button = document.getElementById('submitBtn');
    button.classList.add('loading');
    button.innerHTML = '<span>Salvando...</span>';
});

// Melhorar a experiência do usuário
document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'scale(1.02)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'scale(1)';
        });
    });
});
</script>
@endsection