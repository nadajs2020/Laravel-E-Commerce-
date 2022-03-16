@extends('frequent.master')

@section('title')
    Blog
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
                    <li><a  class="active" href="blog">Blog</a></li>
                    <li><a href="about">About</a></li>
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
    <img class="image" src="{{ asset('project/img/textile-1262984_1920.jpg') }}" width="100%" />
    <div class="page">
        <h1>#readmore</h1>
        <p>Loremamet consectetur adipisicing</p>
    </div>
</div>


<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/portrait-3220832_1920.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/fashion-3805025_1920.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/category-3.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/category-2.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/category-1.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="{{ asset('project/img/pexels-terje-sollie-298863.jpg') }}" alt="" />
        </div>
        <div class="blog-details">
            <h4>Lorem, ipsum dolor sit amet consectetur</h4>
            <p>perferendis accusantium amet est asperiores praesentium autem aut incidunt a quo, iure dolorum perspiciatis. Impedit, quo.</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>13/01</h1>
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
