<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <a href="show.php">Lihat data produk</a>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="input nama produk">
        <input type="number" name="price" placeholder="input harga produk">
        <input type="file" name="image" >
        <input type="submit" value="simpan" name="submit">
    </form>
</body>
</html>