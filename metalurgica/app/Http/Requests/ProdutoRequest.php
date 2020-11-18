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
     * @return array
     */
 
    public function rules()
    {

        return [
            'name' => 'required | max:50',
            'description' => 'required | max:100',
            'quantity' => 'required',
            'price' => 'required',
            'codigo' => 'required',
        ];

       
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório e de tamanho máximo 50 caracteres',
            'description.required' => 'Descrição do produto é obrigatório',
            'quantity.required' => 'Quantidade do produto é obrigatório',
            'price.required' => 'Preço do produto é obrigatório',
            'codigo.required' => 'Código do produto é obrigatório',

        ];
    }
}
