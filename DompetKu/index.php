<?php
include "koneksi.php";
include "functions.php";

// ==============================
// Dashboard
// ==============================

$totalMasuk  = totalPemasukan($conn);
$totalKeluar = totalPengeluaran($conn);
$totalSaldo  = saldo($conn);
$jumlahData  = jumlahTransaksi($conn);

// ==============================
// Search
// ==============================

$cari = "";

if (isset($_GET['cari'])) {

    $cari      = mysqli_real_escape_string($conn, $_GET['cari']);
    $transaksi = mysqli_query($conn,
        "SELECT * FROM transaksi
         WHERE  kategori   LIKE '%$cari%'
         OR     keterangan LIKE '%$cari%'
         OR     jenis      LIKE '%$cari%'
         ORDER BY tanggal DESC"
    );

} else {

    $transaksi = tampilData($conn);

}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DompetKu | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- ===========================
     NAVBAR
=========================== -->
<div class="navbar">
    <div class="logo">💜 Dompet<span>Ku</span></div>
    <div class="menu">
        <a href="index.php"><i class="fa fa-house"></i> Dashboard</a>
        <a href="tambah.php"><i class="fa fa-plus"></i> Tambah</a>
    </div>
</div>

<div class="container">

    <!-- ===========================
         WELCOME
    =========================== -->
    <div class="welcome">
        <h1>Selamat Datang 👋</h1>
        <p>Kelola pemasukan dan pengeluaranmu dengan mudah menggunakan aplikasi <b>DompetKu</b>.</p>
    </div>

    <!-- ===========================
         CARD STATISTIK
    =========================== -->
    <div class="dashboard">

        <div class="card">
            <div class="icon bg-green">
                <i class="fa-solid fa-arrow-trend-up"></i>
            </div>
            <h3>Total Pemasukan</h3>
            <h1><?= rupiah($totalMasuk); ?></h1>
            <p>Semua pemasukan</p>
        </div>

        <div class="card">
            <div class="icon bg-red">
                <i class="fa-solid fa-arrow-trend-down"></i>
            </div>
            <h3>Total Pengeluaran</h3>
            <h1><?= rupiah($totalKeluar); ?></h1>
            <p>Semua pengeluaran</p>
        </div>

        <div class="card">
            <div class="icon bg-purple">
                <i class="fa-solid fa-wallet"></i>
            </div>
            <h3>Total Saldo</h3>
            <h1><?= rupiah($totalSaldo); ?></h1>
            <p>Sisa uang saat ini</p>
        </div>

        <div class="card">
            <div class="icon bg-blue">
                <i class="fa-solid fa-list"></i>
            </div>
            <h3>Jumlah Transaksi</h3>
            <h1><?= $jumlahData; ?></h1>
            <p>Total seluruh transaksi</p>
        </div>

    </div>

    <!-- ===========================
         TABEL TRANSAKSI
    =========================== -->
    <div class="card-header">
        <h2><i class="fa-solid fa-table"></i> Data Transaksi</h2>
        <a href="tambah.php" class="btn">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>

    <form method="GET">
        <div class="search-box">
            <input
                type="text"
                name="cari"
                id="inputCari"
                placeholder="Cari kategori, jenis atau keterangan..."
                value="<?= htmlspecialchars($cari); ?>">
            <button class="btn" type="submit">
                <i class="fa fa-search"></i> Cari
            </button>
        </div>
    </form>

    <div class="table-container">
        <table id="tabelTransaksi">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th>Nominal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($transaksi)) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= date("d-m-Y", strtotime($row['tanggal'])); ?></td>
                    <td>
                        <?php if ($row['jenis'] == "Pemasukan") : ?>
                            <span class="badge badge-success">
                                <i class="fa-solid fa-arrow-trend-up"></i> Pemasukan
                            </span>
                        <?php else : ?>
                            <span class="badge badge-danger">
                                <i class="fa-solid fa-arrow-trend-down"></i> Pengeluaran
                            </span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['kategori']); ?></td>
                    <td><?= htmlspecialchars($row['keterangan']); ?></td>
                    <td><b><?= rupiah($row['nominal']); ?></b></td>
                    <td>
                        <div class="action">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="hapus.php?id=<?= $row['id']; ?>"
                               class="btn btn-danger"
                               onclick="return confirm('Yakin ingin menghapus transaksi ini?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>

            <?php if (mysqli_num_rows($transaksi) == 0) : ?>
                <tr>
                    <td colspan="7">
                        <div class="empty">
                            <i class="fa-solid fa-folder-open fa-3x"></i>
                            <br><br>Belum ada data transaksi.
                        </div>
                    </td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
    </div>

    <br><br>
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h5>
            Saldo Saat Ini :
            <span style="color:#6C3BFF;"><?= rupiah($totalSaldo); ?></span>
        </h5>
        <a href="tambah.php" class="btn btn-success">
            <i class="fa-solid fa-circle-plus"></i> Tambah Transaksi
        </a>
    </div>

</div>

<!-- ===========================
     FOOTER
=========================== -->
<footer>
    <div style="margin-top:60px; padding:25px; text-align:center; color:#666;">
        <hr>
        <h5 style="color:#6C3BFF;">💜 DompetKu</h5>
        <p>Sistem Catatan Keuangan Sederhana</p>
        <p>Dibuat Oleh <b>Triza Venky Alqianza</b><br>NIM : 240631100087</p>
        <p>© <?= date("Y"); ?> DompetKu | All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Live Search (FIXED - sebelumnya kode ini terpotong/tidak lengkap) -->
<script>
const input = document.getElementById("inputCari");

if (input) {
    input.addEventListener("keyup", function () {
        let filter = this.value.toUpperCase();
        let table  = document.getElementById("tabelTransaksi");
        let rows   = table.getElementsByTagName("tr");

        for (let i = 1; i < rows.length; i++) {
            let td     = rows[i].getElementsByTagName("td");
            let tampil = false;

            for (let j = 0; j < td.length - 1; j++) {
                if (td[j]) {
                    let txt = td[j].textContent || td[j].innerText;
                    if (txt.toUpperCase().indexOf(filter) > -1) {
                        tampil = true;
                    }
                }
            }

            rows[i].style.display = tampil ? "" : "none";
        }
    });
}
</script>

</body>
</html>
