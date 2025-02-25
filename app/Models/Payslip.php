<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    /** @use HasFactory<\Database\Factories\PayslipFactory> */
    use HasFactory;

    protected $fillable = [
        'payroll_id',
        'employee_id',
        'salary_id',
        'gross_salary',
        'meal_allowance',
        'transpo_allowance',
        'deductions',
        'net_salary',
        'issued_date',
        'payment_method'
    ];
}
