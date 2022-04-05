<?php

namespace App\Http\Requests;

use Exception;
use Illuminate\Foundation\Http\FormRequest;

class StoreTarefaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (\auth() && \auth()->user()->colaborador->status === "1") {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string',
            'descricao' => 'required',
            'projeto_id' => 'required|exists:projetos,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'  => 'O nome da tarefa é obrigatório.',
            'nome.string'  => 'O nome da tarefa deve ser do tipo texto.',
            'descricao.required'  => 'A descrição da tarefa é obrigatório.',
            'projeto_id.exists'  => 'É necessário selecionar um projeto válido.',
            'projeto_id.required'  => 'É necessário selecionar um projeto.',
        ];
    }
}
