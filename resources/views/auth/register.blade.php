@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('home.jpg') }}')">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6" style="margin: 7.5rem 0 4.7rem 0;">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title text-center">Register</h4>

                        <hr>

                        <form action="{{ route('register') }}" method="post">

                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                <label for="email" class="form-control-label">E-mail Address</label>
                                <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required="yes" placeholder="eg. you@home">
                                @if($errors->has('email'))
                                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('firstname') ? 'has-danger' : '' }}">
                                        <label for="firstname" class="form-control-label">First</label>
                                        <input type="text" id="firstname" class="form-control" name="firstname" value="{{ old('firstname') }}" required="yes" placeholder="eg. John">
                                        @if($errors->has('firstname'))
                                            <div class="form-control-feedback">{{ $errors->first('firstname') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('lastname') ? 'has-danger' : '' }}">
                                        <label for="lastname" class="form-control-label">Lastname</label>
                                        <input type="text" id="lastname" class="form-control" name="lastname" value="{{ old('lastname') }}" required="yes" placeholder="eg. Doe">
                                        @if($errors->has('lastname'))
                                            <div class="form-control-feedback">{{ $errors->first('lastname') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                                <label for="password" class="form-control-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password" required="yes">
                                @if($errors->has('password'))
                                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                                <label for="password_confirmation" class="form-control-label">Confirm Password</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required="yes">
                            </div>

                            <p class="form-control-static text-center"><small>Signing up signifies you’ve read and agree to our <a href="#">Privacy Policy</a></small></p>

                            <button class="btn btn-success form-control" type="submit">Register</button>

                            <p class="text-center text-muted">OR</p>

                            <div class="text-center">
                                <a href="{{ url('/login/twitter') }}" class="btn btn-secondary btn-md"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>

                                <a href="{{ url('/login/facebook') }}" class="btn btn-secondary btn-md"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
