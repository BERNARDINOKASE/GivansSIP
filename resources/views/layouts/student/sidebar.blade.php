<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('student.index*')?'active':'' }}">
        <a href="{{route('student.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
    
            <li class="submenu-item {{ Request::routeIs('report.create*')?'active':'' }}">
                <a href="{{route('report.create')}}" class="submenu-link">Pengajuan Pengaduan</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('report.index*')?'active':'' }}">
                <a href="{{route('report.index')}}" class="submenu-link">Daftar Pengaduan</a>
            </li>
        </ul>
    </li>
</ul>