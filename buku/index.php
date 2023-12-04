<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kelola Buku</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
    /* Tambahkan CSS tambahan di sini */
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Kelola Buku</a>
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
        <a class="nav-link" href="#">Riwayat</a>
      </li>
      <li class="nav-item">
        <a class="link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</nav>

<div class="container mt-4">
  <h3>Tambah Buku</h3>
  <!-- Form untuk menambahkan buku baru -->
  <form action="proses_tambah_buku.php" method="post">
    <div class="form-group">
      <label for="judul">Judul Buku</label>
      <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="form-group">
      <label for="penulis">Penulis</label>
      <input type="text" class="form-control" id="penulis" name="penulis" required>
    </div>
    <div class="form-group">
      <label for="tahunterbit">Tahun Terbit</label>
      <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" required>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
    </div>
    <div class="form-group">
      <label for="coverbuku">Cover Buku</label>
      <input type="" class="form-control" id="coverbuku" name="coverbuku" required>
    </div>
    <!-- Tambahkan input lainnya sesuai kebutuhan -->
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>

  <hr>

  <h3>Edit Buku</h3>
  <!-- Form untuk mengedit buku -->
  <form action="proses_edit_buku.php" method="post">
    <div class="form-group">
      <label for="id_buku">ID Buku</label>
      <input type="text" class="form-control" id="id_buku" name="id_buku" required>
    </div>
    <div class="form-group">
      <label for="judul">Judul Buku</label>
      <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="form-group">
      <label for="penulis">Penulis</label>
      <input type="text" class="form-control" id="penulis" name="penulis" required>
    </div>
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <input type="text" class="form-control" id="ketegori" name="kategori" required>
    </div>
    <!-- Tambahkan input lainnya sesuai kebutuhan -->
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>

  <hr>

  <h3>Hapus Buku</h3>
  <!-- Form untuk menghapus buku -->
  <form action="proses_hapus_buku.php" method="post">
    <div class="form-group">
      <label for="id_buku_hapus">ID Buku</label>
      <input type="text" class="form-control" id="id_buku_hapus" name="id_buku_hapus" required>
    </div>
    <button type="submit" class="btn btn-danger">Hapus</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
