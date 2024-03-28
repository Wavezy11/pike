<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('src/css/cart.css') }}">
    <title>Shopping Cart</title>
</head>
<body>
<header class="nav">
    <div class="logo">
        <img src="{{ asset('src/img/logo.png') }}" alt="logo">
    </div>
    <div class="headerr">
        <a href="All.blade.php">All</a>
        <a href="Men.blade.php">Men</a>
        <a href="woman.blade.php">Woman</a>

        <img src="{{ asset('src/img/sell.png') }}" alt="sell" class="sell">
        <form action="{{ route('search') }}" method="get">
            @csrf
            <input type="search" placeholder="Search..." name="search">
            <button type="submit">Search</button>
        </form>
        <a href="login.php">
            <button>Login</button>
        </a>
    </div>
</header>
<div class="container">
    <h2>Shopping Cart</h2>
    <div class="cart-items">
    <!-- Loop door alle winkelwagenitems -->
    @foreach($shoppingCartItems as $shoppingCartItem)
        <div class="cart-item">
            <!-- Productafbeelding en informatie -->
            <img src="{{ asset($shoppingCartItem->product->image) }}" alt="{{ $shoppingCartItem->product->shoe_name }}">
            <div class="item-info">
                <h3>{{ $shoppingCartItem->product->shoe_name }}</h3>
                <span class="price" data-unit-price="{{ $shoppingCartItem->product->price }}">{{ $shoppingCartItem->product->price }}</span>
                <form action="{{ route('update.cart', $shoppingCartItem->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="number" name="quantity" value="{{ $shoppingCartItem->quantity }}" min="1" class="quantity-input">
                    <button type="submit" class="update-btn">Update</button>
                    <button type="button" class="delete-btn" onclick="removeFromCart('{{ $shoppingCartItem->id }}')">Delete</button>                </form>
            </div>
        </div>
    @endforeach
</div>

    <!-- Totaalprijs en knoppen -->
    <div class="summary">
        <div class="total-price">
            <p>Total Price: ${{ $totalPrice }}</p>
        </div>
        <button id="buyBtn" onclick="checkLogin()">Buy</button>
    </div>
</div>
<script>function removeFromCart(itemId) {
    if (confirm('Are you sure you want to remove this item from your cart?')) {
        // Voer hier de code uit om het item uit de winkelwagen te verwijderen
        fetch(`/remove-from-cart/${itemId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        .then(response => {
            if (response.ok) {
                window.location.reload(); // Herlaad de pagina om de bijgewerkte winkelwagen te tonen
            } else {
                throw new Error('Failed to remove item from cart.');
            }
        })
        .catch(error => {
            console.error(error);
            alert('Failed to remove item from cart. Please try again.');
        });
    }
}

    // JavaScript om de prijs bij te werken wanneer de hoeveelheid verandert
    const quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach(input => {
        input.addEventListener('change', () => {
            const itemInfo = input.closest('.item-info');
            const priceSpan = itemInfo.querySelector('.price');
            const unitPrice = parseFloat(priceSpan.dataset.unitPrice); // Haal de eenheidsprijs op uit het data-attribuut
            const newQuantity = parseInt(input.value);
            const newPrice = unitPrice * newQuantity; // Bereken de nieuwe prijs
            priceSpan.textContent = newPrice.toFixed(2); // Werk de prijs in de weergave bij
        });
    });

    function checkLogin() {
        // Voer hier code uit om te controleren of de gebruiker is ingelogd
        // Als de gebruiker niet is ingelogd, toon dan een foutmelding
        // Vervang deze voorbeeldcode door je eigen authenticatiecode
        const isLoggedIn = true; // Voorbeeld: vervang door echte authenticatiecheck
        if (!isLoggedIn) {
            alert('Please login to buy items.'); // Toon foutmelding
        } else {
            alert('Items purchased successfully!');
        }
    }
</script>
</body>
</html>
