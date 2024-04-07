<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterProcessRequest extends FormRequest
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
            'name' => 'required|max:10',
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'Username wajib diisi',
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi',
        'name.max' => 'Username tidak boleh lebih dari 10 huruf',
        'email.email' => 'Masukan format email yang sesuai'
    ];
}
}
