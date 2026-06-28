<?php

//==========================================
// FUNCTION DOMPETKU
//==========================================


// Format Rupiah
function rupiah($angka)
{
    return "Rp " . number_format($angka, 0, ",", ".");
}


// Total Pemasukan
function totalPemasukan($conn)
{
    $query = mysqli_query($conn, "SELECT SUM(nominal) AS total
                                  FROM transaksi
                                  WHERE jenis = 'Pemasukan'");
    $data = mysqli_fetch_assoc($query);
    return $data['total'] ?? 0;
}


// Total Pengeluaran
function totalPengeluaran($conn)
{
    $query = mysqli_query($conn, "SELECT SUM(nominal) AS total
                                  FROM transaksi
                                  WHERE jenis = 'Pengeluaran'");
    $data = mysqli_fetch_assoc($query);
    return $data['total'] ?? 0;
}


// Hitung Saldo
function saldo($conn)
{
    return totalPemasukan($conn) - totalPengeluaran($conn);
}


// Jumlah Transaksi
function jumlahTransaksi($conn)
{
    $query = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM transaksi");
    $data  = mysqli_fetch_assoc($query);
    return $data['jumlah'];
}


// Menampilkan Semua Data
function tampilData($conn)
{
    return mysqli_query($conn, "SELECT * FROM transaksi ORDER BY tanggal DESC");
}


// ==========================================
// TAMBAH DATA  <-- fungsi ini sebelumnya tidak ada!
// ==========================================
function tambahData($conn, $post)
{
    $tanggal   = mysqli_real_escape_string($conn, $post['tanggal']);
    $jenis     = mysqli_real_escape_string($conn, $post['jenis']);
    $kategori  = mysqli_real_escape_string($conn, $post['kategori']);
    $keterangan = mysqli_real_escape_string($conn, $post['keterangan']);
    $nominal   = (float) $post['nominal'];

    $query = "INSERT INTO transaksi (tanggal, jenis, kategori, keterangan, nominal)
              VALUES ('$tanggal', '$jenis', '$kategori', '$keterangan', '$nominal')";

    return mysqli_query($conn, $query);
}


// ==========================================
// HAPUS DATA  <-- fungsi ini sebelumnya tidak ada!
// ==========================================
function hapusData($conn, $id)
{
    $id    = (int) $id;
    $query = "DELETE FROM transaksi WHERE id = $id";
    return mysqli_query($conn, $query);
}


// ==========================================
// VALIDASI NOMINAL  <-- fungsi ini sebelumnya tidak ada!
// ==========================================
function validasiNominal($nominal)
{
    return is_numeric($nominal) && (float) $nominal > 0;
}


// ==========================================
// EDIT DATA
// ==========================================
function editData($conn, $id, $post)
{
    $id         = (int) $id;
    $tanggal    = mysqli_real_escape_string($conn, $post['tanggal']);
    $jenis      = mysqli_real_escape_string($conn, $post['jenis']);
    $kategori   = mysqli_real_escape_string($conn, $post['kategori']);
    $keterangan = mysqli_real_escape_string($conn, $post['keterangan']);
    $nominal    = (float) $post['nominal'];

    $query = "UPDATE transaksi SET
                tanggal    = '$tanggal',
                jenis      = '$jenis',
                kategori   = '$kategori',
                keterangan = '$keterangan',
                nominal    = '$nominal'
              WHERE id = $id";

    return mysqli_query($conn, $query);
}

?>
