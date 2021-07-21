@extends("main")
@section("content")
<h1>Adicionar Apresentação</h1>

<form action="movie" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Título" />
    <br>
    <input type="text" name="image_url" placeholder="URL da Imagem" />
    <br>
    <input type="text" name="part" placeholder="Part (se tiver)" />
    <br>
    <input type="text" name="year" placeholder="Ano" />
    <br>
    <input type="text" name="stats" placeholder="Status" />
    <br>
    <input type="text" name="details" placeholder="Detalhes" />
    <br>
    <input type="number" name="genre_id" placeholder="Público Alvo(n funcional)" />
    <br>
    <input type="text" name="url" placeholder="URL do Vídeo" />
    <br>
    <br>

    <button type="submit">Adicionar Apresentação</button>
</form>
@endsection
