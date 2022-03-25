<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestCliente extends FormRequest
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

        $dados_gerais = array( 'nome1' => ['required'],'telefone' => ['required','cpf'],'nascimento' => ['required']);
        $dados_unicos = array();
        if($this->method('PUT')) {
            $dados_unicos = array ('email' => ['required','email',Rule::unique('clientes','email')->ignore($this->route('cliente'))]);
          
        }else if($this->method('POST')){
            $dados_unicos = array ('email' => ['required','email','unique:clientes']);
        }

        return array_merge($dados_unicos,$dados_gerais);

    }

    public function attributes(){
        return [
            'nome1' => "Nome Completo",
            'telefone' => "Contato",
            'nascimento' => "Data de Nascimento",
            'email' => "E-mail"
            //
        ];
    }
}
