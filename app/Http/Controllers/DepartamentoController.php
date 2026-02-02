<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Listagem
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Formulário de criação
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Salvar novo departamento
     */
    public function store(Request $request)
    {
        Departamento::create($request->all());

        return redirect()
            ->route('departamentos.index');
    }

    /**
     * Formulário de edição
     */
    public function edit(Departamento $departamento)
    {
        return view('departamentos.edit', compact('departamento'));
    }

    /**
     * Atualizar departamento
     */
    public function update(Request $request, Departamento $departamento)
    {
        $departamento->update($request->all());

        return redirect()
            ->route('departamentos.index');
    }

    /**
     * Remover departamento
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();

        return redirect()
            ->route('departamentos.index');
    }
}
