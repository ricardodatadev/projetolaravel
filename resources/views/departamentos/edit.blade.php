@extends('layouts.app')

@section('content')
<h2>Editar Departamento</h2>
<form action="{{ route('departamentos.update', $departamento) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $departamento->nome }}" required>
    </div>
    <div class="mb-3">
        <label for="nicho" class="form-label">Nicho</label>
        <input type="text" name="nicho" id="nicho" class="form-control" value="{{ $departamento->nicho }}">
    </div>
    <div class="form-check mb-3">
        <input type="checkbox" name="ativo" id="ativo" value="1" class="form-check-input" {{ $departamento->ativo ? 'checked' : '' }}>
        <label for="ativo" class="form-check-label">Ativo</label>
    </div>
    <button class="btn btn-success">Atualizar</button>
    <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
