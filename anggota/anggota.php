<?php
session_start();
$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom CSS */
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

    .form-control {
        border-radius: 20px;
    }

    .btn-primary {
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #343a40;
        border-color: #343a40;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Add more custom CSS as needed */
    /* Custom CSS */
    /* Tambahkan CSS tambahan di sini */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ruang Baca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container mt-4">
            <!-- Form untuk pencarian -->
            <form action="../fungsi/search.php" method="GET" class="form-inline">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="text" class="form-control mb-2" name="search" id="inlineFormInput"
                            placeholder="Cari Buku">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        ...
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../fungsi/get_profil.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../fungsi/get_riwayat.php">Riwayat</a>
                </li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <style>
    /* CSS untuk mengecilkan ukuran card */
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        margin-bottom: 20px;
        overflow: hidden;
        max-width: 250px;
        /* Mengatur lebar maksimum card */
    }

    .card-img-top {
        height: 250px;
        /* Mengatur tinggi gambar */
        object-fit: cover2;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.1em;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .card-text {
        font-size: 0.9em;
        margin-bottom: 6px;
    }

    .btn-primary {
        border-radius: 20px;
        transition: all 0.3s ease;
        font-size: 0.9em;
        padding: 6px 12px;
    }

    .btn-primary:hover {
        background-color: #007bff;
        border-color: #007bff;
    }
    </style>

    <div class="container mt-4">
        <h3>Daftar Buku </h3>
        <!-- Tampilkan daftar -->
        <div class="row">
            <?php include '../buku/get_semuaBuku.php'; ?>
        </div>
        <div class="row">
            <div class="col">
                <?php
            if ($halaman > 1) {
                echo "<a href='anggota.php?halaman=" . ($halaman - 1) . "' class='btn btn-primary mr-2'>Previous</a>";
            }
            if ($result->num_rows >= $jumlah_per_halaman) {
                echo "<a href='anggota.php?halaman=" . ($halaman + 1) . "' class='btn btn-primary'>Next</a>";
            }
            ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>