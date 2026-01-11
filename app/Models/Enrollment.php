<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'country',
        'course_interest',
        'preferred_schedule',
        'experience_level',
        'language',
        'status',
    ];

    protected $casts = [
        'age' => 'integer',
    ];
}
