<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'gender',
        'dob',
        'email',
        'major',
        'uni',
        'address',
        'phone',
        'password',
        'img'
    ];
}
