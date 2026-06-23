// JavaScript untuk interaksi klien di halaman web

// Fungsi validasi untuk formulir login
function validateLoginForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Silakan masukkan username dan password.');
        return false;
    }

    return true;
}

// Fungsi validasi untuk formulir registrasi
function validateRegisterForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;

    if (username.trim() === '' || password.trim() === '' || confirmPassword.trim() === '') {
        alert('Silakan lengkapi semua kolom.');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Konfirmasi password tidak sesuai.');
        return false;
    }

    return true;
}

// Event listener ketika halaman telah dimuat sepenuhnya
document.addEventListener('DOMContentLoaded', function() {
    console.log('Halaman telah dimuat sepenuhnya.');

    // Menambahkan event listener untuk formulir login
    const loginForm = document.getElementById('login-form');
    loginForm.addEventListener('submit', function(event) {
        if (!validateLoginForm()) {
            event.preventDefault(); // Mencegah pengiriman formulir jika validasi gagal
        }
    });

    // Menambahkan event listener untuk formulir registrasi
    const registerForm = document.getElementById('register-form');
    if (registerForm) { // Memeriksa apakah formulir registrasi ada di halaman
        registerForm.addEventListener('submit', function(event) {
            if (!validateRegisterForm()) {
                event.preventDefault(); // Mencegah pengiriman formulir jika validasi gagal
            }
        });
    }
});
