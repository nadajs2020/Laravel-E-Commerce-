@extends('frequent.master')

@section('title')
    Shop
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
                    <li><a href="/home">Home</a></li>
                    <li><a class="active"  href="shop">Shop</a></li>
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

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html' ; ">
                <img src="{{ asset('project/img/product-1.jpg') }}">
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




            @foreach ($sales as $getProduct)
                @include('frequent.product')
            @endforeach



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
                <img src="{{ asset('project/img/product-7.jpg') }}">
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
                <img src="{{ asset('project/img/product-10.jpg') }}">
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
                <img src="{{ asset('project/img/product-12.jpg') }}">
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

    <section id="pagination" class="section-p1 section-m1">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href=""><i class="fa fa-long-arrow-alt-right"></i></a>
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
