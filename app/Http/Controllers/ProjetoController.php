<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjetoRequest;
use App\Http\Requests\UpdateProjetoRequest;
use App\Models\Projeto;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::paginate(10);
        return view('app.projetos.index', ['projetos' => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjetoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjetoRequest $request)
    {
        $status = 0;
        if ($request->has('status')) {
            $status = \request('status');
        }
        if (\auth() && \auth()->user()->colaborador->status === "1") {
            Projeto::create(
                [
                    'nome' => request('nome'),
                    'sigla' => request('sigla'),
                    'descricao' => request('descricao'),
                    'linguagem_base' => request('linguagem_base'),
                    'framework' => request('framework'),
                    'url' => request('url'),
                    'status' => $status,
                    'colaborador_id' => \auth()->user()->id,
                ]
            );
        }
        return redirect()->route('projetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetoRequest  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjetoRequest $request, Projeto $projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        //
    }
}
