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

    <form method="post" action="{{url('usuarios')}}">
    {{csrf_field()}}
    <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Cadastro de Usuário</h1>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Logon</label>
                            <input type="text" name="logon" class="form-control" id="inputEmail4" placeholder="Logon">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                    </div>
                    <label for="inputPassword4">Tipo</label>
                    <div class="form-row">
                    <div class="form-group col-md-6">

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            
                            <label class="btn btn-secondary active">
                                <input type="radio" name="tipo" id="option1" value="1" autocomplete="off" checked> Gerente
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="tipo" id="option2" value="0" autocomplete="off"> Faxineiro(a)
                            </label>
                        </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Gravar</button>
            </div>
        </div>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection