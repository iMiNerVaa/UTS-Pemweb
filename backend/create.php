<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Define the upload directory
    $uploadDir = __DIR__ . '/../upload/';

    // Create the directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Find the last ID in the products table
    $result = mysqli_query($db_connect, "SELECT MAX(id) AS max_id FROM products");
    $row = mysqli_fetch_assoc($result);
    $lastId = $row['max_id'] + 1;

    $randomFilename = $lastId . '-' . $image;

    $uploadPath = $uploadDir . $randomFilename;

    if (move_uploaded_file($tempImage, $uploadPath)) {
        // Insert data into the database with the sequential ID
        mysqli_query($db_connect, "INSERT INTO products (id, name, price, image) VALUES ('$lastId', '$name', '$price', 'upload/$randomFilename')");
        echo "berhasil upload";
    } else {
        echo "gagal upload";
    }
}
?>
