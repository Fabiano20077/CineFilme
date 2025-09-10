<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/adm-painel.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/filme.css')}}">
    <title>Document</title>
</head>

<body>
<nav>
        <div class="logo">
            <img src="{{url('assets/img/nomeNav.png')}}" alt="CineFilme" class="nomeNav">
        </div>
        <ul>
            <li><a href="/">Filmes</a></li>
            <li><a href="/">Usuarios</a></li>
            <li><a href="/">Config</a></li>
            
        </ul>
</nav>

<div class="cataz">
    <i class="fi fi-br-plus"></i>
    @foreach($filmes as $filme)
    <div class="filme-card">
        <div class="card55">
            <div class="imagem">
                <img class="img2" src="{{ asset('storage/' . $filme->poster) }}">
            </div>
            <div class="conteudo">
                <div class="icons">
                    
                    <img src="{{ url('assets/img/icon_del.png') }}" alt="Delete" class="icon"
                        data-bs-toggle="modal" data-bs-target="#modalDelete{{ $filme->id }}">
                    <img src="{{ url('assets/img/icon_up.png') }}" alt="Upload" class="icon"
                        data-bs-toggle="modal" data-bs-target="#modalUpload{{ $filme->id }}">
                    <img src="{{ url('assets/img/icon_add.png') }}" alt="Add" class="icon"
                        data-bs-toggle="modal" data-bs-target="#modalAdd{{ $filme->id }}">
                </div>

                <div>
                    <h2>{{ $filme->titulo }}</h2>
                </div>
                <div class="if">
                    <label for="">Gênero: {{ $filme->genero }}</label>
                    <label for="">Classificação: {{ $filme->sinopse }}</label>
                    <label for="">Data de lançamento: {{ $filme->lancamento }}</label>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalDelete{{ $filme->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Filme</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir <strong>{{ $filme->titulo }}</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button class="cance" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    
                        <button class="exclu" type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUpload{{ $filme->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inserir novo filme?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    
                        <input type="file" name="poster" class="form-control">
                        <br>
                        <button  class="inser" type="submit" class="btn btn-primary">Inserir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAdd{{ $filme->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar informação</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>Aqui você pode adicionar detalhes extras sobre <strong>{{ $filme->titulo }}</strong>.</p>
        
                </div>
                <div class="modal-footer">
                    <button class="salva" type="button" class="btn btn-success" data-bs-dismiss="modal">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>