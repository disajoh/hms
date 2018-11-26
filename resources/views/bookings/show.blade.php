
@extends('layouts.master')

@section('content')
     
    <div class="form-group">

      <h5> Customer ID: <strong>{{ $booking->customer_id }}</strong> </h5>
    
    </div>
    <hr>
     

    <div class="form-group">
     
       <h5>Room Number: <strong>{{  $booking->room_id }}</strong> </h5>
   
   </div>
   <hr>

    <div class="form-group">
      
      <h5> Check In: <strong>{{ $booking->arrival_date }}</strong> </h5>

    </div>
    <hr>
      
    <div class="form-group">
      
       <h5> Check Out: <strong>{{ $booking->departure_date }}</strong> </h5>
    
    </div>
    <hr>
    
    <div class="form-group">
        
        <h5> Purpose: <strong>{{ $booking->purpose }}</strong> </h5>
       
    </div>
    <hr>       
    
    <div class="form-group">
       
        <h5> Next Destination: <strong>{{ $booking->next_destination }}</strong> </h5>
       
    </div>
    <hr>       
    
    <div class="form-group">
        
        <h5> Means of Transportation: <strong>{{ $booking->transport_means }}</strong> </h5>
       
    </div>
    <hr>
       
    <div class="form-group">
        
        <h5> Where from: <strong>{{ $booking->where_from }}</strong> </h5>
       
    </div>
    <hr>
       
    <div class="form-group">
        <h5> Vehicle Number: <strong>{{ $booking-> vehicle_number }}</strong> </h5>
    </div>
    <hr>
       
    <div class="form-group">
       <h5> Reserved by: <strong>{{ $booking->reserved_by }}</strong> </h5>
    </div>
    <hr>
    
    <div class="form-group">
         
       <h5> Amount Paid: <strong>{{ $booking->amount_paid }}</strong> </h5>
    
    </div>
    <hr>
    
    <!-- Don't display discount on customers receipt if no discount was given -->
    @if($booking->discount > 0)

       <div class="form-group">
            
            <h5> Discount: <strong>{{ $booking->discount }}</strong> </h5>
        
        </div>
        <hr>

    @endif
           

    <div class="form-group">
          
        <h5>Booking staff:  <strong>{{ $booking->user_id }}</strong> </h5>

    </div>
    <hr>
    
    
@endsection 
