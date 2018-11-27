<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Booking;
use Auth;
class CustomersController extends Controller
{
    public  function index(){
        $customer = Customer::all();

        return view('customer.index', compact('customer'));
    }


    public  function create(){
        
    }

    public  function store(Request $request){
            

        //     $validData = $this->validate($request,[
        //     'first_name' => 'required',
        //     'surname' => 'required',
        //     'other_name' => '',
        //     'email' => '',
        //     'phone' => 'required',
        //     'occupation' => 'required',
        //     'nationality' => 'required',
        //     'address' => 'required',
        //     'passport_number' => '',
        //     'date_issued' => '',

        //      'user_id' => 'required',
        //      'room_id' => 'required',
        //      'customer_id' => 'required',
        //     'arrival_date' => 'required',
        //     'departure_date' => 'required',
        //      'purpose' => 'required',
        //      'next_destination' => 'required',
        //      'transport_means' => '',
        //      'where_from' => 'required',
        //      'vehicle_number' => 'required',
        //      'reserved_by' => 'required'
            
        // ]);
        

        $customer = Customer::create([
            'first_name' => $request->input('first_name'),
            'surname' => $request->input('surname'),
            'other_name' => $request->input('other_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'occupation' => $request->input('occupation'),
            'nationality' => $request->input('nationality'),
            'address' => $request->input('address'),
            'passport_number' => $request->input('passport_number'),
            'date_issued' => $request->input('date_issued'),
            
        ]);


        $booking = Booking::create([

             'user_id' => Auth::user()->id,
             'room_id' => $request->input('room_number'),
             'customer_id' => $customer->id,
            'arrival_date' => $request->input('arrival_date'),
            'departure_date' => $request->input('departure_date'),
             'purpose' => $request->input('purpose'),
             'next_destination' => $request->input('next_destination'),
             'transport_means' => $request->input('transport_means'),
             'where_from' => $request->input('where_from'),
             'vehicle_number' => $request->input('vehicle_number'),
             'reserved_by' => $request->input('reserved_by'),
             'amount_paid' => $request->input('amount_paid'),
             'discount' => $request->input('discount'),
        ]);

        return view('bookings.newreservation');
        
    }

    public  function show(){
        
    }

    public  function edit(){
        
    }

    public  function update(){
        
    }

    public  function delete(){
        
    }


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'first_name' => ['required', 'string', 'max:255'],
    //         'surname' => ['required', 'string', 'max:255'],
    //         'other_name' => [''|'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //     ]);
    // }
}
