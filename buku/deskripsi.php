<?php
include("../config/koneksi.php");
// Ambil ID buku dari parameter URL (misalnya, ?id_buku=1)
$id_buku = $_GET['id_buku'];

// Lakukan query untuk mengambil deskripsi buku
$sql = "SELECT deskripsi FROM tb_buku WHERE id_buku = $id_buku";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Ambil data deskripsi buku dari hasil query
    $row = $result->fetch_assoc();
    $deskripsi_buku = $row['deskripsi'];

    // Gunakan $deskripsi_buku sesuai kebutuhan
    echo "Deskripsi Buku: " . $deskripsi_buku;
} else {
    echo "Buku tidak ditemukan.";
}

// Tutup koneksi database
$koneksi->close();
?>
<br>
<a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>