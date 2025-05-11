<!-- [ Pre-loader ] start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
  body.dark-mode {
  background-color: #2f2f2f; /* lebih soft dari #000 */
  color: #e0e0e0;           /* abu terang agar tetap kontras */
}

body.dark-mode .pc-sidebar {
  background-color: #3a3a3a; /* sidebar lebih terang dari sebelumnya */
}

body.dark-mode .card,
body.dark-mode .btn {
  background-color: #444 !important;
  color: #f5f5f5;
  border-color: #666;
}
body.dark-mode .navbar {
  background-color: #333;
}

body.dark-mode .container {
  background-color: #2f2f2f;
}
body,
.pc-sidebar,
.card,
.btn {
  transition: background-color 0.3s ease, color 0.3s ease;
}

</style>


<style>
  #mode-toggle {
    position: relative;
    z-index: 9999;
  }
</style>

<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
 <nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header d-flex align-items-center">
      {{-- <a href="{{url ('/')}}" class="b-brand d-flex align-items-center"> --}}
        <!-- Logo Bulat -->
        <img src="../assets/images/logo_gupo.jpg" alt="Gupo Logo" class="img-fluid" style="max-height: 50px; width: 50px; border-radius: 50%; object-fit: cover;">
        <!-- Text di samping logo -->
        <span class="ms-2 fw-bold" style="font-size: 20px; color: #333;">Gupo Petshop</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar" id="sidebarMenu">
        <!-- Dashboard -->
        <li class="pc-item">
          <a href="{{ url('/') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
      
        <!-- Data Master -->
        <li class="pc-item">
          <a class="pc-link" data-bs-toggle="collapse" href="#collapseMaster" role="button" aria-expanded="false" aria-controls="collapseMaster">
            <span class="pc-micon"><i class="ti ti-master"></i></span>
            <span class="pc-mtext">Data Master</span>
            <i class="fa fa-chevron-down float-end ms-auto"></i>
          </a>
          <ul class="collapse ps-4" id="collapseMaster">
            <li class="pc-item">
              <a href="{{ route('kategori.index') }}" class="pc-link">
                <span class="pc-micon"><i class="fa fa-tags"></i></span>
                <span class="pc-mtext">Kategori Produk</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('satuan.index') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-box"></i></span>
                <span class="pc-mtext">Satuan</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('pelanggan.index') }}" class="pc-link">
                <span class="pc-micon"><i class="fa fa-user"></i></span>
                <span class="pc-mtext">Pelanggan</span>
              </a>
            </li>
          </ul>
        </li>
      
        <!-- Data Produk -->
        <li class="pc-item">
          <a class="pc-link" data-bs-toggle="collapse" href="#collapseProduk" role="button" aria-expanded="false" aria-controls="collapseProduk">
            <span class="pc-micon"><i class="ti ti-transaksi"></i></span>
            <span class="pc-mtext">Data Produk</span>
            <i class="fa fa-chevron-down float-end ms-auto"></i>
          </a>
          <ul class="collapse ps-4" id="collapseProduk" data-bs-parent="#sidebarMenu">
            <li class="pc-item">
              <a href="{{ route('barang.index') }}" class="pc-link">
                <span class="pc-micon"><i class="fa fa-box"></i></span>
                <span class="pc-mtext">Produk</span>
              </a>
            </li>
          </ul>
        </li>
      
        <!-- Data Transaksi -->
        <li class="pc-item">
          <a class="pc-link" data-bs-toggle="collapse" href="#collapseTransaksi" role="button" aria-expanded="false" aria-controls="collapseTransaksi">
            <span class="pc-micon"><i class="ti ti-transaksi"></i></span>
            <span class="pc-mtext">Data Kasir</span>
            <i class="fa fa-chevron-down float-end ms-auto"></i>
          </a>
          <ul class="collapse ps-4" id="collapseTransaksi" data-bs-parent="#sidebarMenu">
            <li class="pc-item">
              <a href="{{ url('kasir') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-cash"></i></span>
                <span class="pc-mtext">Kasir</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ url('produk_masuk') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-inbox"></i></span>
                <span class="pc-mtext">Laporan Keuangan</span>
              </a>
            </li>
          </ul>
        </li>
      
        <!-- Data Laporan -->
        <li class="pc-item">
          <a class="pc-link" data-bs-toggle="collapse" href="#collapseLaporan" role="button" aria-expanded="false" aria-controls="collapseLaporan">
            <span class="pc-micon"><i class="ti ti-laporan"></i></span>
            <span class="pc-mtext">Data Laporan</span>
            <i class="fa fa-chevron-down float-end ms-auto"></i>
          </a>
          <ul class="collapse ps-4" id="collapseLaporan" data-bs-parent="#sidebarMenu">
            <li class="pc-item">
              <a href="{{ url('laporan_produk') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-laporan_produk"></i></span>
                <span class="pc-mtext">Laporan Produk</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ url('laporan_transaksi') }}" class="pc-link">
                <span class="pc-micon"><i class="ti ti-laporan_transaksi"></i></span>
                <span class="pc-mtext">Laporan Transaksi</span>
              </a>
            </li>
          </ul>
        </li>
      
        <!-- [ Sidebar Menu - Auth Section ] -->
          <li class="pc-item pc-caption">
            <label>Authentication</label>
            <i class="ti ti-lock"></i>
          </li>
          @guest
          <!-- Ini tampil kalau BELUM LOGIN -->
          <li class="pc-item">
            <a href="{{ url('login') }}" class="pc-link nav-hover">
              <span class="pc-micon"><i class="ti ti-login"></i></span>
              <span class="pc-mtext">Login</span>
            </a>
          </li>

          <li class="pc-item">
            <a href="{{url('register')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
              <span class="pc-mtext">Register</span>
            </a>
          </li> 
          @endguest

          @auth
          <!-- Ini tampil kalau SUDAH LOGIN -->
          <li class="pc-item">
            <form method="POST" action="{{ route('logout') }}" class="pc-link nav-hover">
              @csrf
              <button type="submit" class="pc-link nav-hover" style="background: none; border: none; padding: 0; margin: 0; display: flex; align-items: center; width: 100%; text-align: left;">
                <span class="pc-micon"><i class="ti ti-power"></i></span>
                <span class="pc-mtext">Logout</span>
              </button>
            </form>
          </li>
          @endauth
          {{-- <li class="pc-item">
            <a href="{{url('login')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-login"></i></span>
              <span class="pc-mtext">Login</span>
            </a>
          </li> --}}

          

          {{-- <li class="pc-item">
            <a href="{{url('logout')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-power"></i></span>
              <span class="pc-mtext">Logout</span>
            </a>
          </li> --}}

        

    {{-- <div class="pc-compact-submenu">
      <div class="pc-compact-title">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <div class="avtar avtar-xs bg-light-primary">
              <i class=""></i>
            </div>
          </div>
          <div class="flex-grow-1 ms-2">
            <h5 class="mb-0">Gupo Petshop</h5>
          </div>
        </div>
      </div>
      <div class="pc-compact-list"></div>
    </div> --}}
  </ul>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->

