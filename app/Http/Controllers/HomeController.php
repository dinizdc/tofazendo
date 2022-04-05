<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Projeto;
use App\Models\Tarefa;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projetos = Projeto::all();
        $colaboradores = Colaborador::all();
        $colaboradorMelhorDesempenho = null;       
        $tarefas = Tarefa::paginate(3);

        return view('home', ['tarefas' => $tarefas, 'projetos' => $projetos, 'colaboradores' => $colaboradores, 'colaboradorMelhorDesempenho' => $colaboradorMelhorDesempenho]);
    }
}
