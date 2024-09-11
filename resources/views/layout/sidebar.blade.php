

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
                @can('is_staff')
                <li class="sidebar-item">
                    <a href="/pengembalian" class="sidebar-link">
                        <i class='bx bxs-book-bookmark'></i> 
                        <span>Laporan</span>
                    </a>
                </li>
                @endcan
                @can('is_staff')
                <li class="sidebar-item">
                    <a href="/ulasan" class="sidebar-link">
                      <i class='bx bxs-store' ></i>
                        <span>Ulasan</span>
                    </a>
                </li>
                @endcan
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                  <i class='bx bx-log-out'></i>
                    <span>Logout</span>
                </a>
            </div>
