<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'shoe_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'size' => 'required|numeric',
        ]);

        Product::create([
            'shoe_name' => $request->shoe_name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
        ]);

        return redirect()->back()->with('success', 'Product added successfully.');
    }
}
