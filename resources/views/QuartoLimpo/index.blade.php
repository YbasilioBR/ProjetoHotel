@extends('master')
@section('content')

<div class="card border">
  <div class="card-body">
      <h5 class="card-title">Lista de Quartos</h5>
@if(count($quartos) > 0)
<table class="table table-ordered table-hover">
    <thead>
        <tr>
            <th>Numero do Quarto</th>
            <th>Faxineiro</th>
            <th>Data/Hora Inicio</th>
            <th>Data/Hora Fim</th>
            <th>Tarefas</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($quartos as $quarto)
        
        <tr>
            <td>{{$quarto->numeroQuarto}}</td>
            <td>{{$quarto->usuarios->nome}}</td>
            <td >{{date('d/m/Y h:i:s', strtotime($quarto->dataInicio))}}</td>
            <td >{{date('d/m/Y h:i:s', strtotime($quarto->dataFim))}}</td>
            <td><a href="/quartoTarefa/{{$quarto->id_quartolimpo}}" class="btn btn-sm btn-primary">Tarefas</a></td>
            <td>
                <a href="/quartos/apagar/{{$quarto->id_quartolimpo}}" class="btn btn-sm btn-danger">Apagar</a>
            </td>
        </tr>
        @endforeach                
    </tbody>
    </table>
    @endif  

    <div class="modal fade" id="modalTarefas" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Listar Tarefas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  <table class="table">
                      <thead>
                      <tr>
                          <th scope="">Descricao</th>
                      </tr>
                      </thead>
                      <tbody id="corpo">                              
                      </tbody>
                      
                  </table>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary">Gravar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
            
            <nav  class="navbar justify-content-between">
                    <a href="/quartos/novo" class="btn btn-success" role="button">Novo Quarto</a>
                    <form class="form-inline">
                      {{$quartos->links()}}
                    </form>
            </nav>

  </div>
</div>

@endsection

@section('javascript')
    <script type="text/javascript">

            function carregaTarefas(id){
            $.getJSON('/api/tarefas/'+id+'', function(data) {
                    console.log(data);
                for(i=0; i<data.length; i++){
                    
                    $('#corpo').append('<tr><td><input type="checkbox" name="tarefas[]" value="'+data[i].id_tarefa+'"></td><td>'+data[i].descricao+'</td></tr>');
                    
                }
            });
            }
        </script>
@endsection