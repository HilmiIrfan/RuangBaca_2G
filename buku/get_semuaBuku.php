<?php
include '../config/koneksi.php';
// Tentukan jumlah buku yang akan ditampilkan per halaman
$jumlah_per_halaman = 8;

// Hitung halaman saat ini
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

// Hitung indeks awal dan akhir untuk membatasi data yang ditampilkan
$indeks_awal = ($halaman - 1) * $jumlah_per_halaman;
$indeks_akhir = $indeks_awal + $jumlah_per_halaman;

// Ambil data buku sesuai dengan halaman dan batasan
$sql = "SELECT * FROM tb_buku LIMIT $indeks_awal, $jumlah_per_halaman";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_buku = $row["id_buku"];
        echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-3'>";
        echo "<div class='card'>";
        echo "<img src='" . $row ["cover_buku"]."'class='card-img-top' alt='Book Cover'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row["judul_buku"] . "</h5>";
        echo "<p class='card-text'>Penulis: " . $row["penulis"] . "</p>";
        echo "<p class='card-text'>Tahun: " . $row["tahun_terbit"] . "</p>";
        echo "<a href='../buku/deskripsi.php?id_buku= ". $id_buku ." ' class='btn btn-primary'>Deskripsi</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Tidak ada data buku.";
}
?>