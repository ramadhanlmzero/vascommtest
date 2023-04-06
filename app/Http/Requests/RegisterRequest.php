<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email:dns,rfc,filter|unique:user',
            'username' => 'required|unique:user',
            'password' => 'required|min:8|confirmed',
            'photo' => 'required|max:10240|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi!',
            'email.email' => 'Format :attribute tidak sesuai!',
            'email.unique' => ':attribute sudah pernah digunakan, gunakan email lain!',
            'username.unique' => ':attribute sudah pernah digunakan, gunakan username lain!',
            'password.min' => ':attribute minimal 8 karakter!',
            'password.confirmed' => ':attribute konfirmasi tidak cocok!',
            'photo.max' => ':attribute maksimal 10MB!',
            'photo.mimes' => ':attribute wajib berformat JPG, JPEG, dan PNG!'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama lengkap',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'photo' => 'Foto'
        ];
    }
}
