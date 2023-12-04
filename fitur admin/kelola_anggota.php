<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kelola Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Custom CSS */
    /* Tambahkan CSS tambahan di sini */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Kelola Anggota</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kelola Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- ... Navbar sesuai kebutuhan ... -->
    </nav>

    <div class="container mt-4">
        <h3>Tambah Anggota</h3>
        <!-- Form untuk menambahkan anggota baru -->
        <form action="proses_tambah.php" method="post">
            <div class="form-group">
                <label for="nama">NIM/NIDN</label>
                <input type="text" class="form-control" id="id_user" name="id_user" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <div class="form-group">
                <label for="nama">jenis kelamin</label>
                <br>
                <select name="jenis_kelamin">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>

            </div>

            <!-- Tambahkan input lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>

        <hr>

        <h3>Edit Anggota</h3>
        <!-- Form untuk mengedit anggota -->
        <form action="proses_edit_anggota.php" method="post">
            <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota" name="id_anggota" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <!-- Tambahkan input lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>

        <hr>

        <h3>Hapus Anggota</h3>
        <!-- Form untuk menghapus anggota -->
        <form action="proses_hapus_anggota.php" method="post">
            <div class="form-group">
                <label for="id_anggota_hapus">ID Anggota</label>
                <input type="text" class="form-control" id="id_anggota_hapus" name="id_anggota_hapus" required>
            </div>
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>