<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Bukti Data Berhasil Diterima (Update Kategori)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/categories/index.php">Kembali ke Daftar Kategori</a>';
} else {
    echo "Akses tidak valid.";
}