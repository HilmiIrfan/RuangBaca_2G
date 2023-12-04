<?php
// Pastikan Anda sudah mengatur koneksi.php sesuai dengan informasi koneksi Anda
include("../config/koneksi.php");

// Tangkap data dari formulir
$nama_kategori = $_POST['kategori'];
$nama_rak = $_POST['rak'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahunterbit'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];
$denda = $_POST['denda'];

// Proses upload cover buku
$targetDir = "../cover/"; // Pastikan direktori ini ada dan dapat ditulis oleh server
$fileName = "../cover/".basename($_FILES["coverbuku"]["name"]);
$targetFilePath = $targetDir . $fileName;
move_uploaded_file($_FILES["coverbuku"]["tmp_name"], $targetFilePath);

// Cari id_kategori berdasarkan nama kategori
$sql_kategori = "SELECT id_kategori FROM tb_KATEGORI WHERE nama_kategori = '$nama_kategori'";
$result_kategori = $koneksi->query($sql_kategori);

if ($result_kategori->num_rows > 0) {
    $row_kategori = $result_kategori->fetch_assoc();
    $id_kategori = $row_kategori['id_kategori'];

    // Cari id_rak berdasarkan nama rak
    $sql_rak = "SELECT id_rak FROM tb_RAK WHERE nama_rak = '$nama_rak'";
    $result_rak = $koneksi->query($sql_rak);

    if ($result_rak->num_rows > 0) {
        $row_rak = $result_rak->fetch_assoc();
        $id_rak = $row_rak['id_rak'];

        // Query untuk menyimpan data ke dalam tabel tb_BUKU
        $sql_insert = "INSERT INTO tb_BUKU (id_kategori, id_rak, judul_buku, cover_buku, penulis, stok, stok_tersedia, tahun_terbit, deskripsi, denda) 
            VALUES ('$id_kategori', '$id_rak', '$judul', '$fileName', '$penulis', '$stok', '$stok', '$tahun_terbit', '$deskripsi', '$denda')";

        if ($koneksi->query($sql_insert) === TRUE) {
            // Pesan berhasil ditambahkan
            echo "<script>alert('Buku berhasil ditambahkan.'); window.location.href = 'tambah_buku.php';</script>";
        } else {
            // Pesan jika terjadi error
            echo "<script>alert('Error: " . $sql_insert . "\\n" . $koneksi->error . "');</script>";
        }
    } else {
        echo "Nama rak tidak ditemukan.";
    }
} else {
    echo "Nama kategori tidak ditemukan.";
}

// Tutup koneksi ke database
$koneksi->close();
?>