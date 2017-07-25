@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title text-center">Login</h4>

                    <form action="{{ route('login') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                            <label for="email" class="form-control-label">E-mail Address</label>
                            <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}" required="yes">
                            @if($errors->has('email'))
                                <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                            <label for="password" class="form-control-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required="yes">
                            @if($errors->has('password'))
                                <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <div class="form-check">
                            <label for="remember" class="form-check-label">
                                <input type="checkbox" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : ''}}> Remember Me?
                            </label>
                        </div>

                        <button class="btn btn-success form-control" type="submit">Login</button>

                        <p class="form-control-static"><a href="{{ route('password.request') }}">Forgot Password?</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
