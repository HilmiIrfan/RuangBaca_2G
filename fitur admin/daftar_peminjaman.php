<?php
include("../config/koneksi.php");

// Fungsi untuk menghitung denda
function hitungDenda($dendaPerHari, $keterlambatan) {
    return $dendaPerHari * $keterlambatan;
}

// Query SQL untuk mendapatkan data peminjaman
$sql = "SELECT 
            p.id_peminjaman,
            u.nama AS nama_peminjam,
            b.judul_buku,
            p.tanggal_pinjam,
            p.tenggat_waktu,
            p.status,
            a.nama AS nama_admin,
            p.tanggal_pengembalian,
            DATEDIFF(p.tanggal_pengembalian, p.tenggat_waktu) AS keterlambatan_hari,
            b.denda
        FROM tb_PEMINJAMAN p
        JOIN tb_USER u ON p.id_user = u.id_user
        JOIN tb_USER a ON p.id_admin = a.id_user
        JOIN tb_detail_peminjaman dp ON p.id_peminjaman = dp.id_peminjaman
        JOIN tb_BUKU b ON dp.id_buku = b.id_buku";

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $no = 1;

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th scope='row'>" . $no++ . "</th>";
        echo "<td>" . $row['nama_peminjam'] . "</td>";
        echo "<td>" . $row['judul_buku'] . "</td>";
        echo "<td>" . $row['tanggal_pinjam'] . "</td>";
        echo "<td>" . $row['tenggat_waktu'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['nama_admin'] . "</td>";
        echo "<td>" . $row['tanggal_pengembalian'] . "</td>";
        echo "<td>" . ($row['keterlambatan_hari'] > 0 ? $row['keterlambatan_hari'] : 0) . "</td>";

        // Hitung denda
        $denda = hitungDenda($row['denda'], $row['keterlambatan_hari']);
        echo "<td>" . $denda . "</td>";

        // Tambahkan tombol Acc Kembali
        echo "<td>";
        if ($row['acc_kembali'] == 'Belum') {
            echo "<form action='proses_acc_kembali.php' method='POST'>";
            echo "<input type='hidden' name='id_peminjaman' value='" . $row['id_peminjaman'] . "'>";
            echo "<button type='submit' class='btn btn-primary'>Acc Kembali</button>";
            echo "</form>";
        } else {
            echo "Sudah di-ACC";
        }
        echo "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='11'>Tidak ada data peminjaman</td></tr>";
}

$koneksi->close();
?>