@extends("main")
@section("content")
@if (!session()->has('user'))
<p>Usuário não logado, redirecionando em 2 segundos </p>
<script>
    setTimeout(function () {
        window.location.href = "/login"
    }, 2000); // 2 second
</script>
@else

<h1>Adicionar Usuário</h1>

<form action="user" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do Usuário" />
    <br>
    <input type="email" name="email" placeholder="Email para Login" />
    <br>
    <input type="password" name="password" placeholder="Senha" />
    <br>
    <input type="text" name="role" placeholder="Role" />
    <br>
    <br>

    <button type="submit">Adicionar Usuário</button>
</form>

@endif

@endsection
