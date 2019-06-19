@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="row justify-content-center">
        <div class="col-md-4 pr-1 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4>{{ __('Login') }}</h4>
                    <small><a href="">Login as researcher</a></small>
                    <small class="float-right"><a href="{{ route('register') }}">Create an account</a></small>
                    <hr>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail / Username') }}</label>
                            <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot your credentials?') }}
                                </a>
                            @endif
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }} <i class="fas fa-chevron-right ml-2"></i>
                            </button>
                            <a  href="{{ route('login.provider', 'google') }}" 
                            class="btn btn-danger btn-block"><i class="fab fa-google mr-3"></i>{{ __('Google') }} Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
