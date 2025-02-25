<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payroll_id')->nullable()->constrained('payrolls')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->constrained('employees')->onDelete('cascade');
            $table->foreignId('salary_id')->nullable()->constrained('salaries')->onDelete('cascade');
            $table->decimal('gross_salary', 12, 2);
            $table->decimal('meal_allowance', 10, 2);
            $table->decimal('transpo_allowance', 10, 2);
            $table->decimal('deductions', 12, 2);
            $table->decimal('net_salary', 12, 2);
            $table->date('issued_date')->default(DB::raw('CURRENT_DATE'));
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};
