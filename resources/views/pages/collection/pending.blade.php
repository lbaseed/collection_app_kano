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
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Pending Bills</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">pending</a>
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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection