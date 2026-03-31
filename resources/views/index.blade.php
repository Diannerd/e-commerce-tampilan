@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<div id="gadgetCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#gadgetCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#gadgetCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#gadgetCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#gadgetCarousel" data-bs-slide-to="3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=1600&auto=format&fit=crop" class="d-block w-100" alt="Smartphone">
            <div class="carousel-caption d-none d-md-block container text-start">
                <h1 class="display-3 fw-bold text-white">Next-Gen Smartphone</h1>
                <p class="fs-5 text-white">Experience the future of mobile technology in your hand.</p>
                <a href="{{ route('product.detail', 1) }}" class="btn btn-shop mt-3">Shop Now</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1600&auto=format&fit=crop" class="d-block w-100" alt="Watch">
            <div class="carousel-caption d-none d-md-block container text-start">
                <h1 class="display-3 fw-bold text-white">Smart Lifestyle</h1>
                <p class="fs-5 text-white">Track your health and stay connected elegantly.</p>
                <a href="{{ route('product.detail', 2) }}" class="btn btn-shop mt-3">Shop Now</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1589003077984-894e133dabab?q=80&w=1600&auto=format&fit=crop" class="d-block w-100" alt="Speaker">
            <div class="carousel-caption d-none d-md-block container text-start">
                <h1 class="display-3 fw-bold text-white">Immersive Audio</h1>
                <p class="fs-5 text-white">Premium sound quality for your ultimate home theater.</p>
                <a href="#" class="btn btn-light rounded-pill px-4 fw-bold">Shop Now</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1600&auto=format&fit=crop" class="d-block w-100" alt="Headphone">
            <div class="carousel-caption d-none d-md-block container text-start">
                <h1 class="display-3 fw-bold text-white">Pure Soundscape</h1>
                <p class="fs-5 text-white">Noise cancellation for your deep focus sessions.</p>
                <a href="#" class="btn btn-light rounded-pill px-4 fw-bold">Shop Now</a>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#gadgetCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#gadgetCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<div class="container my-5">
    <h2 class="mb-5 fw-bold text-center">Premium Collections</h2>
    <div class="row">
        @foreach($produk as $item)
        <div class="col-md-4 mb-4">
            <div class="card glass-card h-100 p-3">
                <img src="{{ $item['img'] }}" class="card-img-top rounded-4" alt="{{ $item['nama'] }}" style="height: 220px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title product-title mt-3 text-white">{{ $item['nama'] }}</h5>
                    <p class="card-text price-tag">{{ $item['harga'] }}</p>
                    <a href="#" class="btn btn-outline-light rounded-pill px-4 mt-2">Explore Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection