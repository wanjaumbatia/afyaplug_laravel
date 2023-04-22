<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use IFRS\Models\Entity;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::first();
        return view('company.profile', ['company' => $company]);
    }

    public function store(Request $request)
    {
        if ($request->id == null) {
            $profile = CompanyProfile::create($request->all());
            $entity = Entity::create([
                "name" => $request->name,
            ]);
        } else {
            $company = CompanyProfile::where('id', $request->id)->first();
            $company->fill($request->post())->save();
        }


        return redirect()->route('company.profile');
    }

    public function edit($id, Request $request)
    {
        dd($id);
    }
}
