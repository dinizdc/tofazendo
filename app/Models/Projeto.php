<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sigla',
        'descricao',
        'linguagem_base',
        'framework',
        'url',
        'status',
        'colaborador_id',
    ];

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
