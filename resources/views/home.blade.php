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
    <a href="/login"><img src="{{ asset('src/img/profile-circle-svgrepo-com.svg') }}" alt="logo" class="profile"></a>
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
        <div class="border-bottom-gray">
            <img src="{{ asset('src/img/Search.png')}}" alt="Search" class="tiny margin-left-2-5">
            <input type="search" placeholder="search..." name="search"class="border-none background-offwhite">
        </div>
</form>
</div>
</header>
<h1 style="color:white">hallo</h1>
<div class="container-body">
    <img src="{{ asset('src/img/Pike.png')}}" class="img" alt="banner">
    <h2 class="MLeft20">Popular subgenres:</h2>
    <div class="MLeft15 Fcontainer">
        
        <div class="CardBorder">
            <a href="" class="MRight15 TDecor0">
                <img class="same-size" src="{{ asset('src/img/hoops.png')}}" alt="Shoe1">
                <p>hoops</p>
            </a>
        </div>

        <div class="CardBorder">
            <a href="" class="MRight15 TDecor0">
                <img class="same-size" src="{{ asset('src/img/militias.png')}}" alt="Shoe2">
                <p>Militias</p>
            </a>
        </div>

        <div class="CardBorder">
            <a href="" class="MRight15 TDecor0">
                <img class="same-size" src="{{ asset('src/img/mountaintops.png')}}" alt="Shoe3">
                <p>Mountaintops</p>
            </a>
        </div>
        <div class="CardBorder">
            <a href="" class="MRight15 TDecor0"><img class="same-size"
            src="{{ asset('src/img/unicorns.png')}}" alt="Shoe4">
                <p>Unicorns</p>
            </a>
        </div>

        <div class="CardBorder">
            
            <a href="" class="MRight15 TDecor0">
                <img class="same-size" src="{{ asset('src/img/untouchables.png')}}" alt="Shoe5">
                <p>Untouchables</p>
            </a>
        </div>

    </div>
</div>
<h1 class="MLeft20">Featured Shoes:</h1>
<div class="Fcontainer">
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/untouchables.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/militias.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/hoops.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/mountaintops.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/unicorns.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/I-1234.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/FloorPedro3Modern.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
    <div class="CardBorder">
        <a href="" class="MRight20 TDecor0">
            <img src="{{ asset('src/img/zonderfun.png')}}" alt="" class="same-size">
            <p></p>
        </a>
    </div>
            <p></p>
        </a>
    </div>
</div>
</body>
</html>
