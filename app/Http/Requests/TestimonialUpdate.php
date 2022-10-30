<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdate extends FormRequest
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
            'message' => 'required',
            'avatar_url' => 'file|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'message.required' => 'Pesan wajib diisi.',
            'role.required' => 'Role/Posisi wajib diisi.',
            'avatar_url.required' => 'Foto wajib diisi.',
            'avatar_url.mimes.*' => 'Format foto wajib berupa .jpg, .jpeg, .png (pilih salah satu).',
        ];
    }
}
