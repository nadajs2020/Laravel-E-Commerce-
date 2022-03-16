@extends('common.master_auth')

@section('title')
    Login
@endsection


@section('content')
    <div class="form" id="signin-form">
        <a href="#" class="form-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="company logo">
        </a>



        @include('common.errors')
        @include('common.success')

        <form action="" method="POST">
            @csrf
        <div class="form-group">
            <input type="text" name="username" class="form-input" placeholder="User-Name" id="signin-email">
            <span class="form-input-icon err">
                <i class='bx bx-error-circle'></i>
            </span>
            <span class="form-input-icon success">
                <i class='bx bx-check-circle'></i>
            </span>
            <span class="form-input-err-msg" data-err-for="signin-email"></span>
        </div>
        <div class="form-group">
            <input type="password"  name="password" class="form-input" placeholder="Password" id="signin-password">
            <span class="form-input-icon err">
                <i class='bx bx-error-circle'></i>
            </span>
            <span class="form-input-icon success">
                <i class='bx bx-check-circle'></i>
            </span>
            <span class="form-input-err-msg" data-err-for="signin-password"></span>
        </div>
        <div class="form-group form-group-checkbox">
            <input type="checkbox" name="remember" id="remember" checked="checked">
            <label for="remember">
                Remember Me
                <i class='bx bx-check'></i>
            </label>
        </div>
        <button class="form-btn" id="signin-btn">Sign in</button>
        <span class="form-delimiter">
            or connect with
        </span>
        <div class="form-social">
            <a href="#" class="form-social-item fb">
                <i class='bx bxl-facebook'></i>
            </a>
            <a href="#" class="form-social-item tw">
                <i class='bx bxl-twitter'></i>
            </a>
            <a href="#" class="form-social-item gg">
                <i class='bx bxl-google'></i>
            </a>
        </div>
        <span class="form-txt">
            Don't have an account?
            <a href="/register">Sign up!</a>
        </span>
        <span class="form-txt">
            <a href="#">Forgot password?</a>
        </span>
    </form>

    </div>

    @endsection
