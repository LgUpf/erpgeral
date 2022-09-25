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
            'cnpj' => $this->cnpj,
            'status' => $this->status,
            'pais' => $this->pais,
            'estado' => $this->estado,
            'cidade' => $this->cidade,
            'bairro' => $this->bairro,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'cep' => $this->cep,
            'telefone' => $this->telefone,
        ];
    }
}
