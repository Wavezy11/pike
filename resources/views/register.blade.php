<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/css/register.css') }}">
</head>
<body>
    <header class="nav">
        <div class="logo">
            <img src="{{ asset('src/img/logo.png') }}" alt="Logo">
        </div>
        <div class="headerr">
            <a href="All.blade.php">All</a>
            <a href="Men.blade.php">Men</a>
            <a href="Woman.blade.php">Woman</a>
            <a href="ShoppingCart.blade.php">
                <img src="{{ asset('src/img/shopping-cart-svgrepo-com.svg') }}" alt="Shopping Cart" class="shoppingcart">
            </a>
            <form action="{{ route('search') }}" method="get">
                @csrf
                <input type="search" placeholder="Search..." name="search" id="search-input">
                <button type="submit">Search</button>
            </form>
            <a href="login.php">
                <button>Login</button>
            </a>
        </div>
    </header>

    <div class="container">
        <div id="content">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
