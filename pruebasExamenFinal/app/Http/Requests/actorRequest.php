<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class actorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required||min:10',
            'nacionalidad' => 'required||alpha',
            'bornbirthday' => 'required||numeric',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre debe tener minimo 10 caracteres',
            'nacionalidad.required' => 'La nacionalidad es obligatorio',
            'nacionalidad.alpha' => 'La nacionalidad debe contener letras',
            'bornbirthday.required' => 'El nombre es obligatorio',
            'bornbirthday.numeric' => 'El año de nacimiento debe tener solo numeros',

        ];
    }
}
