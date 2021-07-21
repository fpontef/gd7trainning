@extends("main")
@section("content")

<div class="row align-items-center">
  <div class="col">
    <h3>Detalhes de Treinamento</h3>
  </div>
  <div class="col">

  </div>
</div>

<div class="row">
  <div class="col-md-8 col-xl-12">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Nome:</strong>
          {{ $movie->name }}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Part:</strong>
          {{ $movie->part }}
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Detalhes:</strong>
          {{ $movie->details }}
        </div>
      </div>
    </div>





  </div>
</div>

@endsection
