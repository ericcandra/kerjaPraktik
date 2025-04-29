<!-- [ Pre-loader ] start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{ url('/')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Data Master</label>
          <i class="ti ti-master"></i>
        </li>
        {{-- <li class="pc-item">
          <a href="{{url ('produk')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-produk"></i></span>
            <span class="pc-mtext">Produk</span>
          </a>
        </li> --}}
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

        <li class="pc-item pc-caption">
          <label>Data Produk</label>
          <i class="ti ti-transaksi"></i>
        </li>
        <li class="pc-item">
          <a href="{{ route('barang.index')}}" class="pc-link">
            <span class="pc-micon"><i class="fa fa-box"></i></span>
            <span class="pc-mtext">Produk</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Data Transaksi</label>
          <i class="ti ti-transaksi"></i>
        </li>
        <li class="pc-item">
          <a href="{{ url('kasir') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-cash"></i></span>
            <span class="pc-mtext">Kasir</span>
          </a>
        </li>        
        <li class="pc-item">
          <a href="{{url ('produk_masuk')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-inbox "></i></span>
            <span class="pc-mtext">Produk Masuk</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Data Laporan</label>
          <i class="ti ti-transaksi"></i>
        </li>
        <li class="pc-item">
          <a href="{{url ('laporan_produk')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-laporan_produk"></i></span>
            <span class="pc-mtext">Laporan Produk</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url ('laporan_transaksi')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-laporan_transaksi"></i></span>
            <span class="pc-mtext">Laporan Transaksi</span>
          </a>
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

    
          <div class="main-panel">
            <div class="content-wrapper">
                <div id="konten-utama">
                    @yield("content")
                </div>
            </div>
        </div>
        

    <div class="pc-compact-submenu">
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
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->

 
 <!-- [ Header Topbar ] start -->
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
        @endauth
      </ul>
    </div>

    
    <!-- Banner Carousel -->
    <style>
      .banner-container {
        position: relative;
        width: 100%;
        max-width: 900px; /* Batas maksimal lebar */
        margin: 20px auto; /* Tengahin container */
        border-radius: 8px;
        overflow: hidden;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
      }
    
      .banner-container img {
        width: 100%;
        height: 100px; /* Tinggi dibuat lebih wajar */
        object-fit: cover;
      }
      footer {
        background-color: #222;
        color: #fff;
        padding: 20px;
        text-align: center;
      }

    </style>
    

    <div class="banner-container">
      <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/images/baner4.jpg" class="d-block" alt="Banner 1">
          </div>
          <div class="carousel-item">
            <img src="../assets/images/baner3.jpg" class="d-block" alt="Banner 2">
          </div>
          <div class="carousel-item">
            <img src="../assets/images/baner1.jpeg" class="d-block" alt="Banner 3">
          </div>
          <div class="carousel-item">
            <img src="../assets/images/baner2.jpg" class="d-block" alt="Banner 4">
          </div>
        </div>
      </div>
    </div>

    <!-- Kanan: Placeholder untuk future icon/settings -->
    <ul class="list-unstyled d-flex align-items-center mb-0">
      <!-- Future settings or user profile area -->
    </ul>
  </div>
  
</header>
<footer style= padding: 20px; margin-top: 50px; text-align: justify;">
  <div>
      <h5>About Gupo Petshop</h5>
      <p>Gupo Petshop adalah toko hewan peliharaan terpercaya yang menyediakan berbagai kebutuhan hewan kesayangan <Anda class="justify"></Anda></p>
      <p>Alamat: Jl. Contoh No.123, Palembang</p>
      <p>Telepon: (0711) 123456</p>
      <p>Email: gupo.petshop@example.com</p>
      <p>&copy; 2025 Gupo Petshop. All rights reserved.</p>
  </div>
</footer>
<!-- [ Header Topbar ] end -->
<!-- Footer Start -->
@include('about')





