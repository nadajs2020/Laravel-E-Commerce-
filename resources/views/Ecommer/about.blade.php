@extends('frequent.master')

@section('title')
    About
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
                        <li><a  class="active" href="about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li id="lg-bag">
                            <a href="shopping-cart"><i class="fa fa-shopping-bag"></i></a>
                        </li>
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
            <h1>#KnowUs</h1>
            <p>Loremamet consectetur adipisicing</p>
        </div>
    </div>


    <section id="about-head" class="section-p1">
        <img src="{{ asset('project/img/a6.jpg') }}" />
        <div>
            <h2>Who We Are?</h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam ipsam reprehenderit sint magnam. Tenetur
                dicta, blanditiis sapiente facere, dolor atque odit ab reiciendis error quam, quo necessitatibus quisquam.
                Necessitatibus laborum numquam asperiores
                ullam nihil corrupti, cupiditate iusto placeat quisquam deserunt a nulla repudiandae iure delectus. Eum
                nobis, repellendus facere cumque soluta unde perferendis alias necessitatibus officiis? Molestiae soluta
                nihil asperiores aliquid consequuntur
                unde. Modi rerum accusantium assumenda praesentium rem quaerat vitae corrupti dolorum nihil voluptatum error
                aliquid accusamus nemo eos cum totam, minus quae provident ducimus quam reiciendis architecto! Eos officia
                porro quia maxime molestias.
                Ab voluptatem commodi possimus rerum.
            </p>
            <abbr title="">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti
                consequuntur nulla recusandae dolorem quos blanditiis quaerat sint.
                Esse quas et possimus dolor animi quasi quidem error expedita!
                Blanditiis, est iure!
            </abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">
                unde. Modi rerum accusantium assumenda praesentium rem quaerat vitae corrupti dolorum nihil voluptatum error
                aliquid accusamus nemo eos cum totam, minus quae provident ducimus quam reiciendis architecto! Eos officia
                porro quia maxime molestias. Ab voluptatem
                commodi possimus rerum.
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="{{ asset('project/img/1.mp4') }}"></video>
        </div>
    </section>

    <section id="features" class="section-p1">
        <div class="fe-box">
            <img src="{{ asset('project/img/ferr2.jpg') }}">
            <h6>Free Shopping</h6>
        </div>

        <div class="fe-box">
            <img src="{{ asset('project/img/online-shopping-internet-goods-order-customer-vector-26645982.jpg') }}">
            <h6>Online Order</h6>
        </div>

        <div class="fe-box">
            <img src="{{ asset('project/img/money.webp') }}">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="{{ asset('project/img/pro.jpg') }}">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box">
            <img src="{{ asset('project/img/a3.webp') }}">
            <h6>Happy sell</h6>
        </div>

        <div class="fe-box">
            <img src="{{ asset('project/img/computer-2851285__480.png') }}">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="content-2" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Lorem ipsum dolor sit adipisicing amet consectetur <span>adipisicing elit</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button>Sign Up</button>
        </div>
    </section>




    @include('frequent.footer')
@endsection
