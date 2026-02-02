@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Departamentos</h2>
    <a href="/departamentos/create" class="btn btn-primary">Novo Departamento</a>
</div>

@if($departamentos->count())
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nicho</th>
            <th>Ativo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departamentos as $dep)
        <tr>
            <td>{{ $dep->id }}</td>
            <td>{{ $dep->nome }}</td>
            <td>{{ $dep->nicho }}</td>
            <td>{{ $dep->ativo ? 'Sim' : 'Não' }}</td>
            <td>
                <a href="{{ route('departamentos.edit', $dep) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('departamentos.destroy', $dep) }}" method="POST" class="d-inline">
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
<p>Nenhum departamento encontrado.</p>
@endif
@endsection
