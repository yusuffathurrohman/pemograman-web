<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.1" />
    <title>f.store05</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <script>
    const navLinks = document.querySelectorAll('.nav-item')
    const menuToggle = document.getElementById('navbarSupportContent')
    const bsCollaps=new bootstrap.Collapse(menuToggle, {toggle:false})
    navLinks.forEach((l) => {
        l.addEventListener('click',() => { bsCollaps.toggle() })
    })
  </script>
  <body>
    <?php include("navbar.html")?>
    <div class="row align-items-center h1 fw-bold text-dark shadow-lg rounded" style="height: 100% ; background-color:rgb(107, 107, 107)">
        <div class="col-md-4" style="height: auto ;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="image/download.jfif" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/images (2).jfif" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/1633599244.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Lanjut</span>
                </button>
              </div>
        </div>
        <div class="col-md-8">
            <div class="row text-center text-warning fw-bold">
                <div class="col">
                <h1>f.store05</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                <p><font face="Arial" size="3">Selamat Datang kami menjual alat alat olahraga</font></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md col-sm-5 mx-2 my-4 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/images (1).jfif">
            </div>
            <div class="row">
                <a href="#"><p>Buku Tulis Limited Edition</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.230.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
               <img height="100%" width="100%" src="image/1.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Baju Polos Yoga Commerce</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.180.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/2.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Spring Bed Lembut</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.2.600.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/3.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Kulkas Super Dingin</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.6.250.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/4.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Sofa Limited Edition</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.3.121.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
               <img height="100%" width="100%" src="image/5.jpg">
            </div>
            <div class="row">
                <a href="#"><p>Lemari TV minimalis </p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.2.295.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img height="100%" width="100%" src="image/6.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Kulkas Super Dingin</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.6.250.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="col-md col-sm-5 my-4 mx-2 text-center" style="height: 380px;">
            <div class="row" style="height: 250px;">
                <img href="#" height="100%" width="100%" src="image/7.jfif">
            </div>
            <div class="row">
                <a href="#"><p>Buku Tulis Limited Edition</p></a>
            </div>
            <div class="row">
                <p class="text-center">Rp.230.000</p>
            </div>
            <div class="row">
                <a href="#" type="button" class="btn btn-secondary btn-sm">Masukkan Keranjang</a>
                <a href="#" type="button" class="btn btn-dark btn-sm">Kunjungi Toko</a>
            </div>
        </div>
        <div class="row align-items-center text-dark opacity-75" style="height:100% ; background-color:rgb(158, 158, 158)">
            <footer class="my-5 pt-5 text-dark fw-light text-center text-small shadow-lg rounded">
                <p class="mb-1">© 2022 f.store05</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Privacy</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Support</a></li>
                </ul>
              </footer>

        </div>
    </div>
  </body>
<script src="js/bootstrap.min.js"></script>
</html>