<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:10',
            'descripcion' => 'required|min:3',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'name'=>'nombre del curso',
        ];
    }

    public function messages()
    {
        return[
            'descripcion'=>'Debe ingresar una descripcion valida'
        ];
    }
}
