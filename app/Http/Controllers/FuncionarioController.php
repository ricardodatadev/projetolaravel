<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Departamento;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Listagem de funcionários
     */
    public function index()
    {
        $funcionarios = Funcionario::with('departamento')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Formulário de criação
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('funcionarios.create', compact('departamentos'));
    }

    /**
     * Salvar novo funcionário
     */
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index');
    }

    /**
     * Formulário de edição
     */
    public function edit(Funcionario $funcionario)
    {
        $departamentos = Departamento::all();
        return view('funcionarios.edit', compact('funcionario', 'departamentos'));
    }

    /**
     * Atualizar funcionário
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index');
    }

    /**
     * Remover funcionário
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect()->route('funcionarios.index');
    }
}
