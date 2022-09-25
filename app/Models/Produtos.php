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
        'quantidade',
        'status',
        'user_id',
        'perfil_id',
        'categoria_id',
        'fornecedor_id',
    ];

    public function categoria(){
        return $this->belongsTo("App\Models\Categorias");
    }
    public function perfil(){
        return $this->belongsTo("App\Models\Perfils");
    }
    public function fornecedor(){
        return $this->belongsTo("App\Models\Fornecedores");
    }
    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}
