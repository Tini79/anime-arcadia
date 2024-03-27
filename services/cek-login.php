<?php
session_start();
$dummy_username = 'putri';
$dummy_password = '123';

if (isset($_POST['btnLogin'])) {
	$username = $_POST['username'];
	$password = $_POST['pass'];

	// Memastikan kunci 'failed_login' ada dalam $_SESSION sebelum digunakan
	if (!isset($_SESSION['failed_login'])) {
		$_SESSION['failed_login'] = 0;
	}

	if ($username === $dummy_username && $password === $dummy_password) {
		$_SESSION['failed_login'] = 0;
		$_SESSION['username'] = $username;
		echo "<script>alert('Berhasil Login'); window.location.href='../index.php'</script>";
	} else {
		$_SESSION['failed_login']++;

		// Memeriksa setiap kondisi secara terpisah
		if ($username !== $dummy_username) {
			header('Location: ../login.php?pesan=Username Salah');
		} elseif ($password !== $dummy_password) {
			header('Location: ../login.php?pesan=Password Salah');
		} elseif (!$password && !$username) {
			header('Location: ../login.php?pesan=Silahkan Input Data Dengan Benar!');
		}
	}
}
// elseif (isset($_POST['btnBatal'])) {
// Redirect untuk pembatalan atau tindakan lainnya
// header('Location: ../index.php');
// exit();
// }