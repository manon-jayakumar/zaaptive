<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'category',
        'position',
        'short_description',
        'description',
        'location',
        'experience',
        'package',
        'skills',
        'status',
    ];
}
