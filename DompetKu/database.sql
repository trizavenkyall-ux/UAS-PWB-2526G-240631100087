CREATE DATABASE IF NOT EXISTS db_keuangan;
USE db_keuangan;

CREATE TABLE transaksi (
    id        INT AUTO_INCREMENT PRIMARY KEY,
    tanggal   DATE,
    jenis     ENUM('Pemasukan','Pengeluaran'),
    kategori  VARCHAR(100),
    keterangan VARCHAR(255),
    nominal   DECIMAL(12,2)
);

INSERT INTO transaksi (tanggal, jenis, kategori, keterangan, nominal) VALUES
('2026-06-01', 'Pemasukan',   'Gaji',      'Gaji Bulan Juni', 5000000),
('2026-06-02', 'Pengeluaran', 'Makan',     'Makan Siang',      50000),
('2026-06-03', 'Pengeluaran', 'Transport', 'Beli Bensin',      100000),
('2026-06-04', 'Pemasukan',   'Bonus',     'Bonus Proyek',    1000000),
('2026-06-05', 'Pengeluaran', 'Belanja',   'Belanja Bulanan',  750000);
