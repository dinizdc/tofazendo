<?php

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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla');
            $table->text('descricao');
            $table->string('linguagem_base');
            $table->string('framework');
            $table->string('url')->nullable(true);
            $table->boolean('status')->default(true); //ativo - inativo
            $table->unsignedBigInteger('colaborador_id');
            $table->timestamps();

            $table->foreign('colaborador_id')
                ->references('id')
                ->on('colaboradores')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
};
