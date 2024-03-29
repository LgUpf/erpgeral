<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UuidTrait;

class Cargos extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = [
        'nome',
        'user_id',
        'perfil_id',
    ];
    public function perfil(){
        return $this->belongsTo("App\Models\Perfils");
    }
}
