@extends('layouts.app')
@section('content')

<!-- form -->
<section class="w3l-form1">
    <div class="section-back">
        <div class="wrapper">
            <div class="logo-logo">
                <a class="brand-logo" href="index.html">ECOMNEEDS</a>
            </div>
            <div class="form-content">
                <div class="form-left">
                    <div class="top">
                        <h5 class="login">Login</h5>
                        <a href="{{ route('register') }}" class="sign-in">Sign up</a>
                        <div class="clear"></div>
                    </div>
                    <div class="middle">
                        <h4>Hello Friend!</h4>
                        <p>Doloribus quis facere ea, est nesciunt fugit! Nam quia ullam repellat.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class=" signin-form">
                        {{csrf_field()}}
                        <div class="form-input">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-input">
                            <label>{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- <label class="container">Remember Me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> -->
                        <button type="submit" class="create-account">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>
                </div>
                <div class="form-right">
                    <div class="grid-info-form">
                        <h5>Login</h5>
                        <h3>The Photographer Platform</h3>
                        <p>Sit amet consectetur adipisicing elit. Lorem ipsum dolor Corporis maxime dolorem temporibus
                            officia facilis repudiandae, modi sapiente, officiis aliquid ipsam quasi, ullam maiores.
                            Facilis fugit recusandae quis corrupti animi sapiente</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //form -->
@endsection