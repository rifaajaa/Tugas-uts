<?php
session_start();

function tambahKeCart($id, $qty, $catatan) {
    $_SESSION['cart'][] = [
        "id" => $id,
        "qty" => $qty,
        "catatan" => $catatan
    ];
}
?>