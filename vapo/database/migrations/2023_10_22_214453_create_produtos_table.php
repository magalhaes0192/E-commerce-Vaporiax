<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->text('descricao');
            $table->decimal('preco', 10,2);
            $table->decimal('precoProduto',10,2);
            $table->string('slug');
            $table->integer('estoque');
            $table->string('imagem');
            $table->boolean('destaque');
            $table->boolean('novoProduto');
            $table->boolean('recemProduto');
            $table->boolean('bemAvaliado');
            $table->boolean('ativo');
            $table->text('palavrasChave')->nullable();
            $table->boolean('visivel');
            $table->string('puffs');
            $table->string('sabor');
            $table->string('marca');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_categori');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
