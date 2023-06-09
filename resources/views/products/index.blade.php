
@section('head')
       <!-- Open Graph metadata -->
       <meta property="og:title" content="Ngonyoku | Kbanda">
       <meta property="og:description" content="Shop . Discover . Delight">
       <meta property="og:image" content="{{ asset('/img/logo-dark.png') }}">
       <meta property="og:type" content="website">
@endsection

@extends('layout')
@section('content')

<!-- Image Slider -->
{{-- @include('partials.carousel') --}}

<div class="container">
    <h2>Our Products</h2>
    {{ $products->links('pagination::bootstrap-5') }}
    <div class="row">
        @unless (count($products) == 0)
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card mb-4 d-flex flex-column">

                    @if ($product->images->count() > 0)
                        <img src="{{ asset('/img/products/' . $product->images->first()->filename) }}" alt="Product Image" class="card-img-top product-image" data-zoomable>        
                    @else
                        <img src="{{ asset('img/logo-dark.png')}}" class="card-img-top product-image" alt="Product Image" data-zoomable>
                    @endif       
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <h6 class="card-text text-warning"><b>Ksh. {{$product->price}}</b></h6>
                        <a href="/products/{{$product->id}}" class="btn btn-outline-warning">View Details</a>
                        {{-- <a href="/cart/add/{{$product->id}}" class="btn btn-warning mt-2">Add to Cart</a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <h4>No Products available!</h4>
        @endunless
    </div>
    <br>
    {{ $products->links('pagination::bootstrap-5') }}
</div>
@endsection
