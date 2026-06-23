<?php
// Sertakan file db.php untuk koneksi ke database
include('db.php');

// Kode PHP untuk memproses login pengguna
// ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kelas Komponen Komputer</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Sesuaikan dengan path CSS Anda -->
    <link rel="stylesheet" href="../css/login.css"> <!-- CSS untuk halaman login -->
</head>
<body>
    <script src="script.js"></script>

    <header>
        <h1>Login - Kelas Komponen Komputer</h1>
    </header>

    <div class="container">
        <main>
            <form action="process_login.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type="submit" value="Login">
            </form>
        </main>
    </div>
</body>
</html>
