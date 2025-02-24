<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 1cc7961a0275a520ace0f4cb4b128714a70e7e6f
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
<<<<<<< HEAD
    //
=======
    /** @use HasFactory<\Database\Factories\DesignationFactory> */
    use HasFactory;

    protected $fillable = [
        'designation_name',
        'department_id'
    ];

>>>>>>> 1cc7961a0275a520ace0f4cb4b128714a70e7e6f
}
