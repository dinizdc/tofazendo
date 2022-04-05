<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTarefaAtivaRequest;
use App\Http\Requests\UpdateTarefaAtivaRequest;
use App\Models\TarefaAtiva;

class TarefaAtivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTarefaAtivaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarefaAtivaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TarefaAtiva  $tarefaAtiva
     * @return \Illuminate\Http\Response
     */
    public function show(TarefaAtiva $tarefaAtiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TarefaAtiva  $tarefaAtiva
     * @return \Illuminate\Http\Response
     */
    public function edit(TarefaAtiva $tarefaAtiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarefaAtivaRequest  $request
     * @param  \App\Models\TarefaAtiva  $tarefaAtiva
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarefaAtivaRequest $request, TarefaAtiva $tarefaAtiva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TarefaAtiva  $tarefaAtiva
     * @return \Illuminate\Http\Response
     */
    public function destroy(TarefaAtiva $tarefaAtiva)
    {
        //
    }
}
