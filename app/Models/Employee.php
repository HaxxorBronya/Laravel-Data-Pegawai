<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'email',
        'hire_date'
        
    ];
}
