<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $namaToko = "TechGadget Store";
    $produk = [
        [
            'id' => 1,
            'nama' => 'Smartwatch Pro', 
            'harga' => 'Rp 8.000.000', 
            'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1600&auto=format&fit=crop',
            'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz'
        ],
        [
            'id' => 2,
            'nama' => 'Smartphone X', 
            'harga' => 'Rp 8.000.000', 
            'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800',
            'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz'
        ],
        [
            'id' => 3,
            'nama' => 'JBL Speaker', 
            'harga' => 'Rp 3.000.000', 
            'img' => 'https://images.unsplash.com/photo-1589003077984-894e133dabab?q=80&w=1600&auto=format&fit=crop',
            'specs' => 'Bluetooth 5.1+, USB-C charging, "Playtime Boost" for extra hours, and PartyBoost/Auracast for pairing multiple speakers'
        ],

    ];

    return view('index', compact('namaToko', 'produk'));
});

Route::get('/product/{id}', function ($id) {
    // 1. Definisikan variabel namaToko di sini juga
    $namaToko = "TechGadget Store"; 

    $produk = [
        1 => ['nama' => 'Smartphone X', 'harga' => 'Rp 8.000.000', 'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800', 'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz', 'desc' => 'Ponsel pintar dengan kamera terbaik di kelasnya.'],
        2 => ['nama' => 'Smartwatch Pro', 'harga' => 'Rp 6.000.000', 'img' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=1600&auto=format&fit=crop', 'specs' => ' S10 SiP dual-core processor, 64GB storage, and a 9.7mm thick casing with a 416x496 pixel OLED display (1220 sq mm area)', 'desc' => 'Smartwatch dengan fitur kesehatan canggih dan desain elegan.'], 
        3 => ['nama' => 'JBL Speaker', 'harga' => 'Rp 3.000.000', 'img' => 'https://images.unsplash.com/photo-1589003077984-894e133dabab?q=80&w=1600&auto=format&fit=crop', 'specs' => 'Bluetooth 5.1+, USB-C charging, "Playtime Boost" for extra hours, and PartyBoost/Auracast for pairing multiple speakers', 'desc' => 'Speaker portabel dengan suara yang kuat, jernih dan tahan air.'],
        4 => ['nama' => 'Wireless Headphones', 'harga' => 'Rp 5.000.000', 'img' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1600&auto=format&fit=crop', 'specs' => 'Bluetooth 5.3 or 5.4, 30–50+ hour battery life, ANC (Active Noise Cancellation), and USB-C fast charging. Standard, high-quality audio is driven by 30–40mm drivers, with support for AAC, LDAC, or SBC codecs.', 'desc' => 'Headphone nirkabel dengan kualitas suara premium dan fitur peredam bising aktif.'],
        ];

    // Cek apakah ID ada dalam daftar untuk mencegah error 'Undefined array key'
    if (!isset($produk[$id])) {
        abort(404);
    }

    $item = $produk[$id];

    // 2. Tambahkan 'namaToko' ke dalam fungsi compact()
    return view('detail', compact('item', 'namaToko'));
})->name('product.detail');

// Route untuk Menambah Keranjang
Route::get('/add-to-cart', function () {
    $currentCount = session('cart_count', 0);
    session(['cart_count' => $currentCount + 1]);

    // Route untuk Halaman Keranjang
Route::get('/cart', function () {
    $namaToko = "TechGadget Store";
    return view('cart', compact('namaToko'));
})->name('cart.view');
    
    return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
})->name('cart.add');

// Route untuk Halaman Kontak
Route::get('/contact', function () {
    $namaToko = "TechGadget Store";
    return view('contact', compact('namaToko'));
})->name('contact.view');