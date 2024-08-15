<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
            'nombres' => 'required|max:255',
             'apellidos' => 'required|max:255',
            'email' => 'required|email|max:255',
            'direccion' => 'required',
            'fono' => 'required',
            //
        ];
    }

    public function messages()
    {
        return[
            'nombres.required' => 'El campo nombres es obligatorio.',
            'apellidos.required' => 'El campo apellidos es obligatorio.',
        'email.required' => 'El campo email es obligatorio.',
        'email.email' => 'El email no tiene un formato válido.',
        'direccion.required' => 'El campo dirección es obligatorio.',
        'fono.required' => 'El campo teléfono es obligatorio.',

            
        ];
    }
}
