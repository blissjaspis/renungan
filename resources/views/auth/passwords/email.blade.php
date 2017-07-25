@extends('layouts.app')

@section('content')

<div class="container">

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-md-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title text-center">Reset Password</h4>

                    <form action="{{ route('password.email') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                            <label for="email" class="form-control-label">E-mail Address</label>
                            <input type="text" id="email" class="form-control" name="email" value="{{ old('email') }}" required="yes">
                            @if($errors->has('email'))
                                <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <button class="btn btn-success form-control">Send Password Reset Link</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
