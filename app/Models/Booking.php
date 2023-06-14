<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'matric_id',
        'first_name',
        'last_name',
        'gym_room',
        'date',
        'email',
    ];
}


