{{-- Renew Insurance --}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Renew Insurance</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Renew</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
          
        

        

        <div class="col s12">
            <div class="container">
                <div class="section">

                    {{-- content goes here --}}
                    {{-- search policy information --}}
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">Owner Information</h4></div>
                                    </div>
                                   
                                    <form class="row" id="search_form"  action="{{ route('search_policy') }}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="input-field col s10">
                                                <input id="registration" name="registration_number" type="text" class="validate">
                                                <label for="registration">Registration Number *</label>
                                                
                                            </div>
                                            <button class="btn-floating mb-1 btn-large waves-effect waves-light mr-1"><i class="material-icons">search</i></button>
                                            
                                        </div>
                                    </form>


                                    {{-- end of card content --}}

                                </div>
                            </div>

                        </div>
                    </div>

                    @if($data)
                    {{-- display existing policy information --}}
                    <div class="row">
                        <div class="col s12 l8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">Owner Information</h4></div>
                                    </div>
                                    {{-- Card Body --}}

                                    @if(session('success'))
                                    <div class="alert alert-success">
                                    {{ session('success') }}
                                    </div>
                                    @endif
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                    {{ session('error') }}
                                    </div>
                                    @endif

                                    <form class="row"  action="{{ route('renew_insurance') }}" method="POST">
                                        @csrf
                                        <div class="col s12">
                                            <div class="input-field col s12">
                                                <input  name="last_name" id="last_name" type="text" class="validate" required>
                                                <label for="last_name">Last Name or company Name</label>
                                            </div>
                                            
                                            <div class="input-field col s12">
                                                <input id="other_names" name="other_names" type="text" class="validate">
                                                <label for="other_names">Other Name</label>
                                            </div>
                                            <div>Gender</div>
                                            <div class="input-field col s12">
                                                
                                                <label>
                                                    <input  type="radio" class="with-gap" name="gender" />
                                                    <span>Male</span>
                                                </label>
                                            </div>
                                            <div class="input-field col s12">
                                                <label>
                                                    <input  type="radio" class="with-gap" name="gender"  />
                                                    <span>Female</span>
                                                </label>
                                            </div>
                                            
                                            <div class="input-field col s12" style="margin-top: 45px">
                                                <input id="phone_num" name="phone_num" type="text" class="validate" required>
                                                <label for="phone_num">Phone Number</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="email" name="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="dob" name="dob" type="text" class="datepicker">
                                                <label for="tin">Date of Birth</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <textarea id="address" name="address" type="text" required class="materialize-textarea"></textarea>
                                                <label for="address">Address *</label>
                                            </div>

                                            <div class="row"><h4 class="card-title">Vehicle Information</h4></div>

                                            <div class="input-field col s12">
                                                <select name="vehicle_type" id="vehicle_type" required >
                                                    <option value="" disabled selected>Select Vehicle Type</option>
                                                    <option value="MCO">Motocycle</option>
                                                    <option value="PMO">Private Motor Vehicle</option>
                                                    <option value="CVO">Commercial Motor Vehicle</option>
                                                    {{-- <option value="TR">Trailer/Tanker Truck</option> --}}
                                                </select>
                                                <label>Select Vehicle Type *</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="chasis"  name="chasis_number" type="text" class="validate">
                                                <label for="chasis">Chasis Number *</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="engine_num"  name="engine_number" type="text" class="validate">
                                                <label for="engine_num">Engine Number</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="make" name="vehicle_make" type="text" class="validate">
                                                <label for="make">Vehicle Make *</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="model" name="vehicle_model" type="text" class="validate">
                                                <label for="model">Vehicle Model</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="color" name="vehicle_color" type="text" class="validate">
                                                <label for="color">Vehicle Color</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="make_year" name="year_of_make" type="text" class="validate">
                                                <label for="make_year">Year of Make</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="registration" name="registration_number" type="text" class="validate">
                                                <label for="registration">Registration Number *</label>
                                            </div>
                                            
                                            <div class="input-field col s12">
                                                <button type="submit" class="mb-6 z-depth-3 btn btn-large waves-effect waves-light gradient-45deg-green-teal" id="save">Process</button>
                                            </div>
                                        </div>
                                    </form>


                                    {{-- end of card content --}}

                                </div>
                            </div>

                        </div>
                    </div>
                    @endif

                    {{-- display bills --}}
                    <div class="row mb-5 mt-5">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <h4 class="card-title">Generated Bills</h4>
                                        </div>
                                    </div>
                                    {{-- card body --}}

                                    <table class="striped responsive-table">
                                        <thead>
                                        <tr>
                                          <th>Actions</th>  
                                          <th>Policy Number</th>
                                          <th>Vehicle Information</th>
                                          <th>Owner Information</th>
                                          <th>Certificate Number</th>
                                          <th>Registration Number</th>
                                          <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($bills)>0)
                                            @foreach ($bills as $bill)
                                                <tr>
                                                    <th><button class="btn-floating mb-1 btn-small waves-effect waves-light mr-1"><i class="material-icons">attach_money</i></button></th>  
                                                    <th>{{$bill->policy_num}}</th>
                                                    <th>{{$bill->vehicle_id}}</th>
                                                    <th>{{$bill->owner_id}}</th>
                                                    <th>{{$bill->certificate_number}}</th>
                                                    <th>{{$bill->registration_number}}</th>
                                                    <th>{{$bill->policy_type}}</th>
                                                </tr>
                                            @endforeach
                                            
                                        @else
                                            <tr>
                                                <td>No Record Found</td>
                                            </tr>
                                        @endif
                                        
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
@endsection 