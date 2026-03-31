<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TechGadget Store')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        /* 1. Reset & Base Style */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
            color: #fff;
            min-height: 100vh;
            margin: 0;
        }

        /* 2. Navbar Styling */
        .navbar-nav .nav-link {
            margin-left: 15px;
            margin-right: 15px;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        /* 3. Carousel Styling */
        .carousel-item img {
            height: 550px;
            object-fit: cover;
            filter: brightness(50%);
        }
        .carousel-caption {
            bottom: 25%;
            text-align: left;
        }
        .btn-shop {
            background-color: #fff;
            color: #000;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-shop:hover {
            background-color: #00d4ff;
            color: #fff;
        }

        /* 4. Glassmorphism Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* 5. Typography & Accents */
        .product-title {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .price-tag {
            color: #00d4ff; /* Biru Neon */
            font-weight: bold;
        }
        
        /* Custom scrollbar agar lebih estetik */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }
        ::-webkit-scrollbar-thumb {
            background: #444;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00d4ff;
        }
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