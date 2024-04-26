<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show($id)
    {
        $company = Company::find($id);
        return view('pages.company.show', compact('company'));
    }

    //edit
    public function edit(Company $company)
    {
        return view('pages.company.edit', compact('company'));
    }


    //update
    public function update(Request $request, Company $company)
    {
        //validate
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'radius_km' => 'required',
            'time_in' => 'required',
            'time_out' => 'required',
        ]);
        //update
        $company->update($request->all());
        //redirect
        return redirect()->route('companies.show', 1)->with('success', 'Company updated successfully.');
    }
}
