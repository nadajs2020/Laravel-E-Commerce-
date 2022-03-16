@extends('frequent.master')

@section('title')
    Home
@endsection

@section('content')





<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="{{ asset('project/img/logo.png') }}" width="125px">
            </div>
            <nav>
                <ul id="navbar">
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a class="active" href="/home">Home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/admin">Dashboard</a></li>
                    <li id="lg-bag">
                        <a href="/shopping-cart">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                    </li>
                    <a href="#" id="close"><i class="fa fa-times"></i></a>
                    @endif
                    {{-- <li>
                        @if(Auth::check())
                        <a id="login" href="/logout">Logout</a>
                        @elseif(Auth::check())
                        <a id="login" href="/login">Login</a>
                        @else
                        <a id="login" href="/login">Login</a>
                        @endif
                    </li> --}}
                    <li>
                        @if (\Illuminate\Support\Facades\Auth::check())
                        <span id="user">
                            {{\Illuminate\Support\Facades\Auth::user()->first_name}}
                            <a id="aout" href="/logout">
                                &#8594;
                                    </i></a>
                        </span>
                    </li>
                    @else
                    <div class="auth">
                    <a id="login" href="/login">
                        Login
                    </a>
                    <a id="register" href="/register">
                        Register
                    </a>
                </div>
                @endif
                </ul>
            </nav>
            <div class="moble">
                <a href="cart.html"><i class="fa fa-shopping-bag"></i></a>
                <i id="bar" class="fa fa-outdent"></i>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                @foreach ( $sliders as $slider  )
                <h4>{{ $slider->title}} </h4>
                <h2>{{ $slider->content}}</h2>
                <h1>On all products</h1>
                <p>Save more with coupons & up to 80% off!</p>
                @endforeach

                <button>Shop Now &#8594;</button>
            </div>

            <div class="col-2">
                <img src="{{ asset('project/img/image1.png') }}">
                {{-- @foreach ( as )
                <img src="{{ $slider->image ? $slider->image->path : null }}">
                @endforeach --}}

            </div>

        </div>

    </div>
</div>

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


<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

                {{-- These are the most popular products --}}
        @foreach ($sales as $getProduct )
        @include('frequent.product')
        @endforeach


        {{-- <div class="pro">
            <img src="{{ asset('project/img/product-2.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-2.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div> --}}


        {{-- These are the products that tired the least --}}
        @foreach ($getProducts as $getProduct )
        @include('frequent.product')
        @endforeach


    </div>
</section>

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
    <button class="normal">Exports More</button>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="pro-container">

        <div class="pro">
            <img src="{{ asset('project/img/product-5.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-3.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-4.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-9.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>


        <div class="pro">
            <img src="{{ asset('project/img/product-2.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>



        <div class="pro">
            <img src="{{ asset('project/img/product-11.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-6.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
            <img src="{{ asset('project/img/product-8.jpg') }}">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h4>$88</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
        </div>
    </div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing</span>
        <button class="white">Learn More</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing</span>
        <button class="white">Learn More</button>
    </div>
</section>

<section id="banner-3">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</span>
    </div>
    <div class="banner-box banner-box2">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</span>
    </div>
    <div class="banner-box banner-box3">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</span>
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

<div class="col-5">





</div>

<section class="brands">
    <div class="small-containter">
        <div class="row">
            <div class="col-5">
                <img src="{{ asset('project/img/logo-coca-cola.png') }}" alt="">
            </div>
            <div class="col-5">
                <img src="{{ asset('project/img/img/logo-godrej.png') }}" alt="">
            </div>
            <div class="col-5">
                <img src="{{ asset('project/img/logo-oppo.png') }}" alt="">
            </div>
            <div class="col-5">
                <img src="{{ asset('project/img/logo-paypal.png') }}" alt="">
            </div>
            <div class="col-5">
                <img src="{{ asset('project/img/logo-philips.png') }}" alt="">
            </div>
        </div>
    </div>
</section>






@include('frequent.footer')
@endsection
