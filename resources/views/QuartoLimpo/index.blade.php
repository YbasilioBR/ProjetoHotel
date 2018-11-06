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
          
          <a href="{{ url('CadastrarQuarto') }}" class="btn btn-primary">Incluir</a>

@section('javascript')
    <script type="text/javascript">

    </script>
@endsection


</div>
@endsection
