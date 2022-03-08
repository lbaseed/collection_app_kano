{{-- create revenue heads for payment --}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Revenue Items</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">revenue-items</a>
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

                    <div class="col s12 m6 l6">
                      <div id="basic-form" class="card card card-default scrollspy">
                        <div class="card-content">
                          <h4 class="card-title">Add a New Revenue Item</h4>
                          <form action="" method="POST">
                            <div class="input-field col m6 s12">
                              <select>
                                <option value="" disabled="" selected="">Choose your agency</option>
                                <option value="1">Manager</option>
                                <option value="2">Developer</option>
                                <option value="3">Business</option>
                              </select>
                              <label>Select Agency</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input type="text" id="fn" name="agency_name">
                                <label for="fn">Name</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="revenue-code" type="text" name="agency_code">
                                <label for="revenue-code">Revenue Code</label>
                              </div>
                            </div>
                            
                              <div class="row">
                                <div class="input-field col s12">
                                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                    <i class="material-icons right">send</i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection