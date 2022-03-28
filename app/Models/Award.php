<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'address',
        'phone',
        'email',
        'award'
    ];
}
