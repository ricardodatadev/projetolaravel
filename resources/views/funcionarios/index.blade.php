@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Funcionários</h2>
    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">Novo Funcionário</a>
</div>

@if($funcionarios->count())
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Departamento</th>
            <th>Ativo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($funcionarios as $func)
        <tr>
            <td>{{ $func->id }}</td>
            <td>{{ $func->nome }}</td>
            <td>{{ $func->email }}</td>
            <td>{{ $func->departamento->nome ?? 'N/A' }}</td>
            <td>{{ $func->ativo ? 'Sim' : 'Não' }}</td>
            <td>
                <a href="{{ route('funcionarios.edit', $func) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('funcionarios.destroy', $func) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Nenhum funcionário encontrado.</p>
@endif
@endsection
