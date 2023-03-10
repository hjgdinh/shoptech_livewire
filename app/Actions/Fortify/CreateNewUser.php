<?php

namespace App\Actions\Fortify;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $messages = [
            'required' => ' :Attribute bắt buộc phải nhập.',
            'email'    => ' :Attribute phải có định dạng email',
            'string'    => ' :Attribute phải là String',
            'max'    => ' :Attribute tối đa 255 ký tự',
            'unique'    => ' :Attribute đã tồn tại',
            'confirmed'    => ' :Attribute không trùng nhau',
        ];

        $niceName = [
            'name' => 'Tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'gender' => 'Giới tính',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
        ];

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'gender' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ], $messages, $niceName)->validate();

        return Customer::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'address' => $input['address'],
            'gender' => $input['gender'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
