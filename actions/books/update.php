<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    echo "<h1>Data Berhasil Diterima (Update Buku)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/books/index.php">Kembali ke Daftar Buku</a>';
} else {
    echo "Akses tidak valid.";
}
?>