@extends('master')
@section('content')

        <h2>Tarefas</h2>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
         @endif
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Descricao</th>
                <th scope="col">Alterar</th>
                <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($tarefas as $key => $value)
              <tr>
                <input type="hidden" value="{{$value->id_tarefa}}">
                <td>{{$value->descricao}}</td>
                <td><button class="btn btn-primary" ng-click="">Editar</button></td>
                <td>
                    <form method="post" class="delete_form" action="{{action('TarefaController@destroy', $value->id_tarefa)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>  

          <a href="{{ url('/CadastrarTarefa') }}" class="btn btn-primary">Incluir</a>

    
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
