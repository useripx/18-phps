<?php
// Mulai sesi jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Periksa apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil nama pengguna dari sesi
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kelas Komponen Komputer</title>
    <link rel="stylesheet" href="/css/dashboard.css"> <!-- Sesuaikan dengan path CSS Anda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <script src="script.js"></script>

    <header>
        <h1>Selamat datang, <?php echo $username; ?>, di Dashboard Kelas Komponen Komputer</h1>
    </header>

    <div class="container">
        <main>
            <section>
                <h2>Tentang Mata Pelajaran</h2>
                <p>Mata pelajaran ini akan membahas berbagai aspek tentang komponen komputer, termasuk perangkat keras dan perangkat lunak yang diperlukan untuk membangun sistem komputer yang efisien dan andal.</p>
                <p>Guru: Yogi Ario</p>
            </section>

            <section>
                <h2>Materi Pembelajaran</h2>
                <ul>
                    <li><a href="materi1.php">Pengenalan Komputer dan Perangkat Kerasnya</a></li>
                    <li><a href="materi2.php">Pengenalan Perangkat Lunak dan Sistem Operasi</a></li>
                    <!-- Tambahkan materi pembelajaran lainnya sesuai kebutuhan -->
                </ul>
            </section>

            <section>
                <h2>Tugas dan Proyek</h2>
                <p>Pastikan untuk memeriksa tugas dan proyek yang telah diberikan oleh Guru Yogi Ario.</p>
            </section>
        </main>
    </div>
</body>
</html>
