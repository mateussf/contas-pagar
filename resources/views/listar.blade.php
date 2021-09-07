@extends('principal')

@section('title', 'Lista')



@section('scripts')
        <script type="text/javascript">
            function deletar(url){
                if (window.confirm("deseja realmente apagar ?")){
                    window.location = url;
                }
            }
        </script>
@endsection

@section('content')
<h1>Lista de contas Pagar</h1>

@if (old('operacao'))
    <div class="alert alert-success">
        {{old('operacao')}} Sucesso!
    </div>
@endif

<table class="table table-striped table-bordered table-hover">
    <tr>
        <td>ID</td>
        <td>Descrição</td>
        <td>Valor</td>
        <td>Editar</td>
        <td>Apagar</td>
    </tr>
    @foreach ($contas_pagar as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->descricao}}</td>
        <td>{{$value->valor}}</td>
        <td><a class="btn btn-sm btn-info form-control" href="{{ route("contas.editar", $value->id) }}">Editar</a></td>
        <td><a class="btn btn-sm btn-danger form-control" href="#" onclick="deletar('{{ route("contas.apagar", $value->id) }}')">Apagar</a></td>
    </tr>
    @endforeach
</table>
<a class="btn btn-sm btn-success" href="{{ route("contas.cadastrar") }}">Cadastrar</a>
@endsection
