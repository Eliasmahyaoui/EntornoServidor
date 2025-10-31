<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorRequest extends FormRequest
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
            'nombre'=>'required|alpha:ascii',
            'nacionalidad' =>'required|alpha:ascii|min:25|max:25',
            'Año ' => 'required|numeric|between:1950,2025',
        ];
    }

    public function messages(): array

    {
        return [
        'nombre.required' => 'El nombre es obligatorio',
        'nombre.alpha' => 'El nombre tiene que tener un minimo de 10 caracteres',
        'nacionalidad.required' => 'La nacionalidad debe ser obligatoria ',
        'nacionalidad.alpha' => 'La nacionalidad debe tener letras',
        'nacionalidad.min' => 'La nacionalidad debe tener minimo 25 letras',
        'nacionalidad.max' => ' La nacionalidad debe tener maximo 25 letras',
        'Año.required' => 'El año debe ser obligatorio',
        'Año.numeric' => 'El año debe ser numerico',
        'Año.between' => ' El año debe ser entre 1950 y 2025',

        ];
    }

}
