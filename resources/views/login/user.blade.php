<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('/image')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/style/login.css')}}">

  </head>

  <style>
    *{
        font-family: "Nunito", sans-serif;
    }

  </style>

  <body>

    <div class="row vh-100 g-0">
      <div class="col-lg-6 position-relative d-none d-lg-block">
        <div class="bg-holder">
          <img src="{{asset('/image/lib.jpg')}}" alt="">
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
          <div class="col col-sm-6 col-lg-7 col-xl-6">

            <a href="#" class="d-flex justify-content-center mb-4" style="text-decoration: none;">
            <i class='bx bx-book-reader' style="font-size: 5rem; color: black;"></i>
            </a>
  
            <div class="text-center mb-5">
              <h3 class="fw-bold">Login</h3>
              <p class="text-secondary">Get access to your account</p>
            </div>

            @if(session()->has('error'))
            <div class="alert alert-danger col-12" role="alert">
              {{session('error')}}
            </div>
            @endif


            <form method="post" action="/login/user">
              @csrf
          <div class="form-floating mb-3">
              <input type="text" name="username" id="floatingInput" class="form-control @error('username') is-invalid @enderror" autofocus required value="{{old('username')}}" placeholder="Username">
              @error('username')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
              <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
              <input type="password" name="password" id="floatingInput" class="form-control form-control-lg fs-6" placeholder="Password">
              <label for="floatingInput">Password</label>
          </div>
        <button type="submit" class="btn btn-dark w-100 mb-3 mt-3">Login</button>
      </form>

      <div class="text-center">
        <small>Don't have an account? <a href="/register" class="fw-bold" style="text-decoration: none;">Sign up</a></small>
      </div>
      
          </div>
        </div>
      </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>