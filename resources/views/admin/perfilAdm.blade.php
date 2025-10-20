@extends('templates.admTemplate')
@section('headC')

<link rel="stylesheet" href="{{url('assets/css/perfil.css')}}">

@endsection
@section('conteudoC')

<div class="container">
    <img class="image" src="{{url('assets/img/perfil.png')}}" alt="">
    <div class="card-perfil">
        <form action="/update-adm/{{ Auth::guard('admin')->id() }}" method="post" class="from-update">
            @csrf
            <div class="lados">
                <div class="texto">
                    @error('nome')
                    <label style="color: red">{{$message}}</label>
                    @else
                    <label for="">Nome:</label>
                    @enderror
                    <input class="botao" type="text" class="input" name="nome" value="{{$adm->nomeAdm}}" disabled>
                </div>

                <div class="texto">
                    @error('email')
                    <label style="color: red">{{$message}}</label>
                    @else
                    <label for="">Email:</label>
                    @enderror
                    <input class="botao" type="text" class="input" name="email" value="{{$adm->emailAdm}}" disabled>
                </div>
            </div>
            <div class="lados">
                <div class="texto">
                    @error('senhaAntiga')
                    <label for="">{{$message}}</label>
                    @else
                    <label for="">senha antiga:</label>
                    @enderror
                    <input class="botao" type="text" class="input" name="senhaAntiga" value="" disabled>
                </div>
                <div class="texto">
                    @error('senhaNova')
                    <label for="">{{$message}}</label>
                    @else
                    <label for="">senha nova:</label>
                    @enderror
                    <input class="botao" type="text" class="input" name="senhaNova" value="" disabled>
                </div>
            </div>
        </form>
        <div class="botoes">
            <div class="botoesLados">
                <button class="editar" value="1"> editar </button>

            </div>
            <div class="botoesLados add">

            </div>
        </div>
    </div>
</div>


<script src="{{url('assets/js/perfil.js')}}"></script>
@endsection