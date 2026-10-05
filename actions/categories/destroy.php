<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<h1>Konfirmasi Penghapusan Kategori</h1>";
    echo "<p>Kategori dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/categories/index.php">Kembali ke Daftar Kategori</a>';
} else {
    echo "ID kategori tidak ditemukan.";
}
?>