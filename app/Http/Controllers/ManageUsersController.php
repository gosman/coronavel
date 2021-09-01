<?php

namespace App\Http\Controllers;

use App\Http\Traits\UserValidationTrait;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageUsersController extends Controller
{

    use UserValidationTrait;

    private $userId;


    public function index()
    {

        $data = [
            'users' => User::paginate(15),
        ];

        return view('partials.manage-users.index')->with($data);
    }


    public function show($userId)
    {

        $data = [
            'user' => User::find($userId),
            'roles' => Role::all(),
        ];

        return view('partials.manage-users.show')->with($data);
    }


    public function update(Request $request, $userId)
    {

        $this->userId = $userId;
        $request->validate($this->editRules());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => $this->checkPasswordChanged($request),
        ];

        $updated = User::find($userId)->update($data);

        if ($updated) {

            return redirect('/manage-users');
        }

    }


    public function store(Request $request)
    {

        $request->validate($this->createRules());

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ];

        $created = User::create($data);

        if ($created) {

            return redirect('/manage-users');
        }

    }


    public function create()
    {

        $data = [
            'roles' => Role::all()->reverse(),
        ];

        return view('partials.manage-users.create')->with($data);
    }


    public function destroy($userId)
    {

        $deleted = User::find($userId)->delete();

        if ($deleted) {

            return redirect('/manage-users');
        }
    }

}
