<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

if (!empty($_SESSION['role'])) {
    if ($_SESSION['role'] === 'admin') {
        include 'admin/admin.php'; // Gantilah dengan file header untuk admin
    } elseif ($_SESSION['role'] === 'anggota') {
        include 'anggota/anggota.php'; // Gantilah dengan file header untuk anggota
    } else {
        // Role tidak dikenali, mungkin ada kasus kesalahan atau manipulasi data
        header('location: logout.php'); // Logika logout atau pengalihan lainnya jika role tidak valid
    }
} else {
    header('location: login.php');
}
?>