<?php 
include 'data.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Keranjang</title>

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
    width: 80%;
    margin: auto;
}

/* TABLE */
table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

th {
    background: #ff6b00;
    color: white;
}

/* BUTTON */
.btn {
    display: inline-block;
    background: #28a745;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 20px;
}

.btn:hover {
    background: #218838;
}
</style>

</head>
<body>

<header>
    <h2>🛒 Keranjang Belanja</h2>
</header>

<div class="container">

<?php if (!empty($_SESSION['cart'])): ?>
<table>
<tr>
    <th>Menu</th>
    <th>Jumlah</th>
    <th>Catatan</th>
</tr>

<?php foreach ($_SESSION['cart'] as $item): ?>
<tr>
    <td><?= $produk[$item['id']]['nama']; ?></td>
    <td><?= $item['qty']; ?></td>
    <td><?= $item['catatan']; ?></td>
</tr>
<?php endforeach; ?>

</table>

<a class="btn" href="checkout.php">Checkout</a>

<?php else: ?>
<p>Keranjang kosong</p>
<?php endif; ?>

</div>

</body>
</html>