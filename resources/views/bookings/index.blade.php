@extends('layouts.master')


@section('content')
   <div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            
            <h2>All Bookings</h2>
        </div>

        @if ($bookings->isEmpty())
            <p>There is no bookings</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Room Number</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Purpose</th>
                        <th>Next Desitnation</th>
                        <th>Means of Transport</th>
                        <th>Where from</th>
                        <th>Vehicle No</th>
                        <th>Reserved By</th>
                        <th>Amount Paid</th>
                        <th>Discount</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        
                            <tr>
                                 
                                <td><a href="/bookings/{{ $booking->id }}">{!! $booking->customer_id !!} </a></td>
                                
                                <td>{!! $booking->room_id !!}</td>
                                <a href="/bookings/{{ $booking->id }}"> 
                                <td>{!! $booking->arrival_date !!}</td>
                            </a>
                                <a href="/bookings/{{ $booking->id }}"> 
                                <td>{!! $booking->departure_date !!}</td>
                              </a>
                                <td>{!! $booking->purpose !!}</td>
                                <td>{!! $booking->next_destination !!}</td>
                                <td>{!! $booking->transport_means !!}</td>
                                <td>{!! $booking->where_from !!}</td>
                                <td>{!! $booking->vehicle_number !!}</td>
                                <td>{!! $booking->reserved_by !!}</td>
                                <td>{!! $booking->amount_paid !!}</td>
                                <td>{!! $booking->discount !!}</td>
                                
                            </tr>
                    
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
   </div>
@endsection

