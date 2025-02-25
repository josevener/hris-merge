<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Employee::all();
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'company_id_number' => 'required|min:1|string',
            'birthdate'         => 'required|min:1|date',
            'reports_to'        => 'required|min:1|string',
            'gender'            => 'required|min:1|max:6|string',
            'user_id'           => 'required|min:1|integer',
            'department_id'     => 'required|min:1|integer',
            'designation_id' => 'required|min:1|integer'
        ]);

        $data = Employee::create($params);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $params = $request->validate([
            'company_id_number' => 'required|min:1|string',
            'birthdate'         => 'required|min:1|date',
            'reports_to'        => 'required|min:1|string',
            'gender'            => 'required|min:1|max:6|string',
            'user_id'           => 'required|min:1|integer',
            'department_id'     => 'required|min:1|integer',
            'designation_id' => 'required|min:1|integer'
        ]);

        $employee->update($params);
        return response()->json($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        $message = [
            'status'    => 200,
            'message'   => "Successfully Deleted {$employee->id}"
        ];

        return response()->json($message);

    }
}
