<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspeita extends Model
{
    use HasFactory;

    protected $casts =
    [
        'symptoms' => 'array',
        'treatment' => 'array',
        'differential_diagnosis' => 'array',
        'exams' => 'array',
        'provoked' => 'array',
        'signals' => 'array'
    ];
}
