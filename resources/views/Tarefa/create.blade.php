@extends('master')
@section('content')

    <br>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{$error}}</li>
     @endforeach
     </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
     <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    <form method="post" action="{{url('tarefasCadastro')}}">
            {{csrf_field()}}
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Cadastrar Tarefa</h1>
                <br>
                <input type="text" class="form-control" name="descricao" placeholder="Digite o nome da tarefa">
                <br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </div>
    </form>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection