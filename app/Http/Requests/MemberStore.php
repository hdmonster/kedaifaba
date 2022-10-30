<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'avatar_url' => 'required|file|mimes:jpg,jpeg,png',
            // 'avatar_url.*' => 'required|file|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'role.required' => 'Role/Posisi wajib diisi.',
            'avatar_url.required' => 'Foto wajib diisi.',
            'avatar_url.mimes.*' => 'Format foto wajib berupa .jpg, .jpeg, .png (pilih salah satu).',
        ];
    }
}
