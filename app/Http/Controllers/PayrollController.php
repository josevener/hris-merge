<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Payroll::all();
        return response()->json($result);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'employee_id'      => 'required|integer|min:1',
            'total_earnings'   => 'required|numeric|min:0',
            'total_deductions' => 'required|numeric|min:0',
            'net_salary'       => 'required|numeric|min:0',
            'pay_date'         => 'date',
            'status'           => 'required|string|min:2|max:60'
        ]);

        $data = Payroll::create($params);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payroll $payroll)
    {
        return response()->json($payroll);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payroll $payroll)
    {
        $params = $request->validate([
            'employee_id'      => 'required|integer|min:1',
            'total_earnings'   => 'required|numeric|min:0',
            'total_deductions' => 'required|numeric|min:0',
            'net_salary'       => 'required|numeric|min:0',
            'pay_date'         => 'required|date',
            'status'           => 'required|string|min:2|max:60'
        ]);

        $payroll->update($params);

        return response()->json($payroll);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payroll $payroll)
    {
        $payroll->delete();

        $message = [
            'status' => 200,
            'message' => "Deleted Successfully {$payroll->id}"
        ];

        return response()->json($message);
    }
}
