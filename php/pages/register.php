<?php
// Sertakan file db.php untuk koneksi ke database
include('db.php');

// Kode PHP untuk memproses registrasi pengguna
// ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Kelas Komponen Komputer</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Sesuaikan dengan path CSS Anda -->
    <link rel="stylesheet" href="../css/register.css"> <!-- CSS untuk halaman registrasi -->
</head>
<body>
    <script src="script.js"></script>

    <header>
        <h1>Registrasi - Kelas Komponen Komputer</h1>
    </header>

    <div class="container">
        <main>
            <form action="process_register.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="confirm_password">Konfirmasi Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <br>
                <input type="submit" value="Register">
            </form>
        </main>
    </div>
</body>
</html>
