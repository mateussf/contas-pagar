@extends('principal')

@section('title', 'Editar')

@section('content')
<h1>Cadastro de clientes</h1>
<form action="{{ route("contas.update", $contas_pagar->id) }}" method="POST">
    @csrf
    <input type="hidden" name="operacao" value="U">
    <div class="form-group">
        <label class="">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$contas_pagar->descricao}}">
    </div>
    <div class="form-group">
        <label class="">Valor</label>
        <input type="text" name="valor" id="valor" class="form-control" value="{{$contas_pagar->valor}}">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection