<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColaboradorRequest;
use App\Http\Requests\UpdateColaboradorRequest;
use App\Models\Colaborador;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Image;

class ColaboradorController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradores = Colaborador::paginate(10);
        $users = User::all();
        return view('app.colaboradores.index', ['colaboradores' => $colaboradores, 'users' => $users]);
    }
    public function ativos()
    {
        $colaboradores = Colaborador::where('status', 1)->paginate(10);
        $users = User::all();
        return view('app.colaboradores.index', ['colaboradores' => $colaboradores, 'users' => $users]);
    }
    public function inativos()
    {
        $colaboradores = Colaborador::where('status', 0)->paginate(10);
        $users = User::all();
        return view('app.colaboradores.index', ['colaboradores' => $colaboradores, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('app.colaboradores.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColaboradorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColaboradorRequest $request)
    {
        $imagem = $request->foto_perfil;

        $image = Image::make($imagem);
        $status = 0;
        if ($request->has('status')) {
            $status = \request('status');
        }

        Response::make($image->encode('jpeg'));
        $colaborador = Colaborador::create(
            [
                'foto_perfil' => $image,
                'user_id' => $request->user_id,
                'data_nascimento' => $request->data_nascimento,
                'cpf' => $request->cpf,
                'status' => $status,
            ]
        );

        return redirect()->route('colaboradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaborador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColaboradorRequest  $request
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColaboradorRequest $request, Colaborador $colaborador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaborador  $colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        //
    }
}
