<?php

namespace App\Actions\Fortify;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  array<string, string>  $input
     */
    public function reset(Customer $user, array $input): void
    {
        $messages = [
            'required' => ' :Attribute bắt buộc phải nhập.',
            'confirmed'    => ' :Attribute không trùng nhau',
        ];

        Validator::make($input, [
            'password' => $this->passwordRules(),
        ], $messages)->validate();

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
