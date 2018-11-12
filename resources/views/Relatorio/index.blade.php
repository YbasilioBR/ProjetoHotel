@extends('master')
@section('content')

<div class="card border" style="margin-right: 15px">
  <div class="card-body">
      <h5 class="card-title">Relatório de atividades</h5>
@if(count($relatorios) > 0)
<table class="table table-ordered table-hover">
    <thead>
        <tr>
            <th>Tarefa</th>
            <th>Vezes que foi realizada</th>
            <th>Média de tempo de realização</th>
        </tr>
    </thead>
    <tbody>
        @foreach($relatorios as $relatorio)
        <tr>
            <td>{{$relatorio->descricao}}</td>
            <td>{{$relatorio->vezes}}</td>
            <td>{{$relatorio->media}}</td>
        </tr>
        @endforeach                
    </tbody>
    </table>
    @endif    
  </div>
</div>
<div class="card-footer">
            
        <nav  class="navbar justify-content-between">
                <a href="/home" class="btn btn-primary" role="button">Retornar</a>
                <form class="form-inline">
                
                </form>
        </nav>

</div>

@endsection