<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $employee_id = $this->route('id');

        return [
            'name'     => 'required',
            'phone'    => 'nullable|numeric|digits:11',
            'document' => 'nullable|numeric|digits:11|unique:employees' .','. $employee_id,
            'birthday' => 'nullable|date',
            'gender'   => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required'    => 'Nome é Obrigatório',
            'gender.required'  => 'Gênero é Obrigatório',
            'document.numeric' => 'CPF deve conter apenas números',
            'document.digits'  => 'CPF deve ter 11 números',
            'document.unique'  => 'CPF já foi cadastrado',
            'phone.numeric'    => 'Telefone deve conter apenas números',
            'phone.digits'     => 'Telefone deve ter 11 números',
            'birthday.date'    => 'Data de Nascimento deve conter uma data valida'
        ];

    }
}
