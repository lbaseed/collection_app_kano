{{-- display all pending bills yet to be paid, clear all within 24hrs --}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Pending Revenue Bills</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">bills</a>
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

                  <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">Total Revenue</h4></div>
                                    </div>

                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                    {{ session('error') }}
                                    </div>
                                    @endif

                                    <form class="row" id="search_form"  action="{{ route('pending_bills') }}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="input-field col l4 s12">
                                                <input id="date_from" name="date_from" required type="text" class="datepicker">
                                                <label for="date_from">Date Range From</label>
                                            </div>
                                            <div class="input-field col l4 s12">
                                                <input id="date_to" name="date_to" required type="text" class="datepicker">
                                                <label for="date_to">Date Range To</label>
                                            </div>
                                            <button id="search_btn" type="submit" class="btn-floating mb-1 btn-large waves-effect waves-light ml-5"><i class="material-icons">search</i></button>
                                            
                                        </div>
                                    </form>


                                    {{-- end of card content --}}

                                </div>
                            </div>

                        </div>
                    </div>

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
                                    <div id="bills_list">
                                      <table class="striped responsive-table">
                                          <thead>
                                          <tr>
                                            <th>Actions</th>  
                                            <th>Policy Number</th>
                                            <th>Vehicle Information</th>
                                            <th>Type</th>
                                            <th>Owner Information</th>
                                            <th>Registration Number</th>
                                            <th>Amount</th>
                                            
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @if (count($bills)>0)
                                              @foreach ($bills as $bill)
                                                  <tr>
                                                      <th>
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
                                                      </th> 
                                                      <td>{{$bill->policy_num}}</td>
                                                      <td>{{$bill->vehicle->chasis_number}}</td>
                                                      <td>{{$bill->policy_type}}</td>
                                                      <td>{{$bill->owner->last_name}}</td>
                                                      <td>{{$bill->registration_number}}</td>
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
                    {{-- end of page content --}}

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

</script>
@endsection

@endsection