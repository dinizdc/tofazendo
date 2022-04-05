@extends('layouts.base')

@section('conteudo')
    @component('layouts.componentes.dashboard', ['projetos' => $projetos, 'colaboradores' => $colaboradores,
        'colaboradorMelhorDesempenho' => $colaboradorMelhorDesempenho])
    @endcomponent
@endsection
