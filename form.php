<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PS 1-Waroeng Console</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
    <link href="img/logo.jpg" rel="icon">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <meta name="robots" content="noindex,follow" />
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
              <a class="nav-link active" aria-current="page" href="price.php"><b>List Console</b></a>
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
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black"class="active" src="ps/ps1.jpeg" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Play station</span>
          <h1>Play Station | PS</h1>
          <p>Deskripsinya :</p>
          <p>~ Kondisi Mesin Second , Normal , Siap Main</p>
          <p>~ Cocok Buat Agan Yang Pengen Nostalgia</p>

          <p>Isi nya :</p>
          <p>- UNIT PS1</p>
          <p>- STIK 1</p>
          <p>- KABEL AV</p>
          <p>- KABEL POWER/ADAPTOR</p>

          <p>Info Tambahan :</p>
          <p>~ Fisik Mesin PS1 Fat-nya Cukup Oke</p>
          <p>~ Warna Stik Dan Model Adaptor Original, Tergantung Stok Seller</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Pilihan</span>

            <div class="cable-choose">
              <button>Console aja</button>
              <button>Console + Stick 1</button>
              <button>Console + Stick 2</button>
            </div>

            <a href="#">How to configurate your headphones</a>
          </div>
        </div>

        <!-- Product Pricing -->
        <div class="product-price">
          <span>Rp. 147,000</span>
          <a href="checkout.php" class="cart-btn">BELI SEKARANG</a>
        </div>
      </div>
    </main>
    <section id="Sosial Media" class="p-5"> 
      <div class="container">
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-outline-warning" type="button" href="price.php"> See More > </a>
          </div>
      </div>
      <a><b>Lihat Juga Yang Lain...</b></a>

      <div class="row  mb-8">
      <div class="row p-3">
      <div class="col-md-2">
      <div class="card">
      <img src="ps/ps1.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Play Station | PS</h5>
      <p class="card-text"><small class="text-danger"><b> Rp. 147,000</b></small><a href="form.php" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>  
      <div class="col-md-2">
      <div class="card">
      <img src="xbox/xbox_360.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Xbox 360</h5>
      <p class="card-text"><small class="text-danger"><b> Rp. 2,950,000</b></small><a href="" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>  
<div class="col-md-2">
      <div class="card">
      <img src="switch/nitendo_mario.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <h6 class="card-title">Nintendo Game&Watch</h6>
      <p class="card-text"><small class="text-danger"><b> Rp. 680,000 </b></small><a href="" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>        
      <div class="col-md-2">
      <div class="card">
      <img src="ps/ps2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
      <h6 class="card-title">Play Station 2 | PS 2</h6>
      <p class="card-text"><small class="text-danger"><b> Rp. 435,000</b></small><a href="" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>  
      <div class="col-md-2">
      <div class="card">
      <img src="ps/stik_ps1.jpeg  " class="card-img-top" alt="...">
      <div class="card-body">
      <h6 class="card-title">Stick Play Station|PS</h6>
      <p class="card-text"><small class="text-danger"><b> Rp. 39,000 </b></small><a href="" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>  
      <div class="col-md-2">
      <div class="card">
      <img src="xbox/xboxonex.webp" class="card-img-top" alt="...">
      <div class="card-body">
      <h6 class="card-title">Xbox One X</h6>
      <p class="card-text"><small class="text-danger"><b> Rp. 7,680,000</b></small><a href="" class="btn btn-outline-danger btn-sm" style="float: right"><b><i class="bi bi-cart"></i></b></a></p>
    </div>
  </div>
</div>  

    </section>
    <div class="container">
  <footer class="py-4 my-4" style="float: left; margin-left: 30%;">
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
    <!-- Scripts -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
    
  </body>
</html>
