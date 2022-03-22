@extends('layouts.main')
@section('content')


@foreach($product_array as $product)
<div id="products">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/'.$product->image)}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>{{$product->name}}</h2>

                        @if($product->sale_price != null);
                        <h3>{{$product->sale_price}}</h3>
                        <h3 style="text-decoration: line-through;">{{$product->price}}</h3>

                        @else
                        @endif
                        <h3>{{$product->price}}</h3>
                        <p>{{$product->description}}</p>
                        <p>{{$product->category}} -- {{$product->type}}</p>

                        <form action="{{ route('add_to_cart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="image" value="{{$product->image}}">
                            <input type="submit" name="" value="Add to cart" class="btn btn-primary">
                        </form>

                        {{-- <a class="btn" href="#">Buy Now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endforeach
@endsection
