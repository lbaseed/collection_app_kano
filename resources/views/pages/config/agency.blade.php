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
                    <div class="row">
                      <div class="col s12 m6 l6">
                        <div id="basic-form" class="card card card-default scrollspy">
                          <div class="card-content">
                            <h4 class="card-title">Add a New Revenue Agency</h4>
                            @if(session('success'))
                                <div class="card-alert card green lighten-5">
                                  <div class="card-content green-text">
                                    <p>{{ session('success') }}Text</p>
                                  </div>
                                  <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="card-alert card red lighten-5">
                                  <div class="card-content red-text">
                                    <p>{{ session('error') }}Text</p>
                                  </div>
                                  <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                            @endif
                            <form method="POST" action="{{ url("settings/agency") }}" >
                              @csrf
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

                    {{-- list of agencies --}}
                    <div class="row">
                      <div class="row mb-5 mt-5">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <h4 class="card-title">Regisered Agencies</h4>
                                        </div>
                                    </div>
                                    {{-- card body --}}

                                    <table class="striped table-hover table-bordered table-responsive">
                                        <thead>
                                        <tr>
                                          <th>SN</th>
                                          <th>Agency Code</th>
                                          <th>Agency Name</th>
                                          <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                          <tr>
                                            <th>SN</th>
                                            <th>Agency Code</th>
                                            <th>Agency Name</th>
                                            <th>Actions</th>
                                          </tr>
                                          </tfoot>
                                        <tbody>
                                            @if ($agencies)
                                              @foreach ($agencies as $agency)
                                              <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $agency->agency_code }}</td>
                                                <td>{{ $agency->name }}</td>
                                                <td>
                                                    <a href="#" class="btn-floating mb-1 waves-effect waves-light mr-1"><i class="material-icons medium">delete</i></a>
                                                </td>
                                              </tr>
                                              @endforeach
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
@endsection

@section('scripts')
<script type="text/javascript" src="js/scripts/ui-alerts.min.js"></script>
@endsection