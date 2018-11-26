
@extends('layouts.master')

@section('content')
 <!-- Bootstrap Styles-->
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
 <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Custom Styles-->
 <link href="assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
<link href="assets/css/fonts.css" rel="stylesheet" type="text/css" />
<div id="wrapper">
    
   
    <div id="page-wrapper" >
        <div id="page-inner">
         <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Existing Customer Reservation <small></small>
                    </h1>
                </div>
        </div>                       
        <div class="row">
            
            <div class="col-md-5 col-sm-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        PERSONAL INFORMATION
                    </div>
                    <div class="panel-body">
                    <form name="form" method="post" action="{{ route('savenewreservation') }}">
                        {{csrf_field() }}
                          <div class="form-group">
                                        <label>First Name</label>
                                        <input name="first_name" class="form-control" required>
                                        
                           </div>
                      
                    </div>
                    
                </div>
            </div>
            
              
            <!-- <div class="row"> -->
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        RESERVATION INFORMATION
                    </div>
                    <div class="panel-body">
                            <div class="form-group">
                                        <label>Type Of Room *</label>
                                        <select name="troom"  class="form-control" required>
                                            <option value selected ></option>
                                            <option value="executive">EXECUTIVE SUITE</option>
                                            <option value="diplomatic">DIPLOMATIC SUITE</option>
                                            <option value="vip">VIP SUITE</option>
                                            <option value="luxury">LUXURY SUITE</option>
                                            <option value="business">BUSINESS SUITE</option>
                                            <option value="standard">STANDARD</option>
                                        </select>
                          </div>
                          <div class="form-group">
                                        <label>Room Number *</label>
                                        <select name="room_number" class="form-control" required>
                                            <option value selected ></option>
                                            <option value="1">1</option>
                                           <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                          </div>
                         
                          <div class="form-group">
                                        <label>Check-In</label>
                                        <input name="arrival_date" type ="date" class="form-control">
                                        
                           </div>
                           <div class="form-group">
                                        <label>Check-Out</label>
                                        <input name="departure_date" type ="date" class="form-control">
                                        
                           </div>
                           <div class="form-group">
                                        <label>Purpose of Visit</label>
                                        <input name="purpose" type ="text" class="form-control" required>
                                        
                           </div>
                           <div class="form-group">
                                        <label>Next Destination</label>
                                        <input name="next_destination" type ="text" class="form-control">
                                        
                           </div>
                           <div class="form-group">
                                        <label>Means of Transport</label>
                                        <input name="transport_means" type ="text" class="form-control" >
                                        
                           </div>
                           <div class="form-group">
                                        <label>Where from?</label>
                                        <input name="where_from" type ="text" class="form-control">
                                        
                           </div>
                           <div class="form-group">
                                        <label>Vehicle No.</label>
                                        <input name="vehicle_number" type ="text" class="form-control">
                                        
                           </div>
                           
                           <div class="form-group">
                                        <label>Reserved By</label>
                                        <input name="reserved_by" type ="text" class="form-control" required="">
                                      
                           </div>
                           
                           <div class="form-group">
                                        <label>Amount Paid</label>
                                        <input name="amount_paid" type ="number" class="form-control">
                                        
                           </div>

                           <div class="form-group">
                                        <label>Discount</label>
                                        <input name="discount" type ="number" class="form-control">            
                           </div>
                   </div>
                    
                </div>
            </div>
            <!-- </div> -->
        </div>
        
            <div class="col-md-12 col-sm-12">
                
                
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                   
                    </form>
                        
                </div>
            </div>
        </div>
       
            
            </div>
                
        
            
                </div>
         <!-- /. PAGE INNER  -->
    </div>
     <!-- /. PAGE WRAPPER  -->
</div>

<!-- jQuery Js -->
<script src="assets/jscustom/jquery-1.10.2.js"></script>
  <!-- Bootstrap Js -->
<script src="assets/jscustom/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/jscustom/jquery.metisMenu.js"></script>
  <!-- Custom Js -->
<script src="assets/jscustom/custom-scripts.js"></script> 
@endsection
