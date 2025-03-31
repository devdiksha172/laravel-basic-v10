<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id','desc')->paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('employees.create', compact('companies'));
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {   
        $employee->update($request->validated());
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }


    public function destroy(Employee $employee)
    {
        try {
            $employee->delete();
            if (request()->ajax()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Company deleted successfully!'
                ]);
            }
            return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
        } catch (\Exception $e) {
            if (request()->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error deleting company!'
                ]);
            }
            return redirect()->route('employees.index')->with('error', 'Error deleting company!');
        }
    }
}
