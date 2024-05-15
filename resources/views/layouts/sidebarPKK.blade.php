<div class="sidebar text-white" style="position: fixed">
    <a href="{{ url('/PKK')}}" class="brand-link text-white">
      <img src="../resources/img/logo.jpg" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Admin PKK</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/PKK') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Anggota</li>
            <li class="nav-item">
                <a href="{{ url('/AnggotaPKK') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Anggota</p>
                </a>
            </li>
            <li class="nav-header">Keuangan</li>
            <li class="nav-item">
                <a href="{{ url('/keuanganPKK') }}" class="nav-link text-white">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Keuangan</p>
                </a>
            </li>
            <li class="nav-header">Kegiatan</li>
            <li class="nav-item">
                <a href="{{ url('/kegiatanPKK') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Kegiatan</p>
                </a>
            </li>
            <li class="nav-header">Sistem Pendukung Keputusan</li>
            <li class="nav-item">
                <a href="{{ url('/stok') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Pra-Koperasi</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
