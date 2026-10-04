<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "<h1>Konfirmasi Penghapusan Penulis</h1>";
    echo "<p>Penulis dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/authors/index.php">Kembali ke Daftar Penulis</a>';
} else {
    echo "ID penulis tidak ditemukan.";
}