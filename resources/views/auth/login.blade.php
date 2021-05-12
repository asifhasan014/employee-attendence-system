@extends('layouts.app')
@extends('employeeRegistration')
@section('loginStyle')
<link href="{{ asset('css/loginStyle.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div id="login">
        <h3 class="text-center text-white pt-5">Employee Attendence System</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info font-weight-bold">{{ __('E-Mail Address') }}</label><br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info font-weight-bold">{{ __('Password') }}</label><br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info font-weight-bold"><span>{{ __('Remember Me') }}</span> 
                                    <span></span>
                                    <span>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </span>
                                </label><br>
                                <div>
                                    <button type="submit" class="btn btn-info btn-md">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" data-toggle="modal" data-target="#exampleModal" data-backdrop="static" data-keyboard="false">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection