<?php
include("../config/koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = $_POST ['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $foto_user = $_POST['foto_user'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $role = $_POST['role'];

    $query = "INSERT INTO tb_user (id_user, nama, username, password, foto_user, alamat, no_tlp, jenis_kelamin, role) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $success = $stmt->execute([$id_user, $nama, $username, $password, $foto_user, $alamat, $no_tlp, $jenis_kelamin, $role]);
    if ($success) {
        echo "Query berhasil dijalankan!";
    } else {
        // Jika query gagal, dapatkan informasi kesalahan
        $errorInfo = $stmt->errorInfo();
        echo "Query gagal: " . $errorInfo[2];
    }
    header('Location: ../login.php'); // Redirect ke halaman login setelah registrasi
    exit();
}
?>