<?php

namespace App\Repositories;

use App\Models\Fornecedores;

class FornecedorRepository
{
    protected $model;

    public function __construct(Fornecedores $model)
    {
        $this->model = $model;
    }

    public function criarFornecedor(array $data)
    {
        return $this
            ->model
            ->create($data);
    }

    public function buscarFornecedorFiltro(array $filtros)
    {
        return $this
            ->model
            ->when($filtros == 'nome', function ($query, $filtros) {
                $query->where('nome', $filtros['nome']);
            })
            ->when($filtros == 'telefone', function ($query, $filtros) {
                $query->where('telefone', $filtros['telefone']);
            })
            ->when($filtros == 'cnpj', function ($query, $filtros) {
                $query->where('cnpj', $filtros['cnpj']);
            })->get();
    }

    public function buscarFornecedorPorId($id)
    {
        return $this
            ->model
            ->where('id', $id)->first();
    }

    public function buscarTodoFornecedor()
    {
        return $this
            ->model
            ->all();
    }

    public function deletarFornecedor($id)
    {
        $this->model->where('id', $id)->delete();

        return response()->json(['mensagem' => 'Fornecedor deletado com sucesso!!!']);
    }
}
