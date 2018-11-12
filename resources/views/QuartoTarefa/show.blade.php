@extends('master')
@section('content')

<div class="card border" style="margin-right: 15px">
  <div class="card-body">
      <h5 class="card-title">Atividades feitas no quarto: </h5>
@if(count($quartostarefas) > 0)
<table class="table table-ordered table-hover">
    <thead>
        <tr>
            <th>Tarefas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($quartostarefas as $quartostarefa)
        <tr>
            <td>{{$quartostarefa->descricao}}</td>
        </tr>
        @endforeach                
    </tbody>
    </table>
    @endif    
  </div>
</div>
<div class="card-footer">
            
        <nav  class="navbar justify-content-between">
                <a href="/quartos" class="btn btn-primary" role="button">Retornar</a>
        </nav>

</div>

@endsection