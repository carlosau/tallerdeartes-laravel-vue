<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'category' => ['required'],
           'title' => ['required', 'min:6', 'max:40'],
            'description' => ['required', 'min:40', 'max:650'],
            'slug' => ['required', 'unique:cursos,slug'],
            'vsl' => ['required'],
            'author' => ['required'],
            'format' => ['required'],
            'subscription' => ['required'],
            'price' => ['required'],
        ];
    }
}
