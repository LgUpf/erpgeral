<?php

namespace App\Repositories;

use App\Models\Produtos;

class ProdutoRepository
{
    protected $model;

    public function __construct(Produtos $model)
    {
        $this->model = $model;
    }

    public function criarProduto(array $data)
    {
        return $this
            ->model
            ->create($data);
    }

    public function buscarProdutoFiltro(array $filtros)
    {
        return $this
            ->model
            ->when($filtros == 'nome', function ($query, $filtros) {
                $query->where('nome', $filtros['nome']);
            })
            ->when($filtros == 'codigo_barra', function ($query, $filtros) {
                $query->where('codigo_barra', $filtros['codigo_barra']);
            })
            ->when($filtros == 'cod', function ($query, $filtros) {
                $query->where('cod', $filtros['cod']);
            })->get();
    }

    public function buscarProdutoPorId($id)
    {
        return $this
            ->model
            ->where('cod', $id)->first();
    }

    public function buscarTodosProduto()
    {
        return $this
            ->model
            ->all();
    }

    public function deletarProduto($cod)
    {
        $this->model->where('cod', $cod)->delete();

        return response()->json(['mensagem' => 'Produto deletado com sucesso!!!']);
    }
}
