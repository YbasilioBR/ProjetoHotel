@extends('master')
@section('content')

<div class="card border" style="margin-right: 15px">
  <div class="card-body">
      <h5 class="card-title">Cadastro de Usuarios</h5>
@if(count($usuarios) > 0)
<table class="table table-ordered table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Logon</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->logon}}</td>
            <td>{{$usuario->tipo == 1 ? 'Gerente ' : 'Faxineiro'}}</td>
            <td>
                <a href="/usuarios/editar/{{$usuario->id_usuario}}" class="btn btn-sm btn-primary">Editar</a>
                <a href="/usuarios/apagar/{{$usuario->id_usuario}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
        @endforeach                
    </tbody>
    </table>
    @endif    
  </div>
</div>
<div class="card-footer">
            
        <nav  class="navbar justify-content-between">
                <a href="/usuarios/novo" class="btn btn-success" role="button">Novo Usuário</a>
                <form class="form-inline">
                  {{$usuarios->links()}}
                </form>
        </nav>

</div>

@endsection