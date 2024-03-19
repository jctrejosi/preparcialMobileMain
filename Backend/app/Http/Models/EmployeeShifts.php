<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeShifts extends Model
{
    protected $fillable = [
        'id',
        'employee_id',
        'shift_start',
        'shift_end',
    ];
}
