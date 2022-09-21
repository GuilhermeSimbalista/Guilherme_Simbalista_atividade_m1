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
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_livro', 45);
            $table->string('nome_original', 75);
            $table->string('genero_livro', 25);
            $table->string('sinopse_livro', 500);
            $table->integer('paginas_livro');
            $table->integer('anopub_livro');
            $table->integer('editora_livro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
