<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Bukti Data Berhasil Diterima (Update Pengguna)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/users/index.php">Kembali ke Daftar Pengguna</a>';
} else {
    echo "Akses tidak valid.";
}