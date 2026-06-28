💜 DompetKu — Sistem Catatan Keuangan Sederhana

Nama: Triza Venky Alqianza
NIM: 240631100087

Deskripsi Proyek

DompetKu adalah aplikasi web berbasis PHP dan MySQL yang digunakan untuk mencatat dan mengelola keuangan pribadi. Aplikasi ini membantu pengguna mencatat transaksi pemasukan dan pengeluaran secara mudah, cepat, dan terstruktur.

Sistem ini juga menyediakan fitur perhitungan saldo otomatis secara real-time sehingga pengguna dapat memantau kondisi keuangan dengan lebih efektif.

Tampilan Aplikasi

Tambahkan screenshot pada folder: /screenshots/

📊 Dashboard

➕ Tambah Transaksi

✏️ Edit Transaksi

🗄️ Struktur Database

Database: db_keuangan

Tabel: transaksi
Field	Tipe Data	Keterangan
id	INT AUTO_INCREMENT PRIMARY KEY	ID unik transaksi
tanggal	DATE	Tanggal transaksi
jenis	ENUM('Pemasukan','Pengeluaran')	Jenis transaksi
kategori	VARCHAR(100)	Kategori transaksi
keterangan	VARCHAR(255)	Deskripsi tambahan
nominal	DECIMAL(12,2)	Jumlah uang


Struktur Folder Project
dompetku/
│
├── index.php              # Dashboard utama
├── tambah.php             # Tambah transaksi
├── edit.php               # Edit transaksi
├── hapus.php              # Hapus transaksi
│
├── koneksi.php           # Koneksi database
├── functions.php         # Semua fungsi (CRUD, format uang, dll)
│
├── database.sql          # Struktur database
│
├── css/
│   └── style.css         # Styling aplikasi
│
├── screenshots/
│   ├── dashboard.png
│   ├── tambah.png
│   └── edit.png
│
└── README.md
