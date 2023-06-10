<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminDesaRequest extends FormRequest
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
            'nik' => ['required', 'string', 'max:16', 'unique:users,nik,' . $this->id],
            'name' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'string', 'max:1', 'in:L,P'],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $this->id],
            'phone_number' => ['required', 'string', 'max:15', 'unique:users,phone_number,' . $this->id],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            'nik.required' => 'NIK harus diisi',
            'nik.string' => 'NIK harus berupa string',
            'nik.max' => 'NIK maksimal 16 karakter',
            'nik.unique' => 'NIK sudah terdaftar',
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Nama harus berupa string',
            'name.max' => 'Nama maksimal 255 karakter',
            'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
            'tanggal_lahir.date' => 'Tanggal lahir harus berupa tanggal',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'jenis_kelamin.string' => 'Jenis kelamin harus berupa string',
            'jenis_kelamin.max' => 'Jenis kelamin maksimal 1 karakter',
            'jenis_kelamin.in' => 'Jenis kelamin harus L atau P',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.string' => 'Alamat harus berupa string',
            'email.required' => 'Email harus diisi',
            'email.string' => 'Email harus berupa string',
            'email.email' => 'Email harus berupa email',
            'email.max' => 'Email maksimal 255 karakter',
            'email.unique' => 'Email sudah terdaftar',
            'phone_number.required' => 'Nomor telepon harus diisi',
            'phone_number.string' => 'Nomor telepon harus berupa string',
            'phone_number.max' => 'Nomor telepon maksimal 15 karakter',
            'phone_number.unique' => 'Nomor telepon sudah terdaftar',
        ];
    }
}
