<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "<h1>Konfirmasi Penghapusan Kategori</h1>";
    echo "<p>Kategori dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/categories/index.php">Kembali ke Daftar Kategori</a>';
} else {
    echo "ID kategori tidak ditemukan.";
}