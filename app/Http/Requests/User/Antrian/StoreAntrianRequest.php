<?php

namespace App\Http\Requests\User\Antrian;

use Illuminate\Foundation\Http\FormRequest;

class StoreAntrianRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'jenis_pelayanan_id' => 'required|exists:jenis_pelayanan,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'user_id.required' => 'User ID tidak boleh kosong',
            'user_id.exists' => 'User ID tidak ditemukan',
            'jenis_pelayanan_id.required' => 'Jenis Pelayanan ID tidak boleh kosong',
            'jenis_pelayanan_id.exists' => 'Jenis Pelayanan ID tidak ditemukan',
        ];
    }
}
