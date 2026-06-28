# 💜 DompetKu — Sistem Catatan Keuangan Sederhana

![PHP](https://img.shields.io/badge/PHP-7.4+-blue)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)
![Status](https://img.shields.io/badge/Status-Finished-brightgreen)

---

# 📌 Identitas

**Nama** : Triza Venky Alqianza  
**NIM** : 240631100087

---

# 📖 Deskripsi Aplikasi

DompetKu merupakan aplikasi berbasis web yang dikembangkan menggunakan **PHP Native** dan **MySQL** sebagai media pencatatan keuangan pribadi. Aplikasi ini dirancang untuk membantu pengguna dalam mengelola transaksi pemasukan dan pengeluaran secara sederhana, cepat, dan terstruktur.

Melalui aplikasi ini, pengguna dapat menambahkan, mengubah, menghapus, serta mencari data transaksi dengan mudah. Selain itu, sistem akan menghitung total pemasukan, total pengeluaran, serta saldo secara otomatis sehingga pengguna dapat memantau kondisi keuangannya secara real-time.

Aplikasi ini dibuat sebagai implementasi pembelajaran mata kuliah **Pemrograman Web**, khususnya dalam penerapan konsep **CRUD (Create, Read, Update, Delete)** menggunakan bahasa pemrograman PHP Native dan database MySQL.

---

# 🎯 Tujuan Pengembangan

Tujuan pengembangan aplikasi DompetKu adalah:

- Membantu pengguna mencatat pemasukan dan pengeluaran harian.
- Mempermudah pengelolaan keuangan pribadi.
- Menampilkan informasi saldo secara otomatis.
- Mengimplementasikan operasi CRUD menggunakan PHP dan MySQL.
- Menerapkan konsep pengembangan aplikasi berbasis web sederhana.

---

# ✨ Fitur Aplikasi

DompetKu menyediakan beberapa fitur utama, yaitu:

- Dashboard transaksi
- Menampilkan total pemasukan
- Menampilkan total pengeluaran
- Menampilkan total saldo
- Menampilkan jumlah transaksi
- Menambahkan transaksi baru
- Mengubah data transaksi
- Menghapus data transaksi
- Pencarian transaksi berdasarkan kategori, jenis, maupun keterangan
- Validasi data sebelum disimpan ke database

---

# 🖥️ Tampilan Aplikasi

Aplikasi DompetKu terdiri dari beberapa halaman utama yang saling terhubung untuk memudahkan pengguna dalam mengelola data transaksi keuangan.

## 1. Dashboard

Dashboard merupakan halaman utama yang pertama kali ditampilkan ketika aplikasi dijalankan. Halaman ini menyajikan informasi ringkasan keuangan berupa total pemasukan, total pengeluaran, saldo saat ini, jumlah transaksi, serta tabel daftar transaksi yang telah tersimpan pada database. Selain itu, dashboard juga menyediakan fitur pencarian transaksi serta tombol untuk menambahkan data transaksi baru.

---

## 2. Halaman Tambah Transaksi

Halaman tambah transaksi digunakan untuk memasukkan data transaksi baru ke dalam sistem. Pada halaman ini pengguna diminta mengisi beberapa informasi seperti tanggal transaksi, jenis transaksi, kategori, keterangan, dan nominal transaksi. Setelah seluruh data diisi dengan benar, data akan disimpan ke database dan otomatis ditampilkan pada dashboard.

---

## 3. Halaman Edit Transaksi

Halaman edit transaksi digunakan untuk memperbarui data transaksi yang telah tersimpan sebelumnya. Pengguna dapat mengubah informasi transaksi sesuai kebutuhan, kemudian menyimpan perubahan sehingga data pada dashboard ikut diperbarui secara otomatis.

---

## 4. Proses Hapus Transaksi

Fitur hapus transaksi memungkinkan pengguna menghapus data transaksi yang sudah tidak diperlukan. Sebelum proses penghapusan dilakukan, sistem akan menampilkan konfirmasi sehingga pengguna tidak menghapus data secara tidak sengaja.

---

## 5. Pencarian Data

Aplikasi menyediakan fasilitas pencarian transaksi berdasarkan kategori, jenis transaksi, maupun keterangan. Fitur ini memudahkan pengguna menemukan data tertentu tanpa harus mencari secara manual pada seluruh daftar transaksi.

---

# 🗄️ Struktur Database

**Nama Database**

```
db_keuangan
```

## Tabel transaksi

| Field | Tipe Data | Keterangan |
|--------|-----------|------------|
| id | INT AUTO_INCREMENT | Primary Key |
| tanggal | DATE | Tanggal transaksi |
| jenis | ENUM('Pemasukan','Pengeluaran') | Jenis transaksi |
| kategori | VARCHAR(100) | Kategori transaksi |
| keterangan | VARCHAR(255) | Deskripsi transaksi |
| nominal | DECIMAL(12,2) | Jumlah uang |

---

# 📂 Struktur Folder

```
dompetku/
│
├── css/
│   └── style.css
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

Setelah proses instalasi selesai, layanan Apache dan MySQL dijalankan melalui XAMPP Control Panel agar aplikasi dapat diakses melalui browser.

---

## 2. Penempatan File Project

Selanjutnya, seluruh folder project **DompetKu** ditempatkan pada direktori utama web server yaitu folder **htdocs**.

Struktur penyimpanannya sebagai berikut.

```
htdocs/dompetku
```

Dengan penempatan tersebut aplikasi dapat dijalankan menggunakan localhost.

---

## 3. Pembuatan Database

Setelah project berhasil ditempatkan pada folder web server, langkah berikutnya adalah membuat database melalui phpMyAdmin.

Database dibuat dengan nama:

```
db_keuangan
```

Selanjutnya dilakukan proses import terhadap file **database.sql** yang telah disediakan sehingga seluruh tabel beserta struktur database dapat terbentuk secara otomatis.

---

## 4. Konfigurasi Koneksi Database

Setelah proses import selesai, dilakukan konfigurasi koneksi database melalui file **koneksi.php**.

Konfigurasi meliputi host, username, password, serta nama database yang digunakan sehingga aplikasi dapat terhubung dengan database tanpa mengalami kesalahan koneksi.

---

## 5. Menjalankan Aplikasi

Setelah seluruh proses konfigurasi selesai dilakukan, aplikasi dijalankan melalui browser dengan mengakses alamat:

```
http://localhost/dompetku/
```

Apabila seluruh tahapan telah dilakukan dengan benar maka halaman Dashboard aplikasi akan ditampilkan dan seluruh fitur siap digunakan.

---

## 6. Pengujian Sistem

Tahap terakhir adalah melakukan pengujian terhadap seluruh fungsi aplikasi.

Pengujian dilakukan dengan cara:

- Menambahkan transaksi baru.
- Mengubah data transaksi.
- Menghapus transaksi.
- Melakukan pencarian transaksi.
- Memastikan perhitungan total pemasukan.
- Memastikan perhitungan total pengeluaran.
- Memastikan saldo dihitung secara otomatis.

Berdasarkan hasil pengujian, seluruh fitur aplikasi berjalan dengan baik sesuai kebutuhan sistem.

---

# 💻 Teknologi yang Digunakan

Aplikasi ini dibangun menggunakan teknologi sebagai berikut.

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
2. Pengguna memilih menu Tambah Transaksi.
3. Pengguna mengisi data transaksi.
4. Data disimpan ke database.
5. Dashboard akan diperbarui secara otomatis.
6. Pengguna dapat mengubah maupun menghapus transaksi.
7. Sistem akan menghitung saldo berdasarkan seluruh transaksi yang tersimpan.

---

# 🚀 Pengembangan Selanjutnya

Pengembangan yang dapat dilakukan pada aplikasi DompetKu di masa mendatang antara lain:

- Sistem Login Multi User
- Dashboard Grafik Keuangan
- Export Data ke PDF
- Export Data ke Excel
- Filter Transaksi Berdasarkan Tanggal
- Laporan Bulanan
- Backup Database
- Dark Mode
- Responsive Mobile yang lebih optimal

---

# 👨‍💻 Developer

**Triza Venky Alqianza**

NIM : **240631100087**

Program Studi Sistem Informasi

Universitas Trunojoyo Madura

---

# 📄 Lisensi

Aplikasi **DompetKu** dikembangkan sebagai media pembelajaran pada mata kuliah Pemrograman Web. Seluruh source code pada project ini dapat digunakan untuk keperluan pembelajaran dan pengembangan lebih lanjut dengan tetap mencantumkan identitas pembuat.

---

🤖 Pernyataan Penggunaan Generative AI (GenAI)
Sesuai dengan regulasi kejujuran akademik yang ditentukan pada lembar instruksi UAS, proyek aplikasi DompetKu ini dikembangkan dengan memanfaatkan bantuan asisten kecerdasan artifisial (GenAI). Pemanfaatan perangkat pintar tersebut diterapkan pada bagian:

Perancangan skema tata letak arsitektur CSS eksternal agar antarmuka responsif dan estetis.
Optimasi sanitasi fungsi PHP untuk pencegahan celah keamanan SQL Injection dasar.
Penyusunan format dokumentasi teks markdown ini.
Pernyataan penggunaan teknologi kecerdasan buatan ini juga dijabarkan dan diulas secara transparan dalam video presentasi proyek pada tautan YouTube yang dikumpulkan.

© 2026 Triza Venky Alqianza. All Rights Reserved.
