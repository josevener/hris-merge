<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    protected $fillable = [
        'department_name'
    ];

    protected $with = [
        'designation'
    ];

    public function designation(): HasMany{
        return $this->hasMany(Designation::class);
    }
# write
>>>>>>> 1cc7961a0275a520ace0f4cb4b128714a70e7e6f
}
