@extends('master')
@section('content')

    <form method="post" id="form_quarto" action="/quartos">
    {{csrf_field()}}
  
    <div class="card border">
        <div class="card-body">

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="numeroQuarto">Nº Do Quarto</label>
                    <input class="form-control" name="numeroQuarto" id="numeroQuarto" type="number">
                </div>
                @if(Session::get('tipo') == 1)
                <div class="form-group col-md-4">
                        <label for="usuarios">Faxineiro(a)</label>
                        <select id="usuarios" name="id_usuario" class="form-control" disabled> 
                            <option value="">Selecionar</option>                       
                        </select>
                    </div>
                @else
                    <div class="form-group col-md-4">
                        <label for="usuario">Faxineiro(a)</label>
                        <select id="usuario" name="id_usuario" class="form-control"> 
                        <option value="{{Session::get('id_usuario')}}">{{Session::get('nome')}}</option>                       
                        </select>
                    </div>
                @endif
            </div>



            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Inicio</label>
                <input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s')}}" name="dataInicio" id="dataInicio">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">Fim</label>
                    <input class="form-control" type="datetime-local" value="{{date('Y-m-d\TH:i:s')}}" name="dataFim" id="dataFim">
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeModal">
                   Incluir Tarefas
            </button>
            
            <button type="submit" class="btn btn-success">Salvar</button>
   
        </div>
    </div>

          
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
    </form>
@endsection

@section('javascript')
    <script type="text/javascript">
        function carregaUsuarios(){
            $.getJSON('/api/usuarios', function(data) {
          
                for(i=0; i<data.length; i++){
                    opcao = '<option value="'+ data[i].id_usuario +'">' + 
                    data[i].nome + '</option>';
                    $('#usuarios').append(opcao);
                }
            });
        }

        function carregaTarefas(){
            $.getJSON('/api/tarefas', function(data) {
  
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


        $("#form_quarto").submit(function() {

        if ($("#numeroQuarto").val() == "") {
            alert("Digite o numero do quarto");
            return false;
        }
     
        if ($("#dataInicio").val() == "") {
            alert("Selecione a data de inicio da tarefa");
            return false;
        }
        if ($("#dataFim").val() == "") {
            alert("Selecione a data final da tarefa");
            return false;
        }

        if ($("#dataInicio").val() > $("#dataFim").val()) {
            alert("A data de inicio não pode ser maior que a data final da tarefa");
            return false;
        }

        if ($("#dataInicio").val() == $("#dataFim").val()) {
            alert("A data de inicio e data final não podem ser iguais");
            return false;
        }

        var $boxes = $('input[name="tarefas[]"]:checked');

        if($boxes.length == 0){
            alert("Inclua no minimo uma (1) tarefa, clicando em 'Incluir Tarefas'");
            return false;
        }
});

    </script>
@endsection