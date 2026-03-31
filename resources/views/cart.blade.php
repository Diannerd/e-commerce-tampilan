@extends('layouts.main')

@section('content')
<div class="container my-5 pt-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-white">Keranjang Belanja</h1>
        <p class="text-secondary">Produk yang baru saja Anda tambahkan ke dalam keranjang.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="glass-card p-5">
                <h5 class="mb-4">Isi Keranjang Anda:</h5>
                <hr class="border-secondary">
                
                @if(session('cart_count', 0) > 0)
                <p>Anda memiliki **{{ session('cart_count') }}** produk di dalam keranjang belanja.</p>
                @else
                <p>Keranjang Anda masih kosong.</p>
                @endif
                
                <hr class="border-secondary mt-4">
                <div class="d-flex justify-content-between">
                    <a href="/" class="btn btn-outline-light rounded-pill px-4">Lanjut Belanja</a>
                    @if(session('cart_count', 0) > 0)
                    <button class="btn btn-light rounded-pill px-4 fw-bold">Checkout Sekarang</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection