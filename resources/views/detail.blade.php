@extends('layouts.main')

@section('content')
<div class="container my-5 pt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $item['img'] }}" class="img-fluid rounded-4 shadow-lg border border-secondary" alt="{{ $item['nama'] }}">
        </div>
        <div class="col-md-6">
            <div class="glass-card p-5">
                <h1 class="display-4 fw-bold">{{ $item['nama'] }}</h1>
                <h3 class="price-tag mb-4">{{ $item['harga'] }}</h3>
                <hr class="border-secondary">
                <h5>Spesifikasi:</h5>
                <p class="text-secondary">{{ $item['specs'] }}</p>
                <h5 class="mt-4">Deskripsi:</h5>
                <p class="text-secondary">{{ $item['desc'] }}</p>
                
                <a href="{{ route('cart.add') }}" class="btn btn-light btn-lg rounded-pill px-5 fw-bold mt-4">
                    Tambahkan ke Keranjang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection