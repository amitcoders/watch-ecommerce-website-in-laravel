@extends('layouts.main')
@section('content')
{{-- header start here  --}}
<!-- Products Start -->
<div id="products">
    <div class="container">
        <div class="section-header">
            <h2>Get Your Products</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
            </p>
        </div>
        <div class="row align-items-center">
            @foreach ($products as $product)


            <div class="col-md-3">
                <div class="product-single">
                    <div class="product-img">
                        <img src="{{ asset('assets/img/'.$product->image)}}" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h2>
                            <a href="{{ route('single-product',['id'=>$product->id])}}">{{ $product->name}}</a>
                        </h2>


                        @if($product->sale_price != null)
                        <h3>{{$product->sale_price}}</h3>
                        <h3 style="text-decoration: line-through;">{{ $product->price}}</h3>
                        @endif
                        <a class="btn" href="#">Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-5 text-center"><a href="" class="btn btn-primary">Buy Now</a></div>

    </div>
</div>
<!-- Products End -->
{{-- header end here  --}}
@endsection
