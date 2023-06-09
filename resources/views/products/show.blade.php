
@section('head')
    <meta property="og:title" content="{{ $product->title }}">
    <meta property="og:description" content="Order Now from KBanda">
    <meta property="og:url" content="{{Request::url()}}">
    @if ($product->images->count() > 0)
        <meta property="og:image" content="{{ asset('/img/products/' . $product->images->first()->filename) }}">    
    @endif    
@endsection

@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 image-container">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @if ($product->images->isNotEmpty())
                            @foreach ($product->images as $index => $image)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('img/products/' . $image->filename) }}" class="d-block w-100" alt="Product Image">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="{{ asset('img/logo-dark.png') }}" class="d-block w-100" alt="Product Image">
                            </div>
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Rest of your content -->
                <div class="col-md-6">
                    <h2>{{ $product->title }}</h2>
                    {{-- <p>Tags: {{ $product->tags }}</p> --}}
                    {{-- <p>Ratings: {{ $product->ratings }}</p> --}}
                    <p>{{ $product->description }}</p>
                    <h4>Ksh. {{ $product->price }} /per Item</h4>
                    {{-- <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" id="decrement-btn">-</button>
                            <input type="number" class="form-control input-sm" id="quantity" name="quantity" value="1" min="1">
                            <button class="btn btn-outline-secondary" type="button" id="increment-btn">+</button>
                        </div>
                    </div> --}}
            
                    {{-- <div class="mt-4">
                        <a href="#" class="btn btn-outline-warning btn-lg btn-block">Add to Cart</a>
                    </div> --}}
                    <div class="mt-3">
                        <a href="https://wa.me/254707670113?text=I%20would%20like%20to%20order%20{{ $product->title }}. {{Request::url()}}" class="btn btn-warning btn-lg btn-block">Order via WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection