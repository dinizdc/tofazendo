<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTarefaRequest;
use App\Http\Requests\UpdateTarefaRequest;
use App\Models\Projeto;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::paginate(10);
        $projetos = Projeto::all();
        return view('app.tarefas.index', ['tarefas' => $tarefas, 'projetos' => $projetos]);
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
     * @param  \App\Http\Requests\StoreTarefaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarefaRequest $request)
    {
        return response()->json(['success' => 'Data is successfully added']);

        if ($request->ajax()) {
            dd($request->all());
        }

        if (\auth() && \auth()->user()->colaborador->status === "1") {
            Tarefa::create(
                [
                    'nome' => $request->nome,
                    'descricao' => request('descricao'),
                    'projeto_id' => request('projeto_id'),
                    'status' => 0,
                    'colaborador_id' => auth()->user()->id,
                ]
            );
        }
        dd($request->all());
        // return redirect()->route('tarefas.index');
    }

    public function tarefasStoreAjax(Request $request)
    {
        $rules = [
            'nome' => 'required|string',
            'descricao' => 'required',
            'projeto_id' => 'required|exists:projetos,id',
        ];

        $messages = [
            'nome.required'  => 'O nome da tarefa é obrigatório.',
            'nome.string'  => 'O nome da tarefa deve ser do tipo texto.',
            'descricao.required'  => 'A descrição da tarefa é obrigatório.',
            'projeto_id.exists'  => 'É necessário selecionar um projeto válido.',
            'projeto_id.required'  => 'É necessário selecionar um projeto.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        if (\auth() && \auth()->user()->colaborador->status === "1") {
            Tarefa::create(
                [
                    'nome' => $request->nome,
                    'descricao' => $request->descricao,
                    'projeto_id' => $request->projeto_id,
                    'status' => 0,
                    'colaborador_id' => auth()->user()->id,
                ]
            );
        }
        return response()->json(['success' => 'Tarefa adicionada com sucesso!']);
    }

    public function tarefasDatatableAjax(Request $request)
    {
        if ($request->ajax()) {
            $data = Tarefa::latest()->get();

            return datatables($data)->toJson();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarefaRequest  $request
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarefaRequest $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
