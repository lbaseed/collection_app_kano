{{-- generate a new bill for payment --}}
@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Buy New Insurance</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Buy</a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
        </div>

        <div class="col s12">
            <div class="container">
                <div class="section">

                    <div class="row">
                        <div class="col s12 l8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">Owner Information</h4></div>
                                    </div>
                                    {{-- Card Body --}}

                                    @if(session('success'))
                                        <div class="card-alert card gradient-45deg-green-teal">
                                            <div class="card-content white-text">
                                            <p>
                                                <i class="material-icons">check</i> SUCCESS : {{ session('success') }}</p>
                                            </div>
                                            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if(session('error'))
                                        <div class="card-alert card gradient-45deg-red-pink">
                                            <div class="card-content white-text">
                                            <p>
                                                <i class="material-icons">error</i> DANGER : {{ session('error') }}</p>
                                            </div>
                                            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif

                                    <form class="row"  action="{{ route('new_insurance') }}" method="POST">
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
                                                    <input  type="radio" class="with-gap" value="Male" name="gender" />
                                                    <span>Male</span>
                                                </label>
                                            </div>
                                            <div class="input-field col s12">
                                                <label>
                                                    <input  type="radio" class="with-gap" value="Female" name="gender"  />
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
                                                <input id="dob" name="dob" type="text" class="datepicker" >
                                                <label for="tin">Date of Birth</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <textarea id="address" name="address" type="text" required class="materialize-textarea"></textarea>
                                                <label for="address">Address *</label>
                                            </div>

                                            <div class="input-field col s12" style="margin-top: 45px">
                                                <input id="occupation" name="occupation" type="text" class="validate" required>
                                                <label for="occupation">Occupation *</label>
                                            </div>

                                            <div class="row"><h4 class="card-title">Vehicle Information</h4></div>

                                            <div class="input-field col s12">
                                                <select name="vehicle_type" id="vehicle_type" required >
                                                  <option value="" selected>Select Vehicle Type</option>
                                                  <option value="MCO">Motocycle</option>
                                                  <option value="PMO">Private Motor Vehicle</option>
                                                  <option value="CVO">Commercial Motor Vehicle</option>
                                                </select>
                                                <label>Select Vehicle Type *</label>
                                            </div>

                                            <div id="commercial_type"></div>

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
                                                <input id="color" name="vehicle_colour" type="text" class="validate">
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

                    {{-- display bills --}}
                    <div class="row mb-5 mt-5" id="bills_section">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <h4 class="card-title">Generated Bills</h4>
                                        </div>
                                    </div>
                                    {{-- card body --}}

                                    <div id="bills_list">
                                        <table class="striped responsive-table">
                                            <thead>
                                            <tr>
                                            <th>Actions</th>  
                                            <th>Policy Number</th>
                                            <th>Vehicle Information</th>
                                            <th>Owner Information</th>
                                            <th>Certificate Number</th>
                                            <th>Registration Number</th>
                                            <th>Policy Type</th>
                                            <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if (count($bills)>0)
                                                @foreach ($bills as $bill)
                                                    <tr>
                                                        <td>
                                                        @php
                                                            if($bill->status == "PAID"){
                                                            $url_plain = "https://ieiplcng.azurewebsites.net//api/Insurance/GetPolicyDocumentByTransId/".$bill->iei_ref;
                                                            $url_document = "https://ieiplcng.azurewebsites.net//api/Insurance/GetPlainPolicyDocumentByTransId/".$bill->iei_ref;
                                                            echo '<a id="print_policy_plain" target="_blank" href="'.$url_plain.'" class="btn-floating mb-1 btn-small waves-effect waves-light mr-2"><i class="material-icons">print</i></a>';
                                                            echo '<a id="print_policy_doc" target="_blank" href="'.$url_document.'" class="btn-floating mb-1 btn-small waves-effect waves-light ml-2"><i class="material-icons">print</i></a>';
                                                            }else{
                                                            echo "<button onclick='pay_policy($bill->id)' class='btn-floating mb-1 btn-small waves-effect waves-light mr-1'><i class='material-icons'>attach_money</i></button>";
                                                            }   
                                                        @endphp
                                                        </td> 
                                                        <td>{{$bill->policy_num}}</td>
                                                        <td>{{$bill->vehicle->chasis_number}}</td>
                                                        <td>{{$bill->owner->last_name." ".$bill->owner->other_names}}</td>
                                                        <td>{{$bill->certificate_number}}</td> 
                                                        <td>{{$bill->registration_number}}</td>
                                                        <td>{{$bill->policy_type}}</td>
                                                        <td>{{$bill->amount}}</td>
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
</div>

@section('scripts')
<script type="text/javascript">


    function pay_policy(id){

        run_waitMe($('#bills_list'), 1, 'bounce');
        let url = window.location.origin + "/collection/new-policy/"+ id;
        // alert(url);
        $.get(url, function(message){

                alert("Payment " + message);
              location.reload(true);
            $('#bills_list').waitMe('hide');
			});
        
    }

    $("#vehicle_type").change(function(){
            
            var text = $("#vehicle_type").val();

            if(text == "CVO"){

                $("#commercial_type").html("<div class='row'> <div class='input-field col s4 mb-8'> <label><input type='radio' class='with-gap' name='commercial_type' value='mini bus' /><span>mini bus</span></label></div> <div class='input-field col s4 mb-8'> <label><input type='radio' class='with-gap' name='commercial_type' value='suv' /><span>suv</span></label></div> <div class='input-field col s4 mb-8'> <label><input type='radio' class='with-gap' name='commercial_type' value='mini truck' /><span>mini truck</span></label></div> <div class='input-field col s4 mb-8'> <label><input type='radio' class='with-gap' name='commercial_type' value='pickup' /><span>pickup</span></label></div> <div class='input-field col s4 mb-8'> <label><input type='radio' class='with-gap' checked name='commercial_type' value='commercial cars' /><span>commercial cars</span></label></div> </div>");

            }else{
                $("#commercial_type").html("");
            }
        });

</script>
@endsection

@endsection


