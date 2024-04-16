<div class="sidebar text-white">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">Warga</li>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Data Warga</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link text-white">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data Mahasiswa Kos</p>
                </a>
            </li>
            <li class="nav-header">Keuangan</li>
            <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link text-white">
                    <i class="nav-icon far fa-bookmark"></i>
                    <p>Keuangan RW</p>
                </a>
            </li>
            <li class="nav-header">Kegiatan</li>
            <li class="nav-item">
                <a href="{{ url('/stok') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Kegiatan RW</p>
                </a>
            </li>
        </ul>
    </nav>
</div>