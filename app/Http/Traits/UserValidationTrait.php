<?php

namespace App\Http\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

trait UserValidationTrait
{

    private function editRules()
    {

        return [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email:rfc,strict,dns',
                Rule::unique('users')->ignore($this->userId),
            ],
            'password' => [
                'nullable',
                'confirmed',
                Rules\Password::defaults(),
            ],
        ];
    }


    private function createRules()
    {

        return [
            'name' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email:rfc,strict,dns',
                Rule::unique('users')->ignore($this->userId),
            ],
            'password' => [
                'confirmed',
                Rules\Password::defaults(),
            ],
        ];
    }


    private function checkPasswordChanged($request)
    {

        if ($request->password) {

            return Hash::make($request->password);
        }

        return auth()->user()->password;
    }

}
