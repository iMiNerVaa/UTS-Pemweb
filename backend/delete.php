<?php
// delete.php

require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Delete the product from the database based on the given ID
    $result = mysqli_query($db_connect, "DELETE FROM products WHERE id = $productId");

    if ($result) {
        echo "Produk berhasil di hapus.";
    } else {
        echo "Produk gagal di hapus.";
    }
} else {
    echo "Invalid request.";
}