<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class StoreCursoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id_hotmart' => ['sometimes', 'required'],
            'category' => ['sometimes', 'required'],
           'title' => ['sometimes', 'required', 'min:6', 'max:40'],
            'description' => ['sometimes', 'required', 'min:40', 'max:650'],
            'slug' => ['sometimes', 'required', (new Unique('cursos'))->ignore($this->curso)],
            'vsl' => ['sometimes', 'required'],
            'author' => ['sometimes', 'required'],
            'format' => ['sometimes', 'required'],
            'subscription' => ['sometimes', 'required'],
            'price' => ['sometimes', 'required'],
        ];
    }
}
