<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      color: #333;
      margin-bottom: 20px;
    }

    p {
      color: #555;
      margin-bottom: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    /* Navbar Customization */
    .navbar {
      background-color: #343a40 !important;
    }

    .navbar-brand {
      font-size: 24px;
    }

    .navbar-nav .nav-link {
      color: #fff;
      margin-right: 10px;
    }

    .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }

    /* Logout link */
    .navbar-nav .link {
      color: #dc3545;
    }

    .navbar-nav .link:hover {
      color: #bd2130;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Profil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="profil.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Riwayat</a>
      </li>
      <li class="nav-item">
        <a class="link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-4">
  <h3>Profil</h3>
  <form action="update_profile.php" method="post">
    <p>Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"></p>
    <p>Username: <input type="text" name="username" value="<?php echo $username; ?>"></p>
    <p>Role: <input type="text" name="role" value="<?php echo $role; ?>"></p>
    <p>Alamat: <textarea name="alamat"><?php echo $alamat; ?></textarea></p>
    <p>Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $jenisKelamin; ?>"></p>
    <p>No. Telepon: <input type="text" name="no_tlp" value="<?php echo $no_tlp; ?>"></p>
    
    <!-- Tambahkan tombol untuk submit form -->
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
