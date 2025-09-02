@extends('templates.template')
@section('head')

<link rel="stylesheet" href="{{url('assets/css/sobre.css')}}">

@section('conteudo')

<div class="container">
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
            <img src="{{url('assets/img/contato_img.jpg')}}" alt="cad" class="cadImg">
            </div>
            <div class="content">
           
                    <form class="formulario" action="/contatos-insert" method="post">
                    <h2>contatos</h2>

                    @csrf 

                        <label class="textLabel" >Nome:</label>
                        <input class="inputs" type="text" name="nome">
                        <label class="textLabel" >Email:</label>
                        <input class="inputs"  type="text" name="email">
                        <label class="textLabel" >Telefone:</label>
                        <input class="inputs"  type="text" name="telefone">

                        <button type="submit"> Enviar</button>

                    </form>
            </div>
        </div>
    </div>
</div>

@endsection