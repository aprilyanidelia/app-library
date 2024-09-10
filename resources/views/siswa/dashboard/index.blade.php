<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library App</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{asset('/style/design.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>

  <body>


  
  <div class="wrapper">
    <aside id="sidebar">
      @include('siswa.dashboard.sidebar')
    </aside>

    <div class="main">
      <main class="content px-3 py-4">
        <div class="container-fluid">
          @yield('main')
        </div>
      </main>
    </div>
    
  </div>




  <script>
    const hamBurger = document.querySelector(".toggle-btn");

    hamBurger.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("expand");
    });
  </script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://kit.fontawesome.com/e7289d7ffd.js" crossorigin="anonymous"></script>
  </body>
</html>