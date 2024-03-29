<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = [
        'nome',
        'cnpj',
        'status',
        'pais',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'numero',
        'cep',
        'telefone',
    ];
}
