@extends('multiauth::layouts.app')
@section('content')
<div class=" login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ECOMNEEDS</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
                @csrf
                <div class="input-group mb-3">

                    <input id="email" type="email" Placeholder="Email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                        value="{{ old('email') }}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> @endif

                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password"
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"
                        name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif

                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                    </div>
                    <!-- /.col -->
                </div>
            </form>



        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection