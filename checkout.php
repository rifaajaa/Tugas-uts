<?php 
include 'functions.php';

if ($_POST) {
    $_SESSION['order'] = $_POST;
    $_SESSION['cart'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>

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
    margin: 30px auto;
    background: white;
    padding: 20px;
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
    <h2>Checkout Catering</h2>
</header>

<div class="container">

<form method="POST">
    Nama:
    <input type="text" name="nama" required>

    No HP:
    <input type="text" name="hp" required>

    Alamat:
    <textarea name="alamat" required></textarea>

    <button type="submit">Pesan Sekarang</button>
</form>

<?php if (isset($_SESSION['order'])): ?>
    <h3>✅ Pesanan berhasil!</h3>
    <p>Terima kasih, <?= $_SESSION['order']['nama']; ?></p>
<?php endif; ?>

</div>

</body>
</html>