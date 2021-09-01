<?php

namespace App\Http\Controllers;

use App\Http\Traits\UserValidationTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class ProfileSettingsController extends Controller
{

    use UserValidationTrait;

    private $userId;


    public function index()
    {

        $data = [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ];

        return view('partials.profile-settings')->with($data);
    }


    public function store(Request $request)
    {

        $this->userId = auth()->user()->id;
        $request->validate($this->editRules());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $this->checkPasswordChanged($request),
        ];

        $updated = User::find(auth()->user()->id)->update($data);

        if ($updated) {
            return $this->whichView($request, $data);
        }

    }


    private function whichView($request, $data)
    {

        if ($request->password) {

            Auth::logout();

            return redirect()->route('dashboard');
        }

        return view('partials.profile-settings')->with($data);
    }

}
