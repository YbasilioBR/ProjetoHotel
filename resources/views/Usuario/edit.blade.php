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
    $("#form_usuario").submit(function() {
    if ($("#nome").val() == "") {
        alert("Digite o nome do usuário");
        return false;
    }
    if ($("#logon").val() == "") {
        alert("Digite o logon do usuário");
        return false;
    }
    if ($("#senha").val() == "") {
        alert("Digite a senha do usuário");
        return false;
    }
    if ($("#tipo").val() == "") {
        alert("Selecione o tipo do usuário");
        return false;
    }
});
</script>
@endsection