@extends('frequent.master')

@section('title')
Sproduct
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
                    <li><a class="active" href="#">Shop</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="shop">About</a></li>
                    <li><a href="/contact">Contact</a></li>
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
</div>


<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="{{ asset('project/img/gallery-1.jpg') }}" width="100%" id="MainImage" />
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ asset('project/img/gallery-1.jpg') }}" width="100%" class="small-img" />
            </div>
            <div class="small-img-col">
                <img src="{{ asset('project/img/gallery-2.jpg') }}" width="100%" class="small-img" />
            </div>
            <div class="small-img-col">
                <img src="{{ asset('project/img/gallery-3.jpg') }}" width="100%" class="small-img" />
            </div>
            <div class="small-img-col">
                <img src="{{ asset('project/img/gallery-4.jpg') }}" width="100%" class="small-img" />
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>H0me / T-Shirt</h6>
        <h4>Men's Fashion T Shirt</h4>
        <h2>$139.00</h2>
        <select>
      <option>Select Size</option>
      <option>XL</option>
      <option>XXL</option>
      <option>Small</option>
      <option>Large</option>
    </select>
        <input type="number" value="1" />
        <button>Add To Cart</button>
        <h4>Product Details</h4>
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas
      quisquam corporis ea voluptate mollitia, sequi excepturi nulla
      laudantium possimus porro placeat ut nihil error tempora sapiente
      voluptates quo eius minima!</span
    >
  </div>
</section>


    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
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

<script>
    var MainImage = document.getElementById('MainImage');
    var small = document.getElementsByClassName('small-img');

    small[0].onclick = function() {
        MainImage.src = small[0].src;
    }
    small[1].onclick = function() {
        MainImage.src = small[1].src;
    }
    small[2].onclick = function() {
        MainImage.src = small[2].src;
    }
    small[3].onclick = function() {
        MainImage.src = small[3].src;
    }
</script>


@endsection
