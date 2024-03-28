<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/css/products.css') }}">
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
            <div class="headerr">
    ...
    <a href="{{ route('shopping.cart') }}"> <!-- Corrected route name -->
        <img src="{{ asset('src/img/shopping-cart-svgrepo-com.svg') }}" alt="shopping cart" class="shoppingcart">
    </a>
</div>


            <form action="{{ route('search') }}" method="get">
    @csrf
    <form action="{{ route('search') }}" method="get" id="search-form">
    @csrf
    <input type="search" placeholder="Search..." name="search" id="search-input">
    <button type="submit">Search</button>
</form>



<a href="{{ route('shopping.cart') }}"> <!-- Corrected route name -->
    <img src="{{ asset('src/img/shopping-cart-svgrepo-com.svg') }}" alt="shopping cart" class="shoppingcart">
</a>

        </div>
    </header>

    <div class="container">
        <div class="filter">
            <form action="" method="post" id="age">
                <label for="men">men</label>
                <input type="checkbox" name="men" id="men">
                <label for="men">woman</label>
                <input type="checkbox" name="woman" id="woman">
                <label for="men">child</label>
                <input type="checkbox" name="Child" id="child">
                <label for="men">preschool</label>
                <input type="checkbox" name="Preschool" id="preschool">
                <label for="men">toddler</label>
                <input type="checkbox" name="Toddler" id="toddler">
                <label for="men">infant</label>
                <input type="checkbox" name="Infant" id="infant">
               
</form>

<form action="{{ route('filterByPrice') }}" method="get" id="filter-form">
    @csrf
    <label for="price-range">Price range:</label>
    <input type="range" id="price-range" name="price_range" min="0" max="200" step="1">
    <span id="price-range-value">$0</span> - <span>$200</span>
    <button type="submit">Filter</button>
    <select name="sort_by" id="sort-by">
        <option value="price">Price</option>
        <option value="name">Name (A-Z)</option>
        <option value="relevance">Relevance</option>
    </select>
    <button type="submit">Apply Sort</button>
</form>


</div>

        <h1 class="textheader">All sneakers</h1>
        <div class="producten">
            @foreach ($products as $product)
                <div class="product">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->shoe_name }}" class="imageproduct">
                    <div class="product-details">
                        <h3>{{ $product->shoe_name }}</h3>
                        <p class="price">Price: ${{ $product->price }}</p>
                        <button class="buy-button">
                        <a href="{{ route('showproduct', ['id' => $product->id]) }}" class="buy-button">View Details</a>

            </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
