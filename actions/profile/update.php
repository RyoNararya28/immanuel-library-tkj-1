<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h1>Bukti Data Berhasil Diterima (Update Profil)</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo '<br><a href="../../pages/profile/edit.php">Kembali ke Edit Profil</a>';
} else {
    echo "Akses tidak valid.";
}