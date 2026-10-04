<?php
$id = $_GET['id'] ?? null;

if ($id) {
    echo "<h1>Konfirmasi Penghapusan Pengguna</h1>";
    echo "<p>Pengguna dengan ID <strong>" . htmlspecialchars($id) . "</strong> berhasil dihapus (Simulasi).</p>";
    echo '<br><a href="../../pages/users/index.php">Kembali ke Daftar Pengguna</a>';
} else {
    echo "ID pengguna tidak ditemukan.";
}