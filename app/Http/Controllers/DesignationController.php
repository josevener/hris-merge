<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $result = Designation::all();
        return response()->json($result);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'department_id' => 'integer|required',
            'designation_name'=> 'required|string|min:2|max:60'
        ]);

        $data = Designation::create($params);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        return response()->json($designation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {

        $params = $request->validate([
            'designation_name' => 'string|min:2|max:50'
        ]);

        $designation->update($params);

        return response()->json($designation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();

        // optional
        $message = [
            'status' => 200,
            'message' => "Deleted succesfully {$designation->id}"
        ];

        // response
        return response()->json($message);
    }
}
