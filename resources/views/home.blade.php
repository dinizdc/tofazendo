@extends('layouts.base')

@section('conteudo')
    @component('layouts.componentes.dashboard', ['tarefas' => $tarefas, 'projetos' => $projetos, 'colaboradores' =>
        $colaboradores, 'colaboradorMelhorDesempenho' => $colaboradorMelhorDesempenho])
    @endcomponent
@endsection
