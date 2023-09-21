<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'address',
        'designation',
        'started_on',
        'ended_on',
        'accomadation',
        'allowance',
        'transportaion_expense',
        'mobile',
        'vehicle',
        'yearlyticket',
        'medical_payment',
        'bonus',
        'visa_charge',
        'insurance',
        'salary',
    ];


}
