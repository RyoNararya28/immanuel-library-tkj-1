<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    echo "<h1>Bukti Data Berhasil Diterima (Tambah Penulis)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/authors/index.php">Kembali ke Daftar Penulis</a>';
} else {
    echo "Akses tidak valid.";
}