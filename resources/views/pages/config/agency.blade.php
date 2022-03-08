{{-- create agencies and revenue heads --}}

@extends('layouts.master')

@section('content')
    
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="images/gallery/breadcrumb-bg.jpg">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Agencies</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">agencies</a>
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
                          <h4 class="card-title">Add a New Revenue Agency</h4>
                          <form>
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
                                  <button class="btn waves-effect waves-light btn-large right" type="submit" name="action">Save
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