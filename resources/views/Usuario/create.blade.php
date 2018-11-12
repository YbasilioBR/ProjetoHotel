@extends('master')
@section('content')

<div class="card border">
    <div class="card-body">
        <form action="\usuarios" method="POST" id="form_usuario">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" 
                       id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="logon">Logon</label>
                <input type="text" class="form-control" name="logon" 
                       id="logon" placeholder="Logon">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" class="form-control" name="senha" 
                       id="senha" placeholder="Senha">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de usuário</label>
                <select id="tipo" name="tipo" class="form-control required"> 
                    <option hidden value = "" >Selecionar</option>
                    <option value = "1">Gerente</option>
                    <option value = "2">Faxineiro</option>
                <select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <a href="/usuarios" class="btn btn-danger btn-sm">Cancel</a>
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