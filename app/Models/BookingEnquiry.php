<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingEnquiry extends Model
{
    use HasFactory;

    protected $table = "booking_enquiries";
    protected $fillable = [
        'phone','name','destination','destination_date',
    ];
}
