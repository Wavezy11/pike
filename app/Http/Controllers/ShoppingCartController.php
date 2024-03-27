<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCartItem; // Corrected model import
use App\Models\Product; // Added missing model import

class ShoppingCartController extends Controller
{
    public function index()
    {
        // Haal alle winkelwagenitems op uit de database
        $shoppingCartItems = ShoppingCartItem::all();
        
        // Bereken de totale prijs
        $totalPrice = 0;
        foreach ($shoppingCartItems as $item) {
            $totalPrice += $item->product->price * $item->quantity;
        }
        
        // Geef de view 'shoppingcart' door met de opgehaalde items en de totale prijs
        return view('shoppingcart', [
            'shoppingCartItems' => $shoppingCartItems,
            'totalPrice' => $totalPrice,
        ]);
    }



    // In app/Http/Controllers/ShoppingCartController.php

public function addToCart(Request $request, $productId)
{
    // Zoek het product op basis van het meegegeven product ID
    $product = Product::findOrFail($productId);

    // Zoek of het product al in het winkelwagentje staat
    $existingCartItem = ShoppingCartItem::where('product_id', $productId)->first();

    if ($existingCartItem) {
        // Als het product al in het winkelwagentje staat, verhoog de hoeveelheid met 1
        $existingCartItem->quantity += 1;
        $existingCartItem->save();
    } else {
        // Als het product nog niet in het winkelwagentje staat, maak een nieuw item aan
        $cartItem = new ShoppingCartItem();
        $cartItem->product_id = $productId;
        $cartItem->quantity = 1; // Stel de hoeveelheid in op 1
        $cartItem->save();
    }

    // Redirect de gebruiker naar de winkelwagenpagina na het toevoegen van het product
    return redirect()->route('shopping.cart');
}


    public function removeFromCart(Request $request, $itemId)
    {
        $shoppingCartItem = ShoppingCartItem::findOrFail($itemId);
        $shoppingCartItem->delete();
    
        // Redirect to the shopping cart page
        return redirect()->route('shopping.cart');
    }
    public function updateCart(Request $request, $itemId)
{
    $request->validate([
        'quantity' => 'required|numeric|min:1|max:99',
    ]);

    $shoppingCartItem = ShoppingCartItem::findOrFail($itemId);
    $shoppingCartItem->quantity = $request->quantity;
    $shoppingCartItem->save();

    return redirect()->route('shopping.cart');
}
}
