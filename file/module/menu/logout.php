<?php
session_start(); // Mulai sesi

// Hapus semua variabel sesi
$_SESSION = array();

// Hapus sesi cookie jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang diinginkan
header("Location: ../../index.php"); // Ganti login.php dengan URL halaman login atau halaman lain yang diinginkan
exit();
?>
