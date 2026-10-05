<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<h1>Konfirmasi Penghapusan Penulis</h1>";
    echo "<p>Penulis dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/authors/index.php">Kembali ke Daftar Penulis</a>';
} else {
    echo "ID penulis tidak ditemukan.";
}
?>