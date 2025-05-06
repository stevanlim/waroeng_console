<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi Kami-Waroeng Console</title>
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
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
          <a class="nav-link active" href="hubungikami.php"><b>Hubungi Kami</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="hubungi kami" class="p-5 bg-light">
  <div class="container">
    <div class ="row text-center mb-5">
      <div class="col">
      <img src="img/op.jpg" alt="LOGO" style="float:left;margin-left:38%;height:300; width:300px; " class="bi me-2">
      </div>
    </div>

  <div class="row mt-5  ">
    <div class="col md-4"> 
    <h6><i class="bi bi-pin-map-fill"></i> Jalan mangga 2, lantai GF blok c no 179a, RT.11/RW.6, Ancol, Kec. Pademangan, Pontianak 78212</h6>
      <h6><i class="bi bi-envelope"></i> waroengconsole@gmail.com</h6>
      <h6><i class="bi bi-telephone"></i>+62 899-4599-992</h6>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.771712792844!2d106.831719!3d-6.13837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f70c180f09%3A0x2ffa256757bfe3e6!2sWaroengame!5e0!3m2!1sid!2sid!4v1686369728247!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-md-5">
      <form action="kirim_pesan.php" method="POST">
      <div class="mb-3">
        <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea class="form-control" id="pesan" name="pesan" cols="30" rows="10" required></textarea>
      </div>
      <button type="submit" class="btn btn-warning">Kirim</button>
    </form>
    </div>
  </div>
</div>
</section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>