<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $namaToko = "TechGadget Store";
    $produk = [
        [
            'id' => 1,
            'nama' => 'Smartphone X', 
            'harga' => 'Rp 8.000.000', 
            'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800',
            'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz'
        ],
        [
            'id' => 2,
            'nama' => 'Smartphone X', 
            'harga' => 'Rp 8.000.000', 
            'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800',
            'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz'
        ],
    ];

    return view('index', compact('namaToko', 'produk'));
});

Route::get('/product/{id}', function ($id) {
    // 1. Definisikan variabel namaToko di sini juga
    $namaToko = "TechGadget Store"; 

    $produk = [
        1 => ['nama' => 'Smartphone X', 'harga' => 'Rp 8.000.000', 'img' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=800', 'specs' => 'Snapdragon 8 Gen 3, 12GB RAM, OLED 120Hz', 'desc' => 'Ponsel pintar dengan kamera terbaik di kelasnya.'],
        2 => ['nama' => 'Laptop Pro 14', 'harga' => 'Rp 15.000.000', 'img' => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?q=80&w=687', 'specs' => 'M3 Chip, 16GB RAM, 512GB SSD, Retina Display', 'desc' => 'Laptop bertenaga untuk profesional kreatif.'], 
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
    
    return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
})->name('cart.add');