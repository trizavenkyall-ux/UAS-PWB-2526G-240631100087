<?php
//=====================================================
// DOMPETKU
// Koneksi Database
// Nama  : Triza Venky Alqianza
// NIM   : 240631100087
//=====================================================

// Konfigurasi Database
$host     = "localhost";
$username = "root";
$password = "";
$database = "db_keuangan"; // <-- disesuaikan dengan database.sql

// Membuat Koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek Koneksi
if (!$conn) {
    die("Koneksi Database Gagal : " . mysqli_connect_error());
}

// Mengatur Zona Waktu Indonesia
date_default_timezone_set("Asia/Jakarta");

// Menggunakan UTF-8
mysqli_set_charset($conn, "utf8");
?>
