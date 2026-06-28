<?php
include "koneksi.php";
include "functions.php";

// ===============================
// CEK ID
// ===============================

if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

$id = (int) $_GET['id'];

// ===============================
// AMBIL DATA BERDASARKAN ID
// ===============================

$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id = $id");
$data   = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}

// ===============================
// PROSES UPDATE
// ===============================

if (isset($_POST['update'])) {

    if (validasiNominal($_POST['nominal'])) {

        if (editData($conn, $id, $_POST)) {

            echo "<script>
                    alert('Data berhasil diupdate!');
                    window.location = 'index.php';
                  </script>";

        } else {

            echo "<script>
                    alert('Gagal update data! Error: " . mysqli_error($conn) . "');
                  </script>";

        }

    } else {

        echo "<script>alert('Nominal harus lebih dari 0!');</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi | DompetKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ==========================
     NAVBAR
========================== -->
<div class="navbar">
    <div class="logo">💜 Dompet<span>Ku</span></div>
    <div class="menu">
        <a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a>
        <a href="tambah.php"><i class="fa-solid fa-plus"></i> Tambah</a>
    </div>
</div>

<div class="container">
    <div class="form-container">

        <h2 class="form-title">
            <i class="fa-solid fa-pen-to-square"></i> Edit Transaksi
        </h2>

        <form method="POST">

            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control"
                       value="<?= htmlspecialchars($data['tanggal']); ?>" required>
            </div>

            <div class="form-group">
                <label>Jenis Transaksi</label>
                <select name="jenis" class="form-control" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Pemasukan"   <?= $data['jenis'] == 'Pemasukan'   ? 'selected' : ''; ?>>Pemasukan</option>
                    <option value="Pengeluaran" <?= $data['jenis'] == 'Pengeluaran' ? 'selected' : ''; ?>>Pengeluaran</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control"
                       value="<?= htmlspecialchars($data['kategori']); ?>" required>
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="4" required><?= htmlspecialchars($data['keterangan']); ?></textarea>
            </div>

            <div class="form-group">
                <label>Nominal</label>
                <input type="number" name="nominal" class="form-control"
                       value="<?= htmlspecialchars($data['nominal']); ?>" min="1" required>
            </div>

            <div class="button-group">
                <button type="submit" name="update" class="btn btn-success">
                    <i class="fa-solid fa-floppy-disk"></i> Update
                </button>
                <a href="index.php" class="btn btn-danger">
                    <i class="fa-solid fa-arrow-left"></i> Kembali
                </a>
            </div>

        </form>

    </div>
</div>

<footer>
    <div style="margin-top:50px; padding:20px; text-align:center; color:#666;">
        <hr>
        <h5 style="color:#6C3BFF;">💜 DompetKu</h5>
        <p>Sistem Catatan Keuangan Sederhana</p>
        <p>Dibuat oleh <b>Triza Venky Alqianza</b></p>
        <p>© <?= date("Y"); ?> DompetKu</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
