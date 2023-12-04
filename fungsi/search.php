<?php
// Sertakan file konfigurasi database
include "../config/koneksi.php"; // Sesuaikan dengan nama file konfigurasi database Anda

// Ambil data pencarian dari formulir
$search = mysqli_real_escape_string($koneksi, $_GET['search']); // Hindari SQL injection

// Query pencarian berdasarkan judul_buku dan penulis
$sql = "SELECT * FROM tb_BUKU WHERE judul_buku LIKE '%$search%' OR penulis LIKE '%$search%'";
$result = mysqli_query($koneksi, $sql);

// Cek apakah hasil pencarian ditemukan
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 mb-3'>";
            echo "<div class='card'>";
            echo "<img src='" . $row ["cover_buku"]."'class='card-img-top' alt='Book Cover'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row["judul_buku"] . "</h5>";
            echo "<p class='card-text'>Penulis: " . $row["penulis"] . "</p>";
            echo "<p class='card-text'>Tahun: " . $row["tahun_terbit"] . "</p>";
            echo "<a href='../buku/deskripsi.php?id_buku=" . $row["id_buku"] . "' class='btn btn-primary'>Deskripsi</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
            echo "Tidak ada data buku.";
    }
?>
<br>
<a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>