<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>CateringKu</title>

<style>
    
    .navbar {
    background: linear-gradient(45deg, #ff6b00, #ff914d);
    color: white;
    padding: 15px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}
.left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.menu {
    display: flex;
}
.logo {
    font-size: 20px;
    font-weight: bold;
}

.menu a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
    font-weight: 500;
}

.menu a:hover {
    text-decoration: underline;
}

.cart {
    color: white;
    text-decoration: none;
    font-weight: bold;
}
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
    display: flex;
    justify-content: space-between;
}

/* CONTAINER */
.container {
    width: 90%;
    margin: auto;
}

/* PRODUK GRID */
.produk {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

/* CARD */
.card {
    background: white;
    padding: 15px;
    border-radius: 10px;
    width: 250px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* GAMBAR */
.gambar {
    width: 100%;
    height: 140px;
    object-fit: cover;
    border-radius: 10px;
}

/* BUTTON */
.btn {
    display: inline-block;
    background: #28a745;
    color: white;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
}
</style>

</head>
<body>

<header>
   <header class="navbar">
    <div class="left">
        <div class="logo">🍱 Catering Mba Yanti</div>

        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Kontak</a>
        </div>
    </div>

    <a href="cart.php" class="cart">🛒 Keranjang</a>
</header>
</header>

<div class="container">

<h2>🍱 Makanan</h2>
<div class="produk">
<?php foreach ($produk as $id => $p): ?>
    <?php if ($p['kategori'] == "Makanan"): ?>
    <div class="card">
        <img src="images/<?= $p['gambar']; ?>" class="gambar">
        <h3><?= $p['nama']; ?></h3>
        <p>Rp <?= $p['harga']; ?></p>
        <a class="btn" href="detail.php?id=<?= $id ?>">Pesan</a>
    </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>

<h2>🍩 Snack</h2>
<div class="produk">
<?php foreach ($produk as $id => $p): ?>
    <?php if ($p['kategori'] == "Snack"): ?>
    <div class="card">
        <img src="images/<?= $p['gambar']; ?>" class="gambar">
        <h3><?= $p['nama']; ?></h3>
        <p>Rp <?= $p['harga']; ?></p>
        <a class="btn" href="detail.php?id=<?= $id ?>">Pesan</a>
    </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>

<h2>🥤 Minuman</h2>
<div class="produk">
<?php foreach ($produk as $id => $p): ?>
    <?php if ($p['kategori'] == "Minuman"): ?>
    <div class="card">
        <img src="images/<?= $p['gambar']; ?>" class="gambar">
        <h3><?= $p['nama']; ?></h3>
        <p>Rp <?= $p['harga']; ?></p>
        <a class="btn" href="detail.php?id=<?= $id ?>">Pesan</a>
    </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>

</div>

</body>
</html>