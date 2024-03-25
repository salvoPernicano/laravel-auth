<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'nome_progetto' => ['required', 'unique:projects', 'max:150'],
            'descrizione_progetto' => ['required'],
            'linguaggi' => ['required', 'max:1024'],
            'immagine' => ['required', 'max:1024'],

        ];
    }
}
