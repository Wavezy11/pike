<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/css/products.css') }}">
</head>
<body>
    <header>
    <div class="nav">
    <img src="{{ asset('src/img/logo.png') }}" alt="logo" class="logo">
    <img src="{{ asset('src/img/profile-circle-svgrepo-com.svg') }}" alt="logo" class="profile">
</div>

     <div class="headerr">
    <a href="products.blade.php"> <p class="all"> All
</p>
    </a>
    <a href="products.blade.php"> <p class="men"> Men
</p>
    </a>
    <a href="products.blade.php"> <p class="woman"> Woman
</p>
    </a>
  
    <img src="{{ asset('src/img/shopping-cart-svgrepo-com.svg') }}" alt="logo" class="shoppingcart">
    <img src="{{ asset('src/img/sell.png') }}" alt="logo" class="sell">
    <form action="blabla.php" method="post">
        <input type="search" placeholder="search..." name="search">
</form>


</div>
</header>
<div id="main">
<p class="size">
        Size type
</p><form action="huis.php" method="post">
    <div>
        <input type="checkbox" id="men" name="men" value="men">
        <label for="men">Men</label>
    </div>
    <div>
        <input type="checkbox" id="woman" name="woman" value="woman">
        <label for="woman">Woman</label>
    </div>
    <div>
        <input type="checkbox" id="children" name="children" value="children">
        <label for="children">Children</label>
    </div>
</form>
<div class="filter">

</div>

<div class="outline"> 

<div class="idk">
    
<img src="{{ asset('src/img/j4retronavy.png') }}" alt="logo" class="j4navy">

</div>

</div>

</div>
</div>
</body>
</html>