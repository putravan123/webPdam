<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <span class="app-brand-logo demo">
        <img src="{{asset('image/pdam-garut.png')}}" alt="" style="width: 80px">
      </span>
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-text menu-text fw-bold ms-2">PDAM GARUT</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <li class="menu-item active">
        <a href="{{route('dashboard')}}" class="menu-link" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate">Dashboards</div>
          {{-- <span class="badge rounded-pill bg-danger ms-auto">5</span> --}}
        </a>
      </li>
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >User Managemen</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('users.index')}}" class="menu-link" style="text-decoration: none">
              <div class="text-truncate" data-i18n="Analytics">users</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="{{route('roles.index')}}" class="menu-link" style="text-decoration: none">
              <div class="text-truncate" data-i18n="Analytics">Jenis User</div>
            </a>
          </li>
        </ul>
      </li>

      
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Data Karyawan</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('jabatans.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Jabatan</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="{{route('karyawans.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Karyawan</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Slides</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('slides.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Cretae/edit/delet</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="{{route('Tampilan')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Tampilan</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Beranda</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('abouts.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Pemabayaran Kami</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Berita</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('blogs.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Tampilan</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Kontak</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('contacts.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Pesan</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Galeri</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('team.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Image</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Profile Kami</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('strukturs.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Struktur</div>
            </a>
            <a href="{{route('tentang-pdams.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Tentang Pdam</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Aspek</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('pelayanans.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek pelayanan</div>
            </a>
            <a href="{{route('teknis.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek Teknis</div>
            </a>
            <a href="{{route('manajemen.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek manajemen</div>
            </a>
            <a href="{{route('keuangan.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek Keuangan</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="" class="menu-link menu-toggle" style="text-decoration: none">
          <i class="menu-icon tf-icons bx bx-home-smile"></i>
          <div class="text-truncate" data-i18n="Dashboards" >Pelayanan Langganan</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="{{route('registrasis.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Laporan Registrasi</div>
            </a>
            {{-- <a href="{{route()}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek Teknis</div>
            </a> --}}
            <a href="{{route('manajemen.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek manajemen</div>
            </a>
            <a href="{{route('keuangan.index')}}" class="menu-link" style="text-decoration: none"> 
              <div class="text-truncate" data-i18n="Analytics">Aspek Keuangan</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>