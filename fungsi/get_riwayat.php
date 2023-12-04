<?php
session_start();
$id_user = $_SESSION['id_user'];
include '../config/koneksi.php';

// Tentukan jumlah buku yang akan ditampilkan per halaman
$jumlah_per_halaman = 8;

// Hitung halaman saat ini
$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

// Hitung indeks awal dan akhir untuk membatasi data yang ditampilkan
$indeks_awal = ($halaman - 1) * $jumlah_per_halaman;
$indeks_akhir = $indeks_awal + $jumlah_per_halaman;

// Ambil data buku sesuai dengan halaman dan batasan
$sql = "SELECT * FROM tb_peminjaman WHERE id_user = '$id_user' ";//LIMIT $indeks_awal, $jumlah_per_halaman";


$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo $row["id_user"]. "<br>";
        echo $row["jatuh_tempo"]."<br>";
        echo $row["tanggal_kembali"]."<br>";
    }
} else {
    echo "Tidak ada data peminjaman.";
}
?>
<br>
<a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>