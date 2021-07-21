@extends("main")
@section("content")

<div class="row align-items-center">
  <div class="col">
    <h1>Adicionar Treinamento</h1>
  </div>
  <div class="col">

  </div>
</div>

<div class="row">
  <div class="col-md-8 col-xl-12">

    <form action="movie" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Título</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="image_url" class="form-label">Endereço da Imagem (URL)</label>
        <input type="text" name="image_url" class="form-control" id="image_url">
      </div>
      <div class="mb-3">
        <label for="part" class="form-label">Parte</label>
        <input type="text" name="part" class="form-control" id="part">
      </div>
      <div class="mb-3">
        <label for="year" class="form-label">Ano</label>
        <input type="text" name="year" class="form-control" id="year">
      </div>
      <div class="mb-3">
        <label for="stats" class="form-label">Status</label>
        <input type="text" name="stats" class="form-control" id="stats">
      </div>
      <div class="mb-3">
        <label for="details" class="form-label">Detalhes</label>
        <input type="text" name="details" class="form-control" id="details">
      </div>
      <div class="mb-3">
        <label for="genre_id" class="form-label">Permissões</label>
        <input type="text" name="genre_id" class="form-control" id="genre_id">
      </div>
      <div class="mb-3">
        <label for="url" class="form-label">Endereço do Vídeo (URL)</label>
        <input type="text" name="url" class="form-control" id="url">
      </div>

      <button type="submit" class="btn btn-primary">Salvar Treinamento</button>
    </form>

  </div>
</div>

@endsection
