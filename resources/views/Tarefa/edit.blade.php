@extends('master')
@section('content')

<div class="card border">
    <div class="card-body">
            <form action="/tarefas/{{$tarefa->id_tarefa}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <input type="text" class="form-control" name="descricao" 
            id="descricao" placeholder="descricao" value="{{$tarefa->descricao}}">
        </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
           
        </form>
    </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection