<?php
// edit.php

require 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch the product details from the database based on the given ID
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $productId");

    if ($result) {
        $product = mysqli_fetch_assoc($result);

        // Display the edit form
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Product</title>
        </head>

        <body>
            <h1>Edit Product</h1>
            <form action="backend/update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product['id']; ?>">

                <label for="name">Nama produk:</label>
                <input type="text" name="name" value="<?= $product['name']; ?>" required><br>

                <label for="price">Harga:</label>
                <input type="number" name="price" value="<?= $product['price']; ?>" required><br>

                <label for="image">Gambar produk:</label>
                <input type="file" name="image"><br>

                <input type="submit" value="Update">
            </form>
        </body>

        </html>
<?php
    } else {
        echo "Error mengambil data produk.";
    }
} else {
    echo "Invalid request.";
}
?>