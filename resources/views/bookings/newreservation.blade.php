
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
                        New Customer Reservation <small></small>
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
                           <div class="form-group">
                                         <label>Surname</label>
                                         <input name="surname" class="form-control" required>
                                         
                            </div>
                            <div class="form-group">
                                          <label>Other Name</label>
                                          <input name="other_name" class="form-control">
                                          
                             </div>
                           <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" class="form-control" required>
                                        
                           </div>
                           <div class="form-group">
                                        <label>Occupation</label>
                                        <input name="occupation" class="form-control" required>
                                        
                           </div>
                           <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" class="form-control" required>
                                        
                           </div>
                           <div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" type ="text" class="form-control" required>
                                        
                           </div>
                            <?php

                            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                            ?>
                            <div class="form-group">
                                        <label>Nationality</label>
                                        <select name="nationality" class="form-control" required>
                                            <option value selected ></option>
                                            <?php
                                            foreach($countries as $key => $value):
                                            echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                            endforeach;
                                            ?>
                                        </select>
                            </div>
                            
                           <div class="form-group">
                                        <label>Passport Number</label>
                                        <input name="passport_number" class="form-control">
                                        
                           </div>
                           <div class="form-group">
                                        <label>Date issued</label>
                                        <input name="date_issued" type="date" class="form-control" required>
                                        
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
