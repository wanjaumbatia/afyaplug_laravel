<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.index', ['users' => $users, 'roles' => $roles]);
    }

    public function invite(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('users.index');
    }

    public function change_status($id){
        $user = User::find($id);
        $user->enabled = !$user->enabled;
        $user->locked = !$user->locked;
        $user->save();
        return redirect()->route('users.index');
    }
}
