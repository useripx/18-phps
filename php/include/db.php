<?php
// Informasi koneksi ke database MySQL
$servername = "localhost"; // Lokasi server database, biasanya localhost
$username = "admin"; // Username database
$password = "admin"; // Password database
$dbname = "db.php"; // Nama database

// Membuat koneksi ke database MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
