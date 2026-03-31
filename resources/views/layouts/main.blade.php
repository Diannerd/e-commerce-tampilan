<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { padding: 60px 0; background: #f8f9fa; }
        <style>
    body { background-color: #000; color: #fff; }
    .carousel-item img {
        height: 500px;
        object-fit: cover;
        filter: brightness(60%); /* Agar teks caption lebih terbaca */
    }
    .carousel-caption {
        bottom: 20%;
        text-align: left; /* Biar mirip referensi gambar kamu */
    }
    .btn-shop {
        background-color: #fff;
        color: #000;
        border-radius: 50px;
        padding: 10px 30px;
        font-weight: bold;
    }
    .navbar-nav .nav-link {
    margin-left: 15px;
    margin-right: 15px;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 1px;
}
    /* Latar belakang utama dengan gradasi abu-abu modern */
    body { 
        background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
        color: #fff;
        min-height: 100vh;
    }

    /* Efek Glassmorphism untuk Card dan elemen lainnya */
    .glass-card {
        background: rgba(255, 255, 255, 0.05); /* Putih transparan tipis */
        backdrop-filter: blur(15px); /* Efek blur kaca */
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.1); /* Outline tipis agar terlihat glossy */
        border-radius: 20px;
        transition: transform 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Mempercantik tampilan teks produk */
    .product-title {
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .price-tag {
        color: #00d4ff; /* Warna aksen biru neon agar lebih tech-oriented */
        font-weight: bold;
    }
</style>
</style>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>