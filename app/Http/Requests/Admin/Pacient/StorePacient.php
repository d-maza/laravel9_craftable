<?php

namespace App\Http\Requests\Admin\Pacient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePacient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.pacient.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string'],
            'cognoms' => ['required', 'string'],
            'telefon' => ['nullable', 'string'],
            'curs_escolar' => ['nullable', 'string'],
            'data_naixement' => ['nullable', 'date'],
            'sex' => ['required', 'string'],
            'esports' => ['nullable', 'string'],
            'fecha' => ['required', 'date'],
            'referidor' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


       // Agregue su código para la manipulación con datos de solicitud aquí

        return $sanitized;
    }
}
