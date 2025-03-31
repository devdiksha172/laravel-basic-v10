<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function rules(): array
    {   
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'email' => 'nullable|email|unique:employees,email',
            'phone' => 'nullable|string|max:15',
        ];
        if ($this->route('employee')) {
            $rules['email'] = 'nullable|email|unique:employees,email,' . $this->route('employee')->id . ',id';
        }
        return $rules;
    }
}
