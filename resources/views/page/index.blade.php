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
          <a href="/login/user" class="login-button">Log in</a>
          <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>


      <section class="hero-section">
        <img src="{{asset('/image/perpus.jpg')}}">
        <!-- <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
            <h1>Library App</h1>
            <h2>njncdjcndncincjcfn</h2>
        </div> -->
      </section>

      <section class="min-vh-100">
        <div class="container d-flex">
          <div class="col-lg-4 py-5 mt-5">
            <img src="{{asset('/image/lib.jpg')}}" class="img-fluid" style="max-width: 130%;">
          </div>

          <div class="col-lg-4">
            <div class="row align-items-center justify-content-center h-100 ">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque eveniet a commodi architecto quae tenetur unde sunt. Aut, explicabo. Odio fuga debitis laboriosam totam. Dolore rerum unde minima harum itaque.</p>
            </div>
          </div>

        </div>
      </section>
    


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>