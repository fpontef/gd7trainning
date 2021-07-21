@extends("main")
@section("content")
<h1>Login</h1>
<div class="row">
  <!-- <div class="col-sm-4 col-sm-offset-4"> -->
  <div class="col-sm-4">
    @if (session()->get('message'))
    <div class="alert alert-info">
      {{ session('message') }}
    </div>
    @endif
    <form action="auth/login" method="POST">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Informe seu email.">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Informe sua senha">
      </div>
      <button type="submit" class="btn btn-primary">Fazer Login</button>
    </form>
  </div>
</div>
@endsection
