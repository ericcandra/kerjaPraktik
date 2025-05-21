<!-- [ Pre-loader ] start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ Pre-loader ] Start -->
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
      <img src="../assets/images/logo_gupo.jpg" alt="Gupo Logo" class="img-fluid" style="max-height: 50px; width: 50px; border-radius: 50%; object-fit: cover;">
      <span class="ms-2 fw-bold" style="font-size: 20px; color: #333;">Gupo Petshop</span>
    </div>

    <div class="navbar-content">
      <ul class="pc-navbar accordion" id="accordionSidebar">

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
          <ul class="collapse ps-4" id="collapseMaster" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ route('kategori.index') }}" class="pc-link">
                <i class="fa fa-tags me-2"></i>Kategori Produk
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('satuan.index') }}" class="pc-link">
                <i class="ti ti-box me-2"></i>Satuan
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('pelanggan.index') }}" class="pc-link">
                <i class="fa fa-user me-2"></i>Pelanggan
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
          <ul class="collapse ps-4" id="collapseProduk" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ route('barang.index') }}" class="pc-link">
                <i class="fa fa-box me-2"></i>Produk
              </a>
            </li>
          </ul>
          <ul class="collapse ps-4" id="collapseProduk" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ route('produk-masuk.index') }}" class="pc-link">
                <i class="fa fa-box me-2"></i>Produk Masuk
              </a>
            </li>
          </ul>
          <ul class="collapse ps-4" id="collapseProduk" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ route('barang.index') }}" class="pc-link">
                <i class="fa fa-box me-2"></i>Produk Keluar
              </a>
            </li>
          </ul>
        </li>

        <!-- Data Kasir -->
        <li class="pc-item">
          <a class="pc-link" data-bs-toggle="collapse" href="#collapseTransaksi" role="button" aria-expanded="false" aria-controls="collapseTransaksi">
            <span class="pc-micon"><i class="ti ti-transaksi"></i></span>
            <span class="pc-mtext">Data Kasir</span>
            <i class="fa fa-chevron-down float-end ms-auto"></i>
          </a>
          <ul class="collapse ps-4" id="collapseTransaksi" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ url('penjualan') }}" class="pc-link">
                <i class="ti ti-cash me-2"></i>Penjualan
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ url('penjualan') }}" class="pc-link">
                <i class="ti ti-cash me-2"></i>Detail Penjualan
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ url('laporan_keuangan') }}" class="pc-link">
                <i class="ti ti-inbox me-2"></i>Laporan Keuangan
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
          <ul class="collapse ps-4" id="collapseLaporan" data-bs-parent="#accordionSidebar">
            <li class="pc-item">
              <a href="{{ url('laporan_produk') }}" class="pc-link">
                <i class="ti ti-laporan_produk me-2"></i>Laporan Produk
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ url('laporan_transaksi') }}" class="pc-link">
                <i class="ti ti-laporan_transaksi me-2"></i>Laporan Transaksi
              </a>
            </li>
          </ul>
        </li>

        <!-- Authentication -->
        <li class="pc-item pc-caption mt-3">
          <label>Authentication</label>
          <i class="ti ti-lock"></i>
        </li>

        @guest
        <li class="pc-item">
          <a href="{{ url('login') }}" class="pc-link">
            <i class="ti ti-login me-2"></i>Login
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ url('register') }}" class="pc-link">
            <i class="ti ti-user-plus me-2"></i>Register
          </a>
        </li>
        @endguest

        @auth
        <li class="pc-item">
          <form method="POST" action="{{ route('logout') }}" class="pc-link nav-hover">
            @csrf
            <button type="submit" class="pc-link nav-hover" style="background: none; border: none; padding: 0; margin: 0; display: flex; align-items: center; width: 100%; text-align: left;">
              <i class="ti ti-power me-2"></i>Logout
            </button>
          </form>
        </li>
        @endauth

      </ul>
    </div>
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
            Welcome Back, {{ Auth::user()->name }}
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
    // === DARK MODE TOGGLE ===
    const toggleBtn = document.getElementById('mode-toggle');
    const icon = document.getElementById('mode-icon');

    if (toggleBtn && icon) {
      // Set mode awal dari localStorage
      const isDark = localStorage.getItem('darkMode') === 'true';
      if (isDark) {
        document.body.classList.add('dark-mode');
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
      }

      // Event toggle mode
      toggleBtn.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        const darkMode = document.body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', darkMode);

        // Ganti ikon
        icon.classList.toggle('fa-moon', !darkMode);
        icon.classList.toggle('fa-sun', darkMode);
      });
    }

    // === SIDEBAR COLLAPSE TOGGLE ===
    const collapseItems = document.querySelectorAll(".pc-item > a[data-bs-toggle='collapse']");

    collapseItems.forEach((item) => {
      item.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);

        if (!targetElement) return;

        // Jika collapse sudah terbuka, tutup
        if (targetElement.classList.contains("show")) {
          targetElement.classList.remove("show");
        } else {
          // Tutup semua collapse lain
          document.querySelectorAll(".collapse.show").forEach((openItem) => {
            openItem.classList.remove("show");
          });

          // Buka collapse yang diklik
          targetElement.classList.add("show");
        }
      });
    });
  });
</script>







