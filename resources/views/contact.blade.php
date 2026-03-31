@extends('layouts.main')

@section('content')
<div class="container my-5 pt-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-white">Hubungi Kami</h1>
        <p class="text-secondary">Punya pertanyaan? Tim kami siap membantu Anda.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="glass-card p-5 text-center h-100">
                <i class="bi bi-envelope fs-1 price-tag mb-4"></i>
                <h5>Surel Toko:</h5>
                <p class="text-secondary mt-3">support@techgadget.store</p>
                <a href="mailto:support@techgadget.store" class="btn btn-outline-light rounded-pill px-4 mt-3">Kirim Email</a>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="glass-card p-5 text-center h-100">
                <i class="bi bi-telephone fs-1 price-tag mb-4"></i>
                <h5>Nomor Telepon:</h5>
                <p class="text-secondary mt-3">+62-812-3456-7890</p>
                <a href="tel:+6281234567890" class="btn btn-outline-light rounded-pill px-4 mt-3">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
@endsection