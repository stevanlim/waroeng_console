<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Waroeng Console</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <link href="img/logo.jpg" rel="icon">
  <link rel="stylesheet" href="style copy.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navtar-dark bg-warning">
  <div class="container-fluid">
  <img src="img/LOGO.jpg" class="rounded-circle img-responsive" alt="LOGO" style="float:left;margin-left:1%;height:40; width:40px; " class="bi me-2">
    <a class="navbar-brand p-2" href="index.php"><b>WAROENG CONSOLE</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="price.php">List Console</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="tentangkami.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sosmed.php">Sosmed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hubungikami.php">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-5">
    <?php
        $produk = isset($_GET['produk']) ? $_GET['produk'] : 'Play Station | PS';
        $harga = isset($_GET['harga']) ? $_GET['harga'] : '147.000';
        $gambar = isset($_GET['gambar']) ? $_GET['gambar'] : 'ps/ps1.jpeg';
    ?>

    <div class="row">
        <!-- Kolom Kiri: Gambar dan Harga -->
        <div class="col-md-6 text-center">
            <img src="<?= htmlspecialchars($gambar) ?>" alt="Gambar Produk" class="img-fluid mb-3" style="max-height: 300px;">
            <h2><?= htmlspecialchars($produk) ?></h2>
            <p class="fs-5">Harga: <strong>Rp <?= htmlspecialchars($harga) ?></strong></p>
        </div>

        <!-- Kolom Kanan: Form -->
        <div class="col-md-6">
            <form action="berhasil.php" method="POST">
                <input type="hidden" name="produk" value="<?= htmlspecialchars($produk) ?>">
                <input type="hidden" name="harga" value="<?= htmlspecialchars($harga) ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap:</label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="telepon" class="form-label">Nomor Telepon:</label>
                    <input type="tel" class="form-control" name="telepon" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="bank" class="form-label">Pembayaran Melalui Bank:</label>
                    <select class="form-select" name="bank" required>
                        <option value="">-- Pilih Bank --</option>
                        <option value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-warning w-100">Konfirmasi Pesanan</button>
            </form>
        </div>
    </div>
</div>
</body>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Terms and Conditions</a></li>
      <li class="nav-item"><a href="" class="nav-link px-2 text-muted">Privacy Policy</a></li>
    </ul>
    <p class="text-center text-muted">&copy; Copyright © 2021 by WAROENG CONSOLE, Inc</p>
  </footer>
</div>
</html>
