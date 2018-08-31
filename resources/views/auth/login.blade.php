@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="section"></div>
        <div class="col s6 offset-s3 m6 offset-m3 l6 offset-l3">
            <div class="card">
                <div class="card-image">
                  <img src="{{ asset('images/bappebti.png')}}" width="100%" height="100%" style="padding: 0px 20px; padding-bottom: 20px">
                  <span class="card-title black-text center-align">Login</span>
                </div>
                <div class="card-content">
                    <form method="POST" action="{{ route('login')}}">
                        @csrf
                        <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix1" type="text" name="username" class="validate" required autofocus></input>
                                    <label for="icon_prefix1">Username</label>
                                </div>
                                <div class="input-field col s10 offset-s1">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_prefix2" type="password" name="password" class="validate" required></input>
                                    <label for="icon_prefix2">Password</label>
                                </div>
                                <div class="input-field col s10 offset-s1">
                                    <button class="col s12 waves-effect waves-dark btn light-blue">SIGN IN</button> 
                                </div>
                        </div>
                    </form>
                </div>
                <div class="card-action right-align">
                  <a href="#">Lupa Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
