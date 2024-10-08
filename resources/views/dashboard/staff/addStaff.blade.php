<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('/style/staff.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>

  <div class="box">
    <div class="teks">
      <div class="p-3">
        <h4 class="text-center mb-4 mt-2">Register Staff</h4>
        <div class="container">
          <form method="post" action="{{ route('staff.reg_staff') }}" >
            @csrf
            <div class="mb-3">
              <!-- <label for="">Email</label><br> -->
              <input type="text" placeholder="Nama" name="nm_lengkap" id="nm_lengkap">
            </div>
            <div class="mb-3">
              <!-- <label for="">Email</label><br> -->
              <input type="text" placeholder="Username" name="username" id="username">
            </div>
            <div class="mb-3">
              <!-- <label for="">Email</label><br> -->
              <input type="password" placeholder="Password" name="password" id="password">
            </div>
            <div class="mb-3">
              <!-- <label for="">Email</label><br> -->
              <input type="email" placeholder="Email" name="email" id="email">
            </div>
            <div class="mb-4">
              <!-- <label for="">Email</label><br> -->
              <input type="text" placeholder="Alamat" name="alamat" id="alamat">
            </div>
            <button class="btn btn-warning mb-2 mt-2" style="width: 100%;" type="submit">Submit</button>
          </form>
          <div>                
            <a href="/data_staff" class="btn btn-dark" style="width: 100%;" type="submit">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/15e3ab5c53.js" crossorigin="anonymous"></script>
  </body>
</html>