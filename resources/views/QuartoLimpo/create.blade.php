@extends('master')
@section('content')

    <h2>Registar Quarto Limpo</h2>

    <form method="post" action="{{url('quartos')}}">
    {{csrf_field()}}
  
        <div class="container-fluid">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="numeroQuarto">Nº Do Quarto</label>
                    <input class="form-control" name="numeroQuarto" type="number">
                </div>
                <div class="form-group col-md-4">
                        <label for="usuarios">Faxineiro(a)</label>
                        <select id="usuarios" name="id_usuario" class="form-control"> 
                            <option value="0">Selecionar</option>                       
                        </select>
                    </div>
            </div>



            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Inicio</label>
                <input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s')}}" name="dataInicio" id="example-datetime-local-input">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Fim</label>
                    <input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s')}}" name="dataFim" id="example-datetime-local-input">
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal">
                    Incluir Tarefas
                  </button>
      
          
                  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Incluir Tarefas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope=""><input type="checkbox" id="selecionarTodos"></th>
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


            <button type="submit" class="btn btn-success">Gravar</button>
   
        </div>


    </form>
@endsection

@section('javascript')
    <script type="text/javascript">
        function carregaUsuarios(){
            $.getJSON('/api/usuarios', function(data) {
                console.log(data);
                for(i=0; i<data.length; i++){
                    opcao = '<option value="'+ data[i].id_usuario +'">' + 
                    data[i].nome + '</option>';
                    $('#usuarios').append(opcao);
                }
            });
        }

        function carregaTarefas(){
            $.getJSON('/api/tarefas', function(data) {
                console.log(data);
                for(i=0; i<data.length; i++){
                    
                    $('#corpo').append('<tr><td><input type="checkbox" name="tarefas[]" value="'+data[i].id_tarefa+'"></td><td>'+data[i].descricao+'</td></tr>');
                    
                }
            });
        }

        $("#selecionarTodos").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        $(function() {
            carregaUsuarios();
            carregaTarefas();
        })
    </script>
@endsection