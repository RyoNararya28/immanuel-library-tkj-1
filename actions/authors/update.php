<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Bukti Data Berhasil Diterima (Update Penulis)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/authors/index.php">Kembali ke Daftar Penulis</a>';
} else {
    echo "Akses tidak valid.";
}