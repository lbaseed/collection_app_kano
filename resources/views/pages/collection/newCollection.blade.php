{{-- generate a new bill for payment --}}
@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="section">

                    <div class="row">
                        <div class="col s12 l8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">New Collection</h4></div>
                                    </div>
                                    {{-- CArd Body --}}


                                    <form class="row">
                                       <div class="col s12">
                                            <div class="input-field col s12">
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                            
                                            <div class="input-field col s12">
                                                <input id="other_name" type="text" class="validate">
                                                <label for="other_name">Other Name</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="phone_num" type="text" class="validate">
                                                <label for="phone_num">Phone Number</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="tin" type="text" class="validate">
                                                <label for="tin">TIN</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="address" type="text" class="validate">
                                                <label for="address">Address</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="payment_desc" type="text" class="validate">
                                                <label for="payment_desc">Payment Description</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <select>
                                                  <option value="" disabled selected>Select Agency</option>
                                                  <option value="1">Option 1</option>
                                                  <option value="2">Option 2</option>
                                                  <option value="3">Option 3</option>
                                                </select>
                                                <label>Materialize Select</label>
                                            </div>

                                            <div class="input-field col s12" id="revenue_heads">
                                                <select>
                                                  <option value="" disabled selected>Select Revenue Head</option>
                                                  <option value="1">Option 1</option>
                                                  <option value="2">Option 2</option>
                                                  <option value="3">Option 3</option>
                                                </select>
                                                <label>Materialize Select</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <button type="submit" class="mb-6 z-depth-3 btn btn-large waves-effect waves-light gradient-45deg-green-teal" href="" id="save">Generate Bill</button>
                                            </div>
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

                                    <table class="striped">
                                        <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Item Name</th>
                                          <th>Item Price</th>
                                          <th>Name</th>
                                          <th>Item Name</th>
                                          <th>Item Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                        </tr>
                                        <tr>
                                          <td>Alan</td>
                                          <td>Jellybean</td>
                                          <td>$3.76</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                        </tr>
                                        <tr>
                                          <td>Jonathan</td>
                                          <td>Lollipop</td>
                                          <td>$7.00</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                        </tr>
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

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        // $(document).on('click', "#save", function(e){
        //     e.preventDefault();

        //     alert("hello");
        // });
        $("#save").click(function(e){
            e.preventDefault();

            alert("hello");
        })
    });
</script>
@endsection
