<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('/image')}}">
    <link rel="stylesheet" href="{{asset('/buku')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/style/login.css')}}">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg fixed-top shadow" id="navbar">
        <div class="container">
          <a class="navbar-brand me-auto" href="#"><i class='bx bx-book-reader'></i></a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Library App</h5>
              <button type="button" class="btn-close m-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" aria-current="page" href="#beranda">BERANDA</a>
                </li>
                <li class="nav-item mx-lg-2">
                  <a class="nav-link" href="#tentang">TENTANG</a>
                </li>
                <li class="nav-item mx-lg-2">
                  <a class="nav-link" href="#buku">BUKU</a>
                </li>
              </ul>
            </div>
          </div>
          <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    
      <div class="main" id="beranda">
        <div class="teks">
          <div class="judul">
            <h1>Selamat Datang di Aplikasi Perpustakaan</h1>
            <span>Kami berkomitmen untuk menyediakan akses yang mudah dan nyaman terhadap informasi dan pengetahuan bagi seluruh anggota masyarakat.</span><br><br>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <a href="/login/user">
                  <button type="submit" class="btn btn-light" style="padding:5px 30px;">Login</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="m-4" id="tentang">
        <div class="about">
          <div class="p-5" style="background-color:#FCDE70; border-radius:15px;">
            <div class="row d-flex align-items-center">
              <div class="col-lg-5 col-md-12">
              <a href="https://ibb.co.com/mtDHw83"><img src="https://i.ibb.co.com/82KjpcH/about.png" alt="about" border="0" class="img-fluid rounded"></a>
              </div>
              <div class="col-lg-7 col-md-12">
                  <div>
                    <h2>Tentang Aplikasi</h2>
                    <p>Aplikasi perpustakaan adalah sebuah platform digital yang memungkinkan pengguna mengakses koleksi perpustakaan secara online. Dengan aplikasi ini, pengguna dapat mencari buku, jurnal, atau media lainnya, melakukan peminjaman, perpanjangan, dan pengembalian secara digital, serta mendapatkan notifikasi mengenai status peminjaman. Selain itu, aplikasi ini juga seringkali dilengkapi dengan fitur-fitur tambahan seperti e-book reader, daftar bacaan, dan rekomendasi buku berdasarkan minat pengguna.</p>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </div>
      <div class="book mt-3" id="buku">
        <div class="kotak">
          <div class="box">
            <h1 class="text-center">Semua buku</h1>
            <div class="row">
              <div class="col-lg-2 py-3 col-sm-4 col-6">
              <a href="https://ibb.co.com/tQHDMm3"><img src="https://i.ibb.co.com/n6wjsgR/buku-5.jpg" alt="buku-5" border="0" class="img-fluid rounded"></a>

              </div>
              <div class="col-lg-2 py-3 col-sm-4 col-6 ">
              <a href="https://imgbb.com/"><img src="https://i.ibb.co.com/ch2gk8B/novel-kata.jpg" alt="novel-kata" border="0" class="img-fluid rounded"></a>
              </div>
              <div class="col-lg-2 py-3 col-sm-4 col-6 ">
              <a href="https://ibb.co.com/MChLFqc"><img src="https://i.ibb.co.com/vjB8023/pahlawan-dan-pecundang-depan.jpg" alt="pahlawan-dan-pecundang-depan" border="0" class="img-fluid rounded"></a>

              </div>
              <div class="col-lg-2 py-3 col-sm-4 col-6 ">
              <a href="https://imgbb.com/"><img src="https://i.ibb.co.com/L8MTVFg/the-siren.jpg" alt="the-siren" border="0" class="img-fluid rounded"></a>

              </div>
              <div class="col-lg-2 py-3 col-sm-4 col-6 ">
              <a href="https://ibb.co.com/DzmkfvN"><img src="https://i.ibb.co.com/FmcJ4y9/buku-1.webp" alt="buku-1" border="0" class="img-fluid rounded"></a>

              </div>
              <div class="col-lg-2 py-3 col-sm-4 col-6 ">
              <a href="https://ibb.co.com/CBZcw7k"><img src="https://i.ibb.co.com/v1GFcP7/buku-3.jpg" alt="buku-3" border="0" class="img-fluid rounded"></a>

              </div>
            </div>
            <div class="tmbl">
              <div>
                <a href="/login/user">
                  <button type="submit" class="btn">Lihat selengkapnya</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="akhir">
        <div class="p-5">          
          <div class="row mb-3">
            <div class="col-lg-8 col-12">
              <h1>Library App</h1>
              <p> Aplikasi perpustakaan adalah asisten pribadi Anda dalam menemukan buku-buku menarik, melacak status peminjaman, dan mengelola koleksi bacaan Anda.</p>
            </div>
            <div class="col-lg-4 col-12">
              <h1>Menu</h1>
              <div class="menu">
                <a href="#beranda">Beranda</a><br>
                <a href="#tentang">Tentang</a><br>
                <a href="#buku">Buku</a>
              </div>
            </div>
          </div>
          <hr>

          <div class="cp">
            <div>
              <span>© Copyright 2024 . Made by Delia Aprilyani</span>
            </div>
        </div>
      </footer>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15e3ab5c53.js" crossorigin="anonymous"></script>
    <script src="{{asset('/js/main.js')}}"></script>

  </body>
</html>