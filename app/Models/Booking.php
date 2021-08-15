<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'hotel',
        'checkin',
        'checkout',
        'comfort',
        'adults',
        'childrens',
        'room',
        'message',
    ];
}
