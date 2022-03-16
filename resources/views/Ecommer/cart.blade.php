@extends('frequent.master')

@section('title')
  Card
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
                        <li><a href="/contact">Contact</a></li>
                        <li id="lg-bag"><a  class="active" href="shopping-cart"><i class="fa fa-shopping-bag"></i></a></li>
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


    <section id="cart" class="section-p1">
        @if(count($lastOrderDetails) > 0)

        <table width="100%">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>price</td>
                    <td>discount</td>
                    <td>amount</td>
                    <td>img</td>
                    <td>Subtotal</td>
                    <td>options</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($lastOrderDetails as $KS => $item )
                @php
                    $SubtotalPrice = 0;
                @endphp
                     @php
                     $product = $item->product;
                      @endphp
                    {{-- price * amount - discount ===  Subtotal --}}
                     @php
                        $Subtotal = $item->price * $item->amount *(1 - $item->discount / 100);
                        $Subtotal = ceil($Subtotal * 100) / 100;
                        $SubtotalPrice += $Subtotal;
                     @endphp
                <tr>
                    <td>{{ $KS + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    {{-- <td><a href="#"> <i class="fa fa-times-circle"></i> </a></td> --}}
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->discount}}</td>
                    <td>{{ $item->amount}}</td>
                    <td><img src="{{ asset('project/img/product-1.jpg') }}" alt=""></td>
                    <td>{{ $Subtotal }}</td>
                    {{-- <td><input type="number" value="1"></td> --}}

                    <td>
                        <a class="btn-info"
                           href="/prodcut/{{$item->product_id}}/details">
                            More Details
                        </a>
                        <form action="/shopping-cart/delete" method="post" id="removeForm">
                            @csrf
                            <input type="hidden" name="product" value="{{$product->id}}">
                            <button id="removeBtn"
                                    type="submit" class="btn-danger">
                                Remove
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <button class="btn-success">
                Checkout Order
            </button>
            <form action="/shopping-cart/delete-all"
                  class="mr-auto"
                  method="post" id="removeAllForm">
                @csrf
                <button class="btn-danger2" id="removeAllBtn">
                    Cancel Order
                </button>
            </form>
        </div>
    @else
        <div class="alert alert-warning mb-0" role="alert">
            You have no product currently in your shopping cart!
        </div>
    @endif
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupons</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="text">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 360</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>{{ $SubtotalPrice }}</strong></td>
                </tr>
            </table>
            <button class="text">Proceed to checkout</button>
        </div>
    </section>


    @include('frequent.footer')
@endsection
