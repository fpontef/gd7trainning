<h1>Lista de Apresentações</h1>

<button
    onclick="window.location='{{ url('addmovie') }}'"
    >Adicionar Apresentação
</button>

    @foreach ($movies as $m)
<ul>
    <li>{{$m -> id}}</li>
    <li>{{$m -> name}}</li>
    <img src={{$m -> image_url}} width="10%" height="10%"/>
    <li>{{$m -> part}}</li>
    <li>{{$m -> year}}</li>
    <li>{{$m -> stats}}</li>
    <li>{{$m -> details}}</li>
    <li>{{$m -> genre_id}}</li>
    <li><a href={{$m -> url}}>{{$m -> url}}</a></li>
</ul>
    <hr>
    @endforeach

