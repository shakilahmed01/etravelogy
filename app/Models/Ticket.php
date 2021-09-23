<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'hotel_name',
        'destination',
        'room',
        'room_type',
        'adult',
        'children',
        'checkin',
        'room',
        'staying_time',

    ];
}
