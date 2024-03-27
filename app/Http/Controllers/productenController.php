<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productenController extends Controller
{
    public function show() {
        return view('toonproducten');
    }
    // In de controllermethode om het specifieke product te tonen
public function showProduct($id) {
    $product = Product::findOrFail($id); // Product is het model voor je producten
    return view('product.show', compact('product'));
}

}
