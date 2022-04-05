<?php

use App\Models\Perfil;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('apelido');
            $table->timestamps();
        });

        Perfil::create(['nome' => 'create', 'apelido' => 'Criar']);
        Perfil::create(['nome' => 'read', 'apelido' => 'Ler']);
        Perfil::create(['nome' => 'update', 'apelido' => 'Atualizar']);
        Perfil::create(['nome' => 'delete', 'apelido' => 'Deletar']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfis');
    }
};
