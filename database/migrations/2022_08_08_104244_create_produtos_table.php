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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->uuid('cod')->nullable();
            $table->string('nome', 191);
            $table->string('preco_custo', 70)->nullable();
            $table->string('preco_venda', 70)->nullable();
            $table->string('codigo_barra', 70)->nullable();
            $table->string('quantidade', 70)->nullable();
            $table->boolean('ativo')->default(true);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('perfil_id')->nullable();
            $table->foreign('perfil_id')->references('id')->on('perfils');
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            // $table->unsignedBigInteger('fornecedor_id')->nullable();
            // $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
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
        Schema::dropIfExists('produtos');
    }
};
