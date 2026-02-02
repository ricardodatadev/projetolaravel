@extends('layouts.app')

@section('content')
<h2>Novo Departamento</h2>
<form action="/departamentos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="nicho" class="form-label">Nicho</label>
        <input type="text" name="nicho" id="nicho" class="form-control">
    </div>
    <div class="form-check mb-3">
        <input type="checkbox" name="ativo" id="ativo" value="1" class="form-check-input" checked>
        <label for="ativo" class="form-check-label">Ativo</label>
    </div>
    <button class="btn btn-success">Salvar</button>
    <a href="/departamentos" class="btn btn-secondary">Voltar</a>
</form>
@endsection
