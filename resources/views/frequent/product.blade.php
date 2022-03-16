<div class="pro">
    <img src="{{ $getProduct->image ? $getProduct->image->path : null }}">
    <div class="des">
        <span>adidas</span>
        <h5>{{ $getProduct->name }}</h5>
        <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <h4>$88</h4>
    </div>

    <div class="text-center">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="product" value="{{$getProduct->id}}">
            <button id="btnxx" type="submit">ADD</i></button>
             </form>
    </div>

</div>

{{-- <i class="fa fa-shopping-cart cart"> --}}
