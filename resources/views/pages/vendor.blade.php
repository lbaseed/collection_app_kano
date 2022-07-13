{{-- register new vendor, update, suspend, delete vendor --}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Vendor Controls</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">vendor</a>
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
                        <div class="col s12 l6">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row"><h4 class="card-title">Vendors</h4></div>
                                    </div>

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
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Vendor</a>

                                    <div id="modal1" class="modal modal-fixed-footer">
                                        <form method="POST" action="{{route('vendor.store')}}">
                                            @csrf
                                            <div class="modal-content">
                                            <h4>Register New Vendor</h4>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="name" name="name" type="text" class="validate" required />
                                                        <label for="name">Full Name</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="email" name="email" type="text" class="validate" required />
                                                        <label for="email">Email Address</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="phone" name="phone" type="text" class="validate" />
                                                        <label for="phone">Phone Number</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select id="role" name="role">
                                                            <option value=''>Select Role</option>
                                                            <option value='vendor'>Vendor</option>
                                                            <option value='manager'>Manager</option>
                                                            <option value='executive'>Executive</option>
                                                        </select>
                                                        <label for="role">Phone Number</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="address" name="address" type="text" class="validate" />
                                                        <label for="address">Address</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" href="#!" class="modal-action waves-effect waves-green btn ">Create</button>
                                            </div>
                                        </form>
                                    </div>


                                    {{-- end of card content --}}

                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row mb-5 mt-5">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <h4 class="card-title">Registered Users</h4>
                                        </div>
                                    </div>
                                    {{-- card body --}}

                                    <table class="striped responsive-table">
                                        <thead>
                                        <tr>
                                          <th>SN</th>
                                          <th>Full Name</th>
                                          <th>Email</th>
                                          <th>Role</th>
                                          <th>Status</th>
                                          <th>Phone Number</th>
                                          <th>Address</th>
                                          <th>Actions</th>  
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($vendors)>0)
                                            @foreach ($vendors as $vendor)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$vendor->name}}</td>
                                                    <td>{{$vendor->email}}</td>
                                                    <td>{{$vendor->role}}</td>
                                                    <td>{{$vendor->status}}</td>
                                                    <td>{{$vendor->phone}}</td>
                                                    <td>{{$vendor->address}}</td>
                                                    <td>
                                                        <button class='btn-floating mb-1 btn-small waves-effect waves-light mr-1'><i class='material-icons'>description</i></button>
                                                        <button class='btn-floating mb-1 btn-small waves-effect waves-light mr-1'><i class='material-icons'>edit</i></button>
                                                        <button class='btn-floating mb-1 btn-small waves-effect waves-light mr-1'><i class='material-icons'>delete</i></button>

                                                    </td>
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