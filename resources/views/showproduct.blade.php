<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/css/showproduct.css') }}">
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
        <div class="product-details-container">
            <div class="product-image">
                <img src="{{ asset($product->image) }}" alt="{{ $product->shoe_name }}" class="shoeimage">
            </div>
            <div class="product-info">
                <h2>{{ $product->shoe_name }}</h2>
                <p class="price">Price: ${{ $product->price }}</p>
                <!-- Additional product information can be added here -->
            </div>
        </div>
        <div class="size-selection">
            <h3>Select Size:</h3>
            <form method="post" action="{{ route('addToCart', ['id' => $product->id]) }}">
                @csrf
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="size">Size:</label>
                <select name="size" id="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" value="1" min="1">
                <button type="submit">Add to Cart</button>
            </form>
            <!-- Buy button can be placed here as well -->
        </div>

        <div class="additional-info">
            <h3>Additional Information</h3>
            <p>Description: {{ $product->description }}</p>
            <p>Release Date: {{ $product->ReleaseDate }}</p>
            <p>SKU: {{ $product->SKU }}</p>
            <!-- Additional information such as shipping, return policy, etc. can be added here -->
            <p>Shipping: Free Shipping on Orders Over $50</p>
            <p>Return Policy: 30 Days Money Back Guarantee</p>
        </div>
    </div>
    <footer>
        <!-- Footer content goes here -->
    </footer>

    <script>
        document.getElementById('buy-button').addEventListener('click', function(event) {
            // Check if a size is selected
            if (!document.getElementById('size').value) {
                event.preventDefault();
                alert('Please select a size.');
            }
            // Check if a gender is selected
            else if (!document.querySelector('input[name="gender"]:checked')) {
                event.preventDefault();
                alert('Please select a gender.');
            }
            // Check if a quantity is entered
            else if (!document.getElementById('quantity').value || parseInt(document.getElementById('quantity').value) < 1) {
                event.preventDefault();
                alert('Please enter a valid quantity.');
            }
        });
    </script>
</body>
</html>
