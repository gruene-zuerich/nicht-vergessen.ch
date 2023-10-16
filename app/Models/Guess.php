<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'guess',
        'email',
        'phone',
        'tickets',
        'optin',
    ];

    protected $casts = [
        'optin' => 'boolean',
    ];
}
