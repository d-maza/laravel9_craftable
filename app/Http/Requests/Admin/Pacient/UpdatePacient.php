<?php

namespace App\Http\Requests\Admin\Pacient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePacient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.pacient.edit', $this->pacient);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nom' => ['sometimes', 'string'],
            'cognoms' => ['sometimes', 'string'],
            'telefon' => ['nullable', 'string'],
            'curs_escolar' => ['nullable', 'string'],
            'data_naixement' => ['nullable', 'date'],
            'sex' => ['sometimes', 'string'],
            'esports' => ['nullable', 'string'],
            'fecha' => ['sometimes', 'date'],
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


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
