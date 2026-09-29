<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store()
    {
        $employee = new Employee;

        $employee->name = request('name');
        $employee->email = request('email');
        $employee->phone = request('phone');
        $employee->designation = request('designation');
        $employee->salary = request('salary');

        $employee->save();

        // return redirect("/employees/{$employee->id}");
        return redirect("/employees");
    }

    public function show($id)
    {
        $employee = Employee::findorFail($id);
        return view('employees.show', compact('employee'));
    }
}
