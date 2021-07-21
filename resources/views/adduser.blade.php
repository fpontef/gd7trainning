@extends("main")
@section("content")

<div class="row align-items-center">
  <div class="col">
    <h1>Adicionar Usuário</h1>
  </div>
  <div class="col">

  </div>
</div>

<div class="row">
  <div class="col-md-8 col-xl-12">

    <form action="user" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Permissões</label>
        <input type="text" name="role" class="form-control" id="role">
      </div>

      <button type="submit" class="btn btn-primary">Salvar Usuário</button>
    </form>

  </div>
</div>

@endsection
