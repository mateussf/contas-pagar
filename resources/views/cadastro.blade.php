@extends('principal')

@section('title', 'Cadastro')

@section('content')
<h1>Cadastro de clientes</h1>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Erros:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('contas.salvar')}}" method="POST">
    @csrf
    <input type="hidden" name="operacao" value="C">
    <div class="form-group">
        <label class="">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{old('descricao')}}">
    </div>
    <div class="form-group">
        <label class="">Valor</label>
        <input type="text" name="valor" id="valor" class="form-control" value="{{old('valor')}}">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection