<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "<h1>Konfirmasi Penghapusan Buku</h1>";
    echo "<p>Buku dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/books/index.php">Kembali ke Daftar Buku</a>';
} else {
    echo "ID buku tidak ditemukan.";
}
?>