# 🧩 Aplikasi Pendaftaran Siswa Berbasis Web (PHP + MySQL + Laragon)

Sebuah proyek web sederhana yang dibuat menggunakan **PHP Native** dan **MySQL**, berjalan di **Laragon** sebagai server lokal.  
Aplikasi ini memungkinkan calon siswa melakukan pendaftaran secara online, dengan data yang langsung tersimpan ke database.

---

## 📘 Informasi Proyek

**Nama:** Arya Rangga Putra Pratama  
**NRP:** 5025241072  
**Kelas:** Pemrograman Web A  
**Dosen Pengampu:** Bapak Fajar  

---

## 🚀 Tujuan Proyek

Tujuan dari pembuatan aplikasi ini adalah untuk memahami:
- Integrasi antara PHP dan MySQL menggunakan XAMPP/Laragon
- Penerapan konsep **CRUD (Create, Read, Update, Delete)**
- Struktur proyek web yang modular dan mudah dikembangkan
- Desain antarmuka pengguna (UI/UX) yang responsif dan modern

---

## 🧠 Fitur Utama

- 📝 **Formulir pendaftaran** untuk calon siswa  
- 💾 **Penyimpanan data** otomatis ke database  
- 📋 **Daftar siswa terdaftar** ditampilkan secara real-time  
- ⚙️ **Validasi input** untuk mencegah data kosong  
- 🧑‍💻 Struktur kode modular dan mudah dipahami  
- 🌐 Tampilan web modern bergaya futuristik

---

## 🗂️ Struktur Folder

```

pendaftaran-siswa/
├── config.php              # File koneksi database
├── index.php               # Halaman form pendaftaran siswa
├── proses-pendaftaran.php  # Menangani penyimpanan data
├── list-siswa.php          # Menampilkan daftar siswa terdaftar
├── style.css               # Desain tampilan web (UI futuristik)
└── README.md               # Dokumentasi proyek (file ini)

```

---

## ⚙️ Instalasi & Konfigurasi

### 1️⃣ Persiapan
instal **Laragon** atau **XAMPP** di komputer.

### 2️⃣ Setup Folder
Letakkan folder proyek ke:
```

C:\laragon\www\pendaftaran-siswa

````

### 3️⃣ Membuat Database
Buka **phpMyAdmin** atau **MySQL Console**, lalu jalankan query berikut:

```sql
CREATE DATABASE pendaftaran_siswa CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE pendaftaran_siswa;

CREATE TABLE calon_siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(64) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    jenis_kelamin VARCHAR(16) NOT NULL,
    agama VARCHAR(32) NOT NULL,
    sekolah_asal VARCHAR(64) NOT NULL
);
````

### 4️⃣ Konfigurasi Database

Buka file `config.php`, lalu sesuaikan:

```php
<?php
$host = "localhost";
$user = "root";
$password = "seblak26"; // ubah sesuai password MySQL kamu
$database = "pendaftaran_siswa";

$conn = mysqli_connect($host, $user, $password, $database);
if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
```

### 5️⃣ Jalankan Proyek

Jalankan semua service di Laragon → buka browser dan ketik:

```
http://localhost/pendaftaran-siswa/
```

---

## 🧩 Penjelasan File Utama

| File                     | Fungsi                                           |
| ------------------------ | ------------------------------------------------ |
| `index.php`              | Halaman utama yang berisi form pendaftaran siswa |
| `proses-pendaftaran.php` | Menangani data form dan menyimpannya ke database |
| `list-siswa.php`         | Menampilkan seluruh siswa yang telah mendaftar   |
| `config.php`             | File konfigurasi koneksi ke database             |
| `style.css`              | Mengatur tampilan modern, clean, dan responsif   |

---


## 🔄 Alur Kerja Sistem

1. Pengguna membuka halaman **index.php** dan mengisi form.
2. Saat tombol *Daftar* ditekan, data dikirim ke **proses-pendaftaran.php**.
3. Data disimpan di database melalui **config.php**.
4. Pengguna dapat melihat daftar pendaftar melalui **list-siswa.php**.

Diagram alur sederhana:

```
[User Input Form] → [proses-pendaftaran.php] → [MySQL Database]
                                      ↓
                                [list-siswa.php]
```

---

## 🧭 Pengembangan Lanjutan

Fitur tambahan yang dapat dikembangkan:

* 🔐 Login Admin untuk manajemen data pendaftar
* 🧾 Export data ke Excel / PDF
* 📧 Notifikasi email otomatis setelah pendaftaran
* 📱 Desain mobile-friendly dengan Bootstrap / Tailwind

---

## 🧑‍🏫 Kesimpulan

Proyek ini menjadi contoh implementasi nyata pembuatan aplikasi berbasis web menggunakan PHP dan MySQL.
Dengan memanfaatkan Laragon, pengujian sistem dapat dilakukan secara cepat dan efisien.

---

## 📎 Link Terkait

* 🌐 [Demo Lokal (http://localhost/pendaftaran-siswa/)](http://localhost/pendaftaran-siswa/)
* 📘 [Artikel Penjelasan di Blogspot](https://aryarangga5025241072.blogspot.com/2025/10/backend-php-membuat-pendaftaran.html)

```

