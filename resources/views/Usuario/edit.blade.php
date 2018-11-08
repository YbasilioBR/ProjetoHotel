@extends('master')
@section('content')

<div class="card border">
    <div class="card-body">
            <form id="form_usuario" action="/usuarios/{{$usuario->id_usuario}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" 
            id="nome" placeholder="Nome" value="{{$usuario->nome}}">
            </div>
            <div class="form-group">
                <label for="logon">Logon</label>
                <input type="text" class="form-control" name="logon" 
                       id="logon" placeholder="Logon" value="{{$usuario->logon}}">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" class="form-control" name="senha" 
                       id="senha" placeholder="Senha" value="{{$usuario->senha}}">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de usuário</label>
                <select id="tipo" name="tipo" class="form-control" > 
                    @if($usuario->tipo == 1)
                    <option value = "1" selected>Gerente</option>
                    <option value = "0">Faxineiro</option>
                    @else
                    <option value = "1">Gerente</option>
                    <option value = "0" selected>Faxineiro</option>
                    @endif
                <select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>


@endsection


@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        $("#form_usuario").validate({
            rules: {
                nome: {
                    required: true
                },
                senha: {
                    required: true
                },
                logon: {
                    required: true
                },
                tipo: {
                    required: true
                },
          },
          messages: {
            nome: {
                    required: "Digite o nome do usuário",
                },
                senha: {
                    required: "Digite a senha do usuário",
                },
                logon: {
                    required: "Digite o login do usuário",
                },
                tipo: {
                    required: "Selecione o tipo do usuário",
                },
          },
    submitHandler: function(form) {
        form.submit();
    }
});
    });
    </script>
@endsection