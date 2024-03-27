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
       <!-- In resources/views/shoppingcart.blade.php -->

@foreach($shoppingCartItems as $shoppingCartItem)
    <div class="cart-item">
        <img src="{{ asset($shoppingCartItem->product->image) }}" alt="{{ $shoppingCartItem->product->shoe_name }}">
        <div class="item-info">
            <h3>{{ $shoppingCartItem->product->shoe_name }}</h3>
            <p>Price: $<span class="price">{{ $shoppingCartItem->product->price * $shoppingCartItem->quantity }}</span></p>
            <form action="{{ route('update.cart', $shoppingCartItem->id) }}" method="post" class="update-form">
                @csrf
                @method('PUT')
                <input type="number" name="quantity" value="{{ $shoppingCartItem->quantity }}" min="1" max="99" class="quantity-input">
                <button type="submit" class="update-btn">Update</button>
            </form>
            <form action="{{ route('remove.from.cart', $shoppingCartItem->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="remove-btn">Remove</button>
            </form>
        </div>
        <p>Total Price: ${{ $totalPrice }}</p>
    </div>
@endforeach

        </div>
    </div>
    <button id="buyBtn" onclick="checkLogin()">Buy</button>

    <script>
        // JavaScript to update price when quantity changes
        const quantityInputs = document.querySelectorAll('.quantity-input');
        quantityInputs.forEach(input => {
            input.addEventListener('change', () => {
                const itemInfo = input.closest('.item-info');
                const priceSpan = itemInfo.querySelector('.price');
                const currentPrice = parseFloat(priceSpan.textContent);
                const newQuantity = parseInt(input.value);
                const newPrice = currentPrice / (newQuantity - 1) * newQuantity;
                priceSpan.textContent = newPrice.toFixed(2);
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
