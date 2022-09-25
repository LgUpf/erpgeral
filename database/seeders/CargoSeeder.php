<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargos;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Cargos::create(['nome'=>'Financeiro','descricao'=>'Emissão de Notas']);
            Cargos::create(['nome'=>'Suporte','descricao'=>'Atendimento nivel 1']);
            Cargos::create(['nome'=>'Analista de Suporte','descricao'=>'Analisar e resolver as demandas']);
            Cargos::create(['nome'=>'Secretaria','descricao'=>'Atendimento ao Publico']);
            Cargos::create(['nome'=>'Gestor de Ti','descricao'=>'Gerenciar tecnologia da informação']);

    }
}
