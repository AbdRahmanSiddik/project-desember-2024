<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('customer_service'); // Using the route parameter 'customer_service'
        return [
            'name' => 'required|string|max:255',
            'foto_user' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|string|email|max:255|unique:users,email,' . $userId,
            'password' => 'required|string|min:8',
            'profile_id' => 'required|integer|exists:profiles,id_profile',
            'role' => 'required|in:teller,admin,operator,anggota',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa string.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'foto_user.required' => 'Foto pengguna wajib diisi.',
            'foto_user.image' => 'Foto pengguna harus berupa gambar.',
            'foto_user.mimes' => 'Foto pengguna harus berformat: jpeg, png, jpg, gif.',
            'foto_user.max' => 'Foto pengguna maksimal 2MB.',
            'email.required' => 'Email wajib diisi.',
            'email.string' => 'Email harus berupa string.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.string' => 'Kata sandi harus berupa string.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
            'profile_id.required' => 'ID profil wajib diisi.',
            'profile_id.integer' => 'ID profil harus berupa angka.',
            'profile_id.exists' => 'ID profil tidak ditemukan.',
            'role.required' => 'Peran wajib diisi.',
            'role.in' => 'Peran harus salah satu dari: teller, admin, operator, anggota.',
        ];
    }
}
