<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
     protected $fillable = [
        'user_id',
        'first_name',
        'surname',
        'other_name',
        'phone',
        'email',
        'occupation',
        'nationality',
        'address',
        'passport_number',
        'date_issued',
     ];

     public  function bookings(){
         
         return $this->hasMany(Booking::class);
     }
}
