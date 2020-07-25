@extends('layouts.app')
@section('content')
<section class="w3l-form-2">
    <div class="sign-up-form">
        <div class="wrapper">
            <div class="logo-logo">
                <a class="brand-logo" href="index.html">Shot pic</a>
            </div>
            <div class="text-main">
                <div class="main2">

                    <div class="top">
                        <h5 class="signup">Sign up</h5>
                        <a href="{{route('login')}}" class="sign-in">Login </a>
                        <div class="clear"></div>
                    </div>
                    <div class="sign-main">
                        <div class="middle">
                            <h4>Hello Friend!</h4>
                            <!-- <p>Doloribus quis facere ea, est nesciunt fugit! Nam quia ullam repellat.</p> -->
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            {{csrf_field()}}
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="signin-form @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="signin-form @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="signin-form @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="signin-form"
                                name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="container">I agree to Shot pic Conditions of Use and Privacy Notice
                                <input type="checkbox" name="conditions">
                                 @error('conditions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span class="checkmark"></span>
                               
                            </label>
                            <button type="submit" class="create-account">
                                {{ __('Register') }}
                            </button>

                        </form>
                    </div>
                </div>
                <div class="main1">
                    <div class="tagline">
                        <p class="form-tagline">Signup</p>
                        <h1 class="head-form">We are Skilled Creative Photo Agency</h1>
                        <p class="form-para1">Sit amet consectetur adipisicing elit. Lorem ipsum dolor
                            Corporis maxime dolorem temporibus officia facilis repudiandae, modi sapiente,
                            officiis aliquid ipsam quasi, ullam maiores. Facilis fugit recusandae quis corrupti animi
                            sapiente</p>

                    </div>
                </div>
            </div>
            <div class="columns-copy">
                <p>
                    © 2019 Shot pic . All Rights Reserved | Design by
                    <a href="#"> W3layouts</a></p>
            </div>
        </div>
    </div>
</section>
@endsection('content')