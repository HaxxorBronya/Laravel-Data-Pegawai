<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\DataTables\EmployeesDataTable;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeesDataTable $dataTable)
    {
         return $dataTable->render('employees.index');
    }

    public function filter(request $dataTable){
        $start_date = $dataTable->start_date;
        $end_date = $dataTable->end_date;

        $employees = Employee::whereDate('hire_date','>=',$start_date)
                                ->whereDate('hire_date','<=',$end_date)
                                ->get();
        return $dataTable->render('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'hire_date' => 'required|date',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'email' => 'required|email|unique:employees,email,' . $employee->id,
        'hire_date' => 'required|date',
    ]);

    $employee->update($request->all());

    return redirect()->route('employees.index')->with('success', 'Employee updated succesfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
{
    $employee->delete();

    return redirect()->route('employees.index')->with('success', 'Employee deleted succesfully!');
}
}
