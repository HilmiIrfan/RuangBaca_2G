<?php
session_start();
$id_user = $_SESSION['id_user'];
include '../config/koneksi.php';

// Menghindari SQL injection dengan menggunakan parameterized query
$sql = "SELECT * FROM tb_user WHERE id_user = ?";
$stmt = $koneksi->prepare($sql);


if ($stmt) {
    
    $stmt->bind_param("i", $id_user);
    $stmt->execute();

    
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
} else {
    die("Gagal mempersiapkan query: " . $koneksi->error);
}
?>



<?php
if ($row) {
    // Data ditemukan, tampilkan informasi pengguna
    ?>
<table>
    <tr>
        <th></th>
        <td><?php echo $row["id_user"]; ?></td>
    </tr>
    <tr>
        <th>Nama</th>
        <td><?php echo $row["nama"]; ?></td>
    </tr>
    <tr>
        <th>Username</th>
        <td><?php echo $row["username"]; ?></td>
    </tr>
    <tr>
        <th>Foto User</th>
        <td>
            <?php
                // Cek apakah path foto_user tidak kosong
                if (!empty($row["foto_user"])) {
                    echo '<img src="' . $row["foto_user"] . '" alt="Foto User">';
                } else {
                    echo 'Tidak ada foto';
                }
                ?>
        </td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $row["alamat"]; ?></td>
    </tr>
    <tr>
        <th>No. Telepon</th>
        <td><?php echo $row["no_tlp"]; ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td><?php echo $row["role"]; ?></td>
    </tr>
</table>
<?php
} else {
    // Data tidak ditemukan, tampilkan pesan kesalahan atau lakukan tindakan lainnya
    echo "Data pengguna tidak ditemukan.";
}
?>

<br>
<a href="javascript:history.go(-1)" class="btn btn-secondary">Kembali</a>

</body>

</html>