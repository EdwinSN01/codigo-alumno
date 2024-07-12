<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
        return [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|between:0,20',
            'nota2' => 'required|numeric|between:0,20',
            'nota3' => 'required|numeric|between:0,20',
            //
        ];
    }

    public function messages()
    {
        return[
           'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe exceder :max caracteres.',
            'numeric' => 'El campo :attribute debe ser numérico.',
            'in' => 'El campo :attribute debe ser :values.',
            'date' => 'El campo :attribute debe ser una fecha válida.',

            
        ];
    }
}
