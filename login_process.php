<?php
session_start();

include("config/koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Gunakan prepared statement untuk mencegah SQL injection
    $query = "SELECT id_user, password, role FROM tb_user WHERE username=?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    

    // Ambil hasil query
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $id_user, $db_password_hashed, $role);
        mysqli_stmt_fetch($stmt);

        // Verifikasi password dengan password_verify
        if (password_verify($password, $db_password_hashed)) {
            $_SESSION['id_user'] = $id_user;
            $_SESSION['role'] = $role;
            
            // Redirect sesuai dengan role
            if ($role == 'admin') {
                header('Location: admin/admin.php');
                exit();
            } elseif ($role == 'anggota') {
                header('Location: anggota/anggota.php');
                exit();
            } else {
                // Jika role tidak valid, kembalikan ke halaman login dengan pesan error
                header('Location: login.php?error=2');
                exit();
            }
        } else {
            header('Location: login.php?error=2');
            exit();
        }
    } else {
        header('Location: login.php?error=2');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>