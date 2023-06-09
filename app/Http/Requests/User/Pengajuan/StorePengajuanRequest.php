<?php

namespace App\Http\Requests\User\Pengajuan;

use Illuminate\Foundation\Http\FormRequest;

class StorePengajuanRequest extends FormRequest
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
            'jenis_berkas' => 'required|string',
            'file_berkas' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'user_id.required' => 'User ID tidak boleh kosong',
            'user_id.exists' => 'User ID tidak ditemukan',
            'jenis_pelayanan_id.required' => 'Jenis Pelayanan tidak boleh kosong',
            'jenis_pelayanan_id.exists' => 'Jenis Pelayanan tidak ditemukan',
            'jenis_berkas.required' => 'Jenis Berkas tidak boleh kosong',
            'jenis_berkas.string' => 'Jenis Berkas harus berupa string',
            'file_berkas.required' => 'File Berkas tidak boleh kosong',
            'file_berkas.file' => 'File Berkas harus berupa file',
            'file_berkas.mimes' => 'File Berkas harus berupa gambar atau pdf',
            'file_berkas.max' => 'File Berkas maksimal 2MB',
        ];
    }
}
