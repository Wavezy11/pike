<?php

// Dummy login functionaliteit met een eenvoudige database
$servername = "localhost";
$username = "root";
$password = ""; // Vervang dit door je eigen wachtwoord
$dbname = "pike"; 

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang gebruikersinvoer
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Dummy gebruikersnaam en wachtwoord
    $dummy_username = "admin";
    $dummy_password = "admin";

    // Controleer of de gebruikersnaam en het wachtwoord overeenkomen met de dummy-informatie
    if ($email == $dummy_username && $pass == $dummy_password) {
        echo "Login successful!";
        header('Location: products.blade.php');
    } else {
        echo "Incorrect username or password!";
    }
}

// Sluit de databaseverbinding
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        .logo {
            max-width: 150px;
            display: block;
            margin: 0 auto;
        }

        .headerr {
            text-align: center;
            padding: 20px;
        }

        .headerr a {
            text-decoration: none;
        }

        .headerr button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .headerr button:hover {
            background-color: #45a049;
        }

        .form-container {
            background-color: #fefefe;
            padding: 20px;
            max-width: 300px;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            margin-top: 0;
            text-align: center;
        }

        .form-container input[type=text], 
        .form-container input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <img src="{{ asset('src/img/logo.png') }}" alt="logo" class="logo">
        </div>
    </header>
    <div class="headerr">
        <h2>Login</h2>
        <div class="form-container">
        <form action="/login" method="post">
    @csrf
    <label for="email">email</label>
    <input type="username" id="username" name="email" placeholder="Your username.." required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password.." required>

    <button type="submit">Login</button>
</form>

        </div>
    </div>
</body>
</html>
