<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Attendance::all();
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $params = $request->validate([
            'employee_id'   => 'required|integer|min:1|max:60',
            'status'        => 'required|string|min:2|max:60'
        ]);


        $data = Attendance::create($params);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        return response()->json($attendance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        $params = $request->validate([
            'employee_id'   => 'required|integer|min:1|max:60',
            'status'        => 'required|string|min:2|max:60',
            'date'          => 'string|min:2|max:60',
            'time_in'       => 'string|min:2|max:60',
            'time_out'      => 'string|min:2|max:60'
        ]);

        $attendance->update($params);

        return response()->json($attendance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        $message = [
            'status' => 200,
            'message' => "Deleted succesfully {$attendance->id}"
        ];

        return response()->json($message);
    }
}
