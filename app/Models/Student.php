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
/* The `//` in the code is used to add a single-line comment in PHP. Anything written after `//` on the
same line is considered a comment and is not executed as part of the code. Comments are used to
provide explanations or notes within the code for better understanding by developers and are ignored
by the PHP interpreter during execution. */
?>