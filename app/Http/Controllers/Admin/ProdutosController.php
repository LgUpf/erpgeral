<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Http\Resources\ProdutosResource;
use App\Repositories\ProdutoRepository;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    private $produto;

    public function __construct(ProdutoRepository $model)
    {
        $this->produto = $model;
    }

    public function index()
    {
        $produtos = $this->produto->buscarTodosProduto();
        return ProdutosResource::collection($produtos);
    }

    public function buscarProdutoPorId($id)
    {
        $produto = $this->produto->buscarProdutoPorId($id);
        return new ProdutosResource($produto);
    }

    public function store(ProdutoRequest $request)
    {
        $produto = $this->produto->criarProduto($request->validated());
        return new ProdutosResource($produto);
    }

    public function deletarProduto($cod)
    {
        $produto = $this->produto->deletarProduto($cod);
        return $produto;
    }
}
