<?php
include("../config/koneksi.php");

// Query SQL untuk mendapatkan data daftar request pinjaman
$sql = "SELECT 
            p.id_peminjaman,
            u.nama AS nama_peminjam,
            p.total_item,
            p.status
        FROM tb_PEMINJAMAN p
        JOIN tb_USER u ON p.id_user = u.id_user
        WHERE p.status = 'Menunggu Konfirmasi'"; // Hanya ambil yang belum dikonfirmasi

$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $no = 1;

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th scope='row'>" . $no++ . "</th>";
        echo "<td>" . $row['nama_peminjam'] . "</td>";
        echo "<td>" . $row['total_item'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";

        // Tambahkan tombol Lihat Detail
        echo "<td>";
        echo "<form action='detail_request.php' method='GET'>";
        echo "<input type='hidden' name='id_peminjaman' value='" . $row['id_peminjaman'] . "'>";
        echo "<button type='submit' class='btn btn-primary'>Detail</button>";
        echo "</form>";
        echo "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data request pinjaman yang belum dikonfirmasi</td></tr>";
}

$koneksi->close();
?>