@extends('Layout.websitelayout')
@section('title', 'LoginPage')
@section('header')
    @stop
@section('content')

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="../../public/images/LogoHAKHASITHTL_gradient.svg" alt="SZ-YBBS Logo">
        </div>
    </div>

    <h1 class="text-center" style="margin-top: 10%">Social Media Tool</h1>

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h2 class="text-center text-info">Login</h2>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Passwort:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
{{--                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>--}}
                                <input type="submit" name="submit" class="btn btn-info btn-md float-right" value="Anmelden">
                            </div>
                            {{--<div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foooter')
