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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80);
            $table->decimal('cnpj', 12, 2)->nullable();
            $table->boolean('status')->default(true);
            $table->string('pais', 60)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('endereco', 50)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('cep', 10)->nullable();
             $table->string('telefone',20)->nullable();
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
        Schema::dropIfExists('fornecedores');
    }
};
