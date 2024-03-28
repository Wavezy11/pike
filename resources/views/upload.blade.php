<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images and Products</title>
</head>
<body>
    <h1>Upload Images and Products</h1>

    <!-- Formulier voor het uploaden van afbeeldingen -->
    <form action="{{ route('upload.form') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image">
        <button type="submit">Upload Image</button>
    </form>

    <!-- Formulier voor het toevoegen van producten -->
    <form action="{{ route('add.product') }}" method="post">
        @csrf
        <label for="shoe_name">Shoe Name:</label>
        <input type="text" name="shoe_name" id="shoe_name">
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01">
        <label for="size">Size:</label>
        <input type="number" name="size" id="size">
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
