<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClearanceRequest extends Model
{
    protected $fillable = [
        'name',
        'purpose',
        'address',
    ];
}
