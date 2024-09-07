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


    <nav class="navbar navbar-expand-lg fixed-top shadow">
        <div class="container">
          <a class="navbar-brand me-auto" href="#"><i class='bx bx-book-reader'></i></a>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Library App</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item mx-lg-2">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item mx-lg-2">
                  <a class="nav-link" href="#">All book</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-flex gap-2">
            <a href="/login/user" class="login-button">Sign In</a>
            <a href="/register" class="login-button">Sign Up</a>
          </div>
          <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    
      <div class="main">
        <div class="teks">
          <div class="judul">
            <h1>Selamat datang di aplikasi perpustakaan</h1>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, sunt.</span><br><br>
            <div class="row">
              <div class="col-lg-12 col-md-12">
              <div class="form-floating mb-3 clearfix">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Cari disini...</label>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" >
        <div class="long">
          <h1>hi</h1>
        </div>
      </div>

      <div class="m-4">
        <div class="about">
          <div class="p-5">
            <div class="row">
              <div class="col-lg-5 col-md-12">
              <img src="{{asset('/image/about.png')}}" class="img-fluid rounded" alt="" style="height: 500px; width: 100%;">
              </div>
              <div class="col-lg-7 col-md-12">
                <div class="d-flex align-items-center" style="height:400px;">
                  <div>
                    <h2>About</h2>
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet, omnis aliquid odio id iusto similique? Repudiandae, excepturi illum? Exercitationem quibusdam assumenda ipsa officia fugiat dolorum, suscipit tempora saepe inventore eveniet architecto, vel amet ea animi, quam expedita recusandae placeat commodi eius. Accusamus quisquam sed laboriosam. Consequatur aut dolores velit.</h6>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>

      <div class="book mt-3">
        <div class="kotak">
          <div class="box">
            <h1>Semua buku</h1>
            <div class="row">
              <div class="col-lg-3 py-3 col-md-6">
                <img src="{{asset('/image/book.jpg')}}" class="img-fluid rounded" alt="">
              </div>
              <div class="col-lg-3 py-3 col-md-6 ">
                <img src="{{asset('/image/book.jpg')}}" class="img-fluid rounded" alt="">
              </div>
              <div class="col-lg-3 py-3 col-md-6 ">
                <img src="{{asset('/image/book.jpg')}}" class="img-fluid rounded" alt="">
              </div>
              <div class="col-lg-3 py-3 col-md-6 ">
                <img src="{{asset('/image/book.jpg')}}" class="img-fluid rounded" alt="">
              </div>
            </div>
            <div class="tmbl">
              <div>
                <button type="button" class="btn">Lihat selengkapnya</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer>
        
      </footer>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15e3ab5c53.js" crossorigin="anonymous"></script>

  </body>
</html>