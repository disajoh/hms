<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'customer_id',
       'arrival_date',
       'departure_date',
        'purpose',
        'next_destination',
        'transport_means',
        'where_from',
        'vehicle_number',
        'reserved_by',
        'amount_paid',
        'discount',
    ];

    public  function customers(){

        return $this->belongsTo(Customer::class);
    }
}
