@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/sobre.css')}}">
<link rel="icon" href="{{url('assets/img/logoCinema.png')}}">

@section('conteudo')

<div class="container">
    <div class="dev">
        <strong>DESENVOLVEDORES</strong>    
    </div>    
<div class="cads">
        

        <div class="card">
            <div class="imgs">
                <img src="" alt="" class="imagem">
            </div>
            <div class="contatos">
                <a href="#"> <img class="icon" src="{{url('assets/img/logoGithub2.png')}}" title="github"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoInsta.png')}}" title="instagram"> </a>
                <a href="#"> <img class="icon" src="{{url('assets/img/logoLink.png')}}" title="linkendln"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoX.png')}}" title="X"> </a>
            </div>
        </div>

        <div class="card">
            <div class="imgs">
                <img src="" alt="" class="imagem">
            </div>
            <div class="contatos">
                <a href="#"> <img class="icon" src="{{url('assets/img/logoGithub2.png')}}" title="github"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoInsta.png')}}" title="instagram"> </a>
                <a href="#"> <img class="icon" src="{{url('assets/img/logoLink.png')}}" title="linkendln"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoX.png')}}" title="X"> </a>
            </div>
        </div>

        <div class="card">
            <div class="imgs">
                <img src="" alt="" class="imagem">
            </div>
            <div class="contatos">
                <a href="#"> <img class="icon" src="{{url('assets/img/logoGithub2.png')}}" title="github"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoInsta.png')}}" title="instagram"> </a>
                <a href="#"> <img class="icon" src="{{url('assets/img/logoLink.png')}}" title="linkendln"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoX.png')}}" title="X"> </a>
            </div>
        </div>

        <div class="card">
            <div class="imgs">
                <img src="" alt="" class="imagem">
            </div>
            <div class="contatos">
                <a href="#"> <img class="icon" src="{{url('assets/img/logoGithub2.png')}}" title="github"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoInsta.png')}}" title="instagram"> </a>
                <a href="#"> <img class="icon" src="{{url('assets/img/logoLink.png')}}" title="linkendln"> </a>
                <a href="#"><img class="icon" src="{{url('assets/img/logoX.png')}}" title="X"> </a>
            </div>
        </div>
    </div>

    
    <div class="if">
        <div class="cardao" data-aos="fade-up">
            <div class="img2">
            <img src="{{url('assets/img/contato_img.png')}}" alt="cad" class="cadImg">
            </div>
            <div class="content">
           
                    <form class="formulario" action="/contatos-insert" method="post">
                    <h1>contatos</h1>

                    @csrf 
                        <input class="inputs" type="text" name="nome" placeholder="Nome">
                        <input class="inputs"  type="text" name="email" placeholder="Email">
                        <input class="inputs"  type="text" name="telefone" placeholder="Telefone">

                        <button type="submit"> Enviar</button>

                    </form>
            </div>
        </div>
    </div>
</div>

@endsection