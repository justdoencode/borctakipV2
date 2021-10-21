<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Manager</small>
                <span class="status-indicator online"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                      <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                      <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a>
                <a class="dropdown-item mt-2"> Manage Accounts </a>
                <a class="dropdown-item"> Change Password </a>
                <a class="dropdown-item"> Check Inbox </a>
                <a class="dropdown-item"> Sign Out </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>

    <!--Sider Menü-->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Giriş Sayfası</span>
      </a>
    </li>

    <!--Cari Hesap İşlemleri-->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#borclu" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Cari Hesap İşlemleri</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="borclu">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{route('cariHesapEklePage')}}">Cari Hesap Ekle</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('cariHesapListele') }}">Cari Hesap Listesi</a>
          </li>
        </ul>
      </div>
    </li>



    <!--Borç İşlemleri-->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#borc" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Borç İşlemleri</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="borc">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('borcEklePage') }}">Borç Ekle</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('borclarPage') }}">Borçlar Listesi</a>
          </li>
        </ul>
      </div>
    </li>


    <!--Alacak İşlemleri-->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#alacak" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Alacak İşlemleri</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="alacak">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('alacakEklePage') }}">Alacak Ekle</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('alacaklarPage') }}">Alacaklar Listesi</a>
          </li>
        </ul>
      </div>
    </li>



    <!--Para İşlemleri-->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#paraTuru" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Para Türü İşlemleri</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="paraTuru">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('paraTuruEklePage') }}">Para Türü Ekle</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('paraTurleriPage') }}">Para Türü Listesi</a>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>
