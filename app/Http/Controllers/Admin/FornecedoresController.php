<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FornecedorRequest;
use App\Http\Resources\FornecedoresResource;
use App\Repositories\FornecedorRepository;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    private $fornecedor;

    public function __construct(FornecedorRepository $model)
    {
        $this->fornecedor = $model;
    }

    public function index()
    {
        $fornecedores = $this->fornecedor->buscarTodosFornecedor();
        return FornecedoresResource::collection($fornecedores);
    }

    public function buscarFornecedorPorId($id)
    {
        $fornecedor = $this->fornecedor->buscarFornecedorPorId($id);
        return new FornecedoresResource($fornecedor);
    }

    public function store(FornecedorRequest $request)
    {
        $fornecedor = $this->fornecedor->criarFornecedor($request->validated());
        return new FornecedoresResource($fornecedor);
    }

    public function deletarFornecedor($id)
    {
        $fornecedor = $this->fornecedor->deletarFornecedor($id);
        return $fornecedor;
    }
}
