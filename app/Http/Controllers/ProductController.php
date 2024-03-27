<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCartItem;
use App\Models\CartItem;


class ProductController extends Controller
{
    public function index() {
        // Haal alle producten op uit de database
        $products = Product::all(); // Product is het model voor je producten
        return view('products', compact('products'));
    }
    
    // Methode om alle producten weer te geven
    public function showAllProducts() {
        // Haal alle producten op uit de database
        $products = Product::all(); // Product is het model voor je producten
        return view('products', compact('products'));
    }

    // Methode om een specifiek product weer te geven
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('showproduct', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        
        // Voer de zoekopdracht uit op basis van het zoektermijn
        $products = Product::where('shoe_name', 'like', '%' . $searchTerm . '%')->get();
        
        // Geef de gevonden producten weer in de weergave
        return view('products', compact('products'));
    }

    public function filterProducts(Request $request)
    {
        // Haal de geselecteerde sorteeroptie op uit het formulier
        $sortBy = $request->input('sort_by');
    
        // Haal alle producten op uit de database
        $products = Product::query();
    
        // Pas de sorteeroptie toe op de producten
        if ($sortBy === 'price') {
            $products->orderBy('price');
        } elseif ($sortBy === 'name') {
            $products->orderBy('shoe_name');
        } elseif ($sortBy === 'relevance') {
            // Implementeer hier de logica voor relevantie, bijvoorbeeld:
            // $products->orderBy('relevance', 'desc');
        }
    
        // Haal de gesorteerde producten op en geef deze door aan de view
        $products = $products->get(); // Hier wordt $products correct geïnitialiseerd
    
        // Geef de gesorteerde producten weer in de view
        return view('products', compact('products'));
    }
  
    public function shoppingCart()
    {
        // Haal de items uit het winkelwagentje op
        $cartItems = CartItem::all(); // Of gebruik een query om de cart items op te halen

        // Je moet hier de productgegevens voor elk item in het winkelwagentje ophalen
        // en deze doorgeven aan de view. Hieronder een voorbeeld:

        $productsInCart = [];
        foreach ($cartItems as $cartItem) {
            // Voor elk item in het winkelwagentje haal je het bijbehorende product op
            $product = Product::findOrFail($cartItem->product_id);
            // Voeg het product toe aan de array van producten in het winkelwagentje
            $productsInCart[] = $product;
        }

        // Geef de producten in het winkelwagentje door aan de view
        return view('shoppingcart', compact('productsInCart'));
    }

    public function addToCart(Request $request, $productId)
    {
        // Zoek het product op basis van het meegegeven product ID
        $product = Product::findOrFail($productId);
    
        // Voeg het product toe aan de winkelwagen
        $shoppingCartItem = new ShoppingCartItem();
        $shoppingCartItem->product_id = $productId;
        $shoppingCartItem->save();
    
        // Redirect de gebruiker naar de winkelwagenpagina na het toevoegen van het product
        return redirect()->route('shopping.cart');
    }
    
    

}

?>
