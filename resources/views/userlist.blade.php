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
  <div class="col-md-8 col-xl-12">
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
              <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
