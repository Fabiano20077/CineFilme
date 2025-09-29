@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/ingessos.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
@section('conteudo')

<div class="container">

    <div class="card">
        <div class="imagem">
            <img src="{{ asset('storage/'.$filmes->poster)}}">
        </div>
        <div class="if">
            <h1>sessoes:</h1>
            <form class="fromSessoses" action="" method="">
                <div class="sessoes">

                    <select id="selectDia">
                        <option value="">dias:</option>
                        @foreach($sala as $sal)
                        <option value="{{$sal->dataSala}}">dia: {{$sal->dataSala}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="botos">
                    <form action="">
                        @foreach($sala as $sal)
                        <button type="button" class="card2 horario-item" data-dia='{{$sal->dataSala}}' style="display:none;">
                            <label for="">{{$sal->horarioSala}}</label>
                        </button>
                        @endforeach
                    </form>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#selectDia').on('change', function() {
            let diaSelecionado = $(this).val();

            $('.horario-item').hide();

            if (diaSelecionado) {
                $('.horario-item').each(function() {
                    if ($(this).data('dia') === diaSelecionado) {
                        $(this).show();
                    }
                });
            }
        })
    })
</script>

@endsection