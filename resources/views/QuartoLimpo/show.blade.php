@extends('master')
@section('content')

        <h2>Registro de quartos</h2>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
         @endif
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nº do Quarto</th>
                <th scope="col">Funcionário</th>
                <th scope="col">Data Inicial</th>
                <th scope="col">Data Final</th>
                <th scope="col">Tarefas</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($quartos as $key => $value)
              <tr>
                <input type="hidden" value="{{$value->numeroQuarto}}">
                <td>{{$value->numeroQuarto}}</td>
                <td>{{$value->usuarios->nome}}</td>
                <td>{{$value->dataInicio}}</td>
                <td>{{$value->dataFim}}</td>
                <td><button class="btn btn-primary" ng-click="">Visualizar</button></td>
              </tr>
            @endforeach
            </tbody>
          </table>  

                <div class="form-group col-md-8">
                    <label for="inputState">Faxineiro(a)</label>
                    <select id="inputState" class="form-control">
                        <option selected>Selecione</option>
                        @foreach ($usuarios as $key => $value)          
                            <option>{{$value->nome}}</option>
                        @endforeach
                    </select>
                </div>

          <a href="{{ url('CadastrarQuarto') }}" class="btn btn-primary">Incluir</a>

    
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>

        <script>
            $(document).ready(function(){
             $('.delete_form').on('submit', function(){
              if(confirm("Are you sure you want to delete it?"))
              {
               return true;
              }
              else
              {
               return false;
              }
             });
            });
            </script>

</div>
@endsection
