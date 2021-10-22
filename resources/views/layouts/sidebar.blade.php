<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div>
            <img src="{{ url('assets/images/elitbil.png') }}" alt="profile image" height="50" width="100">
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
