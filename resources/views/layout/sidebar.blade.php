    <!-- <div class="bg-white">

      <div class="">
        <ion-icon name="library-sharp"></ion-icon> Library App
      </div>

      <div class="list-group list-group-flush my-3">
        <a >
          <ion-icon name="home"></ion-icon> Dashboard
      </a>
        <a href="/dashboard" class="">
          <ion-icon name="book"></ion-icon> Data Buku
        </a>
        <a href="/kategori" class="">
          <i class='bx bxs-category-alt'></i> Kategori
        </a>
        <a href="/pengembalian" class="">
          <i class='bx bxs-book-bookmark'></i> Laporan
        </a>
        <a href="/ulasan" class="">
          <i class='bx bxs-store' ></i> Ulasan
        </a>
        <a>
          <form action="/" method="post">
            @csrf
            <button class=""><ion-icon name="log-out-outline" ></ion-icon> Log out</button>
          </form>
        </a>
      </div>
    </div> -->

    <div class="d-flex">
                <button class="toggle-btn" type="button">
                  <i class='bx bx-book-reader'></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Library App</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/dashboard" class="sidebar-link">
                      <i class='bx bx-book'></i>
                        <span>Data Buku</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/data_user" class="sidebar-link">
                      <i class='bx bxs-data'></i>
                        <span>Data user</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/kategori" class="sidebar-link">
                        <i class='bx bx-category-alt'></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/pengembalian" class="sidebar-link">
                        <i class='bx bxs-book-bookmark'></i> 
                        <span>Laporan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/ulasan" class="sidebar-link">
                      <i class='bx bxs-store' ></i>
                        <span>Ulasan</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                  <i class='bx bx-log-out'></i>
                    <span>Logout</span>
                </a>
            </div>
