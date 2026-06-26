<div align="center">

# 🖥️ Kelas Komponen Komputer (PHP Web)

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Platform](https://img.shields.io/badge/Platform-Web-0078D6?style=for-the-badge&logo=google-chrome&logoColor=white)
![Repo Size](https://img.shields.io/github/repo-size/useripx/18-PHPs?style=for-the-badge&color=blue)
![License](https://img.shields.io/badge/License-Free-green?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Selesai-brightgreen?style=for-the-badge)
![Semester](https://img.shields.io/badge/Semester-1-blueviolet?style=for-the-badge)

**Aplikasi Web Edukasi berbasis PHP sederhana untuk sistem e-learning kelas "Komponen Komputer".**

*Dibuat oleh Yogi Ario — Proyek Semester 1*

---

</div>

## 📖 Deskripsi

**Proyek 18 (PHPs)** merupakan sebuah prototipe website *e-learning* atau portal mata pelajaran yang dibangun menggunakan bahasa pemrograman **PHP** dasar, dipadukan dengan markup **HTML** dan *styling* **CSS**.

Aplikasi web ini difokuskan pada penyampaian materi terkait mata pelajaran "Komponen Komputer", di mana di dalamnya disimulasikan adanya manajemen materi pelajaran (seperti pengenalan perangkat keras dan perangkat lunak sistem operasi), tugas, serta dilengkapi dengan gerbang otentikasi (fitur Login) sebelum pengguna bisa mengakses lebih jauh.

## ✨ Fitur Utama

- 📚 **Daftar Materi Pembelajaran** — Menampilkan tautan ke berbagai materi seperti Pengenalan Hardware dan OS.
- 🔐 **Fitur Login** — Sistem simulasi login bagi siswa untuk dapat mengakses halaman tugas dan proyek.
- 📆 **Dynamic Footer** — Menggunakan skrip PHP bawaan (`date("Y")`) untuk menampilkan tahun hak cipta (copyright) yang selalu *up-to-date* secara dinamis.
- 🗂️ **Modular File Structure** — Memisahkan halaman materi (`pages/`), gaya tampilan (`css/`), dan modul fungsi (`include/`) untuk manajemen kode yang rapi.

## 📁 Struktur Proyek

```
18 phps/
├── ariolibrarry.rar    # Arsip cadangan/komponen library ekstensi
└── php/                # Root web directory
    ├── index.php       # Halaman utama (Home page)
    ├── css/            # Folder stylesheet (tampilan CSS)
    ├── include/        # Folder template atau fungsi bawaan PHP
    └── pages/          # Folder halaman konten
        ├── login.php   # Halaman masuk (Authentication)
        ├── materi1.php # Halaman materi 1 (Hardware)
        └── materi2.php # Halaman materi 2 (OS & Software)
```

## 🚀 Cara Menjalankan (Deployment)

Karena aplikasi ini menggunakan **PHP**, Anda tidak bisa langsung membukanya dengan cara klik ganda seperti file HTML statis biasa. Anda membutuhkan *Local Web Server* (seperti **XAMPP**, **Laragon**, **WAMP**, atau **MAMP**).

### Langkah-langkah menggunakan XAMPP:

1. Pastikan Anda sudah menginstal aplikasi [XAMPP](https://www.apachefriends.org/).
2. Salin folder `php/` (atau seluruh folder `18 phps/`) ke dalam direktori *htdocs* XAMPP Anda.
   - Contoh path Windows: `C:\xampp\htdocs\18_phps`
3. Buka **XAMPP Control Panel** dan klik tombol **Start** pada modul **Apache**.
4. Buka *web browser* Anda (Chrome, Firefox, dll).
5. Ketik URL berikut di *address bar*:
   ```
   http://localhost/18_phps/php/index.php
   ```

   *(Catatan: sesuaikan nama folder `18_phps` di atas dengan nama folder yang Anda salin di htdocs).*

### Opsi Alternatif (PHP Built-in Server):

Jika Anda telah menginstal PHP di sistem (*environment variables*), Anda dapat menjalankan server lokal langsung dari terminal:

```bash
cd "18 phps/php"
php -S localhost:8000
```

Lalu buka browser di alamat: `http://localhost:8000`

## 📸 Tampilan Utama Web

```text
======================================================
  Selamat datang di Kelas Komponen Komputer
  Pelajaran yang membahas berbagai komponen yang membentuk...
======================================================

 Tentang Mata Pelajaran
 --------------------------------------------------
 Mata pelajaran ini akan membahas berbagai aspek tentang...
 Guru: Yogi Ario

 Materi Pembelajaran
 --------------------------------------------------
 * Pengenalan Komputer dan Perangkat Kerasnya
 * Pengenalan Perangkat Lunak dan Sistem Operasi

 Tugas dan Proyek
 --------------------------------------------------
 Pastikan untuk memeriksa tugas dan proyek yang telah...

 Login
 --------------------------------------------------
 Untuk melanjutkan, silakan login:
 [ Login ]

======================================================
 © 2024 Kelas Komponen Komputer - Guru: Yogi Ario
```

## 🛠️ Teknologi

| Komponen               | Detail                              |
| ---------------------- | ----------------------------------- |
| Bahasa Utama           | PHP 7.x / 8.x                       |
| Markup & Style         | HTML5, CSS3                         |
| Server yang Disarankan | Apache (XAMPP / Laragon)            |
| Konsep Web             | Dynamic Server-side Rendering (MPA) |

## 👤 Author & Kontak

**Yogi Ario Pratama**

Jika Anda memiliki pertanyaan seputar kode ini atau ingin berdiskusi, silakan hubungi saya melalui WhatsApp:
📱 **[Chat via WhatsApp (wa.me/6281358113087)](https://wa.me/6281358113087)**

---

### 💖 Donasi
Dukungan Anda sangat berarti agar saya dapat terus semangat belajar dan mengembangkan proyek-proyek open-source lainnya. Jika berkenan memberikan donasi/apresiasi, Anda dapat menyalurkannya melalui:

💳 **Bank Seabank**
- No Rekening: **901497113744**
- Atas Nama: **Yogi Ario Pratama**

<div align="center">
  <br>
  <em>Terima kasih atas kunjungannya. Proyek Mata Kuliah — Semester 1 — Teknik Informatika UNP</em>
</div>

