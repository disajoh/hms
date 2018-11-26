<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
class BookingsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public  function index(){

        $bookings = Booking::all();

        return view('bookings.index', compact('bookings'));
    }


    public  function create(){
        
       return view('bookings.existing_customers_reservation');
    }

    public  function store(Request $data){
        
        $booking = Boooking::create([
            'user_id' => Auth::user()->id,
            'room_id' => $data['room_id'],
            'customer_id' => $data['customer_id'],
            'arrival_date' => $data['arrival_date'],
            'departure_date' => $data['departure_date'],
            'purpose' => $data['purpose'],
            'next_destination' => $data['next_destination'],
            'transport_means' => $data['transport_means'],
            'where_from' => $data['where_from'],
            'vehicle_number' => $data['vehicle_number'],
            'reserved_by' => $data['reserved_by'],
            'amount_paid' => $data['amount_paid'],
            'discount' => $data['discount'],
        ]);

        return view('bookings.show', compact('booking'));
    }

    public  function show(Booking $booking){
        
        return view('bookings.show', compact('booking'));
    }

    public  function edit(){
        
    }

    public  function update(){
        
    }

    public  function delete(){
        
    }
}
