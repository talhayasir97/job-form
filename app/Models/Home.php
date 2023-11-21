<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'cnic',
        'dob',
        'jobtitle',
        'gender',
        'number',
        'address',
        'qualification',
        'university',
        'cgpa',
        'completion',
        'experience',
        'salary',
        'working',
        'file'
    ];
}
