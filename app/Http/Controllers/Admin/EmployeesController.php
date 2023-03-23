<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $employees, $employee;
    private $companies;

    public function addEmployees()
    {
        $this->companies = Companies::all();
        return view('admin.employees.add-employee.index', ['companies' => $this->companies]);
    }

    public function createEmployees(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Name filled is required'
        ]);
        Employees::createEmployees($request);
        return redirect('/add-employee')->with('message', 'New employee Create Successful');
    }

    public function editEmployees($id)
    {
        $this->employee = Employees::find($id);
        return view('admin.employees.edit-employee.index', ['employee' => $this->employee]);
    }
    public function updateEmployees(Request $request, $id)
    {
        Employees::updateEmployees($request, $id);
        return redirect('/manage-employee')->with('message', 'Employee Info Update Successful');

    }
    public function deleteEmployees($id)
    {
        Employees::deleteEmployees($id);
        return redirect()->back()->with('message', 'Employee Delete Successful');
    }
    public function manageEmployees()
    {
        $this->employees = Employees::orderBy('id', 'ASC')->paginate(10);
        return view('admin.employees.manage-employee.index', ['employees' => $this->employees]);
    }
}
