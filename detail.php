<?php 
include 'data.php';
include 'functions.php';

$id = $_GET['id'];

if ($_POST) {
    $qty = $_POST['qty'];
    $catatan = $_POST['catatan'];

    tambahKeCart($id, $qty, $catatan);
    header("Location: cart.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Detail Menu</title>

<style>
body {
    font-family: Arial;
    margin: 0;
    background: #f5f5f5;
}

/* HEADER */
header {
    background: #ff6b00;
    color: white;
    padding: 15px 30px;
}

/* CONTAINER */
.container {
    width: 40%;
    margin: 40px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    text-align: center;
}

/* IMAGE */
img {
    width: 100%;
    border-radius: 10px;
}

/* INPUT */
input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
}

/* BUTTON */
button {
    background: #28a745;
    color: white;
    padding: 10px;
    border: none;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #218838;
}
</style>

</head>
<body>

<header>
    <h2>Detail Menu</h2>
</header>

<div class="container">

<!-- GAMBAR -->
<img src="images/<?= $produk[$id]['gambar']; ?>">

<h2><?= $produk[$id]['nama']; ?></h2>
<p><b>Rp <?= $produk[$id]['harga']; ?></b></p>

<form method="POST">
    Jumlah:
    <input type="number" name="qty" value="1">

    Catatan:
    <textarea name="catatan"></textarea>

    <button type="submit">Tambah ke Keranjang</button>
</form>

</div>

</body>
</html>