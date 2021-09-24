<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_name',
        'adult',
        'children',
        'room_type',
        'checkin',
        'checkout',
        'name',
        'email',
        'mobile',
        'amount',
        
    ];
}
