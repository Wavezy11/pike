<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('src/css/login.css')}}">
</head>
<body>
    <header>
        <div class="nav">
        <img src="{{ asset('src/img/logo.png') }}" method="POST" alt="logo" class="logo">
            <a href="/login"><img src="{{ asset('src/img/profile-circle-svgrepo-com.svg') }}"
                alt="logo" class="profile"></a>
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
        <form action="blabla.php" method="HEAD"class="form">
            <div class="border-bottom-gray">
                <img src="{{ asset('src/img/Search.png')}}" alt="Search" class="tiny margin-left-2-5">
                <input type="search" placeholder="search..." name="search"class="border-none background-offwhite">
            </div>
        </form>
        </div>
    </header>
    <form action="/processing" method="HEAD" class="center">
        <div class="W640 BB1">
            <h2>Account</h2>
        </div>
        <div class="DFRow">
            <div class="FDColumn">
                <div class="MTop10 ML20">
                    <label for="FName">First name<span class="red">*</span></label>
                    <input class="Finput" type="text" name="FName">
                </div>
                <div class="MTop10">
                    <label for="DOB">Date Of Birth<span class="red">*</span></label>
                    <input class="Finput" type="date" name="DOB">
                </div>
                <div class="MTop10 ML40">
                    <label for="Gender">Gender<span class="red">*</span></label>
                    <input class="Finput" type="text" name="Gender">
                </div>
            </div>
            <div class="FDColumn ML20">
                <div class="MTop10 ML10">
                    <label for="LName">Last name<span class="red">*</span></label>
                    <input class="Finput" type="text" name="LName">
                </div>
                <div class="MTop10">
                    <label for="PCode">Postal Code<span class="red">*</span></label>
                    <input class="Finput" type="text" name="PCode">
                </div>
            </div>
        </div>
        <h2 class="W640 BB1">Inlog Data</h2>
    </div>
    <div class="DFRow">
        <div class="FDColumn">
            <div class="MTop10 ML55">
                <label for="Email">Email<span class="red">*</span></label>
                <input class="Finput" type="Email" name="Email">
            </div>
            <div class="MTop10">
                <label for="TNumber">PhoneNumber<span class="red">*</span></label>
                <input class="Finput" type="number" name="TNumber">
            </div>
        </div>
            <div class="MTop10 ML20">
                <label for="Pword">Password<span class="red">*</span></label>
                <input class="Finput" type="password" name="Pword">
            </div>
    </div>
        <div class="MTop20">
            <input class="Finput" type="checkbox" name= "MailList">
            <label for="MailList">Yes, I want to receive emails about the latest
                news, exclusive offers and rewards.</label>
        </div>
        <div class="MTop10">
            <input class="Finput" type="checkbox" name="TOS">
            <label for="TOS">Yes,  i have agree to the Terms and
                Conditions and confirm that you have read the Privacy Statement.</label>
        </div>
        <div class="MTop20 BC">
            <input class="Finput" type="submit" value="Register">
        </div>
    </div>
    </form>
</body>
</html>
