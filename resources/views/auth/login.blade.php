@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="section"></div>
        <div class="section"></div>
        <div class="col s6 offset-s3 m6 offset-m3 l6 offset-l3">
            <div class="card">
                <div class="card-image">
                  <img src="{{ asset('images/intersoft.jpg')}}" width="100%" height="100%">
                  <span class="card-title center">Login</span>
                </div>
                <div class="card-content">
                    <form method="" action="#">
                        <div class="row">
                                <div class="input-field col s10 offset-s1">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix1" type="text" class="validate" required autofocus></input>
                                    <label for="icon_prefix1">Username</label>
                                </div>
                                <div class="input-field col s10 offset-s1">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_prefix2" type="password" class="validate" required></input>
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
