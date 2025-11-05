<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    protected $table = 'user_data';

    protected $fillable = [
        'full_name',
        'student_email',
        'password_hash',
        'birthdate',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];

    public $timestamps = true; 
}