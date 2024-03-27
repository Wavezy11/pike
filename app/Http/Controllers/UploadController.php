<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class UploadController extends Controller
{
    public function upload(Request $request)
{
    // Valideer de ingediende gegevens
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'size' => 'required|integer',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Controleer of er een bestand is geüpload
    if ($request->hasFile('image')) {
        // Afbeelding uploaden
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Product aanmaken
        $product = new Product([
            'shoe_name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
        ]);
        $product->save();

        // Afbeelding aanmaken en koppelen aan het product
        $image = new Image([
            'name' => $imagePath,
            'product_id' => $product->id,
        ]);
        $image->save();

        return view("upload"); // Toon de uploadpagina
    } else {
        // Geen afbeelding geüpload, toon foutmelding
        return back()->withInput()->withErrors(['image' => 'Er is geen afbeelding geüpload.']);
    }
}

    
}
