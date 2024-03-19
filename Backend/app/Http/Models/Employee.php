<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'position_id',
        'name',
        'lastname',
        'card',
        'start_date',
        'start_contact_date',
    ];
}
