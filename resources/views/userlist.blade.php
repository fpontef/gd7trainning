@extends("main")
@section("content")

<div class="row align-items-center">
    <div class="col">
        <h1>Lista de Usuários</h1>
    </div>
    <div class="col">
        <a class="btn btn-primary my-3" href="{{ url('adduser') }}">Adicionar Usuário</a>
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
                        <th scope="col">Email</th>
                        <th scope="col">Permissões</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user -> id}}</td>
                        <td>{{$user -> name}}</td>
                        <td>{{$user -> email}}</td>
                        <td>{{$user -> role}}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ url('user')}}">Edit</a>
                            <a class="btn btn-sm btn-warning" href="{{ url('user')}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
