# 💜 DompetKu — Sistem Catatan Keuangan Sederhana

![PHP](https://img.shields.io/badge/PHP-7.4+-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)
![Status](https://img.shields.io/badge/Status-Selesai-brightgreen)

## 📌 Identitas

**Nama** : Triza Venky Alqianza  
**NIM** : 240631100087

---

# 📖 Deskripsi Aplikasi

DompetKu merupakan aplikasi berbasis web yang dikembangkan menggunakan PHP Native dan MySQL sebagai media pencatatan keuangan pribadi. Aplikasi ini dirancang untuk membantu pengguna dalam mengelola transaksi pemasukan dan pengeluaran secara sederhana.

Melalui aplikasi ini, pengguna dapat menambahkan, mengubah, menghapus, serta mencari data transaksi dengan mudah. Selain itu, sistem akan menghitung total pemasukan, total pengeluaran, serta saldo secara otomatis sehingga pengguna dapat mengetahui kondisi keuangannya secara real-time.

---

# 🎯 Tujuan Pembuatan

Tujuan dari pengembangan aplikasi DompetKu adalah:

- Membantu pengguna mencatat transaksi keuangan harian.
- Mempermudah pengelolaan pemasukan dan pengeluaran.
- Menampilkan informasi saldo secara otomatis.
- Menerapkan konsep CRUD menggunakan PHP Native dan MySQL.
- Sebagai implementasi pembelajaran pemrograman web.

---

# ✨ Fitur Aplikasi

Aplikasi DompetKu memiliki beberapa fitur utama, yaitu:

- Dashboard transaksi
- Menampilkan total pemasukan
- Menampilkan total pengeluaran
- Menampilkan saldo otomatis
- Menampilkan jumlah transaksi
- Menambahkan transaksi baru
- Mengubah data transaksi
- Menghapus transaksi
- Pencarian transaksi berdasarkan kategori, jenis, maupun keterangan
- Validasi nominal transaksi

---

# 🖼️ Tampilan Aplikasi

Simpan gambar pada folder berikut:

```
screenshots/
```

Contoh:

```markdown
![Dashboard](screenshots/dashboard.png)

![Tambah Transaksi](screenshots/tambah.png)

![Edit Transaksi](screenshots/edit.png)
```

---

# 🗄️ Struktur Database

**Nama Database**

```
db_keuangan
```

### Tabel transaksi

| Field | Tipe Data | Keterangan |
|--------|-----------|------------|
| id | INT AUTO_INCREMENT | Primary Key |
| tanggal | DATE | Tanggal transaksi |
| jenis | ENUM('Pemasukan','Pengeluaran') | Jenis transaksi |
| kategori | VARCHAR(100) | Kategori transaksi |
| keterangan | VARCHAR(255) | Deskripsi transaksi |
| nominal | DECIMAL(12,2) | Nominal transaksi |

---

# 📂 Struktur Folder

```
dompetku/
│
├── css/
│   └── style.css
│
├── screenshots/
│   ├── dashboard.png
│   ├── tambah.png
│   └── edit.png
│
├── index.php
├── tambah.php
├── edit.php
├── hapus.php
├── functions.php
├── koneksi.php
├── database.sql
├── README.md
│
└── assets/
```

---

# ⚙️ Cara Instalasi dan Menjalankan Aplikasi

## 1. Persiapan Lingkungan Sistem

Tahap pertama yang dilakukan adalah menyiapkan perangkat lunak pendukung berupa **XAMPP** sebagai web server lokal. XAMPP digunakan karena telah menyediakan layanan Apache dan MySQL yang diperlukan untuk menjalankan aplikasi berbasis PHP.

Setelah proses instalasi selesai, layanan **Apache** dan **MySQL** dijalankan melalui XAMPP Control Panel agar aplikasi dapat diakses melalui browser.

---

## 2. Penempatan File Project

Selanjutnya, seluruh folder project **DompetKu** ditempatkan pada direktori utama web server, yaitu folder **htdocs**.

Struktur penyimpanannya adalah sebagai berikut:

```
htdocs/dompetku
```

Dengan penempatan tersebut, aplikasi dapat dijalankan menggunakan localhost.

---

## 3. Pembuatan Database

Setelah project ditempatkan pada folder web server, langkah berikutnya adalah membuat database melalui phpMyAdmin.

Database dibuat dengan nama:

```
db_keuangan
```

Selanjutnya dilakukan proses import terhadap file **database.sql** yang telah disediakan. File tersebut berisi struktur tabel beserta data awal sehingga seluruh kebutuhan database dapat terbentuk secara otomatis.

---

## 4. Konfigurasi Koneksi Database

Setelah proses import selesai, dilakukan konfigurasi koneksi database melalui file **koneksi.php**.

Parameter koneksi disesuaikan dengan konfigurasi server lokal yang digunakan, yaitu host localhost, username root, password sesuai konfigurasi MySQL, dan nama database **db_keuangan**.

Konfigurasi ini bertujuan agar aplikasi dapat terhubung dengan database tanpa mengalami kesalahan koneksi.

---

## 5. Menjalankan Aplikasi

Setelah seluruh konfigurasi selesai dilakukan, aplikasi dijalankan melalui browser dengan mengakses alamat:

```
http://localhost/dompetku/
```

Apabila seluruh tahapan instalasi telah dilakukan dengan benar, maka halaman Dashboard aplikasi akan ditampilkan dan seluruh fitur dapat digunakan.

---

## 6. Pengujian Sistem

Tahap terakhir adalah melakukan pengujian terhadap seluruh fungsi aplikasi.

Pengujian dilakukan dengan cara:

- Menambahkan transaksi baru.
- Mengubah data transaksi.
- Menghapus transaksi.
- Melakukan pencarian transaksi.
- Memastikan total pemasukan, pengeluaran, dan saldo dihitung secara otomatis.

Hasil pengujian menunjukkan bahwa seluruh fitur pada aplikasi dapat berjalan dengan baik sesuai dengan kebutuhan sistem.

---

# 💻 Teknologi yang Digunakan

- PHP Native
- MySQL
- MySQLi
- HTML5
- CSS3
- Bootstrap 5.3
- Font Awesome 6
- JavaScript

---

# 🔄 Alur Penggunaan Aplikasi

1. Pengguna membuka halaman Dashboard.
2. Pengguna menambahkan transaksi baru.
3. Data disimpan ke database.
4. Dashboard menampilkan data terbaru.
5. Pengguna dapat mengubah maupun menghapus transaksi.
6. Sistem menghitung saldo secara otomatis.

---

# 🚀 Pengembangan Selanjutnya

Beberapa fitur yang masih dapat dikembangkan pada aplikasi ini antara lain:

- Login multi-user
- Grafik pemasukan dan pengeluaran
- Export PDF
- Export Excel
- Filter transaksi berdasarkan tanggal
- Laporan bulanan
- Backup database otomatis
- Dark Mode

---

# 👨‍💻 Developer

**Triza Venky Alqianza**

NIM : **240631100087**

Universitas Trunojoyo Madura

---

# 📄 Lisensi

Aplikasi ini dibuat sebagai media pembelajaran dan penyelesaian tugas mata kuliah Pemrograman Web.

---

© 2026 Triza Venky Alqianza. All Rights Reserved.
