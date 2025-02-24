<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    /** @use HasFactory<\Database\Factories\PayrollFactory> */
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'salary_id',
        'total_earnings',
        'total_deductions',
        'net_salary',
        'pay_date',
        'status'
    ];
}
