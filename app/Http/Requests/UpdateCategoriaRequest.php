<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaRequest extends FormRequest
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
        $categoria = $this->route('categoria');
        $caracteristicaId =$categoria->caracteristica->id;
        return [
            'nombre'=>'required|max:60|unique:caracteristicas,nombre,' . $caracteristicaId,
            'descripcion'=>'nullable|max:255'
        ];
    }
}
