@extends('layouts.app')

@section('content')
<h2>Editar Funcionário</h2>
<form action="{{ route('funcionarios.update', $funcionario) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $funcionario->nome }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $funcionario->email }}" required>
    </div>
    <div class="mb-3">
        <label for="departamento_id" class="form-label">Departamento</label>
        <select name="departamento_id" id="departamento_id" class="form-select" required>
            @foreach($departamentos as $dep)
                <option value="{{ $dep->id }}" {{ $funcionario->departamento_id == $dep->id ? 'selected' : '' }}>
                    {{ $dep->nome }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-check mb-3">
        <input type="checkbox" name="ativo" id="ativo" value="1" class="form-check-input" {{ $funcionario->ativo ? 'checked' : '' }}>
        <label for="ativo" class="form-check-label">Ativo</label>
    </div>
    <button class="btn btn-success">Atualizar</button>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
