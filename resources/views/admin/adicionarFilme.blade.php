@extends('templates.admTemplate')
@section('headC')
<link rel="stylesheet" href="{{ asset('assets/css/addFilme.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('conteudoC')

<div class="container">
    <div class="busca">
        <input id="buscar" class="buscarInput" type="text" placeholder="Buscar Filme">
        <a class="novoFilme" href="{{route('addFilme')}}">Novo filme</a>
    </div>
    <div id="tabelaFilme" class="filmes">
      @include('admin.filmeTabela', ['filme'=> $filme])
    </div>
</div>


<script>
    $(document).ready(function() {
        function atualizar() {

            let search  = $('#buscar').val();

            $.ajax({
                url: '{{ route("buscarFilme") }}',
                method: 'GET',
                data: {
                    search : search 
                },
                success: function(response) {
                    $('#tabelaFilme').html(response)
                },
                error: function() {
                    alert('Erro ao buscar filme')
                }
            })
        }

        $('#buscar').on('input', function() {
            atualizar();
        });
    })
</script>
@endsection