@extends('layouts.login')

@section('content')
    <div class="container">
        <div id="login-page" class="row">
            <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                <form class="login-form" method="POST"  action="{{ route('login') }}">
                @csrf
                    <div class="row">
                        <div class="input-field col s12">
                        <h5 class="ml-4">Sign in</h5>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">person_outline</i>
                        <input id="email" type="email" name="email" required autocomplete="email" autofocus>
                        <label for="email" class="center-align">Email address</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                        <i class="material-icons prefix pt-2">lock_outline</i>
                        <input id="password" type="password" name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="#">Forgot password ?</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
