<?php
// Kredensial palsu untuk demonstrasi
$dummyUsername = 'putri';
$dummyPassword = '123';

// Periksa apakah formulir dikirimkan
if (isset($_POST['btnLogin'])) {
    // Dapatkan input pengguna
    $username = $_POST['username'];
    $password = $_POST['pass'];

    // Periksa apakah input cocok dengan kredensial palsu
    if ($username === $dummyUsername && $password === $dummyPassword) {
        // Redirect ke halaman sukses atau lakukan tindakan lainnya
        header('Location: success.php');
        exit();
    } elseif ($username !== $dummyUsername) {
        // Redirect kembali ke halaman login dengan pesan kesalahan untuk username yang salah
        header('Location: ../login.php?pesan=Username Salah');
        exit();
    } elseif ($password !== $dummyPassword) {
        // Redirect kembali ke halaman login dengan pesan kesalahan untuk password yang salah
        header('Location: ../login.php?pesan=Password Salah');
        exit();
    }
} elseif (isset($_POST['submit'])) {
    // Redirect untuk pembatalan atau tindakan lainnya
    header('Location: login.php');
    exit();
} else {
    // Redirect ke halaman login jika diakses tanpa pengiriman formulir
    header('Location: login.php');
    exit();
}