<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payslip;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Payslip::all();
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'payroll_id'     =>      'required|min:1|integer',
            'employee_id'    =>      'required|min:1|integer',
            'salary_id'      =>      'min:1|integer',
            'gross_salary'   =>      'required|min:1|string',
            'meal_allowance' =>      'required|min:1|string',
            'transpo_allowance'  =>  'required|min:1|string',
            'deductions'    =>      'required|min:1|string',
            'net_salary'    =>      'required|min:1|string',
            'issued_date'    =>      'min:1|date',
        'payment_method'    =>      'required|min:1|string'
        ]);

        $data = Payslip::create($params);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payslip $payslip)
    {
        return response()->json($payslip);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payslip $payslip)
    {
        $params = $request->validate([
            'payroll_id'     =>      'required|min:1|integer',
            'employee_id'    =>      'required|min:1|integer',
            'salary_id'      =>      'min:1|integer',
            'gross_salary'   =>      'required|min:1|string',
            'meal_allowance' =>      'required|min:1|string',
            'transpo_allowance'  =>  'required|min:1|string',
            'deductions'    =>      'required|min:1|string',
            'net_salary'    =>      'required|min:1|string',
            'issued_date'    =>      'min:1|date',
        'payment_method'    =>      'required|min:1|string'
        ]);

        $payslip->update($params);

        return response()->json($payslip);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payslip $payslip)
    {
        $payslip->delete();

        $message = [
            'status'    => 200,
            'message'   => "Successfully Deleted {$payslip->id}"
        ];

        return response()->json($message);
    }
}
