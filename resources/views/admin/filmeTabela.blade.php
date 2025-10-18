 @if($filme->count() > 0)
 @foreach($filme as $filme)
 <div class="card">
     <div class="conteudo3">
         <img src="{{ asset('storage/'.$filme->poster)}}" alt="{{$filme['titulo']}}">

         <h4>{{ $filme->titulo }}</h2>

             <p>
                 <label for="">lançamento:</label> {{ $filme->lancamento }}
             </p>
     </div>
     <div class="edita">
         <a class="editar" href="{{route('editarFilme', ['id'=> $filme->idFilme])}}">Editar</a>
         <a class="deleta" href="{{ route('deleteAdm', ['id'=> $filme->idFilme]) }}">Deleta</a>
     </div>


 </div>
 @endforeach
 @else
 <label for="">nao tem filmes</label>
 @endif