<!-- [ Header Topbar ] start -->
<header class="pc-header" style="background-color: #FFD700;">
  <div class="header-wrapper d-flex justify-content-between align-items-center">
    <!-- Sidebar Menu Icon dan Welcome -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled d-flex align-items-center mb-0">
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        @auth
        <li class="pc-h-item">
          <div class="bg-yellow p-2 rounded-md font-extrabold text-black text-2xl ms-2">
            Welcome, {{ Auth::user()->name }}
          </div>
        </li>
        <li class="pc-h-item">
          <button id="mode-toggle" class="btn btn-outline-dark" title="Toggle Theme">
            <i id="mode-icon" class="fa fa-moon"></i>
          </button>                    
        </li>
        @endauth
      </ul>
    </div> 
  
</header>

<div class="main-panel">
  <div class="content-wrapper">
      <div id="konten-utama">
          @yield("content")
      </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mode-toggle');
    const icon = document.getElementById('mode-icon');

    // Set mode awal dari localStorage
    const isDark = localStorage.getItem('darkMode') === 'true';
    if (isDark) {
      document.body.classList.add('dark-mode');
      icon.classList.remove('fa-moon');
      icon.classList.add('fa-sun');
    }

    // Event toggle
    toggleBtn.addEventListener('click', function () {
      document.body.classList.toggle('dark-mode');
      const darkMode = document.body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', darkMode);

      // Ganti ikon
      icon.classList.toggle('fa-moon', !darkMode);
      icon.classList.toggle('fa-sun', darkMode);
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".pc-item > a[data-bs-toggle='collapse']");

    items.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();
        
        // Ambil target id dari href
        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        // Cek jika sudah aktif
        if (targetElement.classList.contains("show")) {
          targetElement.classList.remove("show");
        } else {
          // Tutup semua collapse yang lain
          document.querySelectorAll(".collapse.show").forEach((openItem) => {
            openItem.classList.remove("show");
          });

          // Buka yang diklik
          targetElement.classList.add("show");
        }
      });
    });
  });
</script>







