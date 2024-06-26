<div class="sidebar text-white" style="position: fixed">
    <a href="{{ url('/RW')}}" class="brand-link text-white">
      <img src="{{ asset('assets/images/logo.jpg') }}" class="brand-image img-circle elevation">
      <span class="brand-text font-weight-light">Admin RW</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/RW') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">RT</li>
            <li class="nav-item">
                <a href="{{ url('/RT') }}" class="nav-link text-white">
                    <i class="nav-icon fas fas fa-user"></i>
                    <p>Data RT</p>
                </a>
            </li>
            <li class="nav-header">Warga</li>
            <li class="nav-item">
                <a href="{{ url('/Warga') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Data Warga</p>
                </a>
            </li>
            <li class="nav-header">Penghuni Kos</li>
            <li class="nav-item">
                <a href="{{ url('/MahasiswaKos') }}" class="nav-link text-white">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data Penghuni Kos</p>
                </a>
            </li>
            <li class="nav-header">Keuangan</li>
            <li class="nav-item">
                <a href="{{ url('/KeuanganRW') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-money-bill"></i>
                    <p>Data Keuangan RW</p>
                </a>
            </li>
            <li class="nav-header">Kegiatan</li>
            <li class="nav-item">
                <a href="{{ url('/KegiatanRW') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Data Kegiatan RW</p>
                </a>
            </li>
        </ul>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    <a href="#" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>Logout</p>
    </a>
</div>
