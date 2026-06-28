<?php
include "koneksi.php";
include "functions.php";

// ================================
// CEK ID
// ================================

if (!isset($_GET['id'])) {

    echo "<script>
            alert('ID transaksi tidak ditemukan!');
            window.location = 'index.php';
          </script>";
    exit;

}

$id = (int) $_GET['id'];

// ================================
// HAPUS DATA
// ================================

if (hapusData($conn, $id)) {

    echo "<script>
            alert('Transaksi berhasil dihapus!');
            window.location = 'index.php';
          </script>";

} else {

    echo "<script>
            alert('Transaksi gagal dihapus!');
            window.location = 'index.php';
          </script>";

}
?>
