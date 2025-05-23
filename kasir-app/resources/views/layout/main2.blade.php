<!-- [ Pre-loader ] start -->
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
      <a href="{{url('dashboard')}}" class="b-brand d-flex align-items-center">
        <!-- Logo Bulat -->
        <img src="../assets/images/logo_gupo.jpg" alt="Gupo Logo" class="img-fluid" style="max-height: 50px; width: 50px; border-radius: 50%; object-fit: cover;">
        <!-- Text di samping logo -->
        <span class="ms-2 fw-bold" style="font-size: 20px; color: #333;">Gupo Petshop</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="{{url('dashboard')}}" class="pc-link">
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
              <span class="pc-micon"><i class="ti ti-tags"></i></span>
              <span class="pc-mtext">Kategori Produk</span>
          </a>
        </li>
      
        <li class="pc-item">
          <a href="{{url ('satuan')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-satuan"></i></span>
            <span class="pc-mtext">Satuan</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Data Produk</label>
          <i class="ti ti-transaksi"></i>
        </li>
        <li class="pc-item">
          <a href="{{url ('produk')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-produk_masuk"></i></span>
            <span class="pc-mtext">Produk</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Data Transaksi</label>
          <i class="ti ti-transaksi"></i>
        </li>
        <li class="pc-item">
          <a href="{{url ('produk_masuk')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-produk_masuk"></i></span>
            <span class="pc-mtext">Produk Masuk</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{url ('produk_keluar')}}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-produk_keluar"></i></span>
            <span class="pc-mtext">Produk Keluar</span>
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
          @endguest

          @auth
          <!-- Ini tampil kalau SUDAH LOGIN -->
          <li class="pc-item">
            <form method="POST" action="{{ route('logout') }}">
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
            <a href="{{url('register')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
              <span class="pc-mtext">Register</span>
            </a>
          </li>  --}}

          {{-- <li class="pc-item">
            <a href="{{url('logout')}}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-power"></i></span>
              <span class="pc-mtext">Logout</span>
            </a>
          </li> --}}

    
        <div class="main-panel">
          <div class="content-wrapper">
              @yield("content")
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
    <!-- Kiri: Sidebar Menu Icon -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled d-flex align-items-center mb-0">
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="ti ti-menu-2"></i>
          </a>
          @auth
          <div class="bg-yellow p-2 rounded-md font-extrabold text-black text-2xl ms-2">
            Welcome, {{ Auth::user()->name }}
          </div>
        @endauth
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Kanan: Icon bahasa, setting, user profile -->
    <ul class="list-unstyled d-flex align-items-center mb-0">
      {{-- <li class="dropdown pc-h-item">
        <a class="pc-head-link dropdown-toggle arrow-none me-3" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          <i class="ti ti-language"></i> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
          {{-- <a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>My Account</span></a> --}}
          {{-- <a href="#!" class="dropdown-item"><i class="ti ti-headset"></i> <span>Support</span></a> --}}
          {{-- <a href="#!" class="dropdown-item"><i class="ti ti-lock"></i> <span>Lock Screen</span></a> --}}
          {{-- <a href="{{url ('logout')}}" class="dropdown-item"><i class="ti ti-power"></i> <span>Logout</span></a> --}}
        </div>
      </li>

      {{-- <li class="dropdown pc-h-item">
        <a class="pc-head-link me-3" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
          <i class="ti ti-settings"></i>
        </a>
      </li> --}}

      {{-- <li class="dropdown pc-h-item header-user-profile">
        <a class="pc-head-link dropdown-toggle arrow-none me-0 d-flex align-items-center" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
          <img src="../assets/images/logo_gupo.jpg" alt="user-image" class="" style="width: 35px; height: 35px; border-radius: 50%; background-color: #FFD700; padding: 2px;"> --}}
          {{-- @auth
            <div class="bg-white p-2 rounded-md font-extrabold text-black text-2xl ms-2">
              Welcome, {{ Auth::user()->name }}
            </div>
          @endauth --}}
        </a>
      </li>
      
        
       

        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
          <div class="dropdown-header">
            <div class="d-flex mb-1 align-items-center">
              <div class="flex-shrink-0">
                <img src="../assets/images/logo_gupo.jpg" alt="user-image" class="user-avtar wid-35" style="background-color: #FFD700; border-radius: 50%; padding: 4px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h6 class="mb-0">Gupo Petshop</h6>
                <span> Layanan Hewan </span>
              </div>
              
              {{-- <a href="{{url ('logout')}}" class="pc-head-link ms-2">
                <i class="ti ti-power text-danger"></i> --}}
              </a>
            </div>
          </div>
          <style>
            #logout-button {
              color: #ffffff; /* putih solid */
              font-weight: bold; /* lebih tebal */
              opacity: 1; /* pastikan tidak transparan */
            }
          
            #logout-button:hover {
              color: #FFD700; /* opsional: waktu hover berubah warna emas */
            }
          </style>
          
          {{-- <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="drp-t1" data-bs-toggle="tab" data-bs-target="#drp-tab-1" type="button" role="tab" aria-controls="drp-tab-1" aria-selected="true">
                <i class="ti ti-user"></i> Profile
              </button>
            </li> --}}
            {{-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="drp-t2" data-bs-toggle="tab" data-bs-target="#drp-tab-2" type="button" role="tab" aria-controls="drp-tab-2" aria-selected="false">
                <i class="ti ti-settings"></i> Setting
              </button>
            </li> --}}
          </ul>
          <div class="tab-content" id="mysrpTabContent">
            <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel" aria-labelledby="drp-t1" tabindex="0"> 
              {{-- <a href="#!" class="dropdown-item"><i class="ti ti-edit-circle"></i> <span>Edit Profile</span></a>
              <a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>View Profile</span></a>
              <a href="#!" class="dropdown-item"><i class="ti ti-clipboard-list"></i> <span>Social Profile</span></a>
              <a href="#!" class="dropdown-item"><i class="ti ti-wallet"></i> <span>Billing</span></a> --}} 
              {{-- <a href="{{url ('logout')}}" class="dropdown-item"><i class="ti ti-power"></i> <span>Logout</span></a> --}}
            </div>
            <div class="tab-pane fade" id="drp-tab-2" role="tabpanel" aria-labelledby="drp-t2" tabindex="0">
              {{-- <a href="#!" class="dropdown-item"><i class="ti ti-help"></i> <span>Support</span></a>
              <a href="#!" class="dropdown-item"><i class="ti ti-user"></i> <span>Account Settings</span></a>
              <a href="#!" class="dropdown-item"><i class="ti ti-lock"></i> <span>Privacy Center</span></a> --}}
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</header>
<!-- [ Header Topbar ] end -->


