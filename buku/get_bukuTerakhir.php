<?php
session_start();
$id_user = $_SESSION['id_user'];
include '../config/koneksi.php';

// Fungsi untuk mendapatkan informasi buku terakhir yang dipinjam oleh user
function getLatestBorrowedBook($koneksi, $userId) {
    // Query SQL untuk mendapatkan informasi buku terakhir yang dipinjam oleh user
    $sql = "SELECT b.judul_buku, b.deskripsi, b.penulis, k.nama_kategori, b.cover_buku
            FROM tb_PEMINJAMAN p
            JOIN tb_detail_peminjaman dp ON p.id_peminjaman = dp.id_peminjaman
            JOIN tb_BUKU b ON dp.id_buku = b.id_buku
            JOIN tb_KATEGORI k ON b.id_kategori = k.id_kategori
            WHERE p.id_user = '$userId'
            ORDER BY p.tanggal_pinjam DESC
            LIMIT 1";

    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data dari hasil query
        $row = $result->fetch_assoc();
        return $row;
    } else {
        // Jika tidak ada data yang ditemukan
        return null;
    }
}

// Contoh penggunaan: Gantilah 'id_user_anda' dengan id user yang sesuai
$userId = 'id_user_anda';
$latestBorrowedBook = getLatestBorrowedBook($koneksi, $userId);

// Cek apakah buku terakhir ada
if ($latestBorrowedBook) {
    // Tampilkan informasi buku terakhir yang dipinjam oleh user
    echo "Judul Buku: " . $latestBorrowedBook['judul_buku'] . "<br>";
    echo "Deskripsi: " . $latestBorrowedBook['deskripsi'] . "<br>";
    echo "Penulis: " . $latestBorrowedBook['penulis'] . "<br>";
    echo "Kategori: " . $latestBorrowedBook['nama_kategori'] . "<br>";
    echo "Cover Buku: " . $latestBorrowedBook['cover_buku'] . "<br>";
} else {
    echo "User belum pernah meminjam buku.";
}

$koneksi->close();
?>