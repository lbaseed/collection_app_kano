{{-- all collection record goes here --}}
{{-- summary page and details list paginated and to be exported as excel and PDF--}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Total Revenue Collected</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Total</a>
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

                                    <form class="row" id="search_form"  action="{{ route('trans_fetch') }}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="input-field col l4 s12">
                                                <input id="date_from" name="date_from" type="text" required class="datepicker">
                                                <label for="date_from">Date Range From</label>
                                            </div>
                                            <div class="input-field col l4 s12">
                                                <input id="date_to" name="date_to" type="text" required class="datepicker">
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

                                    <table class="striped responsive-table">
                                        <thead>
                                        <tr>
                                          <th>SN</th>  
                                          <th>Policy Number</th>
                                          <th>Vehicle Information</th>
                                          <th>Amount</th>
                                          <th>Certificate Number</th>
                                          <th>Registration Number</th>
                                          <th>Policy Type</th>
                                          <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($transactions)>0)
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$transaction->policy->policy_num}}</td>
                                                    <td>{{$transaction->policy->vehicle->chasis_number}}</td>
                                                    <td>{{number_format($transaction->amount, 2)}}</td>
                                                    <td>{{$transaction->policy->certificate_number}}</td>
                                                    <td>{{$transaction->policy->registration_number}}</td>
                                                    <td>{{$transaction->policy_type}}</td>
                                                    <td><button class="btn-floating mb-1 btn-small waves-effect waves-light mr-1"><i class="material-icons">description</i></button></td>  

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

@section('scripts')
<script type="text/javascript">

    // $("#search_form").submit(function(e){
    //       e.preventDefault();
    //         $('#search_btn').click(function(){
    //         let dtFrom = new Date($('#date_from').val());
    //         let dtTo = new Date($('#date_to').val());

    //         if(dtTo >= dtFrom){
    //           alert("date ok")
    //         }else{
    //           alert("next date must be bigger than prev date")
    //         }


    //       });

    // });

</script>
@endsection
@endsection