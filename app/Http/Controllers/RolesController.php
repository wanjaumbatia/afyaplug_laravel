<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        if ($request->id == null) {
            $role = Role::create($request->all());
        } else {
            $role = Role::where('id', $request->id)->first();
            $role->fill($request->post())->save();
        }
        return redirect()->route('roles.index');
    }

    public function show($id){
        $role = Role::find($id);
        return view('roles.role-users', ['role' => $role]);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->destroy();
        return redirect()->route('roles.index');
    }
}
