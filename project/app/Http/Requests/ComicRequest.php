<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:2|max:100',
            'thumb' => 'required',
            'price' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio!',
            'title.min' => 'Il titolo deve avere almeno 2 caratteri!',
            'title.max' => 'Il titolo può avere massimo 100 caratteri!',
            'thumb.required' => "L'immagine è obbligatoria!",
            'price.required' => 'Il prezzo è obbligatorio!'
        ];
    } 
}