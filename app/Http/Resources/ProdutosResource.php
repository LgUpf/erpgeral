<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nome' => $this->nome,
            'codigo' => $this->cod,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'codigo_barra' => $this->codigo_barra,
            'status' => $this->status
        ];
    }
}
