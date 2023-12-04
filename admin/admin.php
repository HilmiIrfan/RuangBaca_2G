<?php
session_start();
$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom CSS */
    /* Tambahkan CSS tambahan di sini */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .navbar {
        border-bottom: 3px solid #343a40;
        margin-bottom: 20px;
    }

    .navbar-brand {
        font-size: 1.8em;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../fitur admin/kelola_anggota.php">Kelola Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../buku/tambah_buku.php">Kelola Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="table-responsive small">
        <h3>Daftar Request Pinjam</h3>
        <!-- Tampilkan daftar request pinjam dalam tabel -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../fitur admin/daftar_request.php");
            ?>
                <!-- Ganti data berikut dengan data dinamis dari database -->
                <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
            </tbody>
        </table>

        <h3>Daftar Peminjaman</h3>
        <!-- Tampilkan daftar peminjaman dalam tabel -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Tenggat Pengembalian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nama Admin/Petugas</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Keterlambatan (Hari)</th>
                    <th scope="col">Denda</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../fitur admin/daftar_peminjaman.php");
                ?>
                <!-- Ganti data berikut dengan data dinamis dari database -->

                <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>