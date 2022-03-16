@extends('frequent.master')

@section('title')
    Contact_As
@endsection

@section('content')


<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('project/img/logo.png') }}" width="125px" />
            </div>
            <nav>
                <ul id="navbar">
                    <li><a href="/home">Home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="about">About</a></li>
                    <li><a  class="active"  href="/contact">Contact</a></li>
                    <li id="lg-bag"><a href="shopping-cart"><i class="fa fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="fa fa-times"></i></a>
                </ul>
            </nav>
            <div class="moble">
                <a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                <i id="bar" class="fa fa-outdent"></i>
            </div>
        </div>
    </div>
    <img class="image" src="{{ asset('project/img/banner.png') }}" width="100%" />
    <div class="page myh1">
        <h1>#let's_talk</h1>
        <p>Loremamet consectetur adipisicing</p>
    </div>
</div>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fa fa-map"></i>
                <p>99 Glassford Street Glasgow G1 1UL New York</p>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
                <p>99 Glassford Street Glasgow G1 1UL New York</p>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <p>99 Glassford Street Glasgow G1 1UL New York</p>
            </li>
            <li>
                <i class="fa fa-clock"></i>
                <p>99 Glassford Street Glasgow G1 1UL New York</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8278.007847387717!2d30.96515763402971!3d29.99567741723773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458573e2528ce39%3A0xf0eb0375dbbd4319!2z2KzYp9mF2LnYqSDZhdi12LEg2YTZhNi52YTZiNmFINmI2KfZhNiq2YPZhtmI2YTZiNis2YrYpw!5e0!3m2!1sar!2seg!4v1643893659146!5m2!1sar!2seg"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<section id="form-details">
    {{-- @include('common.errors') --}}
    @include('common.success')
    <form action="#" method="post">
        @csrf
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear form you</h2>
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="number" name="phone" placeholder="Subject">
        <textarea name="feedback" cols="20" rows="6" placeholder="Your Message">
        </textarea>
        <button>Submit </button>
    </form>

    <div class="people">
        <div>
            <img src="{{ asset('project/img/user-1.png') }}" alt="">
            <p><span>Mahmoud Nada</span> senior full stack development <br> Phone: + 000 1223 00 44 66 <br> Email: mahmoudnada5566@gmail.com</p>
        </div>
        <div>
            <img src="{{ asset('project/img/user-2.png') }}" alt="">
            <p><span>Mahmoud Nada</span> senior full stack development <br> Phone: + 000 1223 00 44 66 <br> Email: mahmoudnada5566@gmail.com</p>
        </div>
        <div>
            <img src="{{ asset('project/img/user-3.png') }}" alt="">
            <p><span>Mahmoud Nada</span> senior full stack development <br> Phone: + 000 1223 00 44 66 <br> Email: mahmoudnada5566@gmail.com</p>
        </div>
    </div>
</section>

<section id="content-2" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>
            Lorem ipsum dolor sit adipisicing amet consectetur
            <span>adipisicing elit</span>
        </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address" />
        <button>Sign Up</button>
    </div>
</section>






@include('frequent.footer')
@endsection
