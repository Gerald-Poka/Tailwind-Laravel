<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable =
    [
        'firstname',
        'middlename',
        'lastname',
        'age',
        'address',
        'email',
        'password',
        'gender'
    ];
}
