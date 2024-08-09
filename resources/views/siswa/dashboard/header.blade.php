<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><i class='bx bx-book-reader' style="font-size: 2.5rem;"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-3">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/user">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/koleksi">Koleksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/penilaian">Penilaian</a>
        </li>
        <form action="/" method="post">
          @csrf
          <button class="text-danger">logout</button>
        </form>
      </ul>
    </div>
  </div>
</nav>

