<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaboradores';
    use HasFactory;

    protected $fillable = [
        'foto_perfil',
        'user_id',
        'data_nascimento',
        'cpf',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }
    public function tarefas()
    {
        return $this->hasMany(Tarefa::class);
    }
}
