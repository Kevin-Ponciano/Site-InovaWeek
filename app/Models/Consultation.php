<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    static $rules = [
        'title'=>'required',
        'patient'=>'required',

        // 'observation'=>'required',
        // 'start'=>'required',
        // 'end'=>'required'
    ];

    protected $fillable=['title','patient','observation','start','end','color'];
}
