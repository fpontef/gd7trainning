@extends("main")
@section("content")

<div class="row align-items-center">
    <div class="col">
        <h1>Lista de Apresentações</h1>
    </div>
    <div class="col">
        <a class="btn btn-primary my-3" href="{{ url('addmovie') }}">Adicionar Treinamento</a>
    </div>

</div>
<div class="row">
    <div class="col-md-8 col-xs-12">
        <div class="table-wrap">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Imagem(url)</th>
                        <th scope="col">Parte</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detalhes</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Vídeo(url)</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <th scole="row">{{$movie -> id}}</td>
                        <td>{{$movie -> name}}</td>
                        <td style="word-wrap: break-word; max-width: 30rem;">{{$movie -> image_url}}</td>
                        <td>{{$movie -> part}}</td>
                        <td>{{$movie -> year}}</td>
                        <td>{{$movie -> stats}}</td>
                        <td>{{$movie -> details}}</td>
                        <td>{{$movie -> genre_id}}</td>
                        <td style="word-wrap: break-word; max-width: 30rem;">{{$movie -> url}}</td>
                        <td>
                            <button class="btn-sm btn-info">Edit</button>
                            <button class="btn-sm btn-warning">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
