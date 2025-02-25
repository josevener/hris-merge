<?php

namespace App\Models;

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
}
