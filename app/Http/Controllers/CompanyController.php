<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id','desc')->paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Company::create($data);
        return redirect()->route('companies.index')->with('success', 'Company created successfully!');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            if ($company->logo && \Storage::disk('public')->exists($company->logo)) {
                \Storage::disk('public')->delete($company->logo);
            }
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $company->update($data);
        return redirect()->route('companies.index')->with('success', 'Company updated successfully!');
    }

    public function destroy(Company $company)
    {
        try {
            if ($company->logo && \Storage::exists('public/' . $company->logo)) {
                \Storage::delete('public/' . $company->logo);
            }
           $company->delete();
            if (request()->ajax()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Company deleted successfully!'
                ]);
            }
            return redirect()->route('companies.index')->with('success', 'Company deleted successfully!');
        } catch (\Exception $e) {
            if (request()->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error deleting company!'
                ]);
            }
            return redirect()->route('companies.index')->with('error', 'Error deleting company!');
        }
    }

}
