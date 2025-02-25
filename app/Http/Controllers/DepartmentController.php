<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // for testing purpose
        $result = Department::all();
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     * HTTP METHOD: POST
     */
    public function store(Request $request)
    {
        // Validation ✔
        // Business Logic (Insert Data) ✔
        // response ✔

        // Validation
        $params = $request->validate([
            'department_name' => 'alpha|min:2|max:50'
        ]);

        // Business Logic
        $data = Department::create($params);


        // response
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return response()->json($department);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {

        // Validation
        $params = $request->validate([
            'department_name' => 'alpha|min:2|max:50'
        ]);


        // business logic
        $department->update($params);


        // response
        return response()->json($department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        // Search by iD
        $department->delete();

        // optional
        $message = [
            'status' => 200,
            'message' => "Deleted succesfully {$department->id}"
        ];

        // response
        return response()->json($message);
    }
}
