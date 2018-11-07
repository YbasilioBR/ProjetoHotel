@extends('master')
@section('content')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Tarefas</h5>
  @if(count($tarefas) > 0)
  <table class="table table-ordered table-hover">
      <thead>
          <tr>
              <th>Descricao</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
          @foreach($tarefas as $tarefas)
          <tr>
              <td>{{$tarefas->descricao}}</td>
              <td>
                  <a href="/tarefas/editar/{{$tarefas->id_tarefa}}" class="btn btn-sm btn-primary">Editar</a>
                  <a href="/tarefas/apagar/{{$tarefas->id_tarefa}}" class="btn btn-sm btn-danger">Apagar</a>
              </td>
          </tr>
          @endforeach                
      </tbody>
      </table>
      @endif  
      
    </div>
  </div>
  
          <div class="card-footer">
              <a href="/tarefas/novo" class="btn btn-sm btn-primary" role="button">Nova categoria</a>
          </div>
  
  @endsection