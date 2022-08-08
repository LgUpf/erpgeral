<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UuidTrait;


class Produtos extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'cod';


    protected $fillable = [
        'nome',
        'preco_custo',
        'preco_venda',
        'codigo_barra',
        'status',
    ];
}
