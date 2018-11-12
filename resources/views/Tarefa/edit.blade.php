@extends('master')
@section('content')

<div class="card border">
    <div class="card-body">
            <form id="form_tarefa" action="/tarefas/{{$tarefa->id_tarefa}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <input type="text" class="form-control" name="descricao" 
            id="descricao" placeholder="descricao" value="{{$tarefa->descricao}}">
        </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/tarefas" type="cancel" class="btn btn-danger">Cancelar</a>
           
        </form>
    </div>
</div>

@endsection

@section('javascript')
    <script type="text/javascript">
        $("#form_tarefa").submit(function() {
        if ($("#descricao").val() == "") {
            alert("Digite a descrição da tarefa");
            return false;
        }
});
    </script>
@endsection