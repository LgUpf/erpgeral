<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3', 'max:155'],
            'preco_custo' => ['min:1', 'max:150'],
            'preco_venda' => ['min:1', 'max:150'],
            'codigo_barra' => ['min:5', 'max:150'],
            'status' => ['min:1', 'max:70']
        ];
    }
}
