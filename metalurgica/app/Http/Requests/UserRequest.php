<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nome' => 'required | max:50',
            'email'=> 'required | max:100', 
            'endereco' => 'required',
            'password' => 'required',
            'endereco' => 'required', 
            'numero' => 'required', 
            'cidade' => 'required', 
            'estado' => 'required', 
            'cpf' => 'required', 
            'telefone' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório e de tamanho máximo 50 caracteres',
            'email.required' => 'Email é obrigatório para efetuar o cadastro',
            'endereco.required' => 'Endereço é obrigatório para efetuar o cadastro',
            'password.required' => 'Senha é obrigatório para efetuar o cadastro',
            'numero.required' => 'Número é obrigatório para efetuar o cadastro',
            'cidade.required' => 'Cidade é obrigatório para efetuar o cadastro',
            'estado.required' => 'Estado é obrigatório para efetuar o cadastro',
            'cpf.required' => 'CPF é obrigatório para efetuar o cadastro',
            'telefone.required' => 'Telefone é obrigatório para efetuar o cadastro',
        ];
    }
}
