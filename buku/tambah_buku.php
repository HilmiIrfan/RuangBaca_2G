<div class="container mt-4">
    <h3>Tambah Buku</h3>
    <!-- Form untuk menambahkan buku baru -->
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="judul">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="form-group">
            <label for="judul">Rak</label>
            <input type="text" class="form-control" id="rak" name="rak" required>
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
            <label for="tahunterbit">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahunterbit" name="tahunterbit" required>
        </div>
        <div class="form-group">
            <label for="tahunterbit">Jumlah Buku</label>
            <input type="text" class="form-control" id="stok" name="stok" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Denda</label>
            <input type="text" class="form-control" id="denda" name="denda" required>
        </div>
        <div class="form-group">
            <label for="coverbuku">Cover Buku</label>
            <input type="file" class="form-control" id="coverbuku" name="coverbuku" accept="image/*" required>
        </div>
        <!-- Tambahkan input lainnya sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>