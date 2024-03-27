<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCartItem;

class ShoppingCartItemController extends Controller
{
    public function show()
    {
        // Haal alle winkelwagenitems op uit de database
        $shoppingCartItems = ShoppingCartItem::all();
        
        // Geef de view 'shopping.cart' door met de opgehaalde items
        return view('shopping.cart', ['shoppingCartItems' => $shoppingCartItems]);
    }

    public function addToCart(Request $request, $productId)
    {
        // Zoek het product op basis van het productId
        $product = Product::findOrFail($productId);

        // Maak een nieuw ShoppingCartItem aan en sla het product erin op
        $shoppingCartItem = new ShoppingCartItem();
        $shoppingCartItem->product_id = $product->id;
        $shoppingCartItem->save();

        // Redirect naar de winkelwagenpagina
        return redirect()->route('shopping.cart');
    }

    public function removeFromCart(Request $request, $itemId)
    {
        // Zoek het winkelwagenitem op basis van het itemId
        $shoppingCartItem = ShoppingCartItem::findOrFail($itemId);
    
        // Verwijder het winkelwagenitem
        $shoppingCartItem->delete();
    
        // Redirect naar de winkelwagenpagina
        return redirect()->route('shopping.cart');
    }
    
}
