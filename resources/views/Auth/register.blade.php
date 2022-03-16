@extends('common.master_auth')

@section('title')
    Register
@endsection


@section('content')

    <div class="form" id="signin-form">
        <a href="#" class="form-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="company logo">
        </a>

        <form action="#" method="POST">
            @csrf
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Username" id="signin-email" name="username">
            <span class="form-input-icon err">
                <i class='bx bx-error-circle'></i>
            </span>
            <span class="form-input-icon success">
                <i class='bx bx-check-circle'></i>
            </span>
            <span class="form-input-err-msg" data-err-for="signin-email"></span>
        </div>

        {{-- gender --}}
        <div class="form-group">
            <select name="gender" class="form-input">
                @foreach($genders as $gender )
                    @if($gender->id==old("gender"))
               <option value="{{$gender->id}}"  selected>
                  {{$gender->name}}
               </option>
           @else
               <option value="{{$gender->id}}">
                   {{$gender->name}}
               </option>
           @endif
               @endforeach
       </select>
        </div>
       {{-- End gender --}}

        <div class="form-group">
            <input type="email" class="form-input" name="email" placeholder="Email" id="signin-email">
            <span class="form-input-icon err">
                <i class='bx bx-error-circle'></i>
            </span>
            <span class="form-input-icon success">
                <i class='bx bx-check-circle'></i>
            </span>
            <span class="form-input-err-msg" data-err-for="signin-email"></span>
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-input" placeholder="Password" id="signin-password">
            <span class="form-input-icon err">
                <i class='bx bx-error-circle'></i>
            </span>
            <span class="form-input-icon success">
                <i class='bx bx-check-circle'></i>
            </span>
            <span class="form-input-err-msg" data-err-for="signin-password"></span>
        </div>


        <button class="form-btn" id="signin-btn">Sign in</button>
        <span class="form-txt">
            Don't have an account?
            <a href="#">Sign up!</a>
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

    </form>
    </div>

    @endsection